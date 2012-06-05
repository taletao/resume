<?php
require_once('OpusHelper.php');

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
                <td valign="center" ><p >姓名：</p></td>
                <td valign="center" ><p >tale</a> </p></td>
                <td width="216" valign="center" ><p >性别 </p></td>
                <td valign="center" ><p >男 </p></td>
                <td valign="center" colspan="2" ><p >民族 </p></td>
                <td width="193" valign="center" ><p >汉 </p></td>
                <td width="139" valign="center" rowspan="3" ><p >&nbsp;</p></td>
            </tr>
            <tr >
                <td valign="center" ><p > 出生年月</p></td>
                <td valign="center" ><p >1991，10.07 </p></td>
                <td width="216" valign="center" ><p >学历 </p></td>
                <td valign="center" ><p >专科</p></td>
                <td valign="center" colspan="2" ><p >户籍 </p></td>
                <td width="193" valign="center" ><p >江西省新余市</p></td>
            </tr>
            <tr >
                <td valign="center" ><p >专业 </p></td>
                <td valign="center" ><p >计算机</p></td>
                <td valign="center" colspan="2" ><p >毕业学校 </p></td>
                <td valign="center" colspan="3" ><p >江西生物科技职业技术学院</p></td>
            </tr>
            <tr >
                <td valign="center" colspan="11" ><p >个人博客：<a href="<?php echo $xml->author->uri; ?>"><?php echo $xml->author->uri; ?></a></p></td>
            </tr>
            <tr >
                <td valign="center" colspan="2" >项目标题</td>
                <td valign="center" colspan="2" >项目简介</td>
                <td valign="center" colspan="5" >项目截图</td>
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
