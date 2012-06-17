<?php
$username = 'taletao'; 
$feedURL = 'http://www.cnblogs.com/taletao/rss';
$excludePattern = '/' . $username . ': @/';
$count = 5;
$i = 0;

if (!$xml = simplexml_load_file($feedURL)) {
    trigger_error('Error', E_USER_ERROR);
}

include './tpl/blog.html';
?>