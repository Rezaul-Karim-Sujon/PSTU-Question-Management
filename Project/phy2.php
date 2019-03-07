<?php
include ('security.php');
?>


<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'phy2/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: phy2.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Question</title>
	<link rel="stylesheet" href="Design/css/font-awesome.min.css">
	<link rel="stylesheet" href="fe.css">
</head>
<body>
	<img src="onlinelogomaker-011319-1341-7109.png" alt="">
	<div class="header">
		<div class="nav">
			<ul>
				<li> <a href="index.php"> <i class="fa fa-home"></i> HOME </a> </li>
				<li> <a> <i class="fa fa-bars" aria-hidden="true"></i> Semester </a>
					<ul>
						<li> <a href="L-1S-1.php"> Level-1 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-1S-2.php"> Level-1 2<sup>nd</sup>Semester</a></li>
						<li> <a href="L-2S-1.php"> Level-2 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-2S-2.php"> Level-2 2<sup>nd</sup> Semester </a></li>
						<li> <a href="L-3S-1.php"> Level-3 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-3S-2.php"> Level-3 2<sup>nd</sup> Semester </a></li>
						<li> <a href="L-4S-1.php"> Level-4 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-4S-2.php"> Level-4 2<sup>nd</sup> Semester </a></li>
					</ul>
				</li>
				<li> <a> Solution </a>
					<ul>
						<li> <a href="L-1S-1.php"> Level-1 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-1S-2.php"> Level-1 2<sup>nd</sup>Semester</a></li>
						<li> <a href="L-2S-1.php"> Level-2 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-2S-2.php"> Level-2 2<sup>nd</sup> Semester </a></li>
						<li> <a href="L-3S-1.php"> Level-3 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-3S-2.php"> Level-3 2<sup>nd</sup> Semester </a></li>
						<li> <a href="L-4S-1.php"> Level-4 1<sup>st</sup> Semester </a></li>
						<li> <a href="L-4S-2.php"> Level-4 2<sup>nd</sup> Semester </a></li>
					</ul>
				</li>
					<li> <a>  Departments  </a>
							<ul>
								<div class="dep">
								<li> <a href="">Computer & Communication Engineering</a></li>
								<li> <a href="">Computer Science & Information Technology</li>
								<li> <a href="">Physics & Mechanical Engineering</a></li>
								<li> <a href="">Electrical & Electronics Engineering</a></li>
								<li> <a href=""> Mathematics </a></li>
								</div>
							</ul>
						</li>
				<li> <a href="contact_us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact Us </a> </li>
			</ul>
		</div>
	</div>
	<div class="box">
<form class="" action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file" value="">
	<button type="submit" name="submit">Upload</button>
</form>
</div>
	<table>
		<tr>
			<th>Name</th>
			<th>View</th>
			<th>Download</th>
		</tr>
	<?php
	$files = scandir("phy2/");
	$v=count($files);
	echo $v;
		for ($i=2; $i < count($files); $i++) {
				?><tr>
				<td><?php echo $files[$i] ?> </td>
			<td><a href="phy2/<?php echo $files[$i] ?>">	<i class="fa fa-eye" aria-hidden="true"></i></a></td>
				<td><a download="<?php echo $files[$i] ?>"href="uploads/<?php echo $files[$i] ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
			</tr>
				<?php
		}
	?>

</table>
</body>
</html>
