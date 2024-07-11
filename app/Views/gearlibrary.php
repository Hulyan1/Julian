

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css')?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/gearlibrary.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>INM AUDIO</title>

        <style>
            header{
                height: 95vh;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url("<?= base_url('assets/images/landing.webp')?>");
                background-size: cover;
                background-position: bottom;
                position: relative;
            }   
        </style>
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <a href="<?= base_url('/') ?>">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
                    </a>
                </div>
                <ul class="links">
                    <li>
                        <a href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/gearlibrary') ?>">Gear Library</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/community') ?>">EIM Community</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/customize') ?>">Customize</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/shop') ?>">Shop</a>
                    </li>
                    
                    <div class="logn">
                        <a href="<?= base_url('/signup_login') ?>" ><i class="fa-solid fa-user-plus"></i></a>
                    </div>
                </ul>
            </nav>  
        </header>
        
        <div class="gear-library">
            <div class="gear-title">
                <h1>Gear Library</h1>
            </div>
            <div class="gear-card">  
                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>

                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>

                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>

                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>

                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>

                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>

                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>
                
                <a href="#" class="card">
                    <img src="<?= base_url('assets/images/musical.png') ?>" alt="">
                    <h3>Musical</h3>
                </a>
                
            </div>
        </div>
        <div class="library-highlights">
            <div class="img-block">
                <img src="<?= base_url('assets/images/clear.png') ?>" alt="">
            </div>

            <div class="gear-details">
                <div class="gear-text">
                    <h2>Indie</h2>
                    <div class="txt">
                        <p>Liedat Jordan</p>
                        <p>INM Customize</p>
                    </div>
                    <p>₱14,599</p>
                </div>
                <br>
                <div class="gear-b">
                    <div class="bar">
                        <img src="<?= base_url('assets/images/barcode.png') ?>" alt="">
                    </div>
                    <div class="gear-button">
                        <a href="#" class="view">View Details</a>
                        <div class="gear-btn">
                            <a href="#"><i class="fa-regular fa-heart"></i>Favorite</a>
                            <a href="#"><i class="fa-solid fa-cart-shopping"></i> Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="audio-prof">
            <h1>Audio Profiling system</h1>
            <div class="question">
                <h3>What genre of music is your favorite?</h3>
        
                <div class="q-box">
                    <a href="#">Classical</a>
                    <a href="#">Rock</a>
                    <a href="#">Metal</a>
                    <a href="#">Kpop</a>
                </div>
            </div>
        </div>
    </body>
    </html>