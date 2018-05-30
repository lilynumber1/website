/**Created by the LayaAirIDE,do not modify.*/
package ui.main {
	import laya.ui.*;
	import laya.display.*; 
	import laya.display.Text;

	public class StartViewUI extends View {
		public var btnEnter:Button;
		public var txt_high:Text;

		public static var uiView:Object =/*[STATIC SAFE]*/{"type":"View","props":{"width":765,"height":515},"child":[{"type":"Image","props":{"y":0,"x":0,"skin":"main/70.png"}},{"type":"Button","props":{"y":408,"x":270,"var":"btnEnter","stateNum":2,"skin":"main/btn_enter.png"}},{"type":"Text","props":{"y":113,"x":180,"width":82,"var":"txt_high","text":"20000","strokeColor":"#111212","stroke":3,"height":32,"fontSize":22,"font":"Microsoft YaHei","color":"#e8fb0d"}}]};
		override protected function createChildren():void {
			View.regComponent("Text",Text);
			super.createChildren();
			createView(uiView);

		}

	}
}