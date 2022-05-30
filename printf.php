<?php
$price = 5;
$off = 0.35;

printf("price : $%.1f\n", $price * (1 - $off));

$n =  43951789;
$u = -43951789;
$c = 65; // ASCII の 65番目は 'A'

// %% は、リテラル '%' 文字を出力することに注意
printf("%%b = '%b'\n", $n); // バイナリ表現
printf("%%c = '%c'\n", $c); // ASCII 文字を出力。chr() 関数と同じ
printf("%%d = '%d'\n", $n); // 標準的な整数表現
printf("%%e = '%e'\n", $n); // 科学的記法
printf("%%u = '%u'\n", $n); // 正の整数の符号なし整数表現
printf("%%u = '%u'\n", $u); // 負の整数の符号なし整数表現
printf("%%f = '%f'\n", $n); // 浮動小数点表現
printf("%%o = '%o'\n", $n); // 8進数表現
printf("%%s = '%s'\n", $n); // 文字列表現
printf("%%x = '%x'\n", $n); // 16進数の表現(小文字)
printf("%%X = '%X'\n", $n); // 16進数の表現(大文字)

printf("%%+d = '%+d'\n", $n); // 正の整数値の符号
printf("%%+d = '%+d'\n", $u); // 負の整数値の符号
printf("%d", 1);
?>