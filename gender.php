<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Gender (Static Form)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/medias.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery3.6.js"></script>

    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
</head>

<body>
<div class="page-wrapper">

    <div class="main-container">

		<?php include "./include/navbar.php"; ?>
        <div class="app-container" style="background-image: linear-gradient(#ffffff, #f0ca91); width:100%; height:953px;">

			<?php include "./include/sidebarGender.php"; ?>

            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6 p-5">
                    <h3 class="text-center bg-success p-3 rounded-4 text-white">បញ្ចូលភេទ (Static Form)</h3>
                    <form> <div class="mb-3 mt-3">
                            <label for="gender" class="form-label ">Input the gender:</label>
                            <input type="text" class="form-control" id="gender" placeholder="បញ្ចូលភេទ" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">ផ្សេងៗ (Static Input):</label>
                            <input type="number" class="form-control" disabled>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Save (Disabled)</button>
                        <button type="reset" class="btn btn-warning">Cancel</button>
                    </form>
                </div>
                <div class="col-sm-3">
                </div>
            </div>

        </div>

    </div>

</div>

<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

<script src="assets/vendor/apex/apexcharts.min.js"></script>
<script src="assets/vendor/apex/custom/dash1/sales.js"></script>
<script src="assets/vendor/apex/custom/dash1/sparkline.js"></script>
<script src="assets/vendor/apex/custom/dash1/sparkline2.js"></script>

<script src="assets/vendor/rating/raty.js"></script>
<script src="assets/vendor/rating/raty-custom.js"></script>

<script src="assets/js/custom.js"></script>
</body>

</html>
