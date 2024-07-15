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
        <title>Add Job</title>
        <link rel="icon" href="resources/icons/9055157_bxs_car_garage_icon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="container my-5">
            <div class="card mt-6 shadow-6-strong">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Add New Job</h5>
                </div>

                <div class="card-body">
                    
                    <div class="row col-12">
                        <div class="col-md-6  mt-3">
                            <label class="form-label" for="fname">Customer First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter Customer First Name">
                        </div>
                        <div class="col-md-6  mt-3">
                            <label class="form-label" for="lname">Customer Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter Customer Last Name">
                        </div>
                    </div>

                    <div class="row col-12">
                        <div class="col-md-6  mt-3">
                            <label class="form-label" for="fname">Customer Contact Number</label>
                            <input type="text" class="form-control" id="cNumber" placeholder="Enter Customer Contact Number">
                        </div>
                        <div class="col-md-6  mt-3">
                            <label class="form-label" for="lname">Customer Vehicle Number</label>
                            <input type="text" class="form-control" id="vNumber" placeholder="Enter Customer Vehicle Number">
                        </div>
                    </div>
                    <button class="btn btn-outline-info mb-3 mt-3" onclick="addNewJob();">Save Job</button>
                </div>
            </div>
        </div>
        `
        <script src="script.js"></script>
    </body>

    </html>


<?php
} else {

    header("Location:index.php");
    exit();
}

?>