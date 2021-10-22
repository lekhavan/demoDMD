<?php
	//$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	//mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);

	$Connect = pg_connect("postgres://kkhbsaqkzdqykx:54ddd61a4283d1770df62432ed7f08b0ac42ba7ae7d9e2bb519810225fff3af3@ec2-3-212-168-103.compute-1.amazonaws.com:5432/df5bjm5q08o5k2");
	//$Connect =pg_connect("host=localhost port=5432 dbname=postgres pass=123456")
	if (!$Connect) {
        die("Connection failed");
    }
?>