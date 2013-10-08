<?
//this creates a random number
$sadoku = rand(1, 3);
//Now we name the sadoku
//make sure the name has no spaces
$name = array(
"1" ==> "Level-1",
"2" ==> "Level-2",
"3" ==> "Level-3",
);
$file = "$name[$sadoku].html";
readfile($file);
?>
