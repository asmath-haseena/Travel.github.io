<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="stylecss.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--js-->
	<script src="js/jquery.min.js"></script>

	<!--/js-->
</head>

<body style="background-color:darkgoldenrod;">
	<?php include('function.php'); ?>
	<?php include('top.php'); ?>
	<!--/sticky-->
	<br>
	<br>
	<br>
	<div style="height:50px"></div>
	<div style="width:1000px; margin:auto; color:#09F">

		<div style="width:200px; float:left; color:#09F">

			<table cellpadding="0" cellspacing="0" width="1200px" style="font-size:30px; color:darkcyan">
				<tr>
					<td style="font-size:30px; color:#09F;"><br><br><b>Category</b></td>
				</tr>
				<?php


				$s = "select * from category";
				$result = mysqli_query($cn, $s);
				$r = mysqli_num_rows($result);
				//echo $r;

				while ($data = mysqli_fetch_array($result)) {

					echo "<tr><td style=' padding:5px; color:#09F;'><b ><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
				}
				mysqli_close($cn);
				?>

			</table>

		</div>

		<div style="width:500px; float:right">
			<table cellpadding="0px" cellspacing="0" width="1000px">
				<tr>
					<td class="headingText"><br><br>Welcome to our website</td>
				</tr>
				<tr>
					<td class="paraText" width="900px" style="font-family:Arial, Helvetica, sans-serif; color:black;"><b>This website will make it easier for consumers and travel agencies to handle. Traveling is one of the drawbacks that people habee. That could be short journeys or extended holidays. Often there could be abrupt journeys, with little time for planning. Some people can cancel travel at the last moment because they are unable to book tickets. Aone stop solution can be provided by this website. This websitemay give users the opportunity to enquire packages without any travel agents. This application is develop to provide best travelling services to the customers. <b><br><br><br><br><br><br><br><br><br><br><br><br></td>
					<td style="background-image:url(); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="500px" height="150px">
						&nbsp;&nbsp;&nbsp;
		</div>
		</td>
		</tr>
		</table>

	</div>

	</div>

	<div style="clear:both"></div>

	<?php include('bottom.php'); ?>
</body>

</html>