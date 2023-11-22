<?php
  include_once("./config.php");
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bosh sahifa</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
<body>
  <!-- MENU-->
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary ">
    <div class="container">
      <a class="navbar-brand" style="font-weight: 800;" href="./index.php">ONLINE KURS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto text-center mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white"style="font-weight: 700;"  href="./index.php">BOSH SAHIFA</a>
          </li>
          <li class="nav-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
            <a class="nav-link" style="font-weight: 700;" href="./login.php">KIRISH</a>
          </li>
          <li class="nav-item" style="<?php if(isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
            <a class="nav-link" style="font-weight: 700;" href="./login_reg.php">ROYHATDAN O'TISH</a>
          </li>
          <li class="nav-item" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
            <a class="nav-link" style="font-weight: 700;" href="./cours.php">KURSLARIM</a>
          </li>
          <li class="nav-item" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
            <a class="nav-link" style="font-weight: 700;" href="./kabinet.php">KABINET</a>
          </li>
          <li class="nav-item" style="<?php if(!isset($_COOKIE['UserID'])){echo 'display:none;';} ?>">
            <a class="nav-link text-danger" style="font-weight: 700;" href="./logout.php">CHIQISH</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    <!--TOP-->
    <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
      <div class="">
        <h1 class="h2 mb-0 text-primary">ATKO o'quv markazi</h1>
        <small class="text-dark">Online darslar</small>
      </div>
    </div>
    <!--Asosiy-->
    <div class="row blog">
      <?php
        $sql = "SELECT * FROM `cours` WHERE 1";
        $res = $conn->query($sql);
        while ($row = $res->fetch()) {
          echo "<div class='col-lg-4 col-sm-6 col-12 my-2'>
            <div class='card'>
              <img src='./myfolder/img/".$row['Image']."' class='card-img-top'>
              <div class='card-body text-center'>
                <h5 class='card-title'>".$row['CoursName']."</h5>
              </div>
              <div class='card-footer text-muted'>
                <table class='table table-borderless p-0 m-0 text-center' style='font-size: 18px;'>
                  <tr>
                    <td><b style='color:green;'><i class='bi bi-cash'></i> ".$row['Summa']." so'm</b></td>
                    <td><a href='./index_eye.php?CoursID=".$row['CoursID']."' class='btn btn-outline-primary p-0 px-2'>BATAFSIL</a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>";
        }
      ?>
    </div>
    






    
  </main>
  <!-- FOOTER-->
  <div class="container-fluid">
    <footer class="d-flex flex-wrap justify-content-between align-items-center  py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2023 ATKO o'quv markazi</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-telegram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./myfolder/js/jquery.inputmask.min.js"></script>
  <script>
    $(document).ready(function(){
        $('.phone').inputmask('999 99 999 9999');
        $('.pasport').inputmask('AA 9999999');
        $('.pnfl').inputmask('99999999999999');
    });
  </script>
  </body>
</html>
