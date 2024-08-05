<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
  <?php echo strtoupper(ucfirst(str_replace(".php", "", basename($_SERVER['PHP_SELF']))));?>
  </title>
  <!-- <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon"> -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2 mb-3">
                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous à votre compte</h5>
                    <small class="text-center text-muted">Entrez votre nom d'utilisateur et votre mot de passe pour vous connecter</small>
                  </div>

                  <form id="loginForm">

                    <div class="mb-3 col-sm-12">
                      <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                      <div class="input-group has-validation">
                        <input type="email" name="username" class="form-control shadow-none">
                      </div>
                    </div>

                    <div class="mb-3 col-sm-12">
                    <label for="yourPassword" class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control shadow-none" id="yourPassword">
                  </div>

                  <div class="mb-3 col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input shadow-none" type="checkbox" name="remember" value="true" id="rememberMe">
                      <small>Afficher le mot de passe</small>
                    </div>
                  </div>

                  <div class="mb-3 col-sm-12">
                    <button class="btn btn-primary w-100 shadow-none" type="submit" id="submitButton">
                      Se Connecter <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </button>
                  </div>

                    <div class="mb-3 col-sm-12 text-center">
                      <p class="small mb-0">Vous n'avez pas de compte ? <a href="page_register.php">Créer un compte</a></p>
                    </div>
                  </form>

                </div>
              </div>

          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script>
    document.getElementById('rememberMe').addEventListener('change', function (e) {
      const passwordInput = document.getElementById('yourPassword');
      if (this.checked) {
        passwordInput.setAttribute('type', 'text');
      } else {
        passwordInput.setAttribute('type', 'password');
      }
    });

  </script>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent the default form submission
      
      const button = document.getElementById('submitButton');
      button.disabled = true;
      button.innerHTML = 'Se Connecter <i class="fa fa-sign-in" aria-hidden="true"></i> <div class="loader"></div>';

      setTimeout(function () {
        button.disabled = false;
        button.innerHTML = 'Se Connecter <i class="fa fa-sign-in" aria-hidden="true"></i>';
        e.target.submit(); // Submit the form after 3 seconds
      }, 3000);
    });
  </script>

</body>
</html>