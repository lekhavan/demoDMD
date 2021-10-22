<?php
	//$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	//mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);

	$Connect = pg_connect("postgres://eazlcisnrkhcxl:9f53ac5bdffd1a7d15b6241cf644835010941041357401951db4dd0b2f508449@ec2-52-201-72-91.compute-1.amazonaws.com:5432/dhm6m6enahrfl");
	//$Connect =pg_connect("host=localhost port=5432 dbname=postgres pass=123456")
	if (!$Connect) {
        die("Connection failed");
    }
?>