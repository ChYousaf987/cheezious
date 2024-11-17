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



    <div class="container py-5">
        <h1 class="text-center pt-5 fw-normal">PRIVACY POLICY : CONSUMER APP</h1>
        <p class="text-center " style="font-size: small;">Updated : [September, 1 2023]</p>
        <h4 class="text-dark">Cheezious Pakistan</h4>
        <p>(Cheezious, we, or us). In [PAKISTAN], Cheezious operates from its headquarters at</p>
        <h4>Nadir Plaza, Commercial Market, Rawalpindi Pakistan.</h4>
        <p>By accepting these terms, you understand and agree that, as stated in Section 7, you are waiving your right to resolve any dispute through other processes that could be available to you, such as court actions or administrative proceedings. It also means that you are waiving your rights to a trial by jury or to combine your dispute with others in a class action.
        </p>
        <p>
            The online services are not intended to be used by, or targeted to, anyone under the age of [13]. You must be at least [13] years old to use the online services. If you are at least [13] but not yet [18] years old (or the legal age of majority if different in your jurisdiction), then you must review these terms with your parent or guardian, and they must understand and agree to these terms for you to use the online services.
        </p>
        <p>
            If you or your parent or guardian do not agree to these terms, you must immediately stop using the online services and request that Cheezious close any online services account you have created. You can request account deletion by sending an email to support@cheezious.com; please include the email address of the account you want deleted.
        </p>
        <h4>1. ABOUT THE ONLINE SERVICES</h4>
        <h4>Availability of Products and Services:</h4>
        <p>Cheezious products and services are available in many parts of the country. However, the online services may describe products and services that are not available everywhere.</p>
        <h4>Obey the Rules of the Road:</h4>
        <p>When using the online services, you must obey the rules of the road and all applicable rules and regulations.</p>
        <h4>You must not use the online services while driving or while behind the wheel or controls of a moving vehicle</h4>
        <p>You are responsible for your devices and accounts:</p>
        <p>You are responsible for any devices, software, and services needed to use the online services. Cheezious does not guarantee that the online services will fully function on any particular device or with any particular software. You are also responsible for any messaging and data charges, fees, and taxes for your use of the online services, including when we communicate with you by text, email, or other means of your choice. You may only use the online services with devices that you own or control, using only the authorized operating system (e.g., Apple iPhone OS for Apple devices). If you create an online services account, you are responsible for keeping the account secure and for all activity under the account. You can only have one online services account and must keep your account information accurate at all times.</p>

        <h4>Cheezious Right to Update or Terminate the Online Services:</h4>
        <p>You understand and consent that Cheezious may update, modify, or terminate the online services (or your access to them) from time to time, including by pushing updates to (or removing functionality or access from) any Cheezious mobile app you have installed on your device.</p>
        <h4>How to Contact Us:</h4>
        <p>If you have any questions or comments regarding the online services, please see the Contact Us section in the online services or you can always email us at contactus@cheezious.com.</p>


        <h4>2. OUR INFORMATION PRACTICES AND COMMUNICATIONS WITH YOU</h4>
        <h4>Cheezious Privacy Statement</h4>
        <p>The Cheezious Privacy Statement describes our information practices, including how we collect, use, and share information.</p>
        <h4>How we Communicate with you:</h4>
        <p>Through the online services, you may opt in to receive emails, text messages to the mobile number you provide to us, or push notifications from Cheezious. When you opt in to any of these types of communications, you understand and consent that you will receive marketing, transactional, and other messages from Cheezious. Cheezious may use the information you have provided to us to communicate with you in accordance with the Cheezious Privacy Statement.</p>
        <h4>Opting Out of Communications Generally:</h4>
        <p>You have a choice in how we communicate with you. You can generally find your communication preferences with instructions on how to opt out in the profile section of the online service that you use. You may also have the ability to change your communication preferences using your device settings. In addition, our communications themselves may include the opportunity to opt out. You understand and agree that you may need to separately manage your communication preferences for each communication method. For example, if you opt out of receiving marketing emails, you may still receive marketing text messages if you've opted in to receiving them. While we do our best to offer convenient methods for you to manage your communications preferences, you may need to separately adjust your preferences for each online service. Please note that for some account-related and transactional communications, the only way to stop receiving these communications may be to close your online services account. Lastly, please note that if you are receiving communications from a Cheezious franchisee, then you will need to opt out from them directly.</p>
        <h4>Offers and loyalty program cheezious rewards**</h4>
        <h4>Generally:</h4>
        <p>These terms describe the Cheezious Rewards program (Cheezious Rewards). Participation in Cheezious Rewards is voluntary and is not available everywhere.</p>
        <h4>Benefits of Cheezious Rewards:</h4>
        <p>Cheezious Rewards members may receive, among other things, personalized offers for products and services from Cheezious and participating franchisees, promotions, and program information.</p>
        <h4>    How to Join Cheezious Rewards:</h4>
        <p>You can join Cheezious Rewards by creating an account at the online service or by following the prompts that appear in the Cheezious mobile app. To join Cheezious Rewards, you must be at least 13 years of age.</p>
        <h4>Eligibility for Offers and Promotions:</h4>
        <p>Participation in Cheezious Rewards and eligibility for offers, promotions, and program information is determined solely by Cheezious, and participation may vary by location. If you are a Cheezious Rewards member and would like to learn more about the Cheezious Rewards offers, promotions, and program information that may be available to you, please log in to your account.</p>
        <h4>Our Right to Terminate or Change Cheezious Rewards</h4>
        <p>You can earn Cheezious Rewards points by making qualifying purchases. You must provide the phone number or email address associated with your Cheezious Rewards account when you place an order at a participating Cheezious restaurant to earn Cheezious Rewards points. You can earn Cheezious Rewards points on all qualifying purchases except for gift cards, merchandise, other non-food items, and charitable items or donations. If you return a product that earned Cheezious Rewards points, the points will be deducted from your account. From time to time, Cheezious may offer promotions that provide you with additional Cheezious Rewards points. Please see the Cheezious Rewards website or your Cheezious mobile app for details.</p>
        <h4>Redeeming Cheezious Rewards Points</h4>
        <p>You can redeem Cheezious Rewards points in your Cheezious Rewards account for rewards when you meet the applicable Cheezious Rewards points redemption requirements. To redeem Cheezious Rewards points, you must have enough Cheezious Rewards points in your account to cover the entire reward. If you have enough Cheezious Rewards points, you can use them to cover the entire price of a qualifying product. You can only use Cheezious Rewards points to obtain qualifying products and services that are available through the online services. Cheezious may provide a list of qualifying products and services that can be obtained using Cheezious Rewards points on the Cheezious Rewards website or in the Cheezious mobile app. Cheezious may change the list of qualifying products and services at any time. You can check your Cheezious Rewards points balance and transaction history in your Cheezious Rewards account.</p>
        <h4>USER-GENERATED CONTENT</h4>
        <h4>Generally:</h4>
        <p>The online services may include interactive features, such as text or chat functionality, that allow you and other users to post, submit, publish, display, or transmit to other users or other persons content, data, information, messages, and other materials, including through the website, mobile app, social media pages, email, and other communications (collectively, User-Generated Content). You are solely responsible for your User-Generated Content. Cheezious has no obligation to monitor, control, or restrict any User-Generated Content.</p>
        <h4>Prohibited User-Generated Content:</h4>
        <p>You may not post User-Generated Content that:</p>
        <p>
            <ul class="list-unstyled">
                <li>1. Is defamatory, fraudulent, obscene, threatening, invasive of privacy, or unlawful;</li>
                <li>2. Infringes or violates any party's intellectual property, publicity, or privacy rights;</li>
                <li>3. Creates or distributes spam, including multiple postings of the same message, or fraud;</li>
                <li>4. Is abusive, false, or misleading;</li>
                <li>5. Publishes, posts, displays, or transmits advertisements or commercial communications;</li>
                <li>6. Uses the online services to violate any law or to infringe the rights of any third party;</li>
                <li>7. Contains any code, application, or software that could damage or interfere with the online services or with any data, system, or property of Cheezious;</li>
                <li>8. Interferes with the operation of the online services, including through hacking, cracking, defacing, or distribution of harmful code, data, or information;</li>
            </ul>
        </p>
        <h4>License to User-Generated Content:</h4>
        <p>By posting, submitting, publishing, displaying, or transmitting User-Generated Content, you grant Cheezious a non-exclusive, perpetual, irrevocable, royalty-free, fully paid, worldwide, transferable, sub-licensable right and license to use, reproduce, modify, create derivative works from, distribute, publicly perform, publicly display, and otherwise exploit your User-Generated Content on and in connection with the online services and for the purposes for which you posted, submitted, published, displayed, or transmitted it.</p>
        <h4>Monitoring User-Generated Content:</h4>
        <p>You are solely responsible for your User-Generated Content. You assume all risks associated with use of your User-Generated Content, including any reliance on its accuracy, completeness, or usefulness by others, or any disclosure of your User-Generated Content that personally identifies you or any third party. You represent that you own or have the necessary permissions to use and authorize the use of your User-Generated Content as described herein. You may not imply that your User-Generated Content is in any way sponsored or endorsed by Cheezious.</p>
        <h4>DISCLAIMERS</h4>
        <h4>General Disclaimer:</h4>
        <p>THE ONLINE SERVICES, INCLUDING ANY CONTENT OR INFORMATION CONTAINED WITHIN THEM OR ANY SITE-RELATED SERVICE, ARE PROVIDED AS IS AND AS AVAILABLE WITH NO WARRANTIES WHATSOEVER. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, CHEEZIOUS DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NONINFRINGEMENT. CHEEZIOUS DOES NOT WARRANT THE ACCURACY, COMPLETENESS, OR USEFULNESS OF ANY INFORMATION CONTAINED WITHIN THE ONLINE SERVICES. CHEEZIOUS DOES NOT WARRANT THAT THE ONLINE SERVICES WILL BE UNINTERRUPTED OR ERROR-FREE, THAT DEFECTS WILL BE CORRECTED, OR THAT THE ONLINE SERVICES WILL BE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. YOU ASSUME THE ENTIRE COST OF ALL NECESSARY SERVICING, REPAIR, OR CORRECTION TO ANY COMPUTER OR OTHER EQUIPMENT ARISING FROM, CONNECTED WITH, OR USING THE ONLINE SERVICES. CHEEZIOUS SHALL NOT BE RESPONSIBLE FOR AND DISCLAIMS ALL LIABILITY FOR ANY LOSS, LIABILITY, DAMAGE (WHETHER DIRECT, INDIRECT, OR CONSEQUENTIAL), OR EXPENSE OF ANY NATURE WHATSOEVER WHICH MAY BE SUFFERED BY YOU OR ANY THIRD PARTY AS A RESULT OF OR WHICH MAY BE ATTRIBUTABLE, DIRECTLY OR INDIRECTLY, TO YOUR ACCESS AND USE OF THE ONLINE SERVICES.</p>
        <h4>GOVERNING LAW AND DISPUTE RESOLUTION</h4>
        <h4>Governing Law:</h4>
        <p>These terms are governed by and construed in accordance with the laws of the Pakistan, without regard to its conflict of law principles. Any disputes arising out of or related to these terms or your use of the online services shall be subject to the exclusive jurisdiction of the Pakistan, and you agree to submit to the personal jurisdiction of such courts.</p>
        <h4>Jurisdiction : Except as described otherwise, all materials in the Cheezious website are made available only to provide information about Cheezious. Cheezious controls and operates this website from Rawalpindi, Pakistan and makes no representation that these materials are appropriate or available for use in other locations. If you use this website from other locations you are responsible for compliance with applicable local laws.</h4>
        <h4>MISCELLANEOUS</h4>
        <h4>Entire Agreement:</h4>
        <p>These terms constitute the entire agreement between you and Cheezious with respect to the online services and supersede all prior and contemporaneous understandings, agreements, representations, and warranties.</p>
        <h4>DISCLAIMERS</h4>
        <h4>General Disclaimer:</h4>
        <p>The online services, including any content or information contained within them or any site-related service, are provided as is and as available with no warranties whatsoever. to the fullest extent permitted by applicable law, cheezious disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, title, and noninfringement. cheezious does not warrant the accuracy, completeness, or usefulness of any information contained within the online services. cheezious does not warrant that the online services will be uninterrupted or error-free, that defects will be corrected, or that the online services will be free of viruses or other harmful components. you assume the entire cost of all necessary servicing, repair, or correction to any computer or other equipment arising from, connected with, or using the online services. cheezious shall not be responsible for and disclaims all liability for any loss, liability, damage (whether direct, indirect, or consequential), or expense of any nature whatsoever which may be suffered by you or any third party as a result of or which may be attributable, directly or indirectly, to your access and use of the online services.</p>
        <h4>Contact Information:</h4>
        <p>If you have any questions about these terms or the online services, please contact us at:</p>
        <p>Cheezious,</p>

        <p>Nadir Plaza, Commercial</p>

        <p>Market, Rawalpindi</p>

        <p>Pakistan</p>

        <p>Email: support@cheezious.com</p>
        
        


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