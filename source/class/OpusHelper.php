<?php 
class OpusHelper{
    
    public $opusInfo = array();
    public $fileName  = array();
    
    public function getInfo($fileName,$firstDelimiter=';',$secondDelimiter=','){
        $handle = fopen($fileName, "r");//��ȡ�������ļ�ʱ����Ҫ���ڶ����������ó�'rb'
        //ͨ��filesize����ļ���С���������ļ�һ���Ӷ���һ���ַ�����
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