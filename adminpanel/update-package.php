<?php
include('dpconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../CSS/admin/admin-panel-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../CSS/admin/admin-panel-style.css">


</head>

<body>
    <div class="sidebar">
        <h4 class="admin-title">Admin Panel</h4>
        <div class="date-time">
            <div id="date"></div>
            <div id="time"></div>
        </div>
        <a href="admin_addpackage.php">Add Backages</a>
        <a href="admin-updatepackage.php">Update Backages</a>
        <a href="delete_package.php">Delete Backages</a>
        <a href="admin-login.php">LogOut</a>
    </div>
    <?php
    $id = $_GET['id'];
    $fetch_query = "SELECT * from adminpanel WHERE  id ='$id'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);

    if ($fetch_query_run) {
        foreach ($fetch_query_run as $row) {
            
            ?>

            <div class="container">
                <!-- Add Package Section -->
                <div class="content-section">
                    <h1 class="header">
                        Update Backages</h1>
                    <form class="form-addpkg" action="code.php" method="POST" enctype="multipart/form-data">
                          <input type="hidden" id="packageName" value="<?php echo$row['id']; ?>" name="id" class="input-field" placeholder="Package Name" >
                        <input type="text" id="packageName" value="<?php echo$row['package name']; ?>" name="name" class="input-field" placeholder="Package Name" required>
                        <textarea type="text" value="<?php echo$row['package description']; ?>" name="hend" id="packageDescription" class="input-field" placeholder="Package Description"
                            required></textarea>
                        <input type="file" id="packageImage" value="<?php echo$row['package image']; ?>" name="img" class="input-field" required>
                        <input type="submit" name="update_btn" value="Update Package" class="action-button">
                    </form>


                </div>
            </div>

            <?php


        }
    } else {
        echo "no record found";
    }
    ?>
    


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>