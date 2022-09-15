<?php

//-- Exercice 1 ---------------------------------------------------
echo '<h2>Exercice 1</h2>';

$input1 = "Bonjour les animaux";
$input2 = "Les développeurs de Sevetys sont trop cools";

$letterToChange = [
    '3' => 'e',
    '1' => 'i',
    '0' => 'o',
    '4' => 'a'
];

function changeLettersWithSomeNumbers(string $text, array $letterToChange): string {
    // Transforme la chaîne de caractères en array
    $textToArray = str_split($text);

    // Parcours chaque lettre de l'array et reconstruis la chaîne de caractères avec les chiffres choisis pour les lettres présente dans l'array $letterToChange
    return array_reduce($textToArray, function ($prevValue, $letter) use ($letterToChange) {
        return in_array($letter, $letterToChange) ? $prevValue.array_search($letter, $letterToChange) : $prevValue.$letter;
    }, '');
}

echo changeLettersWithSomeNumbers($input1, $letterToChange);
echo '<br>';
echo changeLettersWithSomeNumbers($input2, $letterToChange);
echo '<hr>';

//-- Exercice 2 ---------------------------------------------------
echo '<h2>Exercice 2</h2>';

$mot1 = "kayak";
$mot2 = "pamplemousse";
$mot3 = "stats";
$mot4 = "ressasser";
$phrase1 = "Esope reste ici et se repose";
$phrase2 = "Yo banana boy";

function isStringPalindrome(string $txt): bool {
    // On retire les espaces pour que ça marche avec les phrases
    $formatedTxt = strtolower(str_replace(' ', '', $txt));
    // On check si la string inversé est égale à la string de base
    return strrev($formatedTxt) === $formatedTxt;
}

function buildSentenceForPalindrome(string $txt): string {
    return isStringPalindrome($txt) ? '"'.$txt.'"'.' est un palindrome !' : '"'.$txt.'"'.' n\'est pas un palindrome !';
}

echo buildSentenceForPalindrome($mot1);
echo '<br>';
echo buildSentenceForPalindrome($mot2);
echo '<br>';
echo buildSentenceForPalindrome($mot3);
echo '<br>';
echo buildSentenceForPalindrome($mot4);
echo '<br>';
echo buildSentenceForPalindrome($phrase1);
echo '<br>';
echo buildSentenceForPalindrome($phrase2);
?>