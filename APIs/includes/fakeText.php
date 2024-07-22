<?php
$firstLetterASCII = 97;
$lastLetterASCII = 122;
$letterFrequencies = [
    'a' => 31,
    'b' => 8,
    'c' => 16,
    'd' => 15,
    'e' => 44,
    'f' => 6,
    'g' => 12,
    'h' => 9,
    'i' => 34,
    'j' => 1,
    'k' => 4,
    'l' => 21,
    'm' => 11,
    'n' => 29,
    'o' => 24,
    'p' => 11,
    'q' => 1,
    'r' => 29,
    's' => 35,
    't' => 27,
    'u' => 13,
    'v' => 4,
    'w' => 4,
    'x' => 1,
    'y' => 6,
    'z' => 2,
];

$minWordLength = 1;
$maxWordLength = 12;
$wordLengthFrequencies = [
    1 => 11,
    2 => 26,
    3 => 49,
    4 => 71,
    5 => 81,
    6 => 71,
    7 => 49,
    8 => 26,
    9 => 11,
    10 => 4,
    11 => 1,
    12 => 1,
];
$wordLengthDistributed = [];
$lettersDistributed = [];
$wordBank=[];
$wordBankSize=750;

function generateWordLengthDistributed() {
    global $wordLengthDistributed;
    global $minWordLength,$maxWordLength,$wordLengthFrequencies;
    // loop over all word lengths
    for ($i = $minWordLength; $i <= $maxWordLength; $i++) {
        // add word length value to disturbed array based on frequency
        for ($j = 0; $j < $wordLengthFrequencies[$i]; $j++) {
            $wordLengthDistributed[] = $i;
        }
    }
    shuffle($wordLengthDistributed);
}

function generateLetterDistributed() {
    global $lettersDistributed;
    global $firstLetterASCII, $lastLetterASCII,$letterFrequencies;
    // loop over all word lengths
    for ($i = $firstLetterASCII; $i <= $lastLetterASCII; $i++) {
        // add word length value to disturbed array 4 times the frequency
        for ($j = 0; $j < ceil($letterFrequencies[chr($i)]); $j++) {
            $lettersDistributed[] = chr($i);
        }
    }
    shuffle($lettersDistributed);
}

function randomWordLength() {
    global $wordLengthDistributed;
    static $randomWordLengthIndex = 0;
    
    $length = $wordLengthDistributed[$randomWordLengthIndex];
    $randomWordLengthIndex++;
    
    if ($randomWordLengthIndex >= count($wordLengthDistributed)) {
        $randomWordLengthIndex = 0;
        shuffle($wordLengthDistributed);
    }
    
    return $length;
}

function randomLetter() {
    global $lettersDistributed;
    static $randomLetterIndex = 0;
    
    $letter = $lettersDistributed[$randomLetterIndex];
    $randomLetterIndex++;
    
    if ($randomLetterIndex >= count($lettersDistributed)) {
        $randomLetterIndex = 0;
        shuffle($lettersDistributed);
    }
    
    return $letter;
}

function generateFakeWord() {
    $wordLength = randomWordLength();
    $word = "";
  
    for ($i = 0; $i < $wordLength; $i++) {
      $word .= randomLetter();
    }
  
    return $word;
}

function clearWordBank()
{
    global $wordBank;
    $wordBank=[];
}

function generateWordBank() {
    global $wordBankSize, $wordBank;
    clearWordBank();
    for ($i = 0; $i < $wordBankSize; $i++) {
        $wordBank[] = generateFakeWord();
    }
}

function randomWordFromBank()
{
    global $wordBank;
    $randomIndex = mt_rand(0,count($wordBank)-1);
    return $wordBank[$randomIndex];
}

function generateFakeSentence($minLength, $maxLength, $capitalizeFirstWord = false, $endWithPeriod = false,$useWordBank) {
    global $wordBank;
    
    $sentenceLength = mt_rand($minLength, $maxLength);
    $sentence = "";
    
    for ($i = 0; $i < $sentenceLength; $i++) {
        $word = "";
        if ($useWordBank)
        {
            $word = randomWordFromBank();
        }
        {
            $word = generateFakeWord();
        }
        
        if ($capitalizeFirstWord && $i === 0) {
            $word = ucfirst($word);
        }
        
        $sentence .= $word . " ";
    }
    
    $sentence = trim($sentence);
    
    if ($endWithPeriod) {
        $sentence .= ".";
    }
    
    return $sentence;
}

generateWordLengthDistributed();
generateLetterDistributed();
generateWordBank();
?>