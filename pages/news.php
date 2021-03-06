 <!DOCTYPE html>
 <html lang="en">

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

     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
     <!--Icons-->
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <!--styling -->
     <link rel="stylesheet" href="assets/css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

         aside .sidebar a:active {
             background-color: #FFD365;
             text-decoration: none;
         }

         h3 {
             font-family: 'Poppins', sans-serif;
             ;
         }

         p {
             font-family: 'Poppins', sans-serif;
             ;
         }

         .img-fluid {
             display: block;
             margin-left: auto;
             margin-right: auto;
             width: 50%;
         }
     </style>
 </head>

 <body>
     <div class="container">
       
         <main>
             <div class="container-fluid mt-5">
                 <div class="row">
                     <div class="col-sm-4">
                         <h3>Article Headline</h3>
                         <img class="img-fluid" src="assets/img/ar1.png" alt="images" width="200" height="400">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                         <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
                     </div>
                     <div class="col-sm-4">
                         <h3>Article Headline</h3>
                         <img class="img-fluid" src="assets/img/ar2.png" alt="images" width="200" height="400">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                         <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
                     </div>
                     <div class="col-sm-4">
                         <h3>Article Headline</h3>
                         <img class="img-fluid" src="assets/img/ar3.png" alt="images" width="200" height="400">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                         <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-4">
                         <h3>Article Headline</h3>
                         <img class="img-fluid" src="assets/img/ar4.png" alt="images" width="200" height="400">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                         <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
                     </div>
                     <div class="col-sm-4">
                         <h3>Article Headline</h3>
                         <img class="img-fluid" src="assets/img/ar4.png" alt="images" width="200" height="400">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                         <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
                     </div>
                     <div class="col-sm-4">
                         <h3>Article Headline</h3>
                         <img class="img-fluid" src="assets/img/ar5.png" alt="images" width="200" height="400">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                         <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
                     </div>
                 </div>
             </div>
         </main>
     </div>

 </body>

 </html>