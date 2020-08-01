<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
    
    <?php // Call the printQuote function within the 'quote-box' HTML element. ?>
    <?php // include 'inc/functions.php'; ?>

      <p class="quote"><?php echo "Zitat: " . $test["quote"];?></p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p>
    
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>