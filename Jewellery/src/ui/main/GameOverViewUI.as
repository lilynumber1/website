/**Created by the LayaAirIDE,do not modify.*/
package ui.main {
	import laya.ui.*;
	import laya.display.*; 
	import laya.display.Text;

	public class GameOverViewUI extends View {
		public var btnSure:Button;
		public var txtScore:Text;

		public static var uiView:Object =/*[STATIC SAFE]*/{"type":"View","props":{"width":765,"height":515},"child":[{"type":"Image","props":{"y":0,"x":0,"width":765,"skin":"comp/blank.png","height":515}},{"type":"Image","props":{"y":167,"x":272,"skin":"main/79.png"}},{"type":"Button","props":{"y":299,"x":327,"var":"btnSure","stateNum":2,"skin":"main/btn_sure.png"}},{"type":"Text","props":{"y":256,"x":336,"width":92,"var":"txtScore","text":"20000","strokeColor":"#f44c0b","stroke":3,"height":32,"fontSize":22,"font":"Microsoft YaHei","color":"#e8fb0d","align":"center"}}]};
		override protected function createChildren():void {
			View.regComponent("Text",Text);
			super.createChildren();
			createView(uiView);

		}

	}
}