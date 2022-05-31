<?php
// ucwords(string $string, string $separators = " \t\r\n\f\v"): string

// 文字がアルファベットの場合、string の各単語の最初の文字を大文字にしたものを返します。
// この関数における "単語" とは、 separators に含まれていない文字からなる文字列です。 separators のデフォルトはスペース、 フォームフィード、改行、キャリッジリターン、 水平タブ、垂直タブ です。

// 問題
// print ucwords(strtoupper("sato ichiro\n"));
print ucwords(strtolower("sato ichiro\n"));
// print strtoupper(ucwords("sato ichiro\n"));
// print strtolower(ucwords("SATO ICHIRO\n"));

// エスケープシーケンスに対応

print ucwords("sato\nichiro\n");
print ucwords("sato\vichiro\n");
print ucwords("sato\tichiro\n");
print ucwords("sato\fichiro\n");