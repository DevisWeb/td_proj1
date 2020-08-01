<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

/* 
 * quote - string: text of quote displayed on page
 * source - string: containing creator of quote ("Mark Twain" or "Traditional Irish proverb” or "Anonymous")
 * citation - optional - string identifying where quote comes from, like a speech, publication or a movie. If not known => NOT include item in inner array
 * year - optional - number identifying year of the quote. If not known => NOT include item in inner array
   ==> create printQuote() function that prints the quotes to the screen.

// create at least 5 quotes with at least two items!

$quotes = array(
    array(
        "quote" => "",      // *required
        "source" => "",     // *required
        "citation" => "",   //  optional
        "year" => ,         //  optional
        ),
        (
        ...
        )
)
*/

$quotes = array(
    [
        "quote" => "quote1",
        "source" => "src1",
        "citation" => "cit1", 
        "year" => "2020",
    ],
    ["quote" => "quote2",
        "source" => "src2"
    ],
    ["quote" => "quote3",
        "source" => "src3"
    ],
    ["quote" => "quote4",
        "source" => "src4"
    ],
    ["quote" => "quote5",
        "source" => "src5"
    ]
);
echo "<pre>";
// print_r($quotes);
echo "</pre>";

// #################################################################
// Create the getRandomQuuote function and name it getRandomQuote
// function takes one param called array ==> argument passed is array of quotes

// body of function:
// selects+returns random quote element from quotes array
// ==> remember method of finding random number_format
// select items with "box notation" array[0]

 function getRandomQuote(array $quotes) { 
    // generate a random number between 0 and the last index in the array parameter
    // use the random number and box notation to grab a random item from the array
    // return the random item
    
  $randomQuote = array_rand($quotes);
     return $quotes[$randomQuote];

  /*foreach ($quotes[$randomQuote] as $key => $val)
  {
  // echo $quotes[$randomQuote]["quote"];
  echo $val . "<br>";
  } */
} 
 $test = getRandomQuote($quotes);
// check output:
    // echo $test["quote"];
// $test ="Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.";


// ### Variant 2:
/* function getRandomQuote(array $arr){
    $randomKey = rand(0, count($arr) - 1);
    echo $arr[$randomKey];
    } 
*/

// #################################################################
// Create the printQuote funtion and name it printQuote
// function takes one param called array 

// body of function:
// getRandomQuote should be called on array of quote obejcts, 
// and the result stored in a variable.
// new empty string should be created and stored in a variable.
// required quote array items + optional quote items if exist, 
// should be appropriately concatenated to the new string 
// created using the following HTML template:
/*
        <p class="quote"> [quote here] </p>
        <p class="source"> [source here]
        <span class="citation"> [citation here] </span>
        <span class="year"> [year here] </span>
        </p> 
*/
// span elements that hold citation+year properties 
// should only be created 
// if current quote element has those items. 
// This is where your conditionals will come in handy.
// The printQuote function should display the completed HTML string

function  printQuote(array $array) {
   // create a variable that calls the getRandomQuote() function, passing in the quotes array as an argument
   // create a variable that initiates your HTML string
   // using the template in the project instructions, add the two default quote properties
   // if the quote contains a citation value, add it the string
   // if the quote contains a year value, add it the string
   // close the string with the necessary closing HTML tags
   // display the complete HTML string

}

// ##################################################################


// Call the printQuote function within the 'quote-box' HTML element.

