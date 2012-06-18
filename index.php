<?php
require_once('OpusHelper.php');
require_once('rss.php');

$infoData = new OpusHelper();

$opus =  $infoData -> getInfo('opus.txt');
require_once('template/default/index.htm');