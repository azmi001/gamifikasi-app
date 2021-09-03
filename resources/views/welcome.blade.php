@extends('layouts.layout-main')

@section('content')
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
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <h6 class="dropdown-header">Menu</h6>
                    <a class="dropdown-item" href="{{ url('/dashboard') }}">
                        <i class="fa fa-address-card"></i> Dashboard
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user-circle"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-window-close"></i> Logout
                    </a>
                </div>
            </li>
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
        <a class="btn btn-primary tombol" href="#" role="button" data-toggle="modal" data-target="#myModalQuest">Start Quest</a>
        <div class="icon-bar">
        <a class="active" href="#"><i class="fa fa-user" data-toggle="modal" data-target="#myModalProfile"></i></a>
        <a href="#" data-toggle="modal" data-target="#myModalQuestInfo"><i class="fa fa-question-circle"></i></a>
        <a href="#" data-toggle="modal" data-target="#myModalLeaderboard"><i class="fa fa-calendar"></i></a>
        </div>
    </div>
</div>

<!-- Modal Profile -->
<div class="modal fade" id="myModalProfile">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Profile</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="monster-image">
                    <img src="/assets/img/user.png" class="img-thumbnail" alt="Monster">
                </div>
                <h3 class="media-heading">Haikal Bintang <small>(Paladdin)</small></h3>
                <span><strong>Skills: </strong></span>
                    <span class="badge badge-primary">Grand Adventurer</span>
                    <span class="badge badge-secondary">Legends</span>
                    <span class="badge badge-success">Game Master</span>
                    <span class="badge badge-danger">Heroes</span>
                <div class="dropdown-divider"></div>
                <div class="health">
                    <h4 class="progress-text">Health:</h4>
                    <div class="progress" style="height: 10px; width: 400px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mana">
                    <h4 class="progress-text">Mana:</h4>
                    <div class="progress" style="height: 10px; width: 400px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="level">
                    <h4 class="progress-text">Level:</h4>
                    <div class="progress" style="height: 10px; width: 400px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary tombol" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Quest -->
<div class="modal fade" id="myModalQuestInfo">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Quest List</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                            E1-Q1
                            <span class="badge badge-success badge-pill">50%</span>
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                            E1-Q2
                            <span class="badge badge-success badge-pill">25%</span>
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                            E1-Q3
                            <span class="badge badge-success badge-pill">10%</span>
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
                            E1-Q4
                            <span class="badge badge-success badge-pill">15%</span>
                        </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            Mencari petunjuk yang telah diberikan xxx aaaa
                            <div class="dropdown-divider"></div>
                            <h4 class="modal-title">Rewards</h4>
                            <div class="icon-bar2">
                                <div class="money">
                                    <a class="active" href="#">
                                        <i class="fa fa-apple"> : $9000</i>
                                    </a>
                                </div>
                                <div class="experience">
                                    <a href="#" data-toggle="modal" data-target="#myModalQuestInfo">
                                        <i class="fa fa-question-circle"> : 2000 Exp</i>
                                    </a>
                                </div>
                                <div class="col text-center">
                                    <button type="button" class="btn btn-danger tombol-cancel" data-toggle="popover" title="Cancel Quest" data-content="Klik tombol tersebut untuk membatalkan quest.">Cancel Quest</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            Mencari petunjuk yang telah diberikan xxx
                            <div class="dropdown-divider"></div>
                            <h4 class="modal-title">Rewards</h4>
                            <div class="icon-bar2">
                                <div class="money">
                                    <a class="active" href="#">
                                        <i class="fa fa-apple"> : $9000</i>
                                    </a>
                                </div>
                                <div class="experience">
                                    <a href="#" data-toggle="modal" data-target="#myModalQuestInfo">
                                        <i class="fa fa-question-circle"> : 2000 Exp</i>
                                    </a>
                                </div>
                                <div class="col text-center">
                                    <button type="button" class="btn btn-danger tombol-cancel" data-toggle="popover" title="Cancel Quest" data-content="Klik tombol tersebut untuk membatalkan quest.">Cancel Quest</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            Lawan monster yang ada di xxx
                            <div class="dropdown-divider"></div>
                            <h4 class="modal-title">Rewards</h4>
                            <div class="icon-bar2">
                                <div class="money">
                                    <a class="active" href="#">
                                        <i class="fa fa-apple"> : $9000</i>
                                    </a>
                                </div>
                                <div class="experience">
                                    <a href="#" data-toggle="modal" data-target="#myModalQuestInfo">
                                        <i class="fa fa-question-circle"> : 2000 Exp</i>
                                    </a>
                                </div>
                                <div class="col text-center">
                                    <button type="button" class="btn btn-danger tombol-cancel" data-toggle="popover" title="Cancel Quest" data-content="Klik tombol tersebut untuk membatalkan quest.">Cancel Quest</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            Pergilah ke pulau xxx
                            <div class="dropdown-divider"></div>
                            <h4 class="modal-title">Rewards</h4>
                            <div class="icon-bar2">
                                <div class="money">
                                    <a class="active" href="#">
                                        <i class="fa fa-apple"> : $9000</i>
                                    </a>
                                </div>
                                <div class="experience">
                                    <a href="#" data-toggle="modal" data-target="#myModalQuestInfo">
                                        <i class="fa fa-question-circle"> : 2000 Exp</i>
                                    </a>
                                </div>
                                <div class="col text-center">
                                    <button type="button" class="btn btn-danger tombol-cancel" data-toggle="popover" title="Cancel Quest" data-content="Klik tombol tersebut untuk membatalkan quest.">Cancel Quest</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary tombol" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Leaderboard -->
<div class="modal fade" id="myModalLeaderboard">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Leaderboard</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="search">
                    <div class="input-group mb-1 col-15">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary tombol" type="button" id="button-addon2">Search</button>
                        </div>
                    </div>
                </div>
                <div class="table-leaderboard">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Rank</th>
                            <th scope="col">Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Haikal</td>
                            <td>Grand Adventure</td>
                            <td>99</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Azmi</td>
                            <td>Grand Adventure</td>
                            <td>80</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Sultan</td>
                            <td>Professional Adventure</td>
                            <td>75</td>
                            </tr>
                            <tr>
                            <th scope="row">4</th>
                            <td>Hafidz</td>
                            <td>Amateur Adventure</td>
                            <td>25</td>
                            </tr>
                            <tr>
                            <th scope="row">5</th>
                            <td>Jasmin</td>
                            <td>Semi Adventure</td>
                            <td>50</td>
                            </tr>
                        </tbody>
                        </table>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary tombol" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Quest -->
<div class="modal fade" id="myModalQuest">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Quest - E1-Q3</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-success collapse" role="alertQuest" id="aQ">
                    Quest telah diambil!
                </div>
                <div class="monster-image">
                    <img src="/assets/img/monster.png" class="img-thumbnail" alt="Monster">
                </div>
                <p class="quest-dialog">Setelah diberitahu oleh xxx, kamu pun langsung bergegas menuju tempat monster itu berada. Sesampainya kamu disana, kamu melihat monster tersebut sedang mengamuk di …... dan kamu pun langsung bersiap-siap untuk mengalahkan monster tersebut
                </p>
                <p>
                    <div class="col text-center">
                        <a class="btn btn-primary tombol" data-toggle="collapse" href="#collapseQuest" role="button" aria-expanded="false" aria-controls="collapseQuest">
                            Task Info
                            </a>
                    </div>
                </p>
                <div class="collapse" id="collapseQuest">
                    <div class="card card-body">
                        <h4 class="modal-title text-center">Task Info</h4>
                        <hr>
                        <p>1. Bunuh monster tersebut sebanyak 1x. <br> </p>
                        <h4 class="modal-title">Rewards</h4>
                            <div class="icon-bar2">
                                <div class="money">
                                    <a class="active" href="#">
                                        <i class="fa fa-apple"> : $9000</i>
                                    </a>
                                </div>
                                <div class="experience">
                                    <a href="#" data-toggle="modal" data-target="#myModalQuestInfo">
                                        <i class="fa fa-question-circle"> : 2000 Exp</i>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <a class="btn btn-primary tombol" href="#" role="button" onclick="checkQuest(3)">Accept Quest</a>
            <button type="button" class="btn btn-primary tombol" data-dismiss="modal">Close</button>
            </div>
        </div>
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
                    <input type="text" class="form-control" id="inputFirstName" value="{{ old('first_name') }}">
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
<div class="container">
    <h1 class="display-4" style="margin-bottom: 20px;">Teleport Menu</h1>
    <h2 id="currentPosition">Current Position : </h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.wallpapersafari.com/88/97/9dS6DT.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Struktur Island</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary tombol" onclick="checkPosition(2)">Teleport</a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://images4.alphacoders.com/105/thumb-1920-105706.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Persentasi Island</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary tombol" onclick="checkPosition(3)">Teleport</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://s1.1zoom.me/b5050/262/353391-sepik_1920x1080.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pengembangan Konsep Island</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary tombol" onclick="checkPosition(4)">Teleport</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="chat-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
              <h1>Chat</h1>
                <hr>
              <label for="msg"><b>Message</b></label>
              <textarea placeholder="Type message.." name="msg" required></textarea>

              <button type="submit" class="btn">Send</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </div>

    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p class="cp">Copyright &copy; 2021 Minimorph Tech</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="text-dark cp">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="#" class="text-dark cp">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
<footer>
<!-- Copyright
<div class="copyright p-3" style="background-color: #279b90;">
    © 2021 Copyright: Minimorph Tech
</div>
-->
    <!--<div class="copyright p-3 "style="background-color: #279b90;">
        <div class="col-md-6">
            <p>Copyright © 2021 Minimorph Tech</p>
            <div class="terms-privacy">
                <a href="#" class="text-dark">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </div>-->
</footer>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover({
            trigger: 'hover'
        });
    });

    function showAlert()
    {
        var x = document.getElementById("aQ");
        if (x.style.display === "none")
        {
            x.style.display = "block";
        }
        else{
            x.style.display = "none";
        }
    }

    document.getElementById("aQ").style.display ="none";

    var quest;
    function checkQuest(questID){
        if(quest != questID){
            quest = questID;
            showAlert();
        }
        else{
            document.getElementById("aQ").className = "alert alert-warning";
            document.getElementById("aQ").innerHTML = "Quest tersebut sudah diambil";
            showAlert();
        }
    }

    var map=1;

    function checkPosition(mapID) {
        switch (mapID)
        {
            case 1:
                document.getElementById("currentPosition").innerHTML = "Current Position : Riset Island";
            break;
            case 2:
                document.getElementById("currentPosition").innerHTML = "Current Position : Struktur Konseptual";
            break;
            case 3:
                document.getElementById("currentPosition").innerHTML = "Current Position : Persentasi konsep terpilih";
            break;
            case 4:
                document.getElementById("currentPosition").innerHTML = "Current Position : Pengembangan konsep";
            break;
            case 5:
                document.getElementById("currentPosition").innerHTML = "Current Position : Evaluasi Keberlanjutan";
            break;
            default:
                document.getElementById("currentPosition").innerHTML = "Current Position : None";
        }
    }

    switch (map)
    {
        case 1:
            document.getElementById("currentPosition").innerHTML = "Current Position : Riset Island";
        break;
        case 2:
            document.getElementById("currentPosition").innerHTML = "Current Position : Struktur Konseptual";
        break;
        case 3:
            document.getElementById("currentPosition").innerHTML = "Current Position : Persentasi konsep terpilih";
        break;
        case 4:
            document.getElementById("currentPosition").innerHTML = "Current Position : Pengembangan konsep";
        break;
        case 5:
            document.getElementById("currentPosition").innerHTML = "Current Position : Evaluasi Keberlanjutan";
        break;
        default:
            document.getElementById("currentPosition").innerHTML = "Current Position : None";
    }
</script>
@endsection
