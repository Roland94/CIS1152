<?php

define('GRAVITY', 9.8);
<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
EOD;
$footer = <<< EOD
</body>
</html>
EOD;

$form_layout = <<< EOD
<p>
<form method = "post" action="">
<label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"<br>
<label name="farenheit2Kelvin"> Farenheight Value</label><input type="text" name="farenheit2Kelvin"<br>
<label name="dodecahedronVolume">Dodecahedron Side Vale</label><input type="text" name="dodecahedronVolume"<br>
<label name="impactVelocity"> Height of fall value</label><input type type="text" name="impactVelocity"<br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;


function truncateFloat($float_value)
{
 return(int) floatval($float_value * 100) /100;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
return ($degrees_f -32) * 5/9 + 273.15;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
return pow($area, 3)/4 *(15 + 7 * sqrt(5));
}

/**
 * @param $height
 */
function impactVelocity($height)
return sqrt(2 * GRAVITY * $height);
}
if(isset($_POST['submit'])){
$truncateFloatResult = truncateFloat($_POST["truncateFloat"]);
$farenheit2KelvinResult = farenheit2Kelvin($_POST["farenheit2Kelvin"]);
$dodecahedronVolumeResult = dodecahedronVolume($_POST["dodecahedronVolume"]);
$impactVelocityResult = impactVelocity($_POST["impactVelocity"]);
} else {
$truncateFloatResult = "";
$farenheit2KelvinResult = "";
$dodecahedronVolumeResult = "";
$impactVelocityResult = "";
}
if (!isset($_POST('submit'])){
	//display the form
	echo $form_layout;
	}else{
	$form_result = $header;
	if (!empty($truncateFloatResult)){
	$form_result .= "The truncated float point value is: " .$truncateFloatResult . "<br>";
	}
	if (!empty($farenheit2KelvinResult)){
	$form_result .= "The Kelvan value is: " .$farenheit2KelvinResult . "<br>";
	}
	if (!empty($dodecahedronVolumeResult)) {
	$form_result .= "The dodecahedron volume is ".$dodecahedronVolumeResult ."<br>";
	}
	if (!empty($impactVelocityResult)){
	$form_result .= "The splat value is: " .$impactVelocityResult ."<br>";
	}
	$form_result.=$footer;
	echo $form_result;
	}
	?>
