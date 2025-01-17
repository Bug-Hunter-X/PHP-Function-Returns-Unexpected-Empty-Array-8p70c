```php
function processData(array $data): array {
    // ... some code to process the data ...
    return $data;
}

$data = [1, 2, 3, 4, 5];
$result = processData($data);

// Unexpected behavior: $result is empty
print_r($result); // Output: Array ( )
```