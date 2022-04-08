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

	$allowed = array('pdf', 'docx', 'doc', 'docs', 'txt', 'ppt', 'pptx', 'odp', 'key');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'files/'. $fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: new_article_screen.php?uploadsuccess");
			}else {
				echo "Your file is too big!";
			}
		}else {
			echo "There was an error uploading your file!";
		}
	}else {
		echo "Invalid File Type!";
	}
}
?>