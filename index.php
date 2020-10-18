<?php 
  $title = 'home';
  require_once 'includes/header.php';  
?>

<hr/>
<H1>
  Module 1 Banking Website
</H1>
<?php
  $name = "Kareem Hyatt";
  $age = 20;
  $email = 'emailaddress@school.com';
  $sex = 'm';
?>
<H2>
  Good day <?php echo $name; ?></br>
  You are <?php echo $age; ?> years old</br>
  Your email address is <?php echo $email; ?></br>
  Sex: <?php echo $sex; ?></br>

  <?php
    $name = 'No longer Kareem';
    $age = 'twenty';
    $email = 'new email address';
    $sex = 'male';
  ?></br>

  Updated values </br></br>

  Good day <?php echo $name; ?></br>
  You are <?php echo $age; ?> years old</br>
  Your email address is <?php echo $email; ?></br>
  Sex: <?php echo $sex; ?></br>
</h2>

<?php
  require_once 'includes/footer.php';
?>