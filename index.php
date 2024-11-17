<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>


    <style>

        ::-webkit-scrollbar {
            width: 1px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: white;
        }

        body{
            overflow-x: hidden !important;
        }

        .btn-side:hover {
            color: white;
            background: #F15C26;
        }


        .nav-icon{
            color: #F25925;
            display: none;
            
        }
        

        






        @media (max-width:900px) {
            .nav-cards{
                display: none;
            }

            .nav-icon{
                display: block;
                display: flex;
                gap: 1rem;
            }
            .menu-list{
                width: 65% !important;
            }
            .btn-side{
                width: 50% !important;
            }
        }

        @media (max-width:700px){
            .cheezious-img{
                display: none;
            }
            .pick{
                top: 0%;
                left: 0% !important;
                position: unset !important;
            }
            .cook{
                flex-direction: column;
            }
            .cooks{
                width: 70%;
                margin-left: 3rem;
            }
            .poi{
                font-size: medium !important;
            }
            .main{
                text-align: center;
                position: unset;
                padding-bottom: 1rem !important;
            }
            .imageas{
                margin-left: 3rem !important;
                width: 260px;
            }
            .pickss{
                display: block !important;
                margin-left: 1rem;
            }

            .qwa{
                display: none;
            }
            .back-img{
                position: unset !important;
            }
            .qwsd{
                position: unset !important;
            }
            .btnss{
                top: 55% !important;
            }

        }
    </style>
    
    
</head>
<body>


    <div class="container-fluid">
        <nav class="p-3 d-flex " style="justify-content: space-between; align-items: center; ">
            <div class="nav-left">
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img 
                width="30px"
                src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fstack.54881ee4.png&w=128&q=75" alt=""></button>

                <div class="offcanvas offcanvas-start menu-list p-5" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class=" gap-3 d-flex justify-content-start align-items-top">
                        <i class="bi bi-person fs-2  rounded-5" ></i>
                        <div class="">
                            <p>login to explor</p>
                            <p><b>word of falaver</b></p>
                        </div>
                    </div>
                    <button class="btn btn-side border-black w-25 rounded-3 my-2" style="cursor: pointer;">LOGIN</button>
                    <hr>
                    <div class="py-3" style="cursor: pointer;">
                        <a href="./index.php" class="d-flex gap-3 text-decoration-none text-dark">
                            <i class="bi bi-house"></i>
                            <p class="fw-semibold fw-bold">Home page</p>
                        </a>
                        <a href="./view_all.php" class="d-flex gap-3 text-decoration-none text-dark">
                            <i class="bi bi-grid"></i>
                            <p class="fw-semibold fw-bold">Explore Menu</p>
                        </a>
                        <div class="d-flex gap-3 " style="cursor: pointer;">
                            <i class="bi bi-archive "></i>
                            <p class="fw-semibold fw-bold">Branch Locater</p>
                        </div>
                    </div>
                    <hr>
                    <div class="py-3" style="cursor: pointer;">
                        <a class="text-decoration-none" href="./blogs.php">
                            <p class="fw-semibold text-dark">Blog</p>
                        </a>
                        <a class="text-decoration-none" href="./policy.php">
                            <p class="fw-semibold text-dark">Privacy Policy</p>
                        </a>
                    </div>
                    
                </div>
                
                <img class="mx-3"
                width="150px"
                src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FmainLogo.c4a33b22.png&w=640&q=75" alt="">
            </div>
            <div class="nav-right gap-3 d-flex align-items-center">
                <div class="nav-cards px-4 py-2 rounded-pill " style="background: #FEDC00; cursor: pointer;">
                    <i class="bi bi-cart-fill "> <b>CART</b></i>
                </div>
                <a class="text-decoration-none text-dark" href="./login.php">
                <div class="px-4 py-2 rounded-pill nav-cards" style="background: #FEDC00; cursor: pointer;">
                    <i class="bi bi-person-fill"> <b>LOGIN</b></i>
                </div>
                </a>
                
                <div class="nav-icon ">
                    <i class="bi bi-cart fs-2"></i>
                    <i class="bi bi-person fs-2" ></i>
                </div>
            </div>
        </nav>
    </div>



    <div class="container-field">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1725625656600-Cheezious%20New%20Web%20Banner%2001.jpg&w=1920&q=75" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1726230124360-F%2010%20Branch%20Launch%201520x460.jpg&w=1920&q=75" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1726218578965-Gulberg%203%20Web%20Banner-02.jpg&w=1920&q=75" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1725625699609-Cheezious%20New%20Web%20Banner%2003.jpg&w=1920&q=75" class="d-block w-100" alt="...">
                </div>
            </div>

        </div> 
    </div>

    <a href="./view_all.php" class="">
        <button class="btn text-white" style="z-index: 3; background-color: #F15C26; position: fixed; top: 90%; right: 5%;">ORDER NOW</button>
    </a>



    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center py-5">
            <h2 class="fw-semibold">Explore Menu</h2>
            <a href="./view_all.php" class="text-decoration-none">
                <h6 class="fw-bold" style="color: #F15C26;">VIEW ALL</h6>
            </a>
        </div>
        <a class="text-decoration-none " href="./view_all.php">
            <div id="scrollContainer" class="row scroll mx-2 d-flex flex-nowrap" style="overflow-x: auto; white-space: nowrap; overflow-x: scroll;">

                <!-- Card 1 -->
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240931872-Cheezy%20Treats.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">cheezy treats</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240888634-Starters.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">starters</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240904749-Somewhat%20Local.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">somewhat local</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240920275-Somewhat%20Sooper.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">Cheezy Treats</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240943329-Pizza%20Deals.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">Pizza Deals</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240954045-Sandwiches%20%26%20Platters.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">Sandwiches & Platters</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240965577-Special%20Pizza.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">special pizza</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card m-2 rounded" style="width: 90%; border: 1px solid #FFD112;">
                        <img width="200px" class="mx-auto d-block" src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fcategories%2F1724240904749-Somewhat%20Local.jpg&w=256&q=75" alt="">
                        <p class="text-center fw-bold text-uppercase" style="font-size: small;">somewhat local</p>
                    </div>
                </div>
                
            </div>
        </a>

        <div id="scrollLeft" class="shadow btnss rounded card py-1 px-2" style="position: absolute;  width: 33px; top: 90%; cursor: pointer;">
            <i class="bi bi-chevron-left" style="color: #F15C26;"></i>
        </div>
        <div id="scrollRight" class="shadow btnss rounded card py-1 px-2" style="position: absolute;  width: 33px; right: 7%; top: 90%; cursor: pointer;">
            <i class="bi bi-chevron-right" style="color: #F15C26;"></i>
        </div>

    </div>



    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="">
                    <img width="100%" src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fe1.1d85fdc1.webp&w=750&q=75" alt="">
                    <h3 class="py-4 ">Delivering cheezy khushiyan</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="">
                    <img width="100%" src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fe22.91d447bb.webp&w=750&q=75" alt="">
                    <h3 class="py-4 ">Fastest Growing Brand of the Year</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="">
                    <img width="100%" src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fe3.b5726675.webp&w=750&q=75" alt="">
                    <h3 class="py-4 ">Made with fresh, local ingredients and love</h3>
                </div>
            </div>
        </div>
    </div>



    <div class="container main py-5 position-relative">
        <div class="picks">
            <img class="cheezious-img" style="z-index: -1;" width="100%" src="	https://cheezious.com/_next/static/media/mobileapp.8251a7bd.svg" alt="">
        </div>
        <div class="">
            <img class="pickss d-none" src="	https://cheezious.com/_next/static/media/mobile.028bdae8.svg" alt="">
        </div>
        <div class="pick position-absolute " style="top: 40%; left: 40%;">
            <h3>Download Our Mobile App</h3>
            <p class="poi fs-5">Elevate your experience by downloading our mobile app for
            Seamless ordering experience.</p>
            <div class="cook d-flex gap-4">
                <img class="imageas" width="200px" src="https://cheezious.com/_next/static/media/avatar.e940263a.svg" alt="">
                <div class="cooks d-flex">
                    <a href="https://play.google.com/store/search?q=cheezious&c=apps&hl=en&gl=US" target="_blank">
                        <img class="" width="100%" src="https://cheezious.com/_next/static/media/google.9b9b10ed.svg" alt="">
                    </a>
                    <a href="https://apps.apple.com/us/app/cheezious/id1535315212" target="_blank">
                        <img class="" width="100%" src="https://cheezious.com/_next/static/media/apple.50cebbed.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container pb-5">
        <div class="d-flex justify-content-between align-items-center py-5">
            <h2 class="fw-semibold">Blogs</h2>
            <a class="text-decoration-none" href="./blogs.php">
                <h6 class="fw-bold " style="color: #F15C26;">VIEW ALL</h6>
            </a>
        </div>
        <div class="row">
            
            <div class="col-lg-4">
            <a href="./Awami_Brand.php">
                <div class="card my-2">
                    <img width="100%" class="position-relative" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FPakistani_Brand_sq_8b437c6446.png&w=1920&q=75" alt="">
                    <div class="position-absolute p-2" style="background-color: rgba(0, 0, 0, 0.748); bottom: 0;">
                        <p class="text-white fw-bold">Cheezious: The Awami Brand That's All About Local Love</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-white">Learn more</p>
                            <i class="bi bi-chevron-right text-white " style="clip-path: circle(); font-size: small;"></i>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            
            <div class="col-lg-4">
            <a href="./Cheezious_and_Chill.php">
                <div class="card my-2">
                    <img width="100%" class="position-relative" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FMovie_Night_P_Izza_sq_5c9d8011a1.png&w=1920&q=75" alt="">
                    <div class="position-absolute p-2" style="background-color: rgba(0, 0, 0, 0.748); bottom: 0;">
                        <p class="text-white fw-bold">Cheezious and Chill: The Perfect Movie Night Pairings</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-white">Learn more</p>
                            <i class="bi bi-chevron-right text-white " style="clip-path: circle(); font-size: small;"></i>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            
            <div class="col-lg-4">
            <a href="./Ultimate_Pizza.php">
                <div class="card my-2">
                    <img width="100%" class="position-relative" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FPizza_Party_sq_8daf71f90d.png&w=1920&q=75" alt="">
                    <div class="position-absolute p-2" style="background-color: rgba(0, 0, 0, 0.748); bottom: 0;">
                        <p class="text-white fw-bold">How to Host the Ultimate Pizza Party with Cheezious</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-white">Learn more</p>
                            <i class="bi bi-chevron-right text-white " style="clip-path: circle(); font-size: small;"></i>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>



    <div class="container-field back-img py-5" style="position: relative;">
        <div>
            <img class="qwa" width="100%" src="https://cheezious.com/_next/static/media/offer.1a1809b0.svg" alt="" style="position: relative;">
        </div>
        <div class="container qwsd" style="position: absolute; top: 30%; left: 8%;  ">
            <div class="col-lg-6">
                <h1 class="" style="color: #F15C26; width: 70%;">Special Offers & News</h1>
                <p class="fs-4">Subscribe now for news, promotions and more delivered right to your inbox</p>
                <input class="form-control p-3" type="text" placeholder="Enter Email Address">
                <button class="btn btn-last text-uppercase my-3 px-4" style="background-color: #FEEA4B; font-weight: 600; cursor: pointer;">Subscribe</button>
            </div>
        </div>
    </div>



    <div class="container-field" style="background-color: #F8F8F8;">
        <div class="text-center py-3">
            <p style="font-size: 100%;">Cheezious Copyright © 2024. All Rights Reserved.</p>
            <p style="font-size: x-small; font-weight: bold;">TERMS & CONDITIONS | PRIVACY POLICY</p>
        </div>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script>
    // JavaScript to scroll the container left and right
    const scrollContainer = document.getElementById('scrollContainer');
    const scrollAmount = 290; // pixels to scroll with each click

    document.getElementById('scrollRight').onclick = () => {
        scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    };

    document.getElementById('scrollLeft').onclick = () => {
        scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    };
</script>





</body>
</html>