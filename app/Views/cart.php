<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/cart.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/footer.css") ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script defer src=" <?= base_url("assets/js/script2.js") ?>"></script>

    <title>Cart</title>
</head>

<body>
    <header>
        <div class="header-text">
            <h2>Your Music, Your World, Unplugged.</h2>
            <h1>Elevate your Experience</h1>
        </div>

        <nav>   
                <div class="logo">
                    <a href="<?= base_url("/") ?>">
                        <img src=" <?= base_url("assets/img/301117165_464244785717653_8213835756832948193_n-removebg-preview.png") ?>" alt="">
                    </a>
                </div>

                <ul class="links">
                    <li>
                        <a href="<?= base_url("/") ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?= base_url("/library") ?>">Gear Library</a>    
                    </li>

                    <li>
                        <a href="<?= base_url("/community") ?>">IEM Community</a>            
                    </li>

                    <li>
                        <a href="<?= base_url("/customize") ?>">Customize</a> 
                    </li>

                    <li>
                        <a class="shop" href="<?= base_url("/shop") ?>">Shop</a> 
                    </li>

                    <div class="logn">
                        <a href="<?= base_url("/account") ?>"><i class="fa-solid fa-user-plus"></i></a>
                    </div>
                </ul>
            </nav>
    </header>

    <div class="cart">
        <div class="cart-title">
            <h2>Cart</h2>
        </div>

        <div class="cart-container">
            <div class="cart-header">
                <div class="header-product">
                    <input type="checkbox">
                    <h4>Product</h4>
                </div>

                <div class="cart-others">
                    <h3>Unit Price</h3>
                    <h3>Quantity</h3>
                    <h3>Total Price</h3>
                    <h3>Actions</h3>
                </div>
            </div>


            <div class="cart-body">
                <div class="cart-product">
                    <input type="checkbox">
                    <div class="bobo">
                        <img src=" <?= base_url("assets/img/comm2.jpg") ?>" alt="">
                        <p>Lorem ipsum dolor <br> sit amet</p>
                    </div>

                    <div class="category">
                        <div class="price">
                            <p>₱10,000</p>
                        </div>
                        <div class="quantity">
                            <input type="number">
                        </div>
                        <div class="totalp">
                            <p>₱10,000</p>
                        </div>
                        <div class="actions">
                            <a href="">
                                <button>Delete</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <br><br><br>
    <hr>
    <footer>
                <div class="footer-logo">
                    <h2>INM Audio</h2>
                </div>
                
                    <ul class="link-a">
                        <li>
                            <a href="<?= base_url("/") ?>">Home</a>
                        </li>

                        <li>
                            <a href=" <?= base_url("/library") ?>">Gear Library</a>
                        </li>

                        <li>
                            <a href="<?= base_url("/community") ?>">IEM Community</a>
                        </li>

                        <li>
                            <a href="<?= base_url("/customize") ?>">Customize</a>
                        </li>

                        <li>
                            <a href=" <?= base_url("/shopp") ?>">Shop</a>
                        </li>   
                    </ul>
                
                <div class="media">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
                
                
            </footer>
</body>
</html>