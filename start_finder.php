<?php

$time = $_GET['time'];
//$floor = $_GET['floor'];
echo '<center><img src="/images/Outside1.jpg" alt="Mercer University" width="80%" height="90%"></center>';


if ($time == "day"){
	echo "<script>window.location = 'http://weblove.cs.mercer.edu/DayTour.html'</script>";
}
if ($time == "night"){
	echo "<script>window.location = 'http://weblove.cs.mercer.edu/NightTour.html'</script>";
}
else{
	
}
?>