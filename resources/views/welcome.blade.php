<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="\css\style.css">
    <title>Gamifikasi</title>
  </head>
  <body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Gamifikasi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#myModal2">Login</a>
                <a class="btn btn-primary tombol" href="#" role="button" data-toggle="modal" data-target="#myModal">Sign Up</a>
              </div>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Gamifikasi</h1>
          <p class="lead">Make your own <span>story</span> with your <span>imagination</span></p>
          <a class="btn btn-primary tombol" href="#" role="button">Join Now</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->

                <!-- Sign Up -->
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputFirstName">First Name</label>
                          <input type="text" class="form-control" id="inputFirstName">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputLastName">Last Name</label>
                          <input type="text" class="form-control" id="inputLastName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail" class="col-form-label">Email</label>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Password hanya terdiri dari huruf dan angka saja.
                        </small>
                    </div>
                </div>



                <!-- Modal footer -->
                <div class="modal-footer">
                <a class="btn btn-primary tombol" href="#" role="button">Sign Up</a>
                <button type="button" class="btn btn-primary tombol" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <!-- Login -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="staticEmail" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Remember Me
                          </label>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Ingin mendaftar? Sign up!</a>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                <a class="btn btn-primary tombol" href="#" role="button">Login</a>
                <button type="button" class="btn btn-primary tombol" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  </body>
  <footer>
    <!-- Copyright -->
    <div class="copyright p-3" style="background-color: #279b90;">
      © 2021 Copyright: Minimorph Tech
    </div>
    <!-- Copyright -->
  </footer>
</html>
