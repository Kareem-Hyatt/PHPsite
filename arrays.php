<?php 
    $title = 'arrays';
    require_once 'includes/header.php' ?>

    <h1>Arrays Page</h1>
    <?php

        $person = array('Kareem Hyatt', 20, 'M', 'Student');

        for($i=0;$i<4;$i++)
        {
            echo '<p>The value stored is '. $person[$i] . '</p>';
        }
            echo '</br><p>The member name is '. $person[0] . '</p>';
            echo '<p>The member age is '. $person[1] . '</p>';
            echo '<p>The member sex is '. $person[2] . '</p>';
            echo '<p>The member status is '. $person[3] . '</p>';
    ?>
<?php require_once 'includes/footer.php' ?>