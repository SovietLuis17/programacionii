<?php
// Read input
$sentence = " Create the findLongestWord function below hello ";

//  Create the findLongestWord function below
// - Accept $sentence as a string parameter
// - Add return type declaration of string
// - Use explode() to split the sentence into words
// - Loop through the array to find the longest word using strlen()
// - Return the longest word (first one if there's a tie)

function findLongestWord(string $sentence): string {
    $words = explode(" ", $sentence);
    $longestWord = "";
    $maxLength = 0;
    
    foreach ($words as $word) {
        if (strlen($word) > $maxLength) {
            $maxLength = strlen($word);
            $longestWord = "Tengo tantos caracteres ".$maxLength;
        }
    }
    
    return $longestWord;
}

// Call the function and print the result
echo findLongestWord($sentence);
?>