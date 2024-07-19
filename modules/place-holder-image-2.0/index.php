<?php
// Set the content type to svg
header('Content-Type: image/svg+xml');
// // Enable error reporting
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

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

// check if svg is already in cache
$cache_path = "./cache/{$seed}-{$height}-{$width}.svg";
if (file_exists($cache_path)) {
    echo file_get_contents($cache_path);
    exit;
}


// apply seed to random number generator
mt_srand(abs($seed));

// generarte random number of iterations
$iterations = mt_rand(5, $MAX_ITERATIONS);

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
// loop through the iterations and split a random rectangle into two rectangles either horizontally or vertically
for ($i = 0; $i < $iterations; $i++) {
    $MIN_DIMENSION = 40;
    $rectangleIndex = mt_rand(0, count($rectangles) - 1);
    $rectangle = $rectangles[$rectangleIndex];
    $split = mt_rand(0, 1);
    // split the rectangle horizontally
    if ($split == 0) {
        if ($rectangle['width'] < $MIN_DIMENSION*2) {
            continue;
        }
        $splitPoint = mt_rand($MIN_DIMENSION, $rectangle['width'] - 1 - $MIN_DIMENSION);
        array_push($rectangles,[
            'x' => $rectangle['x'],
            'y' => $rectangle['y'],
            'width' => $splitPoint,
            'height' => $rectangle['height'],
            'color' => "#000000"],
        [
            'x' => $rectangle['x']+$splitPoint,
            'y' => $rectangle['y'],
            'width' => $rectangle['width'] - $splitPoint,
            'height' => $rectangle['height'],
            'color' => "#000000"
        ]);
    } else {
        if ($rectangle['height'] < $MIN_DIMENSION*2) {
            continue;
        }
        $splitPoint = mt_rand($MIN_DIMENSION, $rectangle['height'] - 1 - $MIN_DIMENSION);
        array_push($rectangles, [
            'x' => $rectangle['x'],
            'y' => $rectangle['y'],
            'width' => $rectangle['width'],
            'height' => $splitPoint,
            'color' => "#000000"
        ],
        [
            'x' => $rectangle['x'],
            'y' => $rectangle['y'] + $splitPoint,
            'width' => $rectangle['width'],
            'height' => $rectangle['height'] - $splitPoint,
            'color' => "#000000"
        ]);
    }
    // remove the original rectangle
    $rectangles[$rectangleIndex]=[ 'x' => -1, 'y' => -1, 'width' => -1, 'height' => -1, 'color' => "#000000"];
}

// loop through the rectangles and change the color of the rectangles to a random color
foreach ($rectangles as $index => $rectangle) {
    $rectangles[$index]['color'] = 'rgb(' . (mt_rand(0, 16)*16). ',' . (mt_rand(0, 16)*16) . ',' . (mt_rand(0, 16)*16) . ')';
}

$svg = "<svg width='{$width}' height='{$height}' xmlns='http://www.w3.org/2000/svg'>";
// output the svg image
foreach ($rectangles as $rectangle) {
    if ($rectangle['x'] == -1) {
        continue;
    }
    $svg.= "<rect x='{$rectangle['x']}' y='{$rectangle['y']}' width='{$rectangle['width']}' height='{$rectangle['height']}' fill='{$rectangle['color']}' />";
}
$svg.= "</svg>";

// save svg to cache
$cache_path = "./cache/{$seed}-{$height}-{$width}.svg";
file_put_contents($cache_path, $svg);
// check the number of files in the cache directory exceeds the maximum number of files
// if it does, delete the oldest file
$files = glob("./cache/*.svg");
$fileCount = count($files);
if ($fileCount > $MAX_CACHE_FILES) {
    array_multisort(
        array_map('filemtime', $files),
        SORT_NUMERIC,
        SORT_ASC,
        $files
    );
    $oldestFile = $files[0];
    unlink($oldestFile);
}

echo $svg;
?>