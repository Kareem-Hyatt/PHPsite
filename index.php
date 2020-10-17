<?php 
  $title = 'home';
  require_once 'includes/header.php';  
?>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="about.php">About</a></li>
  </ul>
  <H1>
    Module 1 Banking Website
  </H1>
  <?php
    $name = "Kareem Hyatt";
    $transaction;
	  $amount;
	  $balance = 10000;
  ?>
  <H2>
    Good day <?php echo $name; ?>
  </H2>
  <h2>
    <?php
      // while ($balance == 10000){
	
      //   echo 'Main Menu </br>';
      //   echo 'Select 1 for Deposits </br>';
      //   echo 'Select 2 for Withdrawls </br>';
      //   echo 'Select 3 for Balanace Enquirie </br>';

      //   \n0-Exit\n\
      //   \nPlease select transaction type\n\n");
      //   scanf("%i", &transaction);
      
      //   if (transaction == 1){
      //     printf("\nWhat is the amount?\n\n");
      //     scanf("%f", &amount);
      //     balance = balance + amount;
      //     printf("\nYour new balance is %.2f\n\n", balance);
      //   }
      //   else if (transaction == 2){
      //     printf("\nWhat is the amount?\n\n");
      //     scanf("%f", &amount);
      //     balance = balance - amount;
      //     printf("\nYour new balance is %.2f\n\n", balance);
      //   }
      //   else if (transaction == 3){
      //     balance = balance;
      //     printf("\nYour new balance is %.2f\n\n", balance);
      //   }		
      //   else {
      //     exit(0);
      //   }
      // }
    ?>
  </h2>
<?php
  require_once 'includes/footer.php';
?>