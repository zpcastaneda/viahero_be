<!doctype html>
<html>
<head>
	<title>Test Output</title>
</head>
<body>
<?php
	$regions = App\Region::all();

	foreach ($regions as $region) {
	echo "Code: $region->PSGC Name: $region->description \n";
	}
?>
</body>
</html>