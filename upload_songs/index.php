<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style>
	body{
		font-family: 'Trebuchet MS', sans-serif;
		margin:25px;
		background-image: linear-gradient(#cc99ff,#99ccff);
		height: 100vh;
		width: 100vw;
	}
	audio {
    width: 1500px;
    height: 60px;
}
audio::-webkit-media-controls{
    width: inherit;
    height: inherit;
    position: relative;
    direction: ltr;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
}
audio::-webkit-media-controls-enclosure{
    width: 100%;
    max-width: 1000px;
    height: 30px;
    flex-shrink: 0;
    bottom: 0;
    text-indent: 0;
    padding: 0;
    box-sizing: border-box;
}
audio::-webkit-media-controls-panel{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    -webkit-user-select: none;
    position: relative;
    width: 100%;
    z-index: 0;
    overflow: hidden;
    text-align: right;
    bottom: auto;
    height: 60px;
    background-image: white;
    border-radius: 5px;
    /* The duration is also specified in MediaControlElements.cpp and LayoutTests/media/media-controls.js */
    transition: opacity 0.3s;
}
audio::-webkit-media-controls-mute-button {
    -webkit-appearance: media-mute-button;
    display: flex;
    flex: none;
    border: none;
    box-sizing: border-box;
    width: 35px;
    height: 30px;
    line-height: 30px;
    margin: 0 6px 0 0;
    padding: 0;
    background-color: initial;
    color: inherit;
}
audio::-webkit-media-controls-overlay-enclosure {
    display: none;
}
audio::-webkit-media-controls-play-button{
    -webkit-appearance: media-play-button;
    display: flex;
    flex: none;
    border: none;
    box-sizing: border-box;
    width: 30px;
    height: 30px;
    line-height: 30px;
    margin-left: 9px;
    margin-right: 9px;
    padding: 0;
    background-color: initial;
    color: inherit;
}
audio::-webkit-media-controls-timeline-container{
    -webkit-appearance: media-controls-background;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    flex: 1 1;
    -webkit-user-select: none;
    height: 16px;
    min-width: 0;
}
audio::-webkit-media-controls-current-time-display,
audio::-webkit-media-controls-time-remaining-display,{
    -webkit-appearance: media-current-time-display;
    -webkit-user-select: none;
    flex: none;
    display: flex;
    border: none;
    cursor: default;
    height: 30px;
    margin: 0 9px 0 0;
    padding: 0;
    line-height: 30px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    font-style: normal;
    color: white;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0;
    text-shadow: none;
    text-decoration: none;
}
audio::-webkit-media-controls-timeline, video::-webkit-media-controls-timeline {
    -webkit-appearance: media-slider;
    display: flex;
    flex: 1 1 auto;
    height: 8px;
    margin: 0 15px 0 0;
    padding: 0;
    background-color: transparent;
    min-width: 25px;
    border: initial;
    color: inherit;
}
audio::-webkit-media-controls-volume-slider, video::-webkit-media-controls-volume-slider {
    -webkit-appearance: media-volume-slider;
    display: flex;
    /* The 1.9 value was empirically chosen to match old-flexbox behaviour
     * and be aesthetically pleasing.
     */
    flex: 1 1.9 auto;
    height: 8px;
    max-width: 70px;
    margin: 0 15px 0 0;
    padding: 0;
    background-color: transparent;
    min-width: 15px;
    border: initial;
    color: inherit;
}
/* FIXME these shouldn't use special pseudoShadowIds, but nicer rules.
   https://code.google.com/p/chromium/issues/detail?id=112508
   https://bugs.webkit.org/show_bug.cgi?id=62218
*/
input[type="range" i]::-webkit-media-slider-container {
    display: flex;
    align-items: center;
    flex-direction: row; /* This property is updated by C++ code. */
    box-sizing: border-box;
    height: 100%;
    width: 100%;
    border: 1px black;
    border-radius: 4px;
    background-color: transparent; /* Background drawing is managed by C++ code to draw ranges. */
}
.names{
	font-size: 20px;
}
.divider {								/* minor cosmetics */
            display: table; 
            font-size: 24px; 
            text-align: center; 
            width: 75%; 						/* divider width */
            margin: 40px auto;					/* spacing above/below */
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
<a href="form.php" class="btn btn-primary mt-3" style="text-decoration:none; font-size:18px; ">~Share a new song~</a>
<div class="divider"><span></span><span>Songs</span><span></span></div>
<div class="row">
<?php
include("db.php");
$q="SELECT * FROM songs";
$query=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($query))
{
	?>
	<div class="col-md-4">
	<div class="names">
		<?php echo $row['name'];?>
	</div>
	<audio id="mySong" controls>
	<source src="<?php echo 'uploads/'.$row['name'];?>">
	</audio>
	</div>
<?php } ?>
</div>
</div>
</body>
</html>
