<?php 

$list = ['忍','者','C','O','D','E'];

for($i=0;$i <= count($list)-1;$i++){
    echo $list[$i];
}

echo "<br>";

/*
これ以外にも
*/
    echo implode("-",$list);
/*
という解放もある。

implode：配列要素を文字列により連結する。

使い方
implode("間に挟む文字","配列");

*/