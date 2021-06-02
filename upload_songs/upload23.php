
<?php
include("db.php");
if(isset($_POST['upload']))
{
	//$name=$_FILES['file'];
	//echo "<pre>";
	//print_r($name);
	//exit();
    $file_name=$_FILES['file']['name'];
    $temp_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_destination="uploads/".$file_name;

    if(move_uploaded_file($temp_name,$file_destination))
    {
        $q="INSERT INTO songs (name) VALUES ('$file_name')";
        if(mysqli_query($conn,$q))
        {
            $success="Uploaded successfully";
			
        }
        else{
        $failed="Something went wrong.";
        }
    }
    else{
        $msz="Please select a video to uplaod.";
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
<title>MusicStream - Create your Jam</title>
	<link rel="icon" href="headphones.png" type="image/png">
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --myfont: 'Mulish', sans-serif;
    --my-btn-font:'Trebuchet MS', sans-serif;
}
body{
    background-image: linear-gradient(#cc99ff,#99ccff);
    background-size: 100%;
    background-repeat: no-repeat;
    font-family: 'Trebuchet MS', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
	height: 100vh;
    width: 100vw;
}

.container{
    background-color: #fff;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048);
    overflow: hidden;
    width: calc(100vw- 65vw);
    max-width: 100%;
	width:600px;
}
.page-header{
    background: linear-gradient(#b366ff, #66b3ff);
    padding: 40px 0;
}
.page-header h1{
    color: white;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 30px;
    text-decoration: uppercase;
    text-align: center;
}
.form-group{
	margin: 20px 40px ;
}
.btn {
	background: linear-gradient(#b366ff, #66b3ff);
    border-radius: 6px;
    border: none;
    outline: none;
    color:#fff;
    display: block;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 20px;
    padding: 15px 0;
    margin: 70px 80px;
    width: 90%;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 1s ease;
}
.file {
  opacity: 0;
  width: 0.1px;
  height: 0.1px;
  position: absolute;
}
.file-input label {
  display: block;
  position: relative;
  width: 200px;
  height: 50px;
  background: white;
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
  color: black;
  font-weight: bold;
  cursor: pointer;
  transition: transform .2s ease-out;
}
input:hover + label,
input:focus + label {
  transform: scale(1.02);
}
.file-name {
  position: absolute;
  bottom: -35px;
  left: 10px;
  font-size: 0.85rem;
  color: #555;
}
</style>
</head>
<body>
<div class="container">
<div class="page-header"><h1>Share Your Music With The World!</h1></div>
<div class="custom-select" style="width:500px;">
<form action="upload23.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
		<h3 style="color:red">*Choose a file:</h3> <br>
		<div class="file-input">
		  <input type="file" id="file" name="file" class="file">
		  <label for="file">Select a file<p class="file-name"></p></label>
		</div>
        </div>
        <?php
        if(isset($success))
        {
            ?>
            <div class="alert alert-success">
                <?php echo '<script type="text/javascript">alert("Uploaded successfully!")</script>';
				?>
				
                </div>
                <?php
            }
            ?>
            <?php
            if(isset($failed))
            {
                ?>
                <div class="alert alert-danger">
                    <?php echo $failed;?>
                </div>
                <?php }?>
                <?php if(isset($msz))
                {
                ?>
                <div class="alert alert-danger">
                    <?php echo $msz;?>
                </div>
                <?php }?>
                <input type="submit" name="upload" value="Upload" class="btn"/>
        </form>
</div>
</div>
</form>
<script>
const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
  // Get the selected file
  const [file] = e.target.files;
  // Get the file name and size
  const { name: fileName, size } = file;
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
  document.querySelector('.file-name').textContent = fileNameAndSize;
});
</script>
</body>
</html>