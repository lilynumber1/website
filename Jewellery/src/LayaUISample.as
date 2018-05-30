package {
import Controller.ViewManager;

import Model.JConfig;

import laya.display.Stage;
	import laya.net.ResourceVersion;
	import laya.utils.Handler;
	import laya.wx.mini.MiniAdpter;
	
	public class LayaUISample {
		
		public function LayaUISample() {
			//初始化微信小游戏
			MiniAdpter.init();

			//初始化引擎
			Laya.init(765, 515);
            Laya.stage.alignH = Stage.ALIGN_CENTER;
            Laya.stage.alignV = Stage.ALIGN_MIDDLE;

            Laya.stage.scaleMode = JConfig.scaleMode;
            Laya.stage.screenMode = Stage.SCREEN_HORIZONTAL;
			//激活资源版本控制
            ResourceVersion.enable("version.json", Handler.create(this, beginLoad), ResourceVersion.FILENAME_VERSION);
		}
		
		private function beginLoad():void {
			//加载引擎需要的资源
			Laya.loader.load(JConfig.RES, Handler.create(this, onLoaded));
		}
		
		private function onLoaded():void {
		    ViewManager.getInstance().showStartView();

            wx.showShareMenu("分享");
            wx.onShareAppMessage(function () {
                // 用户点击了“转发”按钮
                return {
                    title: '熊猫大师的珠宝，绿色无公害，随时想玩就玩'
                }
            });
		}
	}
}