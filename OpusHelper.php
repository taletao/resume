<?php 
class OpusHelper{
    
    private $__opusInfo = array();
    private $__filename  = array();
    
    private function __getInfo($__filename,$firstDelimiter=';',$secondDelimiter=','){
        $handle = fopen($__filename, "r");//��ȡ�������ļ�ʱ����Ҫ���ڶ����������ó�'rb'
        //ͨ��filesize����ļ���С���������ļ�һ���Ӷ���һ���ַ�����
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