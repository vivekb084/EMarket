<?php
session_start();
if(!empty($_SESSION['username']))
{
$username=$_SESSION['username'];

}
else
{
session_destroy();
header("location:login.php?message=Login First!");
}

//echo $_POST["male"];
	$name = ''; $type = ''; $size = ''; $error = '';
	function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}


		
	
	
	
	if($_FILES["file"]["size"]<18419550 && $_FILES["file"]["size"]>0){
					
    		if ($_FILES["file"]["error"] > 0) {
        			echo "error(file cant be uploaded):".$_FILES["file"]["error"];
    		} 
    		else if (($_FILES["file"]["type"] == "image/gif") || 
			($_FILES["file"]["type"] == "image/jpeg") || 
			($_FILES["file"]["type"] == "image/png") || 
			($_FILES["file"]["type"] == "image/pjpeg")) {
					$con=mysqli_connect("localhost","root","","gawdsin_emarket");
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result= mysqli_query($con,"SELECT productcount FROM userid WHERE rollno=$username") or die(mysqli_error($con));
					$row = mysqli_fetch_array( $result );
					$largestNumber = $row['productcount']+1;
					$url="";
        			$url.="upload/";
					$url.= $username;
					$url.="_";
					$url.=$largestNumber;
					$url.=".jpg";
					
					
					
        			$filename = compress_image($_FILES["file"]["tmp_name"], $url, 20);
        			$buffer = file_get_contents($url);
					echo "File Uploaded";
					mysqli_query($con,"UPDATE userid SET uploadflag=1 WHERE rollno=$username");
        			
        			
    		}else {
        			$error = "Uploaded image should be jpg or gif or png";
    		}
			}
			else
				echo "size is more than 2mb";
	
	
?>