<?php
$cont_animals= [
    "Africa" => ['Hippopotamus amphibius', 'Gyps', 'Bitis', 'Camelus dromedarius'],
    "Antarctic" => ['Macronectes', 'Aptenodytes forsteri', 'Hydrurga leptonyx', 'Diomedea'],
    "Australia" => ['Tachyglossidae', 'Dendrolagus', 'Boiga dendrophila', 'Chelodina expansa'],
    "Eurasian" => ['Ailuropoda melanoleuca', 'Canis lupus', 'Uncia uncia', 'Ovis orientalis'],
];
$double_name = [];
$continent = [];
$first_world = [];
$second_word = [];
echo '<h1>Массив животных</h1>';
foreach ($cont_animals as $continents_key => $animals) {
    $continent[] = $continents_key;
    echo "<h2>$continents_key</h2>";
  echo $animals[0] . ', ' . $animals[1]. ', ' . $animals[2]. ', ' . $animals[3];
    foreach ($animals as $two) {
        $rows_two = explode(" ", $two);
        if (count($rows_two) == 2) {
            $double_name[] = $two;
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
        }
    }
}
echo '<h1>Название из двух слов</h1>';
foreach ($double_name as $item) {
    echo "$item<br>";
}
shuffle($second_word);
echo '<h1>Фантазийные животные</h1>';
foreach ($second_word as $last) {
   $first = array_shift($first_world);    
    echo $first . ' ' . $last . '<br>';
    
}
