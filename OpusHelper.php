<?php 
class OpusHelper{
    
    private $__opusInfo = array();
    private $__filename  = array();
    
    private function __getInfo($__filename,$firstDelimiter=';',$secondDelimiter=','){
        $handle = fopen($__filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $contents = fread($handle, filesize ($__filename));
        $parrentArray = explode($firstDelimiter,trim($contents));
        $__opusInfo = array();
        foreach($parrentArray as $val){
            if(!empty($val)){
                $sonArray = explode($secondDelimiter,trim($val));
                $__opusInfo[] = $sonArray;
            }
        }
        return $__opusInfo;
    }
}
?>