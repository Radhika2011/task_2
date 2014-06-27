<?php
$target_path="uploadFile/";
$target_path=$target_path.basename($_FILES['uploadedFile']['name']);
if(move_uploaded_file($_FILES['uploadedFile']['tmp_name'],$target_path))
{
echo "The file ".basename($_FILES['uploadedFile']['name'])." has been uploaded successfully.";
}
else
{
echo "Sorry, there was an error in uploading the file.Please try again.";
}
?>
