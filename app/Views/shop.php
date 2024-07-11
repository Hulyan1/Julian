

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/> 
        <link rel="stylesheet" href="<?= base_url('assets/css/shop.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">

        <title>Document</title>
        <style>
            .div1{ background-image: url("<?= base_url('assets/images/bg_order1.jpg') ?> "); }
            .order_all .order_img { background-image: url("<?= base_url('assets/images/bg_order1.jpg') ?> ");}
        </style>
    </head>
    <body>  
        <header>
            <div class="div1"> 
                <a href="<?= base_url('/') ?>">
                    <img src="<?= base_url('assets/images/dino.png') ?>" alt="">
                </a>
            </div>
            <div class="div2">
                <div class="navbar">
                    <nav>
                        <ul class="links">
                            <li>
                                <a href="<?= base_url('/') ?>" style="color: black">Home</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/gearlibrary') ?>" style="color: black">Gear Library</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/community') ?>" style="color: black">EIM Community</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/customize') ?>" style="color: black">Customize</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/shop') ?>" style="color: black">Shop</a>
                            </li>
                            
                            <div class="logn">
                                <a href="<?= base_url('/signup_login') ?>" ><i class="fa-solid fa-user-plus"></i></a>
                            </div>
                        </ul>
                    </nav>

                </div>
                <div class="order_text">
                    <h1>Google</h1>
                    <h1>Dino-Net</h1>
                    <br>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita archi.</p>
                        <br>
                    <h3>₱ <span>10,999</span></h3>
                    <br>
                    <div class="order_button">
                        <button>-</button>
                        <span>0</span>
                        <button>+</button>
                        <div class="buy">
                            <a href="<?= base_url('/cart')?>">
                                <button class="cart"><i class="fa-solid fa-cart-shopping"></i>Add To Cart</button>
                            </a>
                            <button class="cart" onclick="location.href=''">Check Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>   
        <div class="order_all">
            <a href="">
                <div class="order_img">
                    <img src="<?= base_url('assets/images/order11.png')?>" alt="">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="order_img">
                    <img src="<?= base_url('assets/images/order7.png')?>" alt="" class="img2">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="order_img">
                    <img src="<?= base_url('assets/images/order6.png')?>" alt="" class="img3">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="order_img">
                    <img src="<?= base_url('assets/images/order10.png')?>" alt="" class="img4">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
        </div>

        <footer style="padding: 20px;">
        </footer>
        
    </body>
</html>