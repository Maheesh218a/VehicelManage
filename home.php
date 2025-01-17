<?php
include "connection.php";
session_start();

if (isset($_SESSION["u"])) {

?>

    <!DOCTYPE html>

    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="icon" href="resources/icons/9055157_bxs_car_garage_icon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>

        <!-- NavBar -->
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <h5 class="fw-bold sign-out" onclick="signOut();">Sign Out</h5>
                </form>
            </div>
        </nav>
        <!-- NavBar -->

        <div class="job">
            <a href="addNewJob.php">
                <button class="btn btn-outline-info col-2 mb-2">Add New Job</button>
            </a>
        </div>

        <!-- Table -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Vehicle Number</th>
                            </tr>
                        <tbody>
                            <?php
                            $customer_rs = Database::search("SELECT * FROM `job_save`");
                            $crows = $customer_rs->num_rows;
                            for ($i = 0; $i < $crows; $i++) {
                                $customer_data = $customer_rs->fetch_assoc();
                            ?>
                                <tr class="text-white">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1"><?php echo $customer_data["f_name"] . " " . $customer_data["l_name"]; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1"><?php echo $customer_data["contact_no"] ?></p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1"><?php echo $customer_data["vehicle_no"] ?></p>
                                    </td>
                                </tr>
                        </tbody>
                    <?php } ?>
                    </thead>

                    </table>
                </div>
            </div>
        </div>
        <!-- Table -->

        <script src="script.js"></script>
    </body>

    </html>


<?php
} else {

    header("Location:index.php");
    exit();
}

?>