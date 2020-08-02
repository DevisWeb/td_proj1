<?php
// PHP - Random Quote Generator

// #################################################################
// Create multidimensional array $quotes (takes one param: array)
// with at least 5 quotes (associative inner array) 
// with at least two default items (quote, source) + two optional (citation, year)
// Extra Credit: for "exceeds" rating: add more items to inner quote (category)
$cat = array("business", "humor", "motivational", "technology", "zen");

$quotes = array(
    [
    "quote" => "quote1",
    "source" => "src1",
    "citation" => "cit1", 
    "year" => 2020,
    "cat" => $cat[1]
    ],
    [   
    "quote" => "quote2",
    "source" => "src2",
    "cat" => $cat[1]
    ],
    [   
    "quote" => "quote3",
    "source" => "src3",
    "cat" => $cat[1]
    ],
    [   
    "quote" => "quote4",
    "source" => "src4",
    "cat" => $cat[1]
    ],
    [   
    "quote" => "quote5",
    "source" => "src5",
    "citation" => "cit5", 
    "year" => 2015,
    ],
); 

// #################################################################
// Create getRandomQuote function (one param: array)
// select + return random quote element from quotes array
// select items with "box notation" array[0]

// ### using required function - rand — "Generate a random integer":
// https://www.php.net/manual/en/function.rand.php
function getRandomQuote($arr) {  
    $randomInt = rand(0, count($arr) - 1);
    return $arr[$randomInt];
} 

// ### Variant 2 - array_rand — "Pick one or more random keys out of an array:
// (https://www.php.net/manual/en/function.array-rand.php)
/* function getRandomQuote2($arr){
    $randomQuote = array_rand($arr);
    return $arr[$randomQuote];
    } 
** Compare Outputs - rand() vs array_rand():
    $randoutput = getRandomQuote($quotes);
        print_r($randoutput); // Array ( [quote] => quote5 [source] => src5 ) 
        echo "<br/>"; 
    $randoutput2 = getRandomQuote2($quotes);
        print_r($randoutput2); // Array ( [quote] => quote5 [source] => src5 ) 
*/

// #################################################################
// printQuote function (one param called array) 
/* (**) HTML template :
        <p class="quote"> [quote here] </p>
        <p class="source"> [source here]
        <span class="citation"> [citation here] </span>
        <span class="year"> [year here] </span>
        </p> 
*/
function  printQuote($arr) {
   // create variable calling getRandomQuote() function
   // with quotes array as argument:
    $quoteItem = getRandomQuote($arr); 
   // create variable to initiate HTML string:
    $quoteOutput = "";
   // use template in the project instructions (** see above),
   // add the two default quote properties:
    $quoteOutput .= '<p class="quote">' . $quoteItem["quote"] . '</p>';
    $quoteOutput .= '<p class="source">' . $quoteItem["source"];
   // if quote contains citation value, add to string,
   // if quote contains year value, add to string:
    if( isset($quoteItem['citation'])){
        $quoteOutput .= '<span class="citation">' . $quoteItem["citation"] . '</span>';
    }
    if( isset($quoteItem['citation'])){
        $quoteOutput .= '<span class="year">' . $quoteItem["year"] . '</span>';
    }
   // Extra Credit: Task 1 of 3 for "exceeds" rating add extra item to string:
    if( isset($quoteItem['cat'])){
        $quoteOutput .= '<span class="cat">' . $quoteItem["cat"] . '</span>';
    }
   // close string with the necessary closing HTML tags:
    $quoteOutput .= '</p>';  
   
    return $quoteOutput;
}
// printQuote($quotes); // function is called directly within html quote-box of index.php as required 

// Extra Credit - Task 2 of 3 for "exceeds" rating - RandomBackgroundColor:
function getRandomBackgroundColor(){
    $bgColors = array('#5fb2f2', '#282E33', '#5f69f2' , '#25373A', '#0099f7' , '#164852', '#495E67', '#FF3838');
    $randomBgColor = $bgColors[array_rand($bgColors)];
    echo '<body style=background-color:'. $randomBgColor .'>';
}


// ##################################################################
// TODO: Extra Credit to get an "exceeds" rating

// 1. Add more items to the inner quote element.
//    For example, a tags property and add to the string
// => DONE

// 2. Random background color.
//    quote change => randomly change background color of page
// => DONE

// 3. Auto-refresh the quote.
//    after a set amount of time (20-30 sec) print new quote to page
//    (Hint: Meta tags can be one way to accomplish this)
// => TODO