<!-- without session -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sufinance Dashboard!</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- Links-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <!--Icons-->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!--styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/contact/css/style.css" />
  <link rel="stylesheet" href="assets/contact/css/animate.css" />
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
  </style>
</head>

<body>
  <div class="container">
    <main>
      <div class="row justify-content-center">
        <div class="col-md-12" style="margin:0px ;">
          <div class="wrapper">
            <div class="row no-gutters">
              <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <div id="form-message-warning" class="mb-4"></div>
                  <div id="form-message-success" class="mb-4">Your message was sent, thank you!</div>
                  <form method="POST" action="get_contact.php" id="contactForm" name="contactForm" class="contactForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="firstname">First Name</label>
                          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="lastname">Last Name</label>
                          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname" />
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="email">Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="email" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="phone">Phone</label>
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="#">Message</label>
                          <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="message"></textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Send Message" name="send_contact" class="btn btn-primary" />
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                  <h3>CONTACT INFORMATION</h3>
                  <p class="mb-4">Please fill up the form</p>

                  <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-phone"></span>
                    </div>
                    <div class="text pl-3">
                      <p><a href="#">+6281555750750</a></p>
                    </div>
                  </div>
                  <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3">
                      <p><a href="#">sufinance@gmail.com</a></p>
                    </div>
                  </div>
                  <div class="dbox w-100 d-flex align-items-start">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text pl-3">
                      <p>Jl. Sukarno Hatta Indah I No.7</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

</body>

</html>