<?php
// Set the content type to svg
header('Content-Type: image/svg+xml');
// if directory cahce does not exist, create it
if (!file_exists('./cache')) {
    mkdir('./cache', 0777, true);
}

// constants
$MAX_CACHE_FILES = 50000;
$MAX_ITERATIONS = 50;

// get the seed, height and width from the request or set default values
$seed = $_GET['seed'] ?? 1;
$height = $_GET['height'] ?? 400;
$width = $_GET['width'] ?? 600;

// validate the request parameters are integers
if (!is_numeric($seed) || !is_numeric($height) || !is_numeric($width)) {
    echo "Please provide valid parameters";
    exit;
}

// apply seed to random number generator
srand(abs(seed));

// generarte random number of iterations
$iterations = mt_rand(1, $MAX_ITERATIONS);

// create an array rectangles with dimensions and colors. 
// The dimensions are based on the height and width of the image
// Default is one rectangle with color of black
$rectangles = [
    [
        'x' => 0,
        'y' => 0,
        'width' => $width,
        'height' => $height,
        'color' => "0x000000"
    ],
];

// output the svg image
echo "<svg width='{$width}' height='{$height}' xmlns='http://www.w3.org/2000/svg'>";
foreach ($rectangles as $rectangle) {
    echo "<rect x='{$rectangle['x']}' y='{$rectangle['y']}' width='{$rectangle['width']}' height='{$rectangle['height']}' fill='{$rectangle['color']}' />";
}
echo "</svg>";
?>