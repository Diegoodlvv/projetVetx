<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ProjetfinalVetx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <div class="HetFO">
        <!-- Header -->
        <div class="top-contact">
            <div class="header">
                <div class="leftpart_h">
                    <img loading="lazy" src="images/logo-vet%2520(1).svg" class="logo_h" alt="">
                    <div class="buttons_h">
                        <a href=""><h4 class="button_h">Home</h4></a>
                        <a href=""><h4 class="button_h">About</h4></a>
                        <div class="services_h">
                            <h4 class="button_h">Services</h4>
                            <img src="images/chevron-bas.png">
                        </div>
                        <div class="services_h">
                            <h4 class="button_h">Pages</h4>
                            <img src="images/chevron-bas.png">
                        </div>
                    </div>
                </div>

                <div class="orangepart_h">
                    <h4 class="buttonspecial_h">Cart(0)</h4>
                    <p class="Contact_h">Contact us</p>
                    <div class="BurgerMenu">
                        <div class="ButtonBurgerMenu">
                            <a href="VetxAbout.html"><h5>About</h5></a>
                            <a href="VetxContact.html"><h5>Home</h5></a>
                            <a href="#"><h5>Contacts</h5></a>
                            <a href="#"><h5>Services</h5></a>
                        </div>
                    </div>
                    <div class="burgermenu_h">
                        <img src="images/menu.png" alt="menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Header -->

        <div class="formulairebloc">
            <div class="leftpart_fo">
                <h1 class="titre_fo">Contact us</h1>
                <h2 class="soustitre_fo">Porta nibh venenatis cras sed felis. Odio ut sem nulla pharetra diam sit. Tristique senectus et</h2>

                <div class="flexpart_fo">
                    <div class="flexleft_fo">
                        <div class="img_fo"><img src="images/appel.png" alt="phone"></div>
                        <h4>(323) 238 - 0696</h4>
                    </div>
        
                    <div class="flexleft_fo">
                        <div class="img_fo"><img src="images/email.png" alt="mail"></div>
                        <h4>contact@vet.com</h4>
                    </div>
        
                    <div class="flexleft_fo">
                        <div class="img_fo"><img src="images/broche-de-localisation.png" alt="loc"></div>
                        <h4 class="loc_fo">9400 S Normandie Ave #14 Los angeles, CA</h4>
                    </div>
                </div>
            </div>

            <div class="rightpart_fo">
                <form method="post" action="ProjetFinal.php">
                    <div class="partflexformulaire_fo">
                        <div class="input_fo">
                            <h4 class="inputTitre_fo">Name</h4>
                            <div class="inputflex_fo">
                                <input type="text" placeholder="Enter your name" name="name" required>
                                <img src="images/carte-didentite.png">
                            </div>
                        </div>
                            
    
                        <div class="input_fo">
                            <h4 class="inputTitre_fo">Email Address</h4>
                            <input type="text" placeholder="example@yourself.com" name="email" required>
                        </div>
                    </div>
    
                    <div class="partflexformulaire_fo">
                        <div class="input_fo">
                            <h4 class="inputTitre_fo">Phone Number</h4>
                            <input type="text" placeholder="(123) 456 - 7890" name="Phone" required>
                        </div>
    
                        <div class="input_fo">
                            <h4 class="inputTitre_fo">Service</h4>
                            <input type="text" placeholder="Ex. Cat Visit" name="services" required>
                        </div>
                    </div>
    
                    <div class="partflexformulaire_fo">
                        <div class="input_fo">
                            <h4 class="inputTitre_fo">Visit date</h4>
                            <input type="text" placeholder="Day and month" name="visitDate" required>
                        </div>
    
                        <div class="input_fo">
                            <h4 class="inputTitre_fo">Schedule</h4>
                            <input type="text" placeholder="Ex. 9:00 AM" name="schedule" required>
                        </div>
                    </div>
    
                    <div class="input_fo">
                        <h4 class="inputTitre_fo">Message</h4>
                        <input class="MessageInput_fo" type="text" placeholder="Write your message here..." name="messages" required>
                    </div>
    
                    <input type="submit" class="Submit_fo" value="Contact Us" name="ok">
                </form>
            </div>
        </div>
    </div>
    <script src="ProjetFinalVetx.js"></script>
</body>
</html>