<?php

require __DIR__ . '/../src/LanguageConvert.php';

$words = '九千是个贱逼';

$languageConvert = new LanguageConvert();

echo $languageConvert->cnToTw($words). '<br/>';

echo $languageConvert->twToCn($words);

