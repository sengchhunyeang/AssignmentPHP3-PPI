      <?php
      include "./db.php";
      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>StudentList</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="./css/index.css">
      <link rel="stylesheet" href="./css/medias.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/jquery3.6.js"></script>

        <!-- *************
			************ CSS Files *************
		************* -->
        <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
        <link rel="stylesheet" href="assets/css/main.min.css" />

        <!-- *************
			************ Vendor Css Files *************
		************ -->

        <!-- Scrollbar CSS -->
        <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
      </head>

      <body>
        <!-- Page wrapper start -->
        <div class="page-wrapper">

          <!-- Main container start -->
          <div class="main-container">

            <!-- Sidebar wrapper start -->
            <?php
            include "./include/navbar.php";
            ?>
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="" style="background-image: linear-gradient(#ffffff, #f0ca91); width:100%; height:850px;">

              <!-- App header starts -->
              <?php
              include "./include/sidebartble.php";
              ?>
              <!-- App header ends -->

              <!-- App hero header starts -->
              <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm-11 p-5">
                  <h3 class="text-center bg-primary p-3 rounded-4 text-white">ព័ត៌មានសិស្ស</h3>
                  <table class="table table-borderless rounded-4 ">
                    <tr class="Add-styple">
                      <th>អត្តលេខ</th>
                      <th>ឈ្មោះសិស្ស</th>
                      <th>ភេទ</th>
                      <th>អាយុ</th>
                      <th>ថ្ងៃ/ខែ/ឆ្នាំកំណើត</th>
                      <th>ទីកន្លែងកំណើត</th>
                      <th>លេខទំនាក់ទំនង</th>
                      <th>អាសយដ្ឋាន</th>
                      <th>ជំនាញ</th>
                      <th>ម៉ោងសិក្សា</th>
                      <th>ឆ្នាំ</th>
                      <th>ក្រុម</th>
                      <th>E-Mail</th>
                      <th>Image</th>
                      <th>Delete</th>
                      <th>Edit</th>
                    </tr>

                    <?php
                    $sql = "select * from student";
                    $i = 0;
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                      $i++;
                    ?>
                      <tr>
                        <td ><?= $row['s_id']; ?></td>
                        <td ><?= $row['s_name']; ?></td>
                        <td><?= $row['gender']; ?></td>
                        <td><?= $row['age']; ?></td>
                        <td><?= $row['dob']; ?></td>
                        <td><?= $row['pob']; ?></td>
                        <td><?= $row['phone_number']; ?></td>
                        <td><?= $row['address']; ?></td>
                        <td><?= $row['skill']; ?></td>
                        <td><?= $row['shift']; ?></td>
                        <td><?= $row['year']; ?></td>
                        <td><?= $row['groups']; ?></td>
                        <td><?= $row['gmail']; ?></td>

                        <td>
                          <img src="./upload/<?= $row['pic']; ?>" width="50" height="50">
                        </td>
                        <th>
                          <form>
                            <button type="submit" class="btn btn-danger  ">Delete</button>
                          </form>
                        </th>
                        <th>
                          <form>
                            <button type="submit" class="btn btn-primary ">Edit</button>
                          </form>
                        </th>
                      </tr>
                    <?php
                    }
                    ?>

                  </table>
                </div>
                
                  <div class="col-sm">
                  
                </div>
                </div>
              </div>
            </div>
          </div>

          <!-- App container ends -->

        </div>
        <!-- Main container end -->

        </div>
        <!-- Page wrapper end -->


        <!-- Overlay Scroll JS -->
        <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
        <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

        <!-- Apex Charts -->
        <script src="assets/vendor/apex/apexcharts.min.js"></script>
        <script src="assets/vendor/apex/custom/dash1/sales.js"></script>
        <script src="assets/vendor/apex/custom/dash1/sparkline.js"></script>
        <script src="assets/vendor/apex/custom/dash1/sparkline2.js"></script>

        <!-- Rating -->
        <script src="assets/vendor/rating/raty.js"></script>
        <script src="assets/vendor/rating/raty-custom.js"></script>

        <!-- Custom JS files -->
        <script src="assets/js/custom.js"></script>
      </body>

      </html>