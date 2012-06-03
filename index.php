<?php
require_once('OpusHelper.php');

$infoData = new OpusHelper();

$data =  $infoData -> __getInfo('opus.txt');

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
                <td valign="center" ><p ><a href="<?php echo $xml->uri; ?>"><?php echo $xml->author->name; ?></a> </p></td>
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
                <td valign="center" colspan="2" >���ı���</td>
                <td valign="center" colspan="5" >��������</td>
                <td valign="center" colspan="3" >����ʱ��</td>
            </tr>
            <?php
            foreach ($xml->entry as $item) {
                //var_dump($item->link);exit;
                if (!preg_match("$excludePattern", $item->title)) {
                    $filteredTitle = htmlspecialchars("$item->title");
                    $filteredTitle = str_replace("$username: ", "", $filteredTitle);
                    //Convert the time zone in China --ת���й�ʱ��
                    date_default_timezone_set('Asia/Shanghai');
                    $i++;
                    if ($i > $count) {
                        break;
                    }
                    ?>
                    <tr >
                        <td valign="center" colspan="2" >
                                <a href ="<?php echo $item->id; ?>">
                                    <?php echo $filteredTitle; ?>
                                </a>
                        </td>
                        <td valign="center" colspan="5" ><?php echo $item->content; ?></td>
                        <td valign="center" colspan="3" ><?php echo date("Y-m-d H:i:s", strtotime($item->published)); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </body>
</html>
