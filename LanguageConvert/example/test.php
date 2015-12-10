<?php

require __DIR__ . '/../src/LanguageConvert.php';

$words = '我们在使用 Git 进行版本控制的时候，有些文件是无需纳入 Git 管理的，通常都是些自动 生成的文件，像日志或者编译过程中创建的文件。我们可以创建一个名为 .gitignore 的文件，列出要忽略的文件来解决这个问题。
来看一个简单的例子';

$languageConvert = new LanguageConvert();

echo $languageConvert->cnToTw($words). '<br/>';

echo $languageConvert->twToCn($words);

