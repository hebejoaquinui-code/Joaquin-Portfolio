<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jewelry Store</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">
                        <span class="fw-bolder text-plum">Jewelry Store</span>
                    </a>                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#reg">Registration</a></li>
                            <li class="nav-item"><a class="nav-link" href="" a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-plum text-white mb-4">
                                    <div class="text-uppercase">Exceptional Quality &middot; Unique Designs &middot; Personalized Servic</div>
                                </div>                                
                                <div class="fs-3 fw-light text-muted">It's a reflection of your unique personality, or a cherished heirloom, a symbol of love, or a celebration of a special moment</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-plum d-inline">Sparkle & Co.: Where Every Piece Tells a Stor</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile ">
                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <img class="profile-img" src="assets/pic3.gif" alt="..." />
                                    <div class="dots-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-plum d-inline">About Page</span></h2>
                                <p class="lead fw-light mb-4">Visit Sparkle & Co. and let us help you find the perfect piece to add a touch of brilliance to your life.</p>
                                <p class="text-muted">Sparkle & Co. Where memories are made and stories are told, one sparkling piece at a time.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
 
<!-- Modal  Registration-->
<div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="process.php" method="POST">


                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill text-primary"></i></span>
                    <input type="text" class="form-control " name="fn"
                    placeholder="Enter Your First Name...." required>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill text-primary"></i></span>
                    <input type="text" class="form-control " name="ln"
                    placeholder="Enter Your Last Name...." required>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-fill text-primary"></i></span>
                    <input type="email" class="form-control " name="email"
                    placeholder="Enter Your Email...." required>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill text-primary"></i></span>
                    <input id="myInput" type="password" class="form-control " name="pass"
                    placeholder="Enter Your Password...." required>
                </div>

                <span class="fs-5"><input type="checkbox" class="form-check-input" onclick="myFunction()">Show Password</span>

                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                             x.type = "password";
                        }
                        }
                </script>
                

            
                
                </div>
                <div class="modal-footer">
                    <input type="submit" name="reg" class="btn btn-primary" value="SUBMIT">
                </div>

            </form>    
          
        </div>  
      </div>
    </div>
  </div>

<!-- Modal  LOgin-->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form action="process.php" method="POST">   


            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-fill text-primary"></i></span>
                <input type="email" class="form-control " name="email"
                placeholder="Enter Your Email...." required>
            </div>

            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill text-primary"></i></span>
                <input id="loginput" type="password" class="form-control " name="pass"
                placeholder="Enter Your Password...." required>
            </div>
            
            <span class="fs-5"><input type="checkbox" class="form-check-input" onclick="myFunctionlog()">Show Password</span>

                <script>
                    function myFunctionlog() {
                        var x = document.getElementById("loginput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                             x.type = "password";
                        }
                        }
                </script>

            </div>
            <div class="modal-footer">
                <input type="submit" name= "log" class="btn btn-primary" value="LOGIN">  
            </div>
        </form>    
      </div>
    </div>
  </div>  
  
  
        




        
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Floral Fantasy 2025</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <style>
            .bg-gradient-plum {
            background: brown; 
            }
            .text-plum {
            color:brown !important; 
            }
            .bg-plum {
            background-color:  brown !important; 
            }
            .btn-plum {
            background-color: brown!important; 
            color: white !important;
            border: none;
            }

            .btn-plum:hover {
            background-color:  brown!important; 
            }

            .btn-outline-plum {
            border: 2px solid blue !important;
            color: brown !important;
            }

            .btn-outline-plum:hover {
            background-color:brown!important;
            color: white !important;
            }



        
        </style>

    </body>
</html>
