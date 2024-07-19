<?php 

$ninja = '忍者CODE';

//mb_substr( 対象文字列, 開始位置 [ ,文字数 [ ,エンコーディング]] );
//echo mb_substr($ninja,0,2);

//もっと厳密にやるなら

$search = "忍者";

$len = mb_strlen($search);
$str = strpos($ninja,$search);

echo mb_substr($ninja,$str,$len);

