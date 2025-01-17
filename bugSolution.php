```php
function processData(array &$data): array {
    // Check for empty input
    if(empty($data)) return $data; //Handle empty data
    // ... some code to process the data ...
    //Ensure data is not unintentionally modified to be empty
    return $data;
}

$data = [1, 2, 3, 4, 5];
$result = processData($data);

//Expected behavior: $result contains the processed data
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
```