<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "paradise";
$showsuccess = false;
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Connection Failed to establishes" . mysqli_connect_error();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `plant1` (`email`, `subject`, `message`, `time`) VALUES ('$email', '$subject', '$message', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showsuccess = true;
    }
}
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/natalia-y-Qin3ErJoMdA-unsplash-removebg-preview.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/shop.css">

        <title>Responsive plants website - Bedimcode</title>
    </head>
    <body>

        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> Paradise
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="./blog.html" class="nav__link" target="_blank">Blog</a>
                        </li>
                        
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        
              <!---------- productdetails --------------->
                 <!---------1----------->

        <div class="product-card hidden" id="hiddenProductCard">
            
            <div class="close-button" id="closeButton">
                <i class="ri-arrow-go-back-line"></i>
            </div>
            <i class="ri-shopping-cart-fill"></i>
        <div class="product-card">
            <div class="logo-cart">
              <img src="assets/img/succulent-g54ebbb816_1920-removebg-preview.png" alt="" id="product1">
              
            </div>
           
            <div class="shoe-details">
              <span class="shoe_name"></span>
              <p>A cactus (pl: cacti, cactuses, or less commonly, cactus)[3] is a member of the plant family Cactaceae ,[a] a family comprising about 127 genera with some 1,750 known species of the order Caryophyllales.<b>To Know more</b> <b><a href="https://en.wikipedia.org/wiki/Cactus" target="_blank">Click Here</a></b></p>
              
            </div>
            <div class="color-price">
              <div class="color-option">
                <span class="color">Price:</span>
              </div>
              <div class="price">
                <span class="price_num">Rs.60</span>
                <span class="price_letter">One dollar only</span>
              </div>
            </div>
            <div class="button">
              <div class="button-layer"></div>
              <form action="pay.php" method="post">
              <button id="rzp-button1">Buy Now</button>
              </form>
            </div>
            
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jJTWQ2kbo7bvh6", // Enter the Key ID generated from the Dashboard
    "amount": "60", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Paradise", //your business name
    "description": "Test Transaction",
    "image": "<?php echo '<i class=\"ri-leaf-line nav__logo-icon\"></i>'; ?>",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
          </div>
        </div>
             <!------------------2------------------>
        <div class="product-card hidden" id="hiddenProductCard1">
            
            <div class="close-button" id="closeButton1">
                <i class="ri-arrow-go-back-line"></i>
            </div>
            <i class="ri-shopping-cart-fill"></i>
        <div class="product-card">
            <div class="logo-cart">
              <img src="assets/img/sarah-bronske-rGpZ6RKefXU-unsplash-removebg-preview.png" alt="" id="product2">
              
            </div>
           
            <div class="shoe-details">
              <span class="shoe_name"></span>
              <p>It is an evergreen perennial plant forming dense strands, spreading by way of its creeping rhizome, which is sometimes above ground, sometimes underground. Its stiff leaves grow vertically from a basal rosette. Mature leaves are dark green with light gray-green cross-banding.<b>To Know more</b> <b><a href="https://en.wikipedia.org/wiki/Dracaena_trifasciata" target="_blank">Click Here</a></b></p>
              
            </div>
            <div class="color-price">
              <div class="color-option">
                <span class="color">Price:</span>
              </div>
              <div class="price">
                <span class="price_num">Rs.120</span>
                <span class="price_letter">Two dollar only</span>
              </div>
            </div>
            <div class="button">
              <div class="button-layer"></div>
              <form action="pay.php" method="post">
              <button id="rzp-button2">Buy Now</button>
              </form>
            </div>
            
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jJTWQ2kbo7bvh6", // Enter the Key ID generated from the Dashboard
    "amount": "120", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Paradise", //your business name
    "description": "Test Transaction",
    "image": "<?php echo '<i class=\"ri-leaf-line nav__logo-icon\"></i>'; ?>",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button2').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
          </div>
        </div>
                <!-----------3------------------>
                <div class="product-card hidden" id="hiddenProductCard2">
            
                    <div class="close-button" id="closeButton2">
                        <i class="ri-arrow-go-back-line"></i>
                    </div>
                    <i class="ri-shopping-cart-fill"></i>
                <div class="product-card">
                    <div class="logo-cart">
                      <img src="assets/img/angelina-jollivet-mNEpmNiFdXs-unsplash-removebg-preview.png" alt="" id="product3">
                      
                    </div>
                   
                    <div class="shoe-details">
                      <span class="shoe_name"></span>
                      <p>A rose is either a woody perennial flowering plant of the genus Rosa ,[1] in the family Rosaceae ,[1] or the flower it bears. There are over three hundred species and tens of thousands of cultivars.[citation needed] They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles.<b>To Know more</b> <b><a href="https://en.wikipedia.org/wiki/Rose" target="_blank">Click Here</a></b></p>
                    </div>
                    <div class="color-price">
                      <div class="color-option">
                        <span class="color">Price:</span>
                      </div>
                      <div class="price">
                        <span class="price_num">Rs.90</span>
                        <span class="price_letter">One point Five Dollar only</span>
                      </div>
                    </div>
                    <div class="button">
                      <div class="button-layer"></div>
                      <form action="pay.php" method="post">
              <button id="rzp-button3">Buy Now</button>
              </form>
                    </div>
                    
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jJTWQ2kbo7bvh6", // Enter the Key ID generated from the Dashboard
    "amount": "90", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Paradise", //your business name
    "description": "Test Transaction",
    "image": "<?php echo '<i class=\"ri-leaf-line nav__logo-icon\"></i>'; ?>",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button3').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
                  </div>
                </div>
                  <!----------------------4------------------------>

                  <div class="product-card hidden" id="hiddenProductCard3">
            
                    <div class="close-button" id="closeButton3">
                        <i class="ri-arrow-go-back-line"></i>
                    </div>
                    <i class="ri-shopping-cart-fill"></i>
                <div class="product-card">
                    <div class="logo-cart">
                      <img src="assets/img/kristiana-pinne-JYXcI868N9g-unsplash-removebg-preview.png" alt="" id="product4">
                      
                    </div>
                   
                    <div class="shoe-details">
                      <span class="shoe_name"></span>
                      <p>Iris is a flowering plant genus of 310 accepted species[1] with showy flowers. As well as being the scientific name, iris is also widely used as a common name for all Iris species, as well as some belonging to other closely related genera.<b>To Know more</b> <b><a href="https://en.wikipedia.org/wiki/Iris_(plant)" target="_blank">Click Here</a></b></p>
                    </div>
                    <div class="color-price">
                      <div class="color-option">
                        <span class="color">Price:</span>
                      </div>
                      <div class="price">
                        <span class="price_num">Rs.300</span>
                        <span class="price_letter"> Five Dollar only</span>
                      </div>
                    </div>
                    <div class="button">
                      <div class="button-layer"></div>
                      <form action="pay.php" method="post">
              <button id="rzp-button4">Buy Now</button>
              </form>
                    </div>
                    
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jJTWQ2kbo7bvh6", // Enter the Key ID generated from the Dashboard
    "amount": "300", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Paradise", //your business name
    "description": "Test Transaction",
    "image": "<?php echo '<i class=\"ri-leaf-line nav__logo-icon\"></i>'; ?>",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button4').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
                  </div>
                </div>

                        <!-----------------5----------------->

                        <div class="product-card hidden" id="hiddenProductCard4">
            
                            <div class="close-button" id="closeButton4">
                                <i class="ri-arrow-go-back-line"></i>
                            </div>
                            <i class="ri-shopping-cart-fill"></i>
                        <div class="product-card">
                            <div class="logo-cart">
                              <img src="assets/img/hassan-pasha-jE4D7a8AvdQ-unsplash-removebg-preview.png" alt="" id="product5">
                              
                            </div>
                           
                            <div class="shoe-details">
                              <span class="shoe_name"></span>
                              <p>Lilium [3] is a genus of herbaceous flowering plants growing from bulbs, all with large prominent flowers. They are the true lilies. Lilies are a group of flowering plants which are important in culture and literature in much of the world.<b>To Know more</b> <b><a href="https://en.wikipedia.org/wiki/Lilium" target="_blank">Click Here</a></b></p>
                            </div>
                            <div class="color-price">
                              <div class="color-option">
                                <span class="color">Price:</span>
                              </div>
                              <div class="price">
                                <span class="price_num">Rs.180</span>
                                <span class="price_letter"> Three Dollar only</span>
                              </div>
                            </div>
                            <div class="button">
                              <div class="button-layer"></div>
                              <form action="pay.php" method="post">
              <button id="rzp-button5">Buy Now</button>
              </form>
                            </div>
                            
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jJTWQ2kbo7bvh6", // Enter the Key ID generated from the Dashboard
    "amount": "180", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Paradise", //your business name
    "description": "Test Transaction",
    "image": "<?php echo '<i class=\"ri-leaf-line nav__logo-icon\"></i>'; ?>",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button5').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
                          </div>
                        </div>
                            <!----------------6---------------------->
                            <div class="product-card hidden" id="hiddenProductCard5">
            
                                <div class="close-button" id="closeButton5">
                                    <i class="ri-arrow-go-back-line"></i>
                                </div>
                                <i class="ri-shopping-cart-fill"></i>
                            <div class="product-card">
                                <div class="logo-cart">
                                  <img src="assets/img/anna-meshkov-JkT_Du99c0U-unsplash-removebg-preview.png" alt="" id="product6">
                                  
                                </div>
                               
                                <div class="shoe-details">
                                  <span class="shoe_name"></span>
                                  <p>A poppy is a flowering plant in the subfamily Papaveroideae of the family Papaveraceae. Poppies are herbaceous plants, often grown for their colourful flowers. One species of poppy, Papaver somniferum, is the source of the narcotic drug mixture opium which contains powerful medicinal alkaloids such as morphine.<b>To Know more</b> <b><a href="https://en.wikipedia.org/wiki/Poppy" target="_blank">Click Here</a></b></p>
                                </div>
                                <div class="color-price">
                                  <div class="color-option">
                                    <span class="color">Price:</span>
                                  </div>
                                  <div class="price">
                                    <span class="price_num">Rs.420</span>
                                    <span class="price_letter"> Seven Dollar only</span>
                                  </div>
                                </div>
                                <div class="button">
                                  <div class="button-layer"></div>
                                  <form action="pay.php" method="post">
              <button id="rzp-button6">Buy Now</button>
              </form>
                                </div>
                                
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_jJTWQ2kbo7bvh6", // Enter the Key ID generated from the Dashboard
    "amount": "420", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Paradise", //your business name
    "description": "Test Transaction",
    "image": "<?php echo '<i class=\"ri-leaf-line nav__logo-icon\"></i>'; ?>",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button6').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
                              </div>
                            </div>
                    


        <main class="main">
        
            <div class="existing-content">
                <div class="succ">
                <div class="success-container" id="success-container" style="<?php if ($showsuccess) echo 'display: block;'; else echo 'display: none;'; ?>">
        <div class="success-icon">&#10004;</div>
        <h2 class="success-title">Success!</h2>
        <p class="success-message">Your message has been successfully submitted.</p>
        <button class="success-button" onclick="closeSuccess()">OK</button>
    </div>
                </div>
            
                <div class="home__container container grid">
                    <img src="assets/img/natalia-y-Qin3ErJoMdA-unsplash-removebg-preview.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Plants will make <br> your life better
                        </h1>
                        <p class="home__description">
                            Create incredible plant design for your offices or apastaments. 
                            Add fresness to your new ideas.
                        </p>
                        <a href="#about" class="button button--flex">
                            Scroll Down <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                            We have over 4000+ unbiased reviews and our customers 
                            trust our plant process and delivery service every time
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always deliver on time.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to protect and care for your plants.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always come over for a check-up after sale.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="#" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>
            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Steps to start your <br> plants off right
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Choose Plant</h3>
                            <p class="steps__card-description">
                                We have several varieties plants you can choose from.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Place an order</h3>
                            <p class="steps__card-description">
                                Once your order is set, we move to the next step which is the shipping.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Get plants delivered</h3>
                            <p class="steps__card-description">
                                Our delivery process is easy, you receive the plant direct to your door.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> products
                </h2>

                <p class="product__description">
                    Here are some selected plants from our showroom, all are in excellent 
                    shape and has a long life span. Buy and enjoy best quality.
                </p>

                <div class="product__container grid">
                    <article class="product__card" id="productCard">
                        <div class="product__circle"></div>

                        <img src="assets/img/succulent-g54ebbb816_1920-removebg-preview.png" alt="" class="product__img">

                        <h3 class="product__title">Cactus Plant</h3>
                        <span class="product__price">Rs.60</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card" id="productCard1">
                        <div class="product__circle"></div>

                        <img src="assets/img/sarah-bronske-rGpZ6RKefXU-unsplash-removebg-preview.png" alt="" class="product__img">
                        <h3 class="product__title">Snake Plant</h3>
                        <span class="product__price">Rs.120</span>

                        <button class="button--flex product__button" id="a">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card" id="productCard2">
                        <div class="product__circle"></div>

                        <img src="assets/img/angelina-jollivet-mNEpmNiFdXs-unsplash-removebg-preview.png" alt="" class="product__img">

                        <h3 class="product__title">Rose Tree</h3>
                        <span class="product__price">Rs.90</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                    

                    <article class="product__card" id="productCard3">
                        <div class="product__circle"></div>

                        <img src="assets/img/kristiana-pinne-JYXcI868N9g-unsplash-removebg-preview.png" alt="" class="product__img">

                        <h3 class="product__title">Iris Flower</h3>
                        <span class="product__price">Rs.300</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card" id="productCard4">
                        <div class="product__circle"></div>

                        <img src="assets/img/hassan-pasha-jE4D7a8AvdQ-unsplash-removebg-preview.png" alt="" class="product__img">

                        <h3 class="product__title">Lily</h3>
                        <span class="product__price">Rs.180</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card" id="productCard5" >
                        <div class="product__circle"></div>

                        <img src="assets/img/anna-meshkov-JkT_Du99c0U-unsplash-removebg-preview.png" alt="" class="product__img">

                        <h3 class="product__title">Poppy</h3>
                        <span class="product__price">Rs.420</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>
            <div class="overlay" id="productCardOverlay"></div>
            <div class="overlay1" id="productCardOverlay1"></div>
            <div class="overlay2" id="productCardOverlay2"></div>
            <div class="overlay3" id="productCardOverlay3"></div>
            <div class="overlay4" id="productCardOverlay4"></div>
            <div class="overlay5" id="productCardOverlay5"></div>

  
            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    My flowers are falling off or dying?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes leaves to become pale?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes brown crispy leaves?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do i choose a plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do I change the pots?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Why are gnats flying around my plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    +91 8696447482
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    satyammaurya9620@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="/project/index.php" class="contact__form" method="post">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input" name="email">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input" name="subject">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button class="button button--flex" id="btn">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                    
    
    <script>
        function closeSuccess() {
            var successContainer = document.getElementById("success-container");
            successContainer.style.display = "none";
        }
    </script>
                </div>
            </section>
            </div>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Paradise
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                       
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                        
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">IIIT RANCHI</li>
                        <li class="footer__information">00000</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+999</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; Paradise. All rigths reserved</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <!--=============== cart JS ===============-->
        <script src="assets/js/shop.js"></script>
    </body>
</html>