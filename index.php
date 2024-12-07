<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pihi Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        *{
            font-family: "Poppins", serif;
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
        .custom-bg{
            background-color: #2ec1ac;
        }
        .custom-bg:hover{
            background-color: #279e8c;
        }
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px){
            .availability-form{
                margin-top: 25px;
                padding: 0 35px; 
        }
        }
    </style>
</head>
<body class="br-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">Pihi Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Kezdőlap</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Szobák</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Szolgáltatások</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Kapcsolat</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rólunk</a>
            </li>
        </ul>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-4" data-bs-toggle="modal" data-bs-target="#loginModal">
                Bejelentkezés
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
                Regisztráció
            </button>
    </div>
        </div>
    </div>
    </nav>
 
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                <i class="bi bi-person-circle fs-3 me-2"></i>Bejelentkezés
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Email cím</label>
                <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
                <label class="form-label">Jelszó</label>
                <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" class="btn btn-dark shadow-none" >Bejelentkezés</button>
                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Elfelejtetted a jelszavadat?</a>
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> 
            <div class="modal-content">
                <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                <i class="bi bi-person-lines-fill fs-3 me-2"> Regisztráció</i>
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                Megjegyzés: Az adataidnak egyeznie kell az igazolványoddal (Személyigazolvány, Útlevél, Jogosítvány, stb.)
            </span>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Név</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">Email cím</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Telefonszám</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0">
                        <label class="form-label">Kép</label>
                        <input type="file" class="form-control shadow-none">
                    </div>
                    <div class="col-md-12 p-0 mb-3">
                        <label class="form-label">Lakcím</label>
                        <textarea class="form-control shadow-none" rows="1"></textarea>
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Pinkód</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">Születési dátum</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                        <label class="form-label">Jelszó</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                        <label class="form-label">Jelszó újra</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                </div>
                <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none">Regisztráció</button>
                </div>
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/2.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/3.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/4.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/5.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/6.png" class="w-100 d-block">
            </div>
            </div>
        </div>
    </div>

        <!-- check availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Foglaljon szállást most!</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                        <label class="form-label"style="font-wight:500;">Bejelentkezés dátuma</label>
                        <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-lg-3 mb-3">
                        <label class="form-label"style="font-wight:500;">Kijelentkezés dátuma</label>
                        <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-lg-3 mb-3">
                        <label class="form-label"style="font-wight:500;">Felnőtt</label>
                            <select class="form-select shadow-none">
                            <option value="1">Egy</option>
                            <option value="2">Kettő</option>
                            <option value="3">Három</option>
                            <option value="4">Négy</option>
                            </select>
                        </div>

                        <div class="col-lg-2 mb-3">
                        <label class="form-label"style="font-wight:500;">Gyerek</label>
                            <select class="form-select shadow-none">
                            <option value="1">Egy</option>
                            <option value="2">Kettő</option>
                            <option value="3">Három</option>
                            <option value="4">Négy</option>
                            </select>
                        </div>

                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Foglalás!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Rooms-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold fs-3">Szobáink</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5>Szimpla szoba</h5>
                    <h6 class="mb-4">7500 Ft/éj</h6>
                        <div class="features mb-4">
                        <h6 class="mb-1">Tulajdonságok</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 szoba
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 fűrdőszoba
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 erkély
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 kanapé
                            </span>
                        </div>
                        <div class="facilities mb-4">
                        <h6 class="mb-1">Szolgáltatások</h6>
                        </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">További szobák >>></a>
            </div>
        </div>
    </div>

<br><br><br>
<br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,

        }
        });
  </script>
</body>
</html>