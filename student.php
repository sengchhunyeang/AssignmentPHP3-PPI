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
        <div class="app-container bg-white" >
			<?php include "./include/sidebarStd.php"; ?>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10 p-5">
                    <h3 class="text-center bg-primary p-3 rounded-4 text-white">ចុះឈ្មោះសិស្ស</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sname">ឈ្មោះសិស្ស:</label>
                                    <input type="text" class="form-control" id="sname">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sid">លេខសម្គាល់:</label>
                                    <input type="number" class="form-control" id="sid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">ភេទ:</label>
                                    <select class="form-control" id="gender">
                                        <option>-- ជ្រើសរើសភេទ --</option>
                                        <option>ស្រី</option>
                                        <option>ប្រុស</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sage">អាយុ:</label>
                                    <input type="number" class="form-control" id="sage">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sdate">កាលបរិច្ឆេទកំណើត:</label>
                                    <input type="date" class="form-control" id="sdate">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pho">លេខទូរស័ព្ទ:</label>
                                    <input type="number" class="form-control" id="pho">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="spob">ទីកន្លែងកំណើត:</label>
                                    <input type="text" class="form-control" id="spob">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="currentAddress">អាសយដ្ឋានបច្ចុប្បន្ន:</label>
                                    <input type="text" class="form-control" id="currentAddress">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="skill">ជំនាញ:</label>
                                    <select class="form-control" id="skill" >
                                        <option>-- ជ្រើសរើសជំនាញ --</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="studyTime">ម៉ោងសិក្សា:</label>
                                    <select class="form-control" id="studyTime" >
                                        <option>-- ជ្រើសរើសម៉ោងសិក្សា --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="years">ឆ្នាំ:</label>
                                    <select class="form-control" id="years" >
                                        <option>-- ជ្រើសរើសឆ្នាំ --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="team">ក្រុម:</label>
                                    <select class="form-control" id="team" >
                                        <option>-- ជ្រើសរើសក្រុម --</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sgmail">អ៊ីម៉ែល:</label>
                                    <input type="email" class="form-control" id="sgmail" placeholder="បញ្ចូលអ៊ីម៉ែល" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="anyFile">រូបភាព (បញ្ចូលរូបភាពថ្មី):</label>
                                    <input type="file" class="form-control" id="anyFile" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">ផ្សេងៗ:</label>
                                    <input type="text" class="form-control" id="status" placeholder="បញ្ចូលព័ត៌មានផ្សេងទៀត" >
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" >រក្សាទុក </button>
                                <button type="reset" class="btn btn-danger">បោះបង់</button>
                            </div>
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

