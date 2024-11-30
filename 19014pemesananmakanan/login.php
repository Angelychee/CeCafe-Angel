<?php 
session_start();
if (!empty($_SESSION['username_cecafe'])) {
    header('location:home');
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <link href="assets/css/login.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login CeCafe</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f8f9fa;
    }

    .form-signin {
      max-width: 400px;
      width: 100%;
      padding: 15px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .form-signin i {
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
  <main class="form-signin">
    <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
      <i class="bi bi-cloud-moon fs-1"></i>
      <h1 class="h3 mb-3 fw-normal">Login, yuk! 😉</h1>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="validation01" name="username" required>
        <label for="validation01" class="form-label">Bagi Username, Please..</label>
        <div class="invalid-feedback">
          Bagi dulu, gak! 🤨
        </div>
      </div>

      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="validation02" name="password" required>
        <label for="validation02" class="form-label">Password, janlup..</label>
        <div class="invalid-feedback">
          Masukkin pw dulu, bang 😰
        </div>
      </div>

      <div class="form-check text-start mb-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Inget aku?
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" name="submit-validate" value="abcde" type="submit">Pencet! 👊🏻</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2008–2024</p>
    </form>
  </main>

  <script>
    (() => {
      'use strict'

      const forms = document.querySelectorAll('.needs-validation')

      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>

</html>
