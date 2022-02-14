<?php
// Include the database configuration file
include 'db_config.php';
$statusMsg = '';

// File upload path
$targetDir = "";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$CNE = $_POST['CNE'];
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$EMAIL = $_POST['EMAIL'];

if(isset($_POST["upload"]) && !empty($_FILES["file"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf','jfif');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = $conn->query("INSERT into eleves (NOM,PRENOM,CNE,PHOTO,EMAIL) VALUES ('$Nom','$Prenom','$CNE','$targetFilePath','$EMAIL')");
            header('location:bienvenue.php');
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}


echo $statusMsg;
?>