<?php 
    $title = 'statistics';
    require_once 'includes/header.php' ?>

    <h1>Statistics Page</h1>
    <?php

        $i = 0;
        $j = 0;

        while($i < 5)
        {
            $j=$i+1;
            echo '<h2>The incriment value is '. $i . ' but the count is ' . $j .'</h2>';
            $i++;
        }
    ?>
<?php require_once 'includes/footer.php' ?>