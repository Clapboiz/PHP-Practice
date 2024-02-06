<?php
echo "upload file";

if (isset($_POST['submit'])) {
    // print_r($_FILES);
    $permitted_extensions = ['png', 'jpg', 'gif', 'jpeg'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($file_name)) {
        print_r($_FILES);
        $file_size = $_FILES['upload']['size'];
        // $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $generated_file_name = time() . '-' . $file_name;
        $destination_path = "uploads/$generated_file_name";
        //explode slit file name at ".", end select the last element in the array
        //strtolower to easier comparison later
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension));
        echo "$file_name, $destination_path, $file_extension, $file_tmp_name";

        //validate the file extension
        //check element in array 
        if (in_array($file_extension, $permitted_extensions)) {
            if ($file_size <= 1000000) {
                // ok, move from tmp folder to upload folder
                //original file name and upload file name 
                //must be different because if 2 file same the name, 
                //The new file will overwrite the old file regardless of whether the content is different or the same

                move_uploaded_file($file_tmp_name, $destination_path);
                $message = '<p style = "color: blue;">
                    Successful!
                </p>';
            } else {
                $message = '<p style = "color:red;">
                    file is too big! please try other file!
                </p>';
            }
        } else {
            $message = '<p style = "color:red;">
                Invalid file! please try other file!
            </p>';
        }
    } else {
        $message = '<p style = "color:red;">
            No file selected, please try again!
        </p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <h2>
            choose your img to upload
        </h2>
        <br>
        <input type="file" name="upload" />
        <br>
        <input type="submit" value="submit" name="submit" />
    </form>

    <?php echo $message ?? ''; ?>
</body>

</html>