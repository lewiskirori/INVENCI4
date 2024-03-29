<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="InvenCi4 A First-rate Database, Sales, And Maintenance System" />
    
        <title>InvenCi4 | Dbase, Sales & Maintenance</title>
        <link rel="icon" type="image/x-icon" href="assets/images/inven-log3.png" />
        <!-- Font Awesome icons -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!--Inter UI font-->
        <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">
    
        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="css/default.css" id="theme-color">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url(''); ?>"><img src="<?php echo site_url('assets/dBASE-ico.ico'); ?>"> Inven Inc.</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="False" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <?php
                            $unique_id = bin2hex(random_bytes(25)); // random string of 50 chars
                            $url = base_url("auth/login?c=auth&m=login&id=$unique_id");
                        ?>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#info">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $url; ?>">Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase"><a class="nav-link" href="<?php echo base_url(''); ?>"> INVENCI4 </a></h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">
                            Attaining an expeditious, fortified, and highly receptive database infrastructure can be realized by means of proficient governance and oversight by both stakeholders and administrators.
                        </h2>
                        <?php
                            $unique_id = bin2hex(random_bytes(25));
                            $url = base_url("auth/login?c=auth&m=login&id=$unique_id");
                        ?>
                        <a id="myButton" class="btn btn-primary" href="<?php echo $url; ?>">
                            Get Started
                            <span class="ripple"></span>
                        </a>
                        <style>
                          #myButton {
                            position: relative;
                            overflow: hidden;
                          }
                          
                          #myButton .ripple {
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            top: 0;
                            left: 0;
                            pointer-events: none;
                            background-image: radial-gradient(circle, rgba(255,255,255,.5) 10%, transparent 10.01%);
                            background-repeat: no-repeat;
                            background-position: 50%;
                            transform: scale(10, 10);
                            opacity: 0;
                            transition: transform .5s, opacity 1s;
                          }
                          
                          #myButton:active .ripple {
                            transform: scale(0, 0);
                            opacity: 0.5;
                            transition: 0s;
                          }
                        </style>
                        <script>
                            $('#myButton').on('click', function(e) {
                              var ripple = $('<span class="ripple"></span>');
                              var x = e.pageX - $(this).offset().left;
                              var y = e.pageY - $(this).offset().top;
                              ripple.css({
                                left: x,
                                top: y
                              });
                              $(this).append(ripple);
                         
                            });
                        </script>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">About Us</h2>
                        <p class="text-white-50">
                            INVENCI4 is a robust and efficient database system, meticulously crafted by Pap Loc to provide expeditious, fortified, and highly receptive data management capabilities. It offers the functionality to seamlessly add, create, update, view reports, brands & products, and order products
                            <?php
                                $unique_id = bin2hex(random_bytes(25));
                                $url = base_url("auth/login?c=auth&m=login&id=$unique_id");
                            ?>
                            <a href="<?php echo $url; ?>">jump right in.</a>
                            As a closed-source software, the database system is exclusively overseen and administered by stakeholders and owners who have authorization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Signup & Contact-Info-->
        <section class="signup-section" id="info">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>

        <!-- Contact-->
        <section class="contact-section bg-black">
        <style>
      .bg-black{
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        box-shadow: 2px 2px 30px rgba(167, 158, 245, 0.2);
        border-radius: 4px;
        }
        </style>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">4923 Biashara Street, Nairobi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">
                                    <a href="mailto:papilocsta19@gmail.com">hiadmin@invenci4.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+257 438 400 3313</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a href="https://x.com/" class="twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" class="x-twitter" viewBox="0 0 512 512">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                        </svg>
                    </a>
                    <a class="mx-2" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://wa.me/254738400313"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">InvenCi4 &copy;<?php echo $company_data['company_name'] ?? '' ?> 2022-<?php echo date('Y') ?> | </strong>All Rights Reserved.</div></footer>
        
        <!-- Page loader -->
         <div id="preloader">
             <style>
                #preloader {
                  position: fixed;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  z-index: 9999;
                  overflow: hidden;
                  background: #fff;
                }
                
                #preloader:before {
                  content: "";
                  position: fixed;
                  top: calc(50% - 30px);
                  left: calc(50% - 30px);
                  border: 6px solid #64a19d;
                  border-top-color: #fff;
                  border-bottom-color: #fff;
                  border-radius: 50%;
                  width: 60px;
                  height: 60px;
                  animation: animate-preloader 1s linear infinite;
                }
                
                @keyframes animate-preloader {
                  0% {
                    transform: rotate(0deg);
                  }
                
                  100% {
                    transform: rotate(360deg);
                  }
                }
             </style>
             
             <script>
                /**
                 * Preloader
                 */
                document.addEventListener("DOMContentLoaded", () => {
                    const preloader = document.querySelector("#preloader");
                    if (preloader) {
                        preloader.classList.add("hide");
                        setTimeout(() => {
                            preloader.remove();
                        }, 1000);
                    }
                });
            </script>
         </div>
         
        <!----------------------scroll to top------------------------>
            <div class="scroll-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    </body>
</html>
