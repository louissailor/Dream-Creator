<?php
include('../story/story1.php');
$keywords = array(
    "key1" => $_POST["key1"],
    "key2" => $_POST["key2"],
    "key3" => $_POST["key3"],
    "key4" => $_POST["key4"],
    "key5" => $_POST["key5"]
);
$story["ln1"];
$montagedstory = array(
"ln1" => explode("/", $story["ln1"]),
"ln2" => explode("/", $story["ln2"]),
"ln3" => explode("/", $story["ln3"]),
"ln4" => explode("/", $story["ln4"]),
"ln5" => explode("/", $story["ln5"]),
);
$addkey = array(
"ln1" => $montagedstory["ln1"][0]." ".$keywords["key1"]." ".$montagedstory["ln1"][1],
"ln2" => $montagedstory["ln1"][0]." ".$keywords["key2"]." ".$montagedstory["ln1"][1],
"ln3" => $montagedstory["ln1"][0]." ".$keywords["key3"]." ".$montagedstory["ln1"][1],
"ln4" => $montagedstory["ln1"][0]." ".$keywords["key4"]." ".$montagedstory["ln1"][1],
"ln5" => $montagedstory["ln1"][0]." ".$keywords["key5"]." ".$montagedstory["ln1"][1]
);
echo $addkey["ln1"];
echo $addkey["ln2"];
echo $addkey["ln3"];
echo $addkey["ln4"];
echo $addkey["ln5"];
