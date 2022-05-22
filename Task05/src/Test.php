<?php

namespace kudryavcev\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Кудрявцев Дмитрий Андреевич') . PHP_EOL;
    echo $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Кудрявцев Дмитрий Андреевич', ['separator' => '*']) . PHP_EOL;
}
