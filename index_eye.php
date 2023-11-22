
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
        <small class="text-info">Online darslar platformasi</small>
      </div>
    </div>
    <!--Asosiy-->
    <div class="row index_eye">
      <div class="col-lg-4">
        <div class="card" style="width: 100%;">
          <img src="./myfolder/img/01.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Birinchi kurs Nomi 30 ta belgi</h5>
            <table class="table">
              <tr>
                  <td>Kurs narxi:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
              <tr>
                  <td>Mavzular soni:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
              <tr>
                  <td>Davomiyligi:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
              <tr>
                  <td>Til:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
              <tr>
                  <td>Daraja:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
              <tr>
                  <td>O'qituvchi:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
              <tr>
                  <td>A'zolikning davomiyligi:</td>
                  <td style="text-align: right;font-weight:700">dd</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example m-0 border-0">
          <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kurs haqida</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mavzular</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Kurs haqida fikrlar</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="container">
                <div class="row d-flex justify-content-center">
                  <div class="card text-dark">
                    <div class="card-body px-4 py-2">
                      <h5 class="mb-3 mt-3">Birinchi kurs Nomi 30 ta belgi</h5>
                      <video controls style="width:100%;" controlsList="nodownload">
                        <source src="./video/video.mp4" type="video/mp4">
                      </video>
                      <br>
                      <h5>KURS haqida qisqacha matn hajmi 250 belgidan oshmasin.</h5>
                      <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="container">
                <div class="row d-flex justify-content-center">
                  <div class="card text-dark">
                    <div class="card-body px-4 py-2">
                      <h5 class="mb- mt-3">Kurs mavzulari</h5>
                      <table class="table">
                        <tr>
                            <td>1.</td>
                            <td style="text-align: left;">Kuzadv wafd adsf narxi:</td>
                            <td style="text-align: right;"><i class="bi bi-clock-history"></i> 00:00</td>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td style="text-align: left;">Kuzadv wafd adsf narxi:</td>
                          <td style="text-align: right;"><i class="bi bi-clock-history"></i> 00:00</td>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td style="text-align: left;">Kuzadv wafd adsf narxi:</td>
                          <td style="text-align: right;"><i class="bi bi-clock-history"></i> 00:00</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="container">
                <div class="row d-flex justify-content-center">
                  <div class="card text-dark">
                    <div class="card-body px-4 py-2">
                      <h5 class="mb-0 mt-3">Kurs haqida fikrlar</h5>
                      <hr>
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3" src="https://w7.pngwing.com/pngs/364/361/png-transparent-account-avatar-profile-user-avatars-icon.png" alt="avatar" width="40" height="40" />
                        <div  style="font-size:14px;">
                          <h6 class="fw-bold m-0 p-0">Maggie Marsh</h6>
                          <div class="d-flex align-items-center"><i class="m-0 p-0">March 07, 2021</i></div>
                          <p class="mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and
                            scrambled it.
                          </p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3" src="https://w7.pngwing.com/pngs/364/361/png-transparent-account-avatar-profile-user-avatars-icon.png" alt="avatar" width="40" height="40" />
                        <div  style="font-size:14px;">
                          <h6 class="fw-bold m-0 p-0">Maggie Marsh</h6>
                          <div class="d-flex align-items-center"><i class="m-0 p-0">March 07, 2021</i></div>
                          <p class="mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and
                            scrambled it.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                  <div class="card text-dark">
                    <div class="card-body px-4 py-1">
                      <h5 class="mb-0 mt-3">Kurs haqida fikringizni qoldiring</h5>
                      <form action="" method="post" class="text-center mt-3">
                        <textarea class="form-control" required></textarea>
                        <button class="btn btn-primary mt-2 w-100">Izoh qoldirish</button>
                      </form>
                    </div>
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
    });
  </script>
  </body>
</html>
