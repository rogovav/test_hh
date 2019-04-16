<?

unset($argv[0]); // Удаляем нулевой аргумент max.php
if ($argv[1]) {
    $maxIndex = 1;
    $maxItem = $argv[1];
    foreach ($argv as $index => $item) {
        if ($maxItem < $item) {
            $maxItem = $item;
            $maxIndex = $index;
        }
    }
    echo "Индекс максимального значения ($maxItem) равен $maxIndex. \n";
} else {
    echo "Нет аргументов.\n";
}
