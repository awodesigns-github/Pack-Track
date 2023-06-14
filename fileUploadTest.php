<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Test</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fileUpload"><h2>Select a file to upload</h2></label>
        <input type="file" name="userfile" id="iFile">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    $target_dir = "./uploads/";
    $target_file = $target_dir.basename($_FILES['userfile']['name']);
    $upload_status = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (isset($_POST['submit'])) {
            $check = getimagesize($_FILES['userfile']['tmp_name']);
            if ($check == true) {
                echo "The file is a real image";
                echo $imageFileType;
            } else {
                echo "The file is not an image";
            } 
        }
    
    $imageContents = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));

    ?>
</body>
</html>