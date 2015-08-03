<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if($_POST['act'] == 'xebB7H9tGu89Xkq27sqV'){

$target_dir = "img/";
$target_file = $target_dir . $_POST['id'].'.jpg';
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo '<html>
<head>
<meta http-equiv="Refresh" content="0;url='.$_POST['url'].'">
</head>

<body>
<script type="text/javascript">
window.location="'.$_POST['url'].'";
</script>
</body>
</html>';
        $uploadOk = 1;
    } else {
        echo '
        <html>
<head>
<meta http-equiv="Refresh" content="5;url='.$_POST['url'].'">
<script type="text/javascript">
function redireccionar(){
  window.locationf="'.$_POST['url'].'";
} 
setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos
</script>
</head>

<body>
<p>Sorry, only JPG, JPEG & PNG  files are allowed.</p>
</body>
</html>
        ';
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if(file_exists('img/'.$_POST['id'].'.jpg')){

	chmod('img/'.$_POST['id'].'.jpg',0755);
	unlink('img/'.$_POST['id'].'.jpg');}

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
header('Location: '.$_POST['url']);

?>