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
                <td valign="center" ><p >姓名：</p></td>
                <td valign="center" ><p ><a href="<?php echo $xml->uri; ?>"><?php echo $xml->author->name; ?></a> </p></td>
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
                <td valign="center" colspan="2" >博文标题</td>
                <td valign="center" colspan="5" >博文内容</td>
                <td valign="center" colspan="3" >发表时间</td>
            </tr>
            <?php
            foreach ($xml->entry as $item) {
                //var_dump($item->link);exit;
                if (!preg_match("$excludePattern", $item->title)) {
                    $filteredTitle = htmlspecialchars("$item->title");
                    $filteredTitle = str_replace("$username: ", "", $filteredTitle);
                    //Convert the time zone in China --转成中国时区
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
