<?php
require("./includes/fakeText.php");

// Receive JSON data
$jsonData = file_get_contents('php://input');
$blueprint = json_decode($jsonData, true);

// Generate HTML
$html = '';

function is_associative($array)
{
    return array_keys($array) !== range(0, count($array) - 1);
}

function htmlRecursiveGenerator($blueprint)
{
    // Checks if blueprint is associative
    if (!is_associative($blueprint))
    {
        return "";
    }
    
    $innerHTML = "";
    if (array_key_exists("innerContent",$blueprint)){
        if (is_array($blueprint["innerContent"]))
        {
            if (is_associative($blueprint["innerContent"])){
                $innerHTML=htmlRecursiveGenerator($blueprint["innerContent"]);
            }
            else
            {
                foreach ($blueprint["innerContent"] as $subBlueprint)
                {
                    $innerHTML.=htmlRecursiveGenerator($subBlueprint);
                }
            }
        }
        else if ($blueprint["innerContent"] == "@paragraph")
        {
            $innerHTML=gener
        }
    }
}

$html=htmlRecursiveGenerator($blueprint);
// Send HTML response
header('Content-Type: text/html');
echo $html;
?>