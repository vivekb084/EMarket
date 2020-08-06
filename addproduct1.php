<?php
session_start();
if(!empty($_SESSION['username']))
{
$name=$_SESSION['name'];
$username=$_SESSION['username'];

}
else{
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['name']);
header("location:login.php?message=Login First!");
}
		function url() {
		$rand = rand(1,1000000);
		return $rand;
		}
		$_SESSION['username']=$username;
		$_SESSION['logout']=$logout=url();

?>
<html>
<head>
<script src="js/script.js"></script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<title>
addproduct
</title>
<body>
<h1> Welcome<?php echo $username; ?></h1>
<a href="logout.php?logout=<?php echo $logout;?>"><span data-hover="Log Out">Log Out</span></a>
<form action="addproduct_db.php" method="post" enctype="multipart/form-data" id="upload_form">
Product Name: <input type="text" name="productname"><br>
Product Price: <input type="text" name="price"><br>
Seller Price: <input type="text" name="sellerprice"><br>
Description: <textarea name="description"></textarea><br>
Want to bid"<br>
<input type="radio" name="bid" value="1">Yes<br>
<input type="radio" name="bid" value="0">No<br>
<div class="upload_form_cont">
 <div>
                        <div><label for="image_file">Please select image file</label></div>
                        <div><input type="file" name="file" id="image_file" onchange="fileSelected();" /></div>
                    </div>
                    <div>
                        <input type="button" value="Upload" onclick="startUploading()" />
                    </div>
                    <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    <div id="error">You should select valid image files only!</div>
                    <div id="error2">An error occurred while uploading the file</div>
                    <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
                    <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response"></div>
                    </div>
					<input type="submit" name="submit" value="submit">

</form>
<img id="preview" />
</div>

</body>
</html>
