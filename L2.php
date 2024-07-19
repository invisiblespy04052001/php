<?php 

/*これでもできるし問題はないが…
for($i=1;$i<=15;$i++){
    echo $i.'<br>';
}
*/

//このforeachスタイルでも動く。
foreach(range(1,20) as $i){
    echo $i,'<br>';
}

/*
range＝ある範囲の整数を有する配列を作成する
range(string|int|float $start, string|int|float $end, int|float $step = 1): array
*/