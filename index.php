<?php
require_once('OpusHelper.php');
require_once('rss.php');

$infoData = new OpusHelper();

$opus =  $infoData -> getInfo('opus.txt');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $xml->title; ?></title>
    </head>
    <body>
        <table border="1" cellpadding="0" cellspacing="0" >
            <tr >
                <td valign="center" ><p >������</p></td>
                <td valign="center" ><p >tale</a> </p></td>
                <td width="216" valign="center" ><p >�Ա� </p></td>
                <td valign="center" ><p >�� </p></td>
                <td valign="center" colspan="2" ><p >���� </p></td>
                <td width="193" valign="center" ><p >�� </p></td>
                <td width="139" valign="center" rowspan="3" ><p >&nbsp;</p></td>
            </tr>
            <tr >
                <td valign="center" ><p > ��������</p></td>
                <td valign="center" ><p >1991��10.07 </p></td>
                <td width="216" valign="center" ><p >ѧ�� </p></td>
                <td valign="center" ><p >ר��</p></td>
                <td valign="center" colspan="2" ><p >���� </p></td>
                <td width="193" valign="center" ><p >����ʡ������</p></td>
            </tr>
            <tr >
                <td valign="center" ><p >רҵ </p></td>
                <td valign="center" ><p >�����</p></td>
                <td valign="center" colspan="2" ><p >��ҵѧУ </p></td>
                <td valign="center" colspan="3" ><p >��������Ƽ�ְҵ����ѧԺ</p></td>
            </tr>
            <tr >
                <td valign="center" colspan="11" ><p >���˲��ͣ�<a href="<?php echo $xml->author->uri; ?>"><?php echo $xml->author->uri; ?></a></p></td>
            </tr>
            <tr >
                <td valign="center" colspan="2" >��Ŀ����</td>
                <td valign="center" colspan="2" >��Ŀ���</td>
                <td valign="center" colspan="5" >��Ŀ��ͼ</td>
            </tr>
            
            <?php
            foreach ($opus as $value) {
                echo '<tr><td valign="center" colspan="2" >' . $value['0'] . '</td>
                <td valign="center" colspan="2" >' . $value['1'] . '</td>
                <td valign="center" colspan="5" ><img src=" ' . $value['2'] . '" width="350"/></td></tr>';
            }
            ?>
        </table>
    </body>
</html>
