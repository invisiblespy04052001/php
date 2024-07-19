<?php
    class NINJA 
    {
        //グローバルスコープ関数の定義
        public $title;
        public $body;

        /*コンストラクタ。
        インスタンス生成時に呼び出される関数。
        必要な引数を定義してプロパティを初期化したりする
        */
        public function __construct($title,$body)
        {
            //アロー演算子によって、プロパティにパブリック変数の中身を定義している？
            $this->title = $title;
            $this->body = $body;
        }

        //デザインパターンについて調べる

        //処理として受け渡すrender関数部分
        public function render(){
            echo $this->title.'が、今から'.$this->body;
        }   
    }
?>

<?php

    //クラスファイルを外部化するなら、ここで「require_once」
    $ninja = new NINJA('PHPの問題集', 'スタート！');
    $ninja->render();

?>