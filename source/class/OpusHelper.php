<?php 
class OpusHelper{
    
    public $opusInfo = array();
    public $fileName  = array();
    
    public function getInfo($fileName,$firstDelimiter=';',$secondDelimiter=','){
        $handle = fopen($fileName, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $contents = fread($handle, filesize ($fileName));
        $parrentArray = explode($firstDelimiter,trim($contents));
        $opusInfo = array();
        foreach($parrentArray as $val){
            if(!empty($val)){
                $sonArray = explode($secondDelimiter,trim($val));
                $opusInfo[] = $sonArray;
            }
        }
        return $opusInfo;
    }
}
?>