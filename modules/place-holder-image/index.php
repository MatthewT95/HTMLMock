<?php
    function getValuesFromGetRequest() {
        $seed = $_GET['seed'] ?? 1;
        $height = $_GET['height'] ?? 400;
        $width = $_GET['width'] ?? 600;

        return [max(min($seed,3000),1), min(round($height / 25)  * 25,1200), min(round($width / 25) * 25,1200)];
    }

    function validateGetRequest($seed, $height, $width) {
        if (!$seed || !$height || !$width) {
            echo "Please provide all the required parameters";
            exit;
        }

        if (!is_numeric($seed) || !is_numeric($height) || !is_numeric($width)) {
            echo "Please provide valid parameters";
            exit;
        }
    }
    
    function generateLocation($seed, $height, $width, $xMin, $Max, $yMin, $yMax) {
        srand($seed);
        $x = rand($xMin, $Max-$width);
        $y = rand($yMin, $yMax-$height);

        return ['x' => $x, 'y' => $y];
    }

    $MAX_CACHE_FILES = 50000;
    $sourceImagePath = "./source-image-2.png";
    list($seed, $height, $width) = getValuesFromGetRequest();
    validateGetRequest($seed, $height, $width);
    list($sourceWidth, $sourceHeight) = getimagesize($sourceImagePath);
    $location = generateLocation($seed, $height, $width,0, $sourceWidth, 0, $sourceHeight);

    header('Content-Type: image/png');
    // ini_set('display_errors', 1);
    // error_reporting(E_ALL);
    if (file_exists("./cache/{$seed}-{$height}-{$width}.png")) {
        $cache_path = "./cache/{$seed}-{$height}-{$width}.png";
        $croppedImage = imagecreatefrompng($cache_path);
        imagepng($croppedImage);
    }
    else
    {
        $sourceImage = imagecreatefrompng($sourceImagePath);
        $croppedImage = imagecrop($sourceImage, ['x' => $location["x"], 'y' => $location["y"], 'width' => $width, 'height' => $height]);

        if ($croppedImage !== false) {
            // Save the cropped image to a file
            $cache_path = "./cache/{$seed}-{$height}-{$width}.png";
            // Check the number of files in the cache directory
            $cacheDirectory = "./cache/";
            $files = glob($cacheDirectory . "*.png");
            $fileCount = count($files);

            // If the number of files exceeds 50000, delete the oldest file
            if ($fileCount >= $MAX_CACHE_FILES) {
                // Sort the files by modified time in ascending order
                array_multisort(
                    array_map('filemtime', $files),
                    SORT_NUMERIC,
                    SORT_ASC,
                    $files
                );

                // Delete the oldest file
                $oldestFile = $files[0];
                unlink($oldestFile);
            }
            // Save the cropped image to a file
            imagepng($croppedImage,$cache_path);
            // Return the cached image as content
            
            readfile($cache_path);
            // Free up memory
            imagedestroy($croppedImage);
        } else {
            echo "Failed to crop the image";
        }

        // Free up memory
        imagedestroy($sourceImage);
        imagedestroy($croppedImage);
    }
?>