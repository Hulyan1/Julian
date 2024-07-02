<?php 
    session_start();

    // checks if the  user is login in a device
    if(isset($_SESSION['username']) || isset($_SESSION['email'])){
        header("Location: PHP/adminhub/index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/> 
        <link rel="stylesheet" href="../../CSS/shop.css">
        <title>Document</title>
    </head>
    <body>  
        <header>
            <div class="div1"> 
                <a href="../../index.php">
                    <img src="../../IMG/dino.png" alt="">
                </a>
            </div>
            <div class="div2">
                <div class="navbar">
                    <nav>
                        <ul class="links">
                            <div class="group">
                                <li>
                                    <a href="../../index.php">Home</a>
                                </li>
                                <li>
                                    <a href="gearlibrary.php">Gear Library</a>
                                </li>
                                <li>
                                    <a href="community.php">EIM Community</a>
                                </li>
                                <li>
                                    <a href="customize.php">Customize</a>
                                </li>
                                <li>
                                    <a href="shop.php">Shop</a>
                                </li>
                            </div>
                        </ul>
                    </nav>

                    <div class="logn">
                        <a href="signup_login.php" ><i class="fa-solid fa-right-to-bracket"></i><a>
                    </div>
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
                            <a href="cart.php">
                                <button class="cart"><i class="fa-solid fa-cart-shopping"></i>Add To Cart</button>
                            </a>
                            <button class="cart" onclick="location.href='../../payment gateway/index.php'">Check Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>   
        <div class="order_all">
            <a href="">
                <div class="order_img">
                    <img src="../../IMG/order11.png" alt="">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="order_img">
                    <img src="../../IMG/order7.png" alt="" class="img2">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="order_img">
                    <img src="../../IMG/order6.png" alt="" class="img3">
                    <div class="order-info">
                        <h3 class="order-name">Moonlight</h3>
                        <h4 class="order-price">₱10,899</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="order_img">
                    <img src="../../IMG/order10.png" alt="" class="img4">
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