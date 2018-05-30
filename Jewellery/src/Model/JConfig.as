/**
 * Created by guanll on 2018/5/15.
 */
package Model {
import laya.net.Loader;

public class JConfig {
    public function JConfig() {
    }
    public static const HIGHEST_SCORE:String = "highest_score";
    public static var score:int;

    //scaleMode
    //所有适配模式["noscale", "exactfit", "showall", "noborder", "full", "fixedwidth", "fixedheight"];
    public static const scaleMode:String = "showall";
    //atlas路径
    public static const atlasPath:String = "res/atlas/";
    public static const RES:Array = [{url: "main/43.png", type: Loader.IMAGE},
        {url: "main/70.png", type: Loader.IMAGE},
        {url: atlasPath + "comp.json", type: Loader.ATLAS},
        {url: atlasPath + "main.json", type: Loader.ATLAS}
    ];
}
}
