<?php 
  include('connection.php');
  session_start();
?>


<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUP Cavite Library System</title>

    <link rel="icon" type="image/png" href="assets/img/tup-logo.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>


  <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="#"> <img class="me-3" src="assets/img/tup-logo.png" width="40px" alt="" />
            <div class="text-primary font-base">Library System</div>
          </a>
  
        </div>
      </nav>
      <section class="py-0" id="home">
        <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/hero-section.png);background-position:right bottom;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder d-block d-md-none" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center min-vh-md-75">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7">TUP Cavite <br class="d-block d-lg-none d-xl-block" />Library System</h1>
              <p class="mb-4 fs-1">Accelerating research discovery to shape a better future </p>
           
                <a class="btn btn-danger" href="#myTable">View Book Records <i class='bx bxs-down-arrow' ></i></a>
                <a class="btn btn-success" href="logbooks.php">View Logbook <i class='bx bxs-calendar'></i></a>
             
            </div>
          </div>
        </div>
      </section>

      <br><br>
      <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7 text-center">Book Records</h1>
      <div class="container">
        <p class="mb-4 fs-1 text-center">List of Library Holdings Accesssion Record</p>
        <div class="table-responsive">
          <table class="table table-hover display" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">Title of Book</th>
                    <th scope="col">Author</th>
                    <th scope="col">Year</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM data ORDER BY Title asc";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['Title'] ?></td>
                        <td><?php echo $row['Author'] ?></td>
                        <td><?php echo $row['Year'] ?></td>
                        <td><?php echo $row['Category'] ?></td>
                        <td>
                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#find<?php echo $row['id'] ?>"><i class='bx bx-search'></i></button>
                        </td>
                    </tr>
                      <!-- Modal -->
                      <div class="modal fade" id="find<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Book Description</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p class="fs-1">Author : <?php echo $row['Author'] ?></p>
                              <p class="fs-1">Title of Book : <?php echo $row['Title'] ?></p>
                              <p class="fs-1">Classification Code : <?php echo $row['Classification_code'] ?></p>
                              <p class="fs-1">Barcode : <?php echo $row['Barcode'] ?></p>
                              <p class="fs-1">Year : <?php echo $row['Year'] ?></p>
                              <p class="fs-1">Category : <?php echo $row['Category'] ?></p>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                              <form action="functions.php" method="POST">
                                <input type="hidden" name='id' value =  <?php echo $row['id'] ?>>
                                <button type="submit" name = 'submit_find' class="btn btn-danger">Find</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>

                </tbody>
            </table>
        </div>

      </div>
      <section class="py-6">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/cta-bg.png);background-position:right bottom;background-size:contain;">
        </div>
        <div class="container">
          <div class="row flex-center">
            <div class="col-auto mb-2">
              <p class="mb-0 fs--1 my-2 text-center">All Rights Reserved <a href="" class="text-danger">TUP Cavite Library System</a>
               
              </p>
            </div>
   
          </div>
        </div>
      </section>
    </main>

    
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script>
      $('#myTable').DataTable()
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>