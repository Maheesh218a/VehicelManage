<!DOCTYPE html>

<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
    <link rel="icon" href="resources/icons/9055157_bxs_car_garage_icon.png">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="body">

<div class="signIn_box" id="signIn">
        <h2 class="text-center">Sign In</h2>


        <div class="mt-2">
            <label for="form-label">Username: </label>
            <input type="text" class="form-control" id="un" />
        </div>

        <div class="mt-2">
            <label for="form-label">Password: </label>
            <input type="password" class="form-control" id="pw" />
        </div>

        <div class="mt-2">
            <div class="alert alert-danger d-none" role="alert">
            </div>
        </div>

        <div class="mt-3">
            <button class="btn btn-secondary col-12" onclick="signIn();">Sign In</button>

        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>