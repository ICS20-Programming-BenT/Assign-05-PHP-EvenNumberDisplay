<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Even Number Display: Assign-05 - PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Even Number Display</title>
  </head>
  <body>
    
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">

      <!-- Web page heading -->
      <?php echo "<h1>Even Number Display</h1>" ?>

      <!-- Image -->
      <center>
        <img src="./images/even-numbers.png" alt="A variety of even numbers." width="320" height="200">
      </center>
      <br>
      
      <!-- Body text -->
      <?php echo "<p>Welcome! This webpage will display all the even numbers between any two positive numbers of your choice.</p>" ?>
      <?php echo "<h3>Your Input:</h3>" ?>

      <!-- Form for user input -->
      <form action="./results.php" method="post" target="results">
        <label for="start-number">Enter a starting number:</label>
        <input type="number" name="start-number" placeholder="Starting number..."><br><br>
        <label for="end-number">Enter an ending number:</label>
        <input type="number" name="end-number" placeholder="Ending number..."><br><br><br>
        
        <!-- Radio button to ask user whether or not to display numbers in reverse order -->
        <label>Would you like the sequence of numbers to display in reverse order?</label><br><br>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
          <input class="mdl-radio__button" type="radio" name="order" value="reversed">
          <span class="mdl-radio__label">Yes</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
          <input class="mdl-radio__button" type="radio" name="order" value="not-reversed">
          <span class="mdl-radio__label">No</span>
        </label><br><br>
        <input type="submit" id="button" value="Submit Your Numbers!" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      </form>
      <br>
      
      <!-- iFrame for range of numbers to be displayed -->
      <iframe id="results" name="results"></iframe>
      <br>
      <br>
    </main>
  </body>
</html>