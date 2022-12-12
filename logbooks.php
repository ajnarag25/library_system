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
      </section>

      <br><br>
      <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7 text-center">Logbook</h1>
      <div class="container">
        <p class="mb-4 fs-1 text-center">List of Logbook History Records</p>
        <form action="functions.php" method = "POST">
          <label for="">Place the cursor here and scan the barcode</label>
          <input type="text" name = "bcode" class="form-control" placeholder="BARCODE..." required>
          <br>
          <button type = "submit" name = "barcode_submit" class="btn btn-primary w-100">Scan</button>
        </form>
        <br><br>
        <div class="table-responsive">
          <table class="table table-hover display" id="myTable">
                <thead>
                    <tr>
                      <th scope="col">Date Scanned</th>
                      <th scope="col">Title of Book</th>
                      <th scope="col">Author</th>
                      <th scope="col">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM logbook ORDER BY date_scanned asc";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['date_scanned'] ?></td> 
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['author'] ?></td>
                        <td><?php echo $row['year'] ?></td>
                    </tr>
                    
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#back"><i class='bx bxs-left-arrow' ></i> Go Back</button>
              <!-- Modal -->
              <div class="modal fade" id="back" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Going Back to Main Page</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="mb-4 fs-1 text-center">Are you sure to go back now?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <a href="index.php#" class="btn btn-primary">Yes, Go Back</a>
                    </div>
                  </div>
                </div>
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