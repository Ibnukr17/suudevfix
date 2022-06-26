<!-- without session -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!--Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            outline: 0;
            appearance: none;
            border: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            width: 100vw;
            height: 100vh;
            font-family: poppins, sans-serif;
            font-size: 0.88rem;
            background-color: #00C897;
            user-select: none;
            overflow-x: hidden;
        }

        main {
            background-color: white;
            width: 81.5vw;
            margin-top: 4rem;
            margin-bottom: 1.5rem;
        }

        html {
            font-size: 14px;
        }

        .container {
            display: grid;
            width: 96%;
            margin: 0;
            gap: 1.8rem;
            grid-template-columns: 10rem auto;
        }

        img {
            display: block;
            width: 100%;
        }

        .profile-photo {
            width: 2.8rem;
            height: 2.8rem;
            border-radius: 50%;
            overflow-x: hidden;
        }

        aside {
            height: 100vh;
        }

        aside .top img {
            width: 8rem;
            height: 8rem;
        }

        aside .sidebar {
            display: flex;
            flex-direction: column;
            height: 74vh;
            top: 1rem;
            position: relative;
        }

        aside .sidebar a {
            margin-left: 1rem;
            gap: 3rem;
            align-items: center;
            position: relative;
            color: black;
            height: 3.7rem;
            list-style: none;
            transform: all 300ms ease;
        }

        aside .sidebar a:last-child {
            position: absolute;
            bottom: 2rem;
            width: 100%;
        }

        aside .sidebar a:hover {
            color: #FFD365;
        }

        aside .sidebar a:hover span {
            margin-left: 1rem;
        }

        .content {
            padding: 20px;
            margin: 10px;
        }
        .card{
            border-radius: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
   
        <main>
            <div class="container-fluid">
                <div class="row content bg-white py-5">
                    <div class="col-md-4">
                        <div class="card" style="width: 300px;">
                            <div class="card-body">
                                <h2 class="font-weight-light">ABOUT US</h2>
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book.quos voluptas dicta similique unde dolorum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card" style="width: 600px;">
                            <div class="card-body">
                                <h2 class="font-weight-light">OUR MISSION</h2>
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel sit doloribus repellat placeat fuga vero dolore veniam temporibus corrupti! Commodi doloribus blanditiis veniam est? Nihil culpa quos voluptas dicta similique unde dolorum, temporibus voluptatum sapiente tempora excepturi blanditiis assumenda recusandae totam voluptatibus maxime non dolore, autem iste ipsum. Labore?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light">
                    <div class="row ">
                        <div class="col-12">
                            <h3 class="font-weight-light text-center">TEAMS</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <!-- Team item-->
                        <div class="col-xl-2 col-sm-3 mb-3" style="margin-left: 80px;">
                            <div class="bg-white rounded shadow-sm py-3 px-3"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="30" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ameen</h5>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-2 col-sm-3 mb-3">
                            <div class="bg-white rounded shadow-sm py-3 px-3"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="30" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Chan</h5>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-2 col-sm-3 mb-3">
                            <div class="bg-white rounded shadow-sm py-3 px-3"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="30" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Hilda</h5>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-2 col-sm-3 mb-3">
                            <div class="bg-white rounded shadow-sm py-3 px-3"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="30" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ibnu</h5>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-2 col-sm-3 mb-3">
                            <div class="bg-white rounded shadow-sm py-3 px-3"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="30" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ilham</h5>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>