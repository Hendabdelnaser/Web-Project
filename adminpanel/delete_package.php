<?php include('dpconfig.php');
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


<body>
    <div class="sidebar">
        <h4 class="admin-title">Admin Panel</h4>
        <a href="admin_addpackage.php">Add Backages</a>
        <a href="admin-updatepackage.php">Update Backages</a>
        <a href="delete_package.php">Delete Backages</a>
        <a href="admin-login.php">LogOut</a>
    </div>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['status']); // Clear the status type
    }
    ?>
    <div id="bookingCards" class="cards-container"></div>
    </div>
    <!-- <?php
    // $id = $_GET['id'];
    // $fetch_query = "SELECT * FROM adminpanel Where id='$id'";
    
    ?> -->

    <div id="mainContent" class="container">
        <!-- Bookings Section -->
        <div id="bookings" class="content-section hidden">
            <h1 class="header">
                Delete Backages</h1>
            <!-- <button id="refreshBookings" class="refresh-button">
                <i class="fas fa-sync-alt"></i> <span id="refreshText">Refresh</span>
            </button> -->


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Backages Name</th>
                        <th scope="col">Backages Description</th>
                        <th scope="col">Backages Image</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $fetch_query = "SELECT * FROM adminpanel";
                    $fetch_query_run = mysqli_query($connection, $fetch_query);

                    if (mysqli_num_rows(($fetch_query_run)) > 0) {
                        foreach ($fetch_query_run as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['package name']; ?></td>
                                <td><?php echo $row['package description']; ?></td>
                                <td>
                                    <img src="../images/<?php echo $row['package image']; ?>" alt="Package Image" width="100">
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" class="form-control" name="user_id"
                                            value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-primary btn-sm"
                                            style="background-color: #792e99; border-color: #792e99;">Delete</button>
                                    </form>
                                </td>




                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5"> no record found</td>
                        </tr>
                        <?php

                    }
                    ?>

                </tbody>
            </table>



        </div>



        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>