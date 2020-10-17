<?php 
    $title = 'time';
    require_once 'includes/header.php' ?>

    <h1>Date Time Page</h1>
    <?php
        $date = getdate();

        echo "<p>Today's date is " . $date['mday'] . "/" . $date['mon'] . "/" . $date['year'] . "<p/>";
    ?>
<?php require_once 'includes/footer.php' ?>