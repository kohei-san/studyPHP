<?php
// アルファベット順に引数を比較する関数。大文字と小文字を区別する。

// 第一引数が、第二引数よりも大きければ正の数、小さければ負の数を返す
print strcmp(2, 1);
print "\n";
print strcmp(1, 2);

print "\n";
// 1文字目を比較する
print strcmp("555", "66");

print "アルファベットの比較\n";
// アルファベット順に比較
print strcmp("a", "b");

print "\n";
print strcmp("b", "a");

print "\n";
print strcmp("b", "1");

// 大文字と小文字、、、、大文字の方が後
print "大文字と小文字\n";
print strcmp("A", "a");

$str1 = "b";
echo ord($str1); //98
echo "\n";
$str2 = "t";
echo ord($str2); //116
echo "\n";
echo ord($str1)-ord($str2);//-18
$str1 = "bear";
$str2 = "tear";
$str3 = "";
echo "<pre>";
echo strcmp($str1, $str2); // -18
echo "\n";
echo strcmp($str2, $str1); //18
echo "\n";
echo strcmp($str2, $str2); //0
echo "\n";
echo strcmp($str2, $str3); //4
echo "\n";
echo strcmp($str3, $str2); //-4
echo "\n";
echo strcmp($str3, $str3); // 0
echo "</pre>";