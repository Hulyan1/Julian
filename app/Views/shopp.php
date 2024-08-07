<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/shopp.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/footer.css") ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script defer src=" <?= base_url("assets/js/script2.js") ?>"></script>
    <title>INM Shop</title>
</head>
<body>
    <header>
        <div class="header-text">
            <h2>Your Music, Your World, Unplugged.</h2>
            <h1>Elevate your Experience</h1>
        </div>

        <nav>   
                <div class="logo">
                    <a href="./index.php">
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
    
    <div class="shop">
        <div class="shop-title">
            <h2>Shop</h2>
            <a href=" <?= base_url("/shop/cart") ?>"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>


        <div class="card-container">
            <div class="library-card">
                <img src=" <?= base_url("assets/img/p1.png") ?>" alt="">
                <h3>Musical Gear</h3>
                <h4>₱10,000</h4>
                <button data-modal-target="#modal" class="btn">Add To Card</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="product-img" title>
                            <img src="<?= base_url("assets/img/order6.png") ?>" alt="">
                        </div>
                        <div class="product-details">
                            <p>Liberty 1965</p>
                            <h3>₱10,000</h3>  
                            <div class="dropdown-container">
                                <label for="size">Size</label>
                                <select id="size" name="size">
                                    <option>Select</option>
                                    <option>Small</option>
                                </select>
                            </div>  
                            <div class="quantity">
                                <h3>Quantity</h3>
                                <input class="number-input" type="number">
                            </div>
                            <div class="cart-button">
                                <div class="cart">
                                    <a href="<?= base_url("/shop/cart") ?>">
                                        <button>Add to Cart</button>
                                    </a>
                                </div>
                                <div class="buy">
                                    <a href=" <?= base_url("/shop/buynow") ?>">
                                        <button>Buy Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <!-- <div class="modal-body">
                        <img src="img/iem.png" alt="">
                        <h3>Lorem</h3>
                    </div>   -->
                </div>
            </div>

            <div class="library-card">
                <img src=" <?= base_url("assets/img/p1.png") ?>" alt="">
                <h3>Musical Gear</h3>
                <h4>₱10,000</h4>
                <button data-modal-target="#modal" class="btn">Add To Card</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Musical</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= base_url("assets/img/iem.png") ?>" alt="">
                        <h3>Lorem</h3>
                    </div>  
                </div>
            </div>

            <div class="library-card">
                <img src=" <?= base_url("assets/img/p1.png") ?>" alt="">
                <h3>Musical Gear</h3>
                <h4>₱10,000</h4>
                <button data-modal-target="#modal" class="btn">Add To Card</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Musical</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= base_url("assets/img/iem.png") ?>" alt="">
                        <h3>Lorem</h3>
                    </div>  
                </div>
            </div>

            <div class="library-card">
                <img src="<?= base_url("assets/img/p1.png") ?>" alt="">
                <h3>Musical Gear</h3>
                <h4>₱10,000</h4>
                <button data-modal-target="#modal" class="btn">Add To Card</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Musical</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= base_url("assets/img/iem.png") ?>" alt="">
                        <h3>Lorem</h3>
                    </div>  
                </div>
            </div>

            <div class="library-card">
                <img src=" <?= base_url("assets/img/p1.png") ?>" alt="">
                <h3>Musical Gear</h3>
                <h4>₱10,000</h4>
                <button data-modal-target="#modal" class="btn">Add To Card</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Musical</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src=" <?= base_url("assets/img/iem.png") ?>" alt="">
                        <h3>Lorem</h3>
                    </div>  
                </div>
            </div>

            <div class="library-card">
                <img src="<?= base_url("assets/img/p1.png") ?>" alt="">
                <h3>Musical Gear</h3>
                <h4>₱10,000</h4>
                <button data-modal-target="#modal" class="btn">Add To Card</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Musical</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= base_url("assets/img/iem.png") ?>" alt="">
                        <h3>Lorem</h3>
                    </div>  
                </div>
            </div>
            <div id="overlay"></div>
        </div>  
    </div>

    <div class="line"></div>
        
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