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
            width: 7px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: gray;
        }

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
        .firstbtn:hover {
            background-color: #F25925 !important;
            color: white;
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

    <hr class="" style=" margin-top: 4.5rem;">



    <div class="container " style="overflow-x: hidden;">
        <div class="p-3 d-flex rounded align-items-center justify-content-center gap-4" style="background-color: #F8F8F8; ">
            <div class=" px-3 py-2 rounded-4" style="background-color: #FEDC00;">
                <h6 class="fw-bold" style="font-size: large;">Bhook Ka The End!</h6>
            </div>
            <div class="bg-white px-3 py-2 rounded-4">
                <h6 class="fw-bold" style="font-size: large;">Starters</h6>
            </div>
            <div class="bg-white px-3 py-2 rounded-4">
                <h6 class="fw-bold" style="font-size: large;">Somewhat Local</h6>
            </div>
            <div class="bg-white px-3 py-2 rounded-4">
                <h6 class="fw-bold" style="font-size: large;">Somewhat Sooper</h6>
            </div>
            <div class="bg-white px-3 py-2 rounded-4">
                <h6 class="fw-bold" style="font-size: large;">Cheezy Treats</h6>
            </div>
            <div class="bg-white px-3 py-2 rounded-4">
                <h6 class="fw-bold" style="font-size: large;">Pizza Deals</h6>
            </div>
            
        </div>
    </div>



    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-9" style="height: 74vh; overflow-y: scroll;">
                <h4 class="fw-bold">Bhook Ka The End!</h4>
                <div class="col-lg-4 bhook">
                    <div class="card border-0 position-relative" >
                        <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1726048358599-Bazooka%20400x400.jpg&w=1920&q=75" width="100%" alt="">
                        <div class=" p-2" style="background-color: #e7e6e6;">
                            <h6 class="fw-bold" style="font-size: large;">Bazooka</h6>
                            <p class="" style="font-size: small;">Tender, spicy chicken strips paired with mayo, pickles, jalapeños, and signature...</p>
                            <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 630</h6>
                                <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                            </div>
                            <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                        </div>
                        <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                    </div>
                </div>
                
                <div class="starter py-5">
                    <h4 class="fw-bold">Starter</h4>
                    <div class="row m-0 p-0">
                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269794825-Cheezy%20Sticks.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Cheezy Sticks</h6>
                                    <p class="" style="font-size: small;">Freshly baked bread filled with the yummiest Cheese blend to satisfy your cravin...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 630</h6>
                                        
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269753904-Oven%20Baked%20Wings.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Oven Baked Wings</h6>
                                    <p class="" style="font-size: small;">Extreme quantity of Chicken and Onion with rich Mozzarella Cheese  and signature...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 600</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269662339-Flaming%20Wings.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Flaming Wings</h6>
                                    <p class="" style="font-size: small;">Fresh oven baked wings tossed in hot Peri Peri Sauce and served with Dip Sauce. ...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 630</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269461437-Calzone%20Chunks.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Calzone Chunks</h6>
                                    <p class="" style="font-size: small;">4 pcs Stuffed Calzone Chunks served with Sauce & Fries.</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 630</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269423161-Arabic%20Rolls.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Arabic Rolls</h6>
                                    <p class="" style="font-size: small;">4 pcs Arabic Rolls stuffed with the yummiest mix served with sauce.</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 630</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269388240-Behari%20Rolls.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Behari Rolls</h6>
                                    <p class="" style="font-size: small;">4 pcs Behari Rolls stuffed with the yummiest mix served with sauce.</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 630</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
                
                
                <div class="Somewhat-Local py-5">
                    <h4 class="fw-bold">Somewhat Local</h4>
                    <div class="row m-0 p-0">
                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725270027718-Chicken%20Tikka.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Chicken Tikka</h6>
                                    <p class="" style="font-size: small;">Freshly baked bread filled with the yummiest Cheese blend to satisfy your cravin...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 690</h6>
                                        
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725270011643-Chicken%20Fajita.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Chicken Fajita</h6>
                                    <p class="" style="font-size: small;">Extreme quantity of Chicken and Onion with rich Mozzarella Cheese  and signature...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 660</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269994656-Chicken%20Lover.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Chicken Lover</h6>
                                    <p class="" style="font-size: small;">Fresh oven baked wings tossed in hot Peri Peri Sauce and served with Dip Sauce. ...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 690</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269980123-Chicken%20Tandoori.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Chicken Tandoori</h6>
                                    <p class="" style="font-size: small;">4 pcs Stuffed Calzone Chunks served with Sauce & Fries.</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 690</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269939300-Hot%20N%20Spicy.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Hot n Spicy</h6>
                                    <p class="" style="font-size: small;">4 pcs Arabic Rolls stuffed with the yummiest mix served with sauce.</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 690</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269865850-Vegetable%20Pizza.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Vegetable Pizza</h6>
                                    <p class="" style="font-size: small;">4 pcs Behari Rolls stuffed with the yummiest mix served with sauce.</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 690</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
                

                <div class="Cheezy-Treats py-5">
                    <h4 class="fw-bold">Cheezy Treats</h4>
                    <div class="row m-0 p-0">
                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269964504-Cheezious%20Special.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Cheezious Special...</h6>
                                    <p class="" style="font-size: small;">Freshly baked bread filled with the yummiest Cheese blend to satisfy your cravin...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 1550</h6>
                                        
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269912414-Behari%20Kebab.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Behari Kebab</h6>
                                    <p class="" style="font-size: small;">Extreme quantity of Chicken and Onion with rich Mozzarella Cheese  and signature...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 1550</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1725269848869-Chicken%20Extreme.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Chicken Extreme</h6>
                                    <p class="" style="font-size: small;">Fresh oven baked wings tossed in hot Peri Peri Sauce and served with Dip Sauce. ...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 1550</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="Pizza-Deals py-5">
                    <h4 class="fw-bold">Pizza Deals</h4>
                    <div class="row m-0 p-0">
                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1724242477028-Small%20Pizza%20Deal.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Small Pizza Deal</h6>
                                    <p class="" style="font-size: small;">Freshly baked bread filled with the yummiest Cheese blend to satisfy your cravin...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 750</h6>
                                        
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1724242395788-Regular%20Pizza%20Deal.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Regular Pizza Dea...</h6>
                                    <p class="" style="font-size: small;">Extreme quantity of Chicken and Onion with rich Mozzarella Cheese  and signature...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 1450</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 py-2">
                            <div class="card border-0 position-relative" >
                                <img src="https://cheezious.com/_next/image?url=http%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1724242380336-Large%20Pizza%20Deal.jpg&w=1920&q=75" width="100%" alt="">
                                <div class=" p-2" style="background-color: #e7e6e6;">
                                    <h6 class="fw-bold" style="font-size: large;">Large Pizza Deal</h6>
                                    <p class="" style="font-size: small;">Fresh oven baked wings tossed in hot Peri Peri Sauce and served with Dip Sauce. ...</p>
                                    <div class="px-2 py-1 d-flex justify-content-between align-items-center">
                                        <h6 class="fs-5 fw-bold" style="color: #F25925;">Rs. 1990</h6>
                                        <h6 style="background-color: #F25925;" class="rounded-pill px-2 py-1 text-white">STARTING PRICE</h6>
                                    </div>
                                    <button class="btn firstbtn bg-white rounded-3 fw-semibold w-75 mx-auto d-block" style="cursor: pointer;">+ADD TO CARD</button>
                                </div>
                                <div class="position-absolute" style="right: 5%; top: 4%;"><i class="bi bi-heart" style="color: #F25925;"></i></div>
                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>
            <div class="col-lg-3 text-center" style="background-color: #F8F8F8;">
                <img class="pt-5 mt-5" src="https://cheezious.com/_next/static/media/emptycart.e7858caa.svg" alt="">
                <div class="py-4">
                    <h6 style=" font-weight: 700;">YOUR CART IS EMPTY</h6>
                    <p style="font-size: small; font-weight: 600;">Go ahead and explore top categories.</p>
                </div>
            </div>
        </div>
    </div>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>
</html>