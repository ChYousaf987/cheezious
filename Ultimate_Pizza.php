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



    <div class="container-fluid p-5">
        <h1 class="pt-5">How to Host the Ultimate Pizza Party with Cheezious</h1>
        <div class="d-flex gap-3">
            <img width="30px" height="30px" src="https://cheezious.com/_next/image?url=https%3A%2F%2Fcz-content-prod.s3.me-south-1.amazonaws.com%2Fcheeziuos-cms%2FAuthor_Image_dfbbeda60c.png&w=32&q=75" alt="">
            <p>Syed Arslan | Published on: Oct 11, 2023 | 2 min</p>
        </div>
        <div class="row">
            <div class="col-lg-9 col-sm-12 d-block mx-auto pt-4">
                <img width="100%" src="https://cz-content-prod.s3.me-south-1.amazonaws.com/cheeziuos-cms/large_img3_bf0232762b.webp" alt="">

                <h5 class="fw-bold py-3 pt-5 py-2">How to Host the Ultimate Pizza Party with Cheezious</h5>

                <p class="" style="color: rgba(0, 0, 0, 0.703);">At Cheezious, we do more than serve food; we craft a community experience, with a pinch of desi tadka and a whole lot of Pakistani pride. We believe in food as something that binds us to our heritage, celebrates our roots and showcases what makes Pakistan truly special. So, let's dive into how Cheezious is not just a food chain but a flag bearer of all-things local and especially a 'Proud Pakistani Brand'!</p>

                <h5 class="fw-bold py-3">Locally Sourced, Ghar ka Taste:</h5>

                <p class="" style="color:rgba(0, 0, 0, 0.703);">If you have you ever wondered why every bite of your favorite Cheezious dish has a local touch? That's because it does! From the tangy tomatoes in your sauce to the crunchy onions topping your pizza, most of what we use comes from our own backyard—Pakistan. By sourcing our ingredients locally, we not only bring you the freshest flavors but also support our local farmers. This is our way of keeping the community close and the quality even closer.</p>

                <h5 class="fw-bold py-3">Desi Delights on a Dough Base:</h5>
                <p class="" style="color: rgba(0, 0, 0, 0.703);">We’re all about mirroring the vibrant culture of our streets in the menu. Every item tells a story, whether it’s the spicy Hot N Spicy Pizza or the tangy Oven Baked Wings. The story of local taste meeting world-class culinary standards. It’s like bringing a piece of Pakistan to your plate, seasoned with love and a dash of cheezy peezy innovation.</p>

                <h5 class="fw-bold py-3">Mission: Awami Happiness:</h5>
                <p class="" style="color: rgba(0, 0, 0, 0.703);">Cheezious is on a mission—a mission to be the Awami (people’s) brand. What does that mean? It means making sure that whether you’re a student in Islamabad needing a quick bite between classes, a family in Karachi hosting a birthday bash, or a couple in Lahore looking for a comfort food night, Cheezious is your go-to spot. Affordable, accessible, and absolutely lip-smacking!</p>

                <h5 class="fw-bold py-3">Sustainability and Social Responsibility:</h5>
                <p class="" style="color: rgba(0, 0, 0, 0.703);">But hey, it's not just about what goes on your plate. We're also keen on how we impact the world around us. Our focus on local sourcing is just part of our broader commitment to sustainability. By reducing long transport routes, we not only cut down on our carbon footprint but also ensure that everything you eat is planet-friendly.</p>

                <h5 class="fw-bold py-3">Kyun ke Local Hai Lajawab:</h5>
                <p class="" style="color:rgba(0, 0, 0, 0.703);">In the end, it all boils down to one simple truth: local hai lajawab. By sticking close to our roots and embracing the rich flavors of Pakistan, Cheezious is more than just a food brand; it’s a celebration of Pakistani culture. Every food parcel we deliver carries this message home, and you are reminded of it in every bite.</p>
                <P class="" style="color: rgba(0, 0, 0, 0.703);">So next time you bite into your favorite Cheezious food, remember, you’re biting a piece of Pakistan, served fresh and hot, just for you!</P>
                <P class="" style="color:rgba(0, 0, 0, 0.703);">Explore more and join us on this flavorful journey at Cheezious.com. Let’s make every meal a celebration of our local heritage!</P>
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