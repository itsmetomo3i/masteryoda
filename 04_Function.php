<?php

//課題

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum ($num){
    $result = $num * 2;
    return $result;
}
echo sum(200);
echo "\n";

//2.$a と $b を仮引数に持ち、　$aと$b　を足した結果を返す関数を作成してください。
function f($a, $b) {
    return $a + $b;
    }
echo (100 + 20);
echo "\n";
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array (1,3,5,7,9);
function multiply ($arr){
    $result = 1;
    foreach($arr as $num){
        $result= $result *= $num;
    }
    return $result;
 }
 //From here
echo multiply($arr);
echo "\n";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
    $result = 0;
  foreach($arr as $a) {
     if($max_number < $a){
      $max_number = $a;
 }
}
return $max_number;
}
echo max_array($arr);
echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags,array_push,array_merge,time, mktime,date

$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";

$members = array("一郎","二郎","三郎");
            array_push($members,"四郎","五郎");
            print_r($members);
            echo $members;
//配列を作成
$array1 = ['apple','orange','mikan'];
$array2 = ['ichigo', 'cherry', 'suika'];
$array3 = ['squid','dolphin','urchin'];
 
//配列を結合する
$fruit_merge = array_merge($array1, $array2, $array3);
print_r($fruit_merge);
echo ($fruit_merge);
echo "\n";

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
echo "\n";
echo 'now'.time() ."\n";
//Timezoneを設定する
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s") . "\n";
?>