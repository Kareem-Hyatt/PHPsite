<?php 
    $title = 'transfer';
    require_once 'includes/header.php' ?>

    <h1>Transfer Page</h1>
    <?php
        for($i=0; $i<5; $i++)
        {
            $j = $i + 1;
            echo '<h2>The incriment value is '. $i . ' but the count is ' . $j .'</h2>';
        }
    ?>
<?php require_once 'includes/footer.php' ?>