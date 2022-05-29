<?php
$a = "aaa\n";
$a = "aaa\raaa"; #復帰、行の頭に戻る
$a = "\taaa";#タブ
$a = "\\"; #\
$a = "\77"; #8進数のascii文字,\0~\77
$a = "\xFF"; #16進数のascii文字、\x0~\xFF
print $a;

$b = 'bbb\n';
print $b;
