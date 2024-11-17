<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    <style>

        body{
            overflow-x: hidden !important;
        }

        .nav-icon{
            color: #F25925;
            display: none;
            
        }
        .nav-input{
            width: 500px;
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
            .nav-mid{
                display: none;
            }
            .menu-list{
                width: 65% !important;
            }
            .btn-side{
                width: 50% !important;
            }
        }
    </style>
    
</head>
<body>
    
    <div class="container-fluid fixed-top" style="background-color: #f8f7f7;">
        <nav class="p-2 d-flex justify-content-between align-items-center">
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
            
            <div class="nav-mid">
                <div class="d-flex align-items-center form-control text-secondary rounded-4" style="background-color: #F8F8F8;">
                    <i class="bi bi-search"></i>
                    <input  type="text" placeholder="Find in cheezious" class="border-0 nav-input py-2 px-3" style="background-color: #F8F8F8; outline-width:0;">
                </div>
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



    <hr class="m-0">



    <div class="container py-5">
        <h3 class="fw-bold pt-5">Blogs</h3>
        <div class="row">
            <div class="col-lg-8">
            <a href="./Awami_Brand.php">
                <div class="card my-2" style="cursor: pointer;">
                    <img width="100%" class="position-relative" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FPakistani_Brand_sq_8b437c6446.png&w=1920&q=75" alt="">
                    <div class="position-absolute p-2 w-100" style="background-color: rgba(0, 0, 0, 0.748); bottom: 0;">
                        <p class=" fw-bold " style="color: #fffdfda5;">Cheezious: The Awami Brand That's All About Local Love</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p style="color: #fffdfda5;" class="">Learn more</p>
                            <i class="bi bi-chevron-right text-white " style="clip-path: circle(); font-size: small; color: #fffdfda5;"></i>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-4">
            <a href="./Cheezious_and_Chill.php">
                <div class="card my-2" style="cursor: pointer;">
                    <img width="100%" class="position-relative" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FMovie_Night_P_Izza_sq_5c9d8011a1.png&w=1920&q=75" alt="">
                    <div class="position-absolute p-2" style="background-color: rgba(0, 0, 0, 0.748); bottom: 0;">
                        <p style="color: #fffdfda5;" class=" fw-bold">Cheezious and Chill: The Perfect Movie Night Pairings</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p style="color: #fffdfda5;" class="">Learn more</p>
                            <i class="bi bi-chevron-right text-white " style="clip-path: circle(); color: #fffdfda5; font-size: small;"></i>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="./Ultimate_Pizza.php">
                <div class="card my-2" style="cursor: pointer;">
                    <img width="100%" class="position-relative" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FPizza_Party_sq_8daf71f90d.png&w=1920&q=75" alt="">
                    <div class="position-absolute p-2" style="background-color: rgba(0, 0, 0, 0.748); bottom: 0;">
                        <p style="color: #fffdfda5;" class=" fw-bold">How to Host the Ultimate Pizza Party with Cheezious</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p style="color: #fffdfda5;" class="">Learn more</p>
                            <i class="bi bi-chevron-right text-white " style="clip-path: circle(); color: #fffdfda5; font-size: small;"></i>
                        </div>
                    </div>
                </div>
            </a>
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
    
    
</body>
</html>