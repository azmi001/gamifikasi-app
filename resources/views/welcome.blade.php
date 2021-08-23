<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="\css\style.css">
    <title>Gamifikai | Welcome</title>
  </head>
  <body>
    <div class="welcome">
      <div class="container">
        <h1>Gamifikasi</h1>
        <p>Make your own <span>story</span> with your <span>imagination</span></p>
        <hr>
        <div>
          <!-- Button trigger modal Login -->
          <button type="button" class="btn btn-primary welcomeButton" data-bs-toggle="modal" data-bs-target="#modalLogin">
            <p>Login</p>
          </button>
          <!-- Button trigger modal SignUp -->
          <button type="button" class="btn btn-primary welcomeButton" data-bs-toggle="modal" data-bs-target="#modalSignIn">
            <p>Sign Up</p>
          </button>
        </div>
        <div>
          <button type="button" class="btn btn-primary welcomeButton">
            <a href="/home">Guest</a>
          </button>
        </div>
      </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLoginLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="RememberMe">
                <label class="form-check-label" for="RememberMe">Remember Me</label>
              </div>
            </form>
            <hr class="bg-secondary border-1 border-top border-secondary">
            <a data-bs-toggle="modal" data-bs-target="#modalSignIn" data-bs-dismiss="modal"><p>Belum Mendaftar ? Sign Up!</p></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Sign In -->
    <div class="modal fade" id="modalSignIn" tabindex="-1" aria-labelledby="modalSignInLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSignInLabel">Sign In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row gy-2 gx-3 align-items-center">
              <div class="row mb-3">
                <div class="col">
                  <p>First Name</p>
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                  <p>Last Name</p>
                  <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="name@example.com">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="harus angka dan huruf">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  <footer>
    <!-- Copyright -->
    <div class="copyright">
      <p>© 2021 Copyright Minimorph Tech | Created by Azmi Munif Hartono</p>
    </div>
    <!-- Copyright -->
  </footer>
</html>