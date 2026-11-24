
<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<?php

function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

$length = 4;
$width = 2;

$result = calculateArea($length, $width);

echo "The area of the rectangle is: " . $result;

?>

</body>
</html>
