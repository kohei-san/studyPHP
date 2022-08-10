<?php
// // cURL ハンドルを作成します
$ch = curl_init('http://www.google.com/');

// // 実行します
// curl_exec($ch);

// // エラーが発生したかどうかを確認します
// if (!curl_errno($ch)) {
//   $info = curl_getinfo($ch);
//   echo 'Took ', $info['total_time'], ' seconds to send a request to ', $info['url'], "\n";
// }

// // ハンドルを閉じます
// curl_close($ch);

// ------------------------

print_r( curl_getinfo($ch));

?>