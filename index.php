<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Extra Credit - Task 3 of 3 for "exceeds" rating - Auto-refresh the quote: -->
  <meta http-equiv="refresh" content="10">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">  
    <?php  
    // Call printQuote function within 'quote-box' HTML element:
    echo printQuote($quotes); 
    // Extra Credit - Task 2 of 3 for "exceeds" rating - RandomBackgroundColor:
    getRandomBackgroundColor();
    ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>