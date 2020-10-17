<?php 
    $title = 'deposit';
    require_once 'includes/header.php' ?>

    <h1>Deposit Page</h1>
    <?php
        $balance = 10000;

        if($balance <= 0)
        {
            echo '<h2>You have insuficent funds, plase make a depost to continue.</h3>';
        }
        else{
            echo '<h2>Your balance is $'. $balance . '</h2>';
            // $balance = $balance + 1000; 
        }
    ?>
<?php require_once 'includes/footer.php' ?>