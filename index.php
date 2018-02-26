<?php
$dom = simplexml_load_file("Student.xml");

foreach ($dom->student_info as $s) {
	echo  "<strong>Student Name:</strong>$s->name"."<br>";
	echo  "<strong>ID:</strong>$s->id"."<br>";
	echo  "<strong>CGPA:</strong>$s->cgpa"."<br>";

	echo "<h3>Course Taken:</h3>";

	foreach ($s->courses->course as $c) {
		echo"$c->serial . $c->cname | Section: $c->section | Grade: $c->grade"."<br>";
	}
	echo"<hr>";

}



?>