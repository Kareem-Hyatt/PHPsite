<?php 
    $title = 'withdraw';
    require_once 'includes/header.php' ?>

    <h1>Withdraw Page</h1>
    <?php
        // $balance = 10000;
        $option = 30;

        switch($option)
        {
            case 0: echo '<h2>You have insuficent funds, plase make a depost to continue.</h3>';
            break;
            case 1000: echo '<h2>You have some change.</h3>';
            break; 
            default: echo '<h2>You are rich!!!.</h3>';
        }




    ?>
<?php require_once 'includes/footer.php' ?>