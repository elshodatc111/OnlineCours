
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Kobinet</title>
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
            <a class="nav-link" style="font-weight: 700;"  href="./index.php">BOSH SAHIFA</a>
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
            <a class="nav-link text-white" style="font-weight: 700;" href="./kabinet.php">KABINET</a>
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
        <small class="text-info">Shaxsiy kabinet</small>
      </div>
    </div>
    <!--Asosiy-->
    <div class="row index_eye">
          <div class="bd-example-snippet bd-code-snippet"><div class="bd-example m-0 border-0">
              <nav>
              <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Shaxsiy malumotlarim</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mening kurslarim</button>
              </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
              <!-- Mavzu videosi -->
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card pt-2" style="width: 100%;">
                      <img src="https://leader-id.storage.yandexcloud.net/event_photo/244710/618a3eaea05d4341146829.png" class="card-img-top" style="width: 150px;height:150px;border-radius: 150px;margin:0 auto">
                      <div class="card-body">
                        <h5 class="card-title w-100 text-center">Elshod Musurmonov</h5>
                        <form action="" method="post" class="text-center mt-3">
                            <label class="custom-file-label">Rasm tanlang (.jpg  .png)</label>
                            <input type="file" class="form-control" required>
                            <input type="submit" class="btn btn-primary mt-3" value="Rasmni almashtirish">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <form>
                      <div class="form-row">
                        <div class="form-group pt-3">
                          <label class="mb-1">Familya ismingiz <span style="color:red">*</span></label>
                          <input type="text" onkeyup="document.getElementById('buttons').style.display='block';" class="form-control" placeholder="1234 Main St" required>
                        </div>
                        <div class="form-group pt-3">
                          <label class="mb-1">Yashash joyingiz</label>
                          <input type="text" onkeyup="document.getElementById('buttons').style.display='block';" class="form-control" placeholder="Yashash manzilingiz">
                        </div>
                        <div class="form-row pt-3">
                          <div class="form-group col-md-6">
                            <label class="mb-1">Telefon raqamingiz</label>
                            <input type="text" onkeyup="document.getElementById('buttons').style.display='block';" class="form-control">
                          </div>
                          <div class="form-group col-md-6">
                            <label class="mb-1">Elektron pochtangiz</label>
                            <input type="text" onkeyup="document.getElementById('buttons').style.display='block';" class="form-control">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" style="display: none;" id="buttons">O'zgarishlarni saqlash</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Mavzu haqida testlar -->
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <b>KURS haqida qisqacha matn hajmi 250 belgidan oshmasin.</b>
              </div>
              </div>
          </div>
  </div>






    
  </main>
  <!-- FOOTER-->
  <div class="container-fluid footers footers">
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
