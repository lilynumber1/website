/**Created by the LayaAirIDE,do not modify.*/
package ui.main {
	import laya.ui.*;
	import laya.display.*; 
	import laya.display.Text;

	public class AlertViewUI extends Dialog {
		public var txtContent:Text;

		public static var uiView:Object =/*[STATIC SAFE]*/{"type":"Dialog","props":{"width":765,"height":515},"child":[{"type":"Image","props":{"y":167,"x":272,"skin":"main/29.png"}},{"type":"Button","props":{"y":294,"x":326,"stateNum":2,"skin":"main/btn_sure.png","name":"sure"}},{"type":"Button","props":{"y":163,"x":449,"stateNum":2,"skin":"main/btn_close.png","name":"close"}},{"type":"Text","props":{"y":201,"x":290,"width":189,"var":"txtContent","valign":"middle","text":"游戏中是否退出？","strokeColor":"#f44c0b","stroke":1,"height":69,"fontSize":22,"font":"Microsoft YaHei","color":"#e8fb0d","align":"center"}}]};
		override protected function createChildren():void {
			View.regComponent("Text",Text);
			super.createChildren();
			createView(uiView);

		}

	}
}