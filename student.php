<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
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
        <div class="app-container bg-white" >

			<?php include "./include/sidebarStd.php"; ?>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10 p-5">
                    <h3 class="text-center bg-primary p-3 rounded-4 text-white">បញ្ចូលព័ត៌មានសិស្ស (Static Form)</h3>
                    <form> <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label ">ឈ្មោះសិស្ស :</label>
                                    <input type="text" class="form-control" id="sname" placeholder=" ">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3 mt-3">
                                    <label for="id" class="form-label ">អត្តលេខ :</label>
                                    <input type="number" class="form-control" id="sid" placeholder=" ">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3 mt-3">
                                    <label for="gender" class="form-label ">ភេទ :</label>
                                    <select class="form-select" >
                                        <option>-- Select Gender --</option>
                                        <option>ស្រី</option>
                                        <option>ប្រុស</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3 mt-3">
                                    <label for="dob" class="form-label ">ថ្ងៃ ខែ ឆ្នាំ កំណើត :</label>
                                    <input type="date" class="form-control" id="sdate" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 mt-3">
                                    <label for="age" class="form-label ">អាយុ :</label>
                                    <input type="number" class="form-control" id="sage" placeholder=" ">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="pob" class="form-label ">ទីកន្លែងកំណើត :</label>
                                    <input type="text" class="form-control" id="spob" placeholder=" ">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="phn" class="form-label ">លេខទំនាក់ទំនង :</label>
                                    <input type="number" class="form-control" id="pho" placeholder=" ">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="sadd" class="form-label ">អាសយដ្ឋាន :</label>
                                    <input type="text" class="form-control" id="phn" placeholder="">
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="skill" class="form-label ">ជំនាញ :</label>
                                    <select class="form-select" disabled>
                                        <option>-- Select Skill --</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="shift" class="form-label ">ម៉ោងសិក្សា :</label>
                                    <select class="form-select" disabled>
                                        <option>-- Select Shift --</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 mt-3">
                                    <label for="year" class="form-label ">ឆ្នាំ :</label>
                                    <select class="form-select" disabled>
                                        <option>-- Select Year --</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 mt-3">
                                    <label for="group" class="form-label ">ក្រុម :</label>
                                    <select class="form-select" disabled>
                                        <option>-- Select Group --</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="anyFile" class="form-label ">បញ្ចូលរូបភាព (Static Image Upload):</label>
                                    <input type="file" class="form-control" placeholder="" disabled>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="sgmail" class="form-label ">E-Mail :</label>
                                    <input type="gmail" class="form-control" id="sgmail" placeholder="" disabled>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3 mt-3">
                                    <label for="pwd" class="form-label">ផ្សេងៗ (Static Input):</label>
                                    <input type="number" class="form-control" name="status" disabled>
                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="mb-3 mt-3 ">

                                    <button type="submit" class="btn btn-primary" disabled>Save (Disabled)</button>

                                    <button type="reset" class="btn btn-warning">Cancel</button>
                                </div>

                    </form>

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

