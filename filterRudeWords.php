<?php

if (!function_exists('filterRudeWords')) {
    function filterRudeWords(string $text, array $rudeWords, string $replacement = '***'): string
    {
        $decodedRudeWords = array_map(function($word) {
            return html_entity_decode($word, ENT_QUOTES, 'UTF-8');
        }, $rudeWords);

        foreach ($decodedRudeWords as $word)
        {
            $pattern = '/\b' . implode('[^\p{L}]*', mb_str_split(preg_quote($word, '/'))) . '\b/ui';
            $text = preg_replace($pattern, $replacement, $text);
        }

        return $text;
    }
}


/** Usage **/
/*
$rudeWords = include_once ('rudeWords.php');

$inputText = "این یه متن آزمایشی برای بررسی کلمات رکیک همچون ا.ل ا. غ است";
$filteredText = filterRudeWords($inputText, $rudeWords, '###');

echo $filteredText;
*/

