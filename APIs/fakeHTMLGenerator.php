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
    $tagName="";
    $repeats = 1;
    $outputHTML ="";
    // Checks if blueprint is associative
    if (!is_associative($blueprint))
    {
        return "";
    }

    if (array_key_exists("repeats",$blueprint)){
        if (is_array($blueprint["repeats"]) && is_associative($blueprint["repeats"]))
        {
            $minRepeats = $blueprint["repeats"]["min"];
            $maxRepeats = $blueprint["repeats"]["max"];
            $repeats=mt_rand($minRepeats,$maxRepeats);
        }
        else
        {
            $repeats = intval($blueprint["repeats"]);
        }
    }

    if (array_key_exists("tagName",$blueprint)){
        $tagName=$blueprint["tagName"];
    }
    
for ($i=0;$i < $repeats;$i++){
    $innerHTML = "";
    if (array_key_exists("innerContent",$blueprint)){
        if (is_array($blueprint["innerContent"]))
        {
            if (is_associative($blueprint["innerContent"])){
                $innerHTML.=htmlRecursiveGenerator($blueprint["innerContent"]);
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
            $innerHTML.=generateFakeParagraph(8,12,8,14,true);
        }
        else if ($blueprint["innerContent"] == "@sentence")
        {
            $innerHTML.=generateFakeSentence(8,14,true,true,true);
        }
        else
        {
            $innerHTML="none";
        }
    }

    
    if ($tagName != "") $outputHTML.="<".$tagName.">";
    $outputHTML.=$innerHTML;
    if ($tagName != "") $outputHTML.="</".$tagName.">";
}
    return $outputHTML;
}

$html=htmlRecursiveGenerator($blueprint);
// Send HTML response
header('Content-Type: text/html');
echo $html;
?>