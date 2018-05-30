/**
 * Created by guanll on 2018/5/15.
 */
package view {
import Controller.ViewManager;

import Model.JConfig;

import laya.events.Event;
import laya.net.LocalStorage;
import laya.ui.Image;
import laya.utils.Handler;
import laya.utils.Tween;

import ui.main.GameViewUI;

public class GameView extends GameViewUI {
    private var _map:Array;
    private var _maxValue:int;
    private var _currentScore:int;
    private var _started:Boolean;
    private var _effectPool:Vector.<Image> = new Vector.<Image>();

    public function GameView() {
        super();
    }

    public function init():void{
        var cell:Image;
        var i:int;
        var j:int;
        for (i = 0; i < 5; i++)
        {
            for (j = 0; j < 5; j++)
            {
                cell = getChildByName("cell_" + i + "_" + j) as Image;
                if(cell)
                {
                    cell.on(Event.CLICK,this,cellClickHandle,[cell]);
                }
            }
        }

        _map = [[0, 1, 1, 1, 0], [1, 1, 1, 1, 1], [1, 1, 1, 1, 1], [1, 1, 1, 1, 1], [0, 0, 1, 0, 0]];
        _maxValue = 1;
        _currentScore = 0;
        txtScore2.text = "0";
        for (i = 0; i < _map.length; i++)
        {
            var array:Array = _map[i];
            for (j = 0; j < array.length; j++)
            {
                if(_map[i][j] != 0)
                {
                    cell = getChildByName("cell_" + i + "_" + j) as Image;
                    cell.skin = "main/num_"+_map[i][j]+".png";
                }
            }
        }
        responseHighestScore();
        btnClose.on(Event.CLICK,this,onClose);
        _started = true;
    }

    protected function onClose():void
    {
        if(_started)
        {
            ViewManager.getInstance().showAlert();
        }
    }

    private function responseHighestScore():void
    {
        var s:String = LocalStorage.getItem(JConfig.HIGHEST_SCORE);
        if(s){
            txtScore1.text = s;
        }else{
            txtScore1.text = "0"
        }
    }

    private function showResultPanel():void
    {
        JConfig.score = _currentScore;
        ViewManager.getInstance().showGameOverView();
        _started = false;
    }

    private function cellClickHandle(num:Image):void
    {
        if(!_started)
        {
            return;
        }

        var array:Array = num.name.split("_");
        var i:int = parseInt(array[1]);//行索引
        var j:int = parseInt(array[2]);//列索引
        var sameValues:Array = getSameCells(i, j, [i * 5 + j]);
        var length:int = sameValues.length;
        var cell:Image;
        if(length >= 3)
        {
            var newValue:int = _map[i][j] + (length > 8 ? 2 : 1);
            if(newValue > _maxValue)
            {
                _maxValue = newValue;
            }
            addScore(Math.pow(3, newValue - 2));

            _map[i][j] = newValue;
            cell = getChildByName("cell_" + i + "_" + j) as Image;
            cell.skin = "main/num_"+newValue+".png";

            sameValues.shift();

            for (var k:int = 0; k < length - 1; k++)
            {
                i = Math.floor(sameValues[k] / 5);
                j = sameValues[k] % 5;
                cell = getChildByName("cell_" + i + "_" + j) as Image;
                var effect:Image = getNewEffect();
                effect.alpha = 1;
                effect.skin = "main/num_"+_map[i][j]+".png";
                effect.x = cell.x;
                effect.y = cell.y;
                this.addChild(effect);
                Tween.to(
                        effect,
                        {alpha:0, x:num.x - effect.width * 0.5, y:num.y - effect.height * 0.5},
                        500,
                        null,
                        Handler.create(this,effectEndHandle,[effect])
                );

                //要加随机
                _map[i][j] = getRandomValue(_maxValue > 4 ? 3 : 2);
                cell = getChildByName("cell_" + i + "_" + j) as Image;
                cell.skin = "main/num_"+_map[i][j]+".png";
            }


            for (i = 0; i < 5; i++)
            {
                for (j = 0; j < 5; j++)
                {
                    if(getSameCells(i, j, [i * 5 + j]).length >= 3)
                    {
                        return;
                    }
                }
            }
            showResultPanel();
        }
    }

    private function effectEndHandle(effect:Image):void
    {
        effect.skin = null;
        effect.removeSelf();
        _effectPool.push(effect);
    }

    private function addScore(value:int):void
    {
        _currentScore += value;
        txtScore2.text = _currentScore + "";

        var saveValue:String = LocalStorage.getItem(JConfig.HIGHEST_SCORE);
        var score:int = 0;
        if(saveValue){
            score = parseInt(saveValue);
        }

        if(_currentScore > score)
        {
            txtScore1.text = _currentScore + "";
            LocalStorage.setItem(JConfig.HIGHEST_SCORE,txtScore1.text);
        }
    }

    private function getNewEffect():Image
    {
        if(_effectPool.length)
        {
            return _effectPool.pop();
        }
        return new Image();
    }

    private function getRandomValue(maxValue:int):int
    {
        var random:int = Math.random() * 100;
        if(random < 10)
        {
            return 2;
        }
        else if(random < 12 && maxValue >= 3)
        {
            return 3;
        }
        else
        {
            return 1;
        }
    }

    private function getSameCells(i:int, j:int, includedCell:Array):Array
    {
        var cellValue:int = _map[i][j];
        var k:int;
        var m:int;

        //左
        k = i - 1;
        m = j;
        if(k >= 0 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
        {
            includedCell.push(k * 5 + m);
            getSameCells(k, m, includedCell);
        }
        //右
        k = i + 1;
        m = j;
        if(k <= 4 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
        {
            includedCell.push(k * 5 + m);
            getSameCells(k, m, includedCell);
        }
        //上
        k = i;
        m = j - 1;
        if(m >= 0 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
        {
            includedCell.push(k * 5 + m);
            getSameCells(k, m, includedCell);
        }
        //下
        k = i;
        m = j + 1;
        if(m <= 4 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
        {
            includedCell.push(k * 5 + m);
            getSameCells(k, m, includedCell);
        }
        if(j & 1)
        {
            //右上
            k = i + 1;
            m = j - 1;
            if(k <= 4 && m >= 0 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
            {
                includedCell.push(k * 5 + m);
                getSameCells(k, m, includedCell);
            }
            //右下
            k = i + 1;
            m = j + 1;
            if(k <= 4 && m <= 4 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
            {
                includedCell.push(k * 5 + m);
                getSameCells(k, m, includedCell);
            }
        }
        else
        {
            //左上
            k = i - 1;
            m = j - 1;
            if(k >= 0 && m >= 0 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
            {
                includedCell.push(k * 5 + m);
                getSameCells(k, m, includedCell);
            }
            //左下
            k = i - 1;
            m = j + 1;
            if(k >= 0 && m <= 4 && _map[k][m] == cellValue && includedCell.indexOf(k * 5 + m) == -1)
            {
                includedCell.push(k * 5 + m);
                getSameCells(k, m, includedCell);
            }
        }

        return includedCell;
    }
}
}
