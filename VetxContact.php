<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="ProjetfinalVetx.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>Contact</title>
</head>

<body>
  <div class="HetFO">
    <!-- Header -->
    <div class="top-contact">
      <div class="header">
        <div class="leftpart_h">
          <a href="VetxHome.html"><img src="images/logo-vet%2520(1).svg" class="logo_h" alt="" /></a>
          <div class="buttons_h">
            <a href="VetxHome.html">
              <h4 class="button_h">Home</h4>
            </a>
            <a href="VetxAbout.html">
              <h4 class="button_h">About</h4>
            </a>
            <div class="services_h">
              <h4 class="button_h">Services</h4>
              <img src="images/chevron-bas.png" />
            </div>
            <div class="services_h">
              <h4 class="button_h">Pages</h4>
              <img src="images/chevron-bas.png" />
            </div>
          </div>
        </div>

        <div class="orangepart_h">
          <h4 class="buttonspecial_h">Cart(0)</h4>
          <p class="Contact_h">Contact us</p>
          <div class="burgermenu_h">
            <img src="images/menu.png" />
            <div class="BurgerButtons">
              <a href="VetxAbout.html">
                <h5>About</h5>
              </a>
              <a href="VetxHome.html">
                <h5>Home</h5>
              </a>

              <h5>Services</h5>

              <h5>Pages</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header -->

    <div class="formulairebloc">
      <div class="leftpart_fo">
        <h1 class="titre_fo">Contact us</h1>
        <h2 class="soustitre_fo">
          Porta nibh venenatis cras sed felis. Odio ut sem nulla pharetra diam
          sit. Tristique senectus et
        </h2>

        <div class="flexpart_fo">
          <div class="flexleft_fo">
            <div class="img_fo">
              <img src="images/appel.png" alt="phone" />
            </div>
            <h4>(323) 238 - 0696</h4>
          </div>

          <div class="flexleft_fo">
            <div class="img_fo">
              <img src="images/email.png" alt="mail" />
            </div>
            <h4>contact@vet.com</h4>
          </div>

          <div class="flexleft_fo">
            <div class="img_fo">
              <img src="images/broche-de-localisation.png" alt="loc" />
            </div>
            <h4 class="loc_fo">9400 S Normandie Ave #14 Los angeles, CA</h4>
          </div>
        </div>
      </div>

      <div class="rightpart_fo">
        <form method="POST" action="traitement.php">
          <div class="partflexformulaire_fo">
            <div class="input_fo">
              <h4 class="inputTitre_fo">Name</h4>
              <div class="inputflex_fo">
                <input type="text" name="name" placeholder="Enter your name" required />
                <img src="images/carte-didentite.png" />
              </div>
            </div>

            <div class="input_fo">
              <h4 class="inputTitre_fo">Email Address</h4>
              <input type="text" placeholder="example@yourself.com" name="email" required />
            </div>
          </div>

          <div class="partflexformulaire_fo">
            <div class="input_fo">
              <h4 class="inputTitre_fo">Phone Number</h4>
              <input type="text" placeholder="(123) 456 - 7890" name="Phone" required />
            </div>

            <div class="input_fo">
              <h4 class="inputTitre_fo">Service</h4>
              <input type="text" placeholder="Ex. Cat Visit" name="services" required />
            </div>
          </div>

          <div class="partflexformulaire_fo">
            <div class="input_fo">
              <h4 class="inputTitre_fo">Visit date</h4>
              <input type="text" placeholder="Day and month" name="visitDate" required />
            </div>

            <div class="input_fo">
              <h4 class="inputTitre_fo">Schedule</h4>
              <input type="text" placeholder="Ex. 9:00 AM" name="schedule" required />
            </div>
          </div>

          <div class="input_fo">
            <h4 class="inputTitre_fo">Message</h4>
            <input class="MessageInput_fo" type="text" placeholder="Write your message here..." name="messages"
              required />
          </div>

          <input type="submit" class="Submit_fo" value="Contact Us" name="recup" />
          <img src="images/shape-1-instagram-veterinary.svg" class="imagejaune_fo" />
          <img src="images/shape-1-cta-veterinary.svg" class="imagerouge_fo" />
          <img src="images/shape-2-testimonials-veterinary.svg" class="imageverte_fo" />
        </form>
      </div>
    </div>
  </div>


  <div class="qs">
    <div class="toppart_qs">
      <h1 class="titre_qs">Frequently Asked Questions</h1>
      <h2 class="soustitre_qs">
        Porta nibh venenatis cras sed felis. Odio ut sem nulla pharetra diam
        sit. Tristique senectus et netus et
      </h2>
    </div>

    <div class="buttons_qs">
      <div class="fourbuttons_qs">
        <h4 class="button_qs" onclick="changeColor('red')">
          How can I make a reservation?
        </h4>
        <h4 class="button_qs" onclick="changeColor('#817d7d')">
          What services do you offer?
        </h4>
        <h4 class="button_qs" onclick="changeColor('green')">
          Do you offer urgent appointments?
        </h4>
        <h4 class="button_qs" onclick="changeColor('orange')">
          What is your staff experience?
        </h4>
      </div>
      <div class="rightpart_qs">
        <div class="textbutton_qs" id="text">
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Sagittis faucibus et tincidut varius tincidut diam elementum.
            Proin eleifend aenean id purus ullamcorper pelletensque. Sit est
            arcu, orci faucibus dolor praesent euismod. Consectetur rhoncus
            urna venenatis, aliquam gravida faucibus tortor venenatis
            faucibus. Faucibus curabitur tempus est aliquet hendrerit. Proin
            eleifend aenean id purus ullamcorper pellentesque
          </h2>
        </div>
        <div class="imgjaune_qs">
          <img src="images/shape-1-footer-veterinary.svg" />
        </div>
        <div class="imgrouge_qs">
          <img src="images/shape-2-instagram-veterinary.svg" alt="" />
        </div>
        <div class="imgverte_qs">
          <img src="images/shape-1-home-hero-veterinary.svg" alt="" />
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="FollowUsContainer">
    <div class="F_U_Top">
      <h1>Follow Us On</h1>
      <p>Instagram</p>
    </div>
    <div class="F_U_Mid">
      <div class="F_U_M_Img">
        <div class="F_U_M_Left">
          <img src="images/image-1-instagram-veterinary.jpg" alt="" />
          <img src="images/image-2-instagram-veterinary.jpg" alt="" />
        </div>
        <div class="F_U_M_L_img">
          <img src="images/shape-1-instagram-veterinary.svg" alt="" class="F_U_B1" />
        </div>
        <div class="F_U_M_Right">
          <img src="images/image-3-instagram-veterinary.jpg" alt="" />
          <img src="images/image-4-instagram-veterinary.jpg" alt="" class="F_R_Img1" />
          <img src="images/image-6-instagram-veterinary.jpg" alt="" />
          <img src="images/image-5-instagram-veterinary.jpg" alt="" class="F_R_Img1" />
        </div>
        <div class="F_U_M_R img">
          <img src="images/shape-2-testimonials-veterinary.svg" alt="" class="F_U_B2" />
        </div>

        <img src="images/shape-1-testimonials-veterinary.svg" alt="" class="F_U_B3" />
      </div>
    </div>

    <div class="barre_sh2"></div>
  </div>
  <div class="FootContainer">
    <div class="LeftFoot">
      <div class="L_F_Img">
        <img loading="lazy" src="images/logo-vet%2520(1).svg" class="logo_f" alt="" />
      </div>
      <div class="L_F_Text">
        <span>
          Lorem ipsum dolor sit amet, consecte adipiscing elit. Nec nulla
          Lacus
        </span>
      </div>
      <div class="L_F_Logo">
        <div class="L_F_Img1">
          <img src="images/facebook-app-symbol (1).png" alt="" />
        </div>
        <div class="L_F_Img1"><img src="images/twitter.png" alt="" /></div>
        <div class="L_F_Img1">
          <img src="images/social-media.png" alt="" />
        </div>
        <div class="L_F_Img1"><img src="images/linkedin.png" alt="" /></div>
        <div class="L_F_Img1">
          <img src="images/youtube.png" alt="" />
        </div>
        <div class="L_F_Img1">
          <img src="images/whatsapp.png" alt="" />
        </div>
      </div>
    </div>

    <div class="rightPart_f">
      <div class="flexrightPart_f">
        <div class="MidFoot">
          <div class="M_Title">
            <h5>Menu</h5>
            <p>Home</p>
            <p>About</p>
            <p>Services</p>
            <p>Service single</p>
            <p>Blog</p>
            <p>Blog post</p>
            <p>Shop</p>
            <p>Product</p>
            <p>Contact</p>
          </div>
        </div>
        <div class="MidFoot">
          <div class="M_Title">
            <h5>Utility pages</h5>
            <p>Style Guide</p>
            <p>Start Here</p>
            <p>404 Not Found</p>
            <p>Password Protected</p>
            <p>Licences</p>
            <p>Changelog</p>
            <p>More Templates</p>
          </div>
        </div>
      </div>
      <div class="RightFoot">
        <div class="R_Contact">
          <img src="images/shape-1-footer-veterinary.svg" class="R_Contact_Img1" />
          <img src="images/shape-2-footer-veterinary.svg" alt="" class="R_Contact_Img2" />
        </div>
        <div class="R_In_Contact">
          <h3>Contact us</h3>
          <p>
            <img src="images/icon-1-footer-contact-veterinary.svg" alt="" />9400 S Normandie Ave#14 Los Angeles(CA),
            90044
          </p>
          <p>
            <img src="images/icon-2-footer-contact-veterinary.svg" alt="" />contact@vet.com
          </p>
          <p>
            <img src="images/icon-3-footer-contact-veterinary.svg" alt="" />(323)238 - 0696
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="ProjetFinalVetx.js"></script>
</body>

</html>
<script src="ProjetFinalVetx.js"></script>
</body>

</html>