<!doctype html>
  <html lang="en" data-bs-theme="auto">
    <head><script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Kirish</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./myfolder/css/sign-in.css" rel="stylesheet">
  </head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

  <main class="form-signin w-100 m-auto">
    <form action="./login_reg1.php" method="GET">
      <h1 class="h3 mb-3 fw-normal w-100 text-center" style="font-weight: 900;">Ro'yhatdan o'tish</h1>
      <?php
        if(isset($_GET['registr'])){
          echo "<p class='w-100 text-center text-danger'>Telefon raqam oldin ro'yhatdan o'tgan.</p>";
        }elseif(isset($_POST['phone'])){
          echo "<p class='w-100 text-center text-danger'>Telefon raqam noto'g'ri.</p>";
        }
      ?>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="name" placeholder="Ismingiz" required>
        <label>Ismingiz</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control phone" value="998" name="phone" placeholder="Telefon raqami" required>
        <label>Telefon raqam</label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Ro'yhatdan o'tish</button>
      <div class="form-floating mt-2">
        <a href="./login.php">Kirish</a>
      </div>
    </form>
  </main>



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
