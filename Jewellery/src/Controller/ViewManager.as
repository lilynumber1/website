/**
 * Created by guanll on 2018/5/15.
 */
package Controller {
import laya.display.Sprite;
import laya.ui.Dialog;
import laya.utils.Handler;

import ui.main.AlertViewUI;

import view.GameOverView;
import view.GameView;
import view.StartView;

public class ViewManager {
    private static var _instance:ViewManager;

    public function ViewManager() {
        gameCon = new Sprite();
        Laya.stage.addChild(gameCon);
    }

    public static function getInstance():ViewManager{
        if(!_instance){
            _instance = new ViewManager();
        }
        return _instance;
    }

    private var gameCon:Sprite;
    private var start:StartView;
    private var game:GameView;
    private var over:GameOverView;

    public function showStartView():void {
        if(!start){
            start = new StartView();
        }

        gameCon.removeChildren();
        gameCon.addChild(start);
        start.init();
    }

    public function showGameView():void {
        if(!game){
            game = new GameView();
        }

        gameCon.removeChildren();
        gameCon.addChild(game);
        game.init();
    }

    public function showGameOverView():void {
        if(!over){
            over = new GameOverView();
        }

        gameCon.addChild(over);
        over.init();
    }

    public function showAlert():void{
        var dlg:Dialog = new AlertViewUI();
        dlg.closeHandler = Handler.create(this, quitGame);
        dlg.popup(true);
    }

    public function quitGame(type:String):void{
        if(type == Dialog.SURE){
            showStartView();
        }
    }
}
}
