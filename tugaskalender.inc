<?php
function display_month($month, $year)
{
	include 'liburan.inc';

	$first_day_of_month = mktime(0, 0, 0, $month, 1, $year);
	$first_day_of_week = date('w', $first_day_of_month);
	$days_in_month = date('t', $first_day_of_month);
	$month_name = date('F', $first_day_of_month);
	$week_in_month = 7 - $first_day_of_week;
	$today = getdate();
	$today_day = $today['mday'];
	$today_month = $today['mon'];
	$today_year = $today['year'];
	$day = 1;

	echo "<h2 class='center'>$month_name $year</h2>";
	echo "<table>";
	echo "<tr><th>minggu</th><th>senin</th><th>selasa</th><th>rabu</th><th>kamis</th><th>jum'at</th><th>Sabtu</th></tr>";
	echo "<tr>";

	if ($first_day_of_week > 0) {
		echo "<td colspan=\"$first_day_of_week\">&nbsp;</td>";
		while ($first_day_of_week <= 6) {
			if("$year-$month-$day" == "$today_year-$today_month-$today_day"){
				echo "<td class='today'>$day</td>";
			}
			else if (($first_day_of_week == 5) || (array_key_exists("$year-$month-$day", $holiday))) {
				echo "<td class='hol'>$day</td>";
			}
			else echo "<td>$day</td>";
			$day++;
			$first_day_of_week++;
		}
	}

	for ($day_of_month=$day; $day_of_month <= $days_in_month; $day_of_month++){
		
		if ($first_day_of_week > 6) {
			echo "</tr><tr>";
			$first_day_of_week = 0;
			
		}
			if("$year-$month-$day_of_month" == "$today_year-$today_month-$today_day"){
				echo "<td class='today'>$day_of_month</td>";
			}
			else if (($first_day_of_week == 5) || (array_key_exists("$year-$month-$day_of_month", $holiday))) {
				echo "<td class='hol'>$day_of_month</td>";
			}
			else echo "<td>$day_of_month</td>";
		
		
		$first_day_of_week++;
	}
	if ($first_day_of_week < 7) {
		$span = 7 - $first_day_of_week;
		echo "<td colspan=\"$span\">&nbsp;</td>";
	}

	echo "</tr>";
	echo "</table>";

}

function display_holiday(){
	include 'liburan.inc';

	echo "<table class='noborder'>";
	foreach ($holiday as $key => $value) {
		echo "<tr class='noborder'>";
		echo "<td class='noborder'>$key</td>";
		echo "<td class='noborder'>:</td>";
		echo "<td class='noborder'>$value</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>