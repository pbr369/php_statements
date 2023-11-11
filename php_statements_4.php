<?php

$jsonData = '[
    {"name": "John Garg", "age": "15", "school": "Ahlcon Public school"},
    {"name": "Smith Soy", "age": "16", "school": "St. Marie school"},
    {"name": "Charle Rena", "age": "16", "school": "St. Columba school"}
]';
$students = json_decode($jsonData, true);


function displayValues($data) {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            displayValues($value); 
        } else {
            echo "$key: $value <br>";
        }
    }
    echo "<br>";
}

echo "<br>";
displayValues($students);

?>