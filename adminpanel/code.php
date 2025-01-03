<?php

session_start(); // Start the session
$connection = mysqli_connect("localhost", "root", "", "travel");

if (isset($_POST['save_btn'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $hend = mysqli_real_escape_string($connection, $_POST['hend']);

    $img = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = '../images/' . $img; // Ensure this path is correct relative to the current script

    // Move uploaded file
    if (move_uploaded_file($tempname, $folder)) {
        $query = "INSERT INTO adminpanel (`package name`, `package description`, `package image`) VALUES ('$name', '$hend', '$img')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['status'] = "Package added successfully!";
        } else {
            $_SESSION['status'] = "Failed to add package: " . mysqli_error($connection);
        }
    } else {
        $_SESSION['status'] = "Failed to upload image.";
    }

    header('Location: admin_addpackage.php');
    exit();
}

if (isset($_POST['update_btn'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $hend = mysqli_real_escape_string($connection, $_POST['hend']);

    $img = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = '../images/' . $img;

    // If a new image is uploaded, update the image field
    if (!empty($img) && move_uploaded_file($tempname, $folder)) {
        $update_query = "UPDATE adminpanel 
                         SET `package name`='$name', `package description`='$hend', `package image`='$img' 
                         WHERE id='$id'";
    } else {
        // Retain the existing image if no new image is uploaded
        $update_query = "UPDATE adminpanel 
                         SET `package name`='$name', `package description`='$hend' 
                         WHERE id='$id'";
    }

    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) {
        $_SESSION['status'] = "Package updated successfully!";
        header('Location: admin-updatepackage.php');
        exit();
    } else {
        $_SESSION['status'] = "Update failed: " . mysqli_error($connection);
        header('Location: admin-updatepackage.php');
        exit();
    }
}

if (isset($_POST['delete_btn'])) {
    $id = mysqli_real_escape_string($connection, $_POST['user_id']);
    $delete_query = "DELETE FROM adminpanel WHERE id='$id'";
    $delete_query_run = mysqli_query($connection, $delete_query);

    if ($delete_query_run) {
        $_SESSION['status'] = "Package deleted successfully!";
        $_SESSION['status_code'] = "success"; // Set status type for styling (e.g., danger, success)
        header('Location: delete_package.php');
        exit();
    } else {
        $_SESSION['status'] = "Package deletion failed: " . mysqli_error($connection);
        $_SESSION['status_code'] = "error"; // Set status type for styling (e.g., danger, success)
        header('Location: delete_package.php');
        exit();
    }
}

?>
