
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/community.css') ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>INM Audio</title>

        <style>
            header{
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url("<?= base_url('assets/images/commlogo.webp')?>");  
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

            <div class="landing-text">
                <h1>IEM COMMUNITY</h1>
                <h3>Immerse in Pure Sound: Elevate Your Audio Experience with IEM Earphones</h3>
            </div>
        </header>

        <div class="product">
            <div class="earphone">
                <img src="<?= base_url('assets/images/galaxy.png') ?>" alt="">
            </div>
            <div class="ptext">
                <h3>Classic Blue Galaxy</h3>
                <h5>Sound like opera</h5>
            </div>
        </div>

        <div class="creview">
            <div class="revs">
                <h2>Community Reviews</h2>
    
                <div class="reviews">
                    <div class="container">
                        <div class="card">
                            <div class="user">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h4>Juan Gabriel</h4>
                            <p class="comments">Quality is Great</p>
                        </div>
                        <div class="card">
                            <div class="user">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h4>Lebron Germs</h4>
                            <p class="comments">Quality is Great</p>
                        </div>
                    </div>
    
                    
                    <div class="container">
                        <div class="card">
                            <div class="user">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h4>Yuri Bagtas</h4>
                            <p class="comments">Quality is Great</p>
                        </div>
                        <div class="card">
                            <div class="user">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h4>Hulyan Mesi</h4>
                            <p class="comments">Quality is Great</p>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="comment">
                <!-- <h1>Comment your Feedback here!</h1> -->
                <!-- <label for="comment">Comment your Feedback here!</label> -->
                <div class="user">
                    <i class="fa-solid fa-user"></i>
                </div>
                <input type="text" name="comment" placeholder="Enter your Comment">
                <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </body>
</html>