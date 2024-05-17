<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelling Website</title>
    <link rel="stylesheet" href="index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Dancing+Script:wght@700&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav>
            <div class="logo">
                <h1>Travels</h1>
            </div>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#best">Places</a></li>
                <li><a href="#package">Package's</a></li>
                <li><a href="#review">Client's</a></li>
            </ul>
            
            <div>
                <a href="logout.php"><button>Logout</button></a>
            </div>

        </nav>

        <div class="main">
            <div class="mainText">
                <!-- <h1>Hey! Welcome Saurabh, <br> Here you enjoy your <br>Exciting packages and tours.</h1> -->
                
            <?php
                // Start session (if not already started)
                session_start();

                // Check if the user is logged in
                if(isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                echo "Hello, welcome $email!"; // Display personalized welcome message

                } else {
                echo "Hello, welcome guest!"; // Display a generic welcome message for guests
                }
            ?>

                <p>Hey!! Welcome sir, <br> Here you can the see the Awesome packages and places for your Amazing tours.</p><br>
            </div>

            <img src="image/pic.png" alt="Girl">

            <i id="hills" class="fa-solid fa-mountain"></i>
        </div>

        <div class="best" id="best">
            <div class="head">
                <h1>Best <span>Destination Places</span></h1>
            </div>
            <div class="places">
                <div class="card">
                    <img src="image/Dubai.webp" alt="">
                    <p><strong>Visit Dubai</strong></p>
                    <p><strong>Starting ₹500000</strong></p>
                </div>
                <div class="card">
                    <img src="image/york.jpg" alt="">
                    <p><strong>Visit New york</strong></p>
                    <p><strong>Starting ₹50000</strong></p>
                </div>
                <div class="card">
                    <img src="image/kedaarnath.jpg" alt="">
                    <p><strong>Visit Kedarnath</strong></p>
                    <p><strong>Starting ₹500000</strong></p>
                </div>
            </div>
        </div>

        <div class="pack" id="package">
            
            <div class="head">
                <h1>Complete <span>Package</span></h1>
            </div>

            <div class="packages">
                
                <div class="packCard">
                    <img src="image/Dubai1.jpg" alt="">
                    <p><strong>Dubai Tour</strong></p>
                    <p><strong>₹500000</strong></p>
                   
                    <div>
                        <a href="dubai.html"><button>Explore</button></a>
                    </div>

                </div>

                <div class="packCard">
                    <img src="image/york1.jpg" alt="">
                    <p><strong>New york Tour</strong></p>
                    <p><strong>₹250000</strong></p>

                    <div>
                        <a href="newyork.html"><button>Explore</button></a>
                    </div>

                </div>

                <div class="packCard">
                    <img src="image/kedarnath.webp" alt="">
                    <p><strong>Kedarnath Tour</strong></p>
                    <p><strong>₹10000</strong></p>
                    
                    <div>
                        <a href="kedarnath.html"><button>Explore</button></a>
                    </div>

                </div>

                <div class="packCard">
                    <img src="image/Delhi.jpg" alt="">
                    <p><strong>Delhi Tour</strong></p>
                    <p><strong>₹15000</strong></p>
                    
                    <div>
                        <a href="delhi.html"><button>Explore</button></a>
                    </div>

                </div>

                <div class="packCard">
                    <img src="image/mumbai.avif" alt="">
                    <p><strong>Mumbai Tour</strong></p>
                    <p><strong>₹20000</strong></p>
                    
                    <div>
                        <a href="mumbai.html"><button>Explore</button></a>
                    </div>

                </div>

                <div class="packCard">
                    <img src="image/kashmir.jpg" alt="">
                    <p><strong>Kashmir Tour</strong></p>
                    <p><strong>₹25000</strong></p>
                    
                    <div>
                        <a href="kashmir.html"><button>Explore</button></a>
                    </div>

                </div>
            </div>
        </div>

        <div class="slide" id="review">
            <div class="head">
                <h1>Client <span>Review's</span></h1>
            </div>

            <div class="clients">
                <div class="review">
                    <img src="image/slide1.webp" alt="01">
                    <p>Very Nice places</p>
                </div>

                <div class="review">
                    <img src="image/slide2.jpg" alt="02">
                    <p>Very Amazing packages</p>
                </div>

                <div class="review" id="review">
                    <img src="image/slide3.jpg" alt="03">
                    <p>Nice places</p>
                </div>

                <div class="review">
                    <img src="image/slide4.avif" alt="04">
                    <p>Awesome places and packages</p>
                </div>

                <div class="review">
                    <img src="image/slide5.jpg" alt="05">
                    <p>Great & Exciting places and package</p>
                </div>

            </div>
        </div>

        <div class="footer">
            <div class="text">
                <h3><U>COMPANY</U></h3>
                <p>Best Price</p>
                <p>Affordable</p>
                <p>Price</p>
                <p>Quality</p>
            </div>

            <div class="text">
                <h3><U>PACKAGES</U></h3>
                <p>Full Tour</p>
                <p>Best Food</p>
                <p>Awesome</p>
                <p>Hotels</p>
            </div>

            <div class="text">
                <h3><U>OFFER</U></h3>
                <p>Tours</p>
                <p>Goodies</p>
                <p>Package</p>
                <p>Less Price</p>
            </div>

            <div class="text">
                <h3><U>CONNECT US</U></h3>
                <a href="https://www.instagram.com/_dhruvchauhan_19?igsh=OGQ5ZDc2ODk2ZA=="><p>Instagram</p></a>
                <a href="https://www.snapchat.com/add/dhruvchauhan_19?share_id=kM8v9-U6KjA&locale=en-US"><p>Snapchat</p></a>
                <a href="https://x.com/dhruvchauhan_19?t=RSbrioJZUoynGJz747uQtA&s=09"><p>Twitter</p></a>
                <a href="https://chat.whatsapp.com/BAd7eSediG75qWz8nhBouQ"><p>Whatsapp</p></a>
            </div>

        </div>

    </div>

    <script src="index.js"></script>
</body>

</html>