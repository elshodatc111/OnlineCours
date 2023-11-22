<?php
  include_once("./config.php");
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>KURS haqida</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./myfolder/css/sign-in.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./myfolder/css/style.css">
    <script>
      <?php
        if(isset($_GET['commit'])){
          echo "alert('Kurs haqida fikringiz uchun raxmat.');";
        }
      ?>
    </script>
  </head>
<body>
  <!-- MENU-->
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary ">
    <div class="container">
      <a class="navbar-brand" style="font-weight: 800;color:#ffffff;" href="./index.php">ONLINE KURS</a>
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
        <small class="text-info">Online darslar platformasi</small>
      </div>
    </div>
    <!--Asosiy-->
    <?php
      $sql = "SELECT * FROM `cours` WHERE `CoursID`='".$_GET['CoursID']."'";
      $res = $conn->query($sql);
      $row = $res->fetch();
    ?>
    <div class="row index_eye">
        <div class="col-lg-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['CoursName'] ?></h5>
                    <table class="table">
                    <tr>
                        <td>Kurs narxi:</td>
                        <td style="text-align: right;font-weight:400"><?php echo number_format($row['Summa'], 0, '.', ' '); ?> so'm</td>
                    </tr>
                    <tr>
                        <td>Mavzular soni:</td>
                        <td style="text-align: right;font-weight:400"><?php echo $row['Mavzular'] ?></td>
                    </tr>
                    <tr>
                        <td>Davomiyligi:</td>
                        <td style="text-align: right;font-weight:400"><?php echo $row['DarsVaqt'] ?></td>
                    </tr>
                    <tr>
                        <td>Til:</td>
                        <td style="text-align: right;font-weight:400"><?php echo $row['Til'] ?></td>
                    </tr>
                    <tr>
                        <td>Daraja:</td>
                        <td style="text-align: right;font-weight:400"><?php echo $row['Daraja'] ?></td>
                    </tr>
                    <tr>
                        <td>O'qituvchi:</td>
                        <td style="text-align: right;font-weight:400"><?php echo $row['Techer'] ?></td>
                    </tr>
                    <tr>
                        <td>Davomiyligi:</td>
                        <td style="text-align: right;font-weight:400"><?php echo $row['AzolikVaqt'] ?></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="bd-example-snippet bd-code-snippet"><div class="bd-example m-0 border-0">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="card text-dark p-4">
                            <div class="container text-center">
                                <h5 class="card-title">Kursni sotib olish</h5>
                                <form action="" class="row">
                                    <div class="col-lg-4 py-2">
                                        <input type="text" placeholder="XXXX XXXX XXXX XXXX" class="form-control kard text-center" style="font-weight:700;" required>
                                    </div>
                                    <div class="col-lg-4 py-2">
                                        <input type="text" placeholder="XX / XX" class="form-control dates text-center" style="font-weight:700;" required>
                                    </div>
                                    <div class="col-lg-4 py-2">
                                        <button class="btn btn-success w-100">To'lov qilish</button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="container text-center">
                                <h5 class="card-title">To'lovni tasdiqlang</h5>
                                <p>Tasdiqlash kodi 0450 raqamiga jonatildi</p>
                                <form action="" class="row">
                                    <div class="col-lg-6 py-2">
                                        <input type="text" placeholder="X X X X X X" class="form-control tasdiqlash text-center" style="font-weight:700;" required>
                                    </div>
                                    <div class="col-lg-6 py-2">
                                        <button class="btn btn-success w-100">Tasdiqlash</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    

 


        
        



    
  </main>
  <!-- FOOTER-->
  <div class="container-fluid footers">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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
        $('.kard').inputmask('9999 9999 9999 9999');
        $('.dates').inputmask('99 / 99');
        $('.tasdiqlash').inputmask('9 9 9 9 9 9');
    });
  </script>
  </body>
</html>
