<?php

    $list = [
        "JavaScript",
        "python",
        "PHP",
        "Ruby",
        "Perl"
    ];
  
    /*
    foreach(range(0,count($list)-1) as $i){
        
        echo "<li>".$list[$i]."</li>";
    }
    */

    /*
    echo "<ul>";
        foreach($list as $value){
            echo "<li>".$value."</li>";
        }
    echo "</ul>";
    */
?>

<!-- HTML中にPHPを組み込む場合 -->
<ul>
    <?php foreach($list as $value): ?>
        <li>
            <?php echo $value; ?>
        </li>
    <?php endforeach; ?>
</ul>