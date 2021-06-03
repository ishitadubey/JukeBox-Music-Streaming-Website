<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">

    <title>Top Playlist</title>
    <link rel="icon" href="headphones.png" type="image/png">
	<style>
	body{
		font-family: 'Trebuchet MS', sans-serif;
		margin:50px;
		background-image: linear-gradient(#cc99ff,#99ccff);
		background-attachment: fixed;
		height: 100vh;
		width: 95vw;
	}
	audio {
    width: 1400px;
    height: 60px;
}


.names{
	font-size: 20px;
}
.divider {	
            display: table; 
            font-size: 24px; 
            text-align: center; 
            width: 100%; 						/* divider width */
            margin: 30px auto;					/* spacing above/below */
        }
        .divider span { display: table-cell; position: relative; }
        .divider span:first-child, .divider span:last-child {
            width: 50%;
            top: 13px;							/* adjust vertical align */
            -moz-background-size: 100% 2px; 	/* line width */
            background-size: 100% 2px; 			/* line width */
            background-position: 0 0, 0 100%;
            background-repeat: no-repeat;
        }
        .divider span:first-child {				/* color changes in here */
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(transparent), to(#000));
            background-image: -webkit-linear-gradient(180deg, transparent, #000);
            background-image: -moz-linear-gradient(180deg, transparent, #000);
            background-image: -o-linear-gradient(180deg, transparent, #000);
            background-image: linear-gradient(90deg, transparent, #000);
        }
        .divider span:nth-child(2) {
            color: #000; padding: 0px 5px; width: auto; white-space: nowrap;
        }
        .divider span:last-child {				/* color changes in here */
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#000), to(transparent));
            background-image: -webkit-linear-gradient(180deg, #000, transparent);
            background-image: -moz-linear-gradient(180deg, #000, transparent);
            background-image: -o-linear-gradient(180deg, #000, transparent);
            background-image: linear-gradient(90deg, #000, transparent);
        }
		h1{text-align: center;}
</style>
</head>
<body>
<div class="container mt-3 mb-3">
<h1>Uploaded Songs</h1>
<a href="upload23.php" style="text-decoration:none; font-size:18px; ">~Share a new song~</a>
<div class="divider"><span></span><span>Songs</span><span></span></div>
<div class="row">
<?php
	include("db.php");
	$q="SELECT * FROM playlist";
	$query=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($query))
	{
		?>
		<div class="col-md-4">
		<div class="names">
		<?php echo $row['name']; echo"<br>";?>
		</div>
		<p><audio id="mySong" controls>
		<source src="<?php echo 'playlists/'.$row['name']; ?>">
		</audio></p>
		
		</div>
<?php echo"<br>";} ?>
</div>
</div>
</body>
</html>
