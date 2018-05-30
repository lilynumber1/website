package view {
import Controller.ViewManager;

import Model.JConfig;

import laya.events.Event;
import laya.net.LocalStorage;

import ui.main.StartViewUI;

	public class StartView extends StartViewUI {
		
		public function StartView() {
            super();
		}

        public function init():void{
            btnEnter.on(Event.CLICK, this, enterHandle);
            updateView();
        }

		private function enterHandle():void {
		    ViewManager.getInstance().showGameView();
		}

        private function updateView():void
        {
            var saveValue:String = LocalStorage.getItem(JConfig.HIGHEST_SCORE);
            var score:int = 0;
            if(saveValue){
                score = parseInt(saveValue);
            }

            txt_high.text = String(score);
        }
	}
}