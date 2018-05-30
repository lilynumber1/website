/**
 * Created by guanll on 2018/5/15.
 */
package view {
import Controller.ViewManager;

import Model.JConfig;

import laya.events.Event;

import ui.main.GameOverViewUI;

public class GameOverView extends GameOverViewUI {
    public function GameOverView() {
        super();
    }

    public function init():void{
        txtScore.text = JConfig.score + "";
        btnSure.on(Event.CLICK,this,overHandle);
    }

    private function overHandle():void {
        ViewManager.getInstance().showStartView();
    }
}
}
