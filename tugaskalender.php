<!DOCTYPE html>
<html lang="id">
<head>
	<title>Calendar 2019</title>
	<link rel="stylesheet" type="text/css" href="Kalender.css">

</head>
<body>
<?php
include 'tugaskalender.inc';

?>

	<h1 class="center">Kalender Sekolahan</h1>
	<div><?php display_month(1, 2019);?> </div>
	<div><?php display_month(2, 2019);?> </div>
	<div><?php display_month(3, 2019);?> </div>

	<div><?php display_month(4, 2019);?> </div>
	<div><?php display_month(5, 2019);?> </div>
	<div><?php display_month(6, 2019);?> </div>

	<div><?php display_month(7, 2019);?> </div>
	<div><?php display_month(8, 2019);?> </div>
	<div><?php display_month(9, 2019);?> </div>

	<div><?php display_month(10, 2019);?> </div>
	<div><?php display_month(11, 2019);?> </div>
	<div><?php display_month(12, 2019);?> </div>

<h1>Libur Nasional</h1>
<?php display_holiday()?>

</body>
</html>
