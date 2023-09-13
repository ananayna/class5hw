<?php
echo "<u>number1</u> <br>";                                                  //1 no
$message = "<b><i>dipa</i></b>";

echo $message ;
echo "<br>";
echo htmlentities($message);
echo "<br>";
echo html_entity_decode($message);

echo "<br><br><u>number2</u> <br>";                                                  //2 no
$message = "dipa";

echo str_repeat ($message, 4) ;

echo "<br><br><u>number3</u> <br>";                                                  //3 no
$students = "ananayna, razia, liya, shahanaj, anamika";
echo "<pre>";
print_r(explode(" ", $students,3)) ;
echo "</pre>";

echo "<u>number4</u> <br>";                                                  //4 no
$students = ["ananayna", "razia", "liya","shahanaj"];
echo "<pre>";
print_r(implode("=", $students)) ;
echo "</pre>";

echo "<u>number5</u> <br>";                                                  //5 no
$students = "ananayna, razia, liya, shahanaj, anamika";

var_dump(empty($students));

echo "<br><br><u>number6</u> <br>";                                                  //6 no
$students = "ananayna, razia, liya, shahanaj, anamika";

var_dump(isset($students));

echo "<br><br><u>number7</u> <br>";                                                  //7 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

//echo current($students);
//echo next($students);
//echo prev($students);
//echo reset($students);
//echo each($students);
echo end($students);

echo "<br><br><u>number8</u> <br>";                                                  //8 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

echo count($students);


echo "<br><br><u>number9</u> <br>";                                                  //9 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

var_dump(in_array("ananayna", $students));


echo "<br><br><u>number10</u> <br>";                                                  //10 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];
$student = ["ananayna", "razia", "liya", "shahanaj"];
$studen = ["ananayna", "liya", "shahanaj", "anamika"];

var_dump(array_diff($students, $student));

echo "<br><br><u>number11</u> <br>";                                                  //11 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

echo array_pop($students);
echo "<pre>";
print_r($students);
echo "</pre>";


echo "<br><br><u>number12</u> <br>";                                                  //12 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

array_push($students,"dolon");
echo "<pre>";
print_r($students);
echo "</pre>";


echo "<br><br><u>number11</u> <br>";                                                  //11 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

array_shift($students);
echo "<pre>";
print_r($students);
echo "</pre>";


echo "<br><br><u>number11</u> <br>";                                                  //11 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

array_unshift($students,"dolon");
echo "<pre>";
print_r($students);
echo "</pre>";


echo "<br><br><u>number11</u> <br>";                                                  //11 no
$students = ["ananayna", "razia", "liya", "shahanaj", "anamika"];

echo "<pre>";
print_r( array_reverse($students));
echo "</pre>";





