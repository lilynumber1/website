/**Created by the LayaAirIDE,do not modify.*/
package ui.main {
	import laya.ui.*;
	import laya.display.*; 
	import laya.display.Text;

	public class GameViewUI extends View {
		public var txtScore1:Text;
		public var txtScore2:Text;
		public var btnClose:Button;

		public static var uiView:Object =/*[STATIC SAFE]*/{"type":"View","props":{"width":765,"height":515},"child":[{"type":"Image","props":{"y":54,"x":27,"skin":"main/43.png"}},{"type":"Text","props":{"y":67,"x":178,"width":82,"var":"txtScore1","text":"20000","strokeColor":"#f44c0b","stroke":3,"height":32,"fontSize":22,"font":"Microsoft YaHei","color":"#e8fb0d"}},{"type":"Text","props":{"y":67,"x":332,"width":82,"var":"txtScore2","text":"20000","strokeColor":"#111212","stroke":3,"height":32,"fontSize":22,"font":"Microsoft YaHei","color":"#e8fb0d"}},{"type":"Button","props":{"y":63,"x":681,"var":"btnClose","stateNum":2,"skin":"main/btn_close.png"}},{"type":"Image","props":{"y":110,"x":347,"skin":"main/num_1.png","name":"cell_0_2"}},{"type":"Image","props":{"y":170,"x":347,"skin":"main/num_1.png","name":"cell_1_2"}},{"type":"Image","props":{"y":230,"x":347,"skin":"main/num_1.png","name":"cell_2_2"}},{"type":"Image","props":{"y":290,"x":347,"skin":"main/num_1.png","name":"cell_3_2"}},{"type":"Image","props":{"y":350,"x":347,"skin":"main/num_1.png","name":"cell_4_2"}},{"type":"Image","props":{"y":140,"x":295,"skin":"main/num_1.png","name":"cell_0_1"}},{"type":"Image","props":{"y":200,"x":295,"skin":"main/num_1.png","name":"cell_1_1"}},{"type":"Image","props":{"y":260,"x":295,"skin":"main/num_1.png","name":"cell_2_1"}},{"type":"Image","props":{"y":320,"x":295,"skin":"main/num_1.png","name":"cell_3_1"}},{"type":"Image","props":{"y":170,"x":243,"skin":"main/num_1.png","name":"cell_1_0"}},{"type":"Image","props":{"y":230,"x":243,"skin":"main/num_1.png","name":"cell_2_0"}},{"type":"Image","props":{"y":290,"x":243,"skin":"main/num_1.png","name":"cell_3_0"}},{"type":"Image","props":{"y":140,"x":399,"skin":"main/num_1.png","name":"cell_0_3"}},{"type":"Image","props":{"y":200,"x":399,"skin":"main/num_1.png","name":"cell_1_3"}},{"type":"Image","props":{"y":260,"x":399,"skin":"main/num_1.png","name":"cell_2_3"}},{"type":"Image","props":{"y":320,"x":399,"skin":"main/num_1.png","name":"cell_3_3"}},{"type":"Image","props":{"y":170,"x":451,"skin":"main/num_1.png","name":"cell_1_4"}},{"type":"Image","props":{"y":230,"x":451,"skin":"main/num_1.png","name":"cell_2_4"}},{"type":"Image","props":{"y":290,"x":451,"skin":"main/num_1.png","name":"cell_3_4"}}]};
		override protected function createChildren():void {
			View.regComponent("Text",Text);
			super.createChildren();
			createView(uiView);

		}

	}
}