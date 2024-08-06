<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/library.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script defer src="../views/script1.js"></script>
    <title>Gear Library</title>
</head>

<body>
    <header>
            <div class="header-text">
                <h2>Your Music, Your World, Unplugged.</h2>
                <h1>Elevate your Experience</h1>
            </div>

            <nav>
                <div class="logo">
                    <a href="../index.php">
                        <img src="../img/301117165_464244785717653_8213835756832948193_n-removebg-preview.png" alt="">
                    </a>
                </div>

                <ul class="links">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>

                    <li>
                        <a href="../views/library.php">Gear Library</a>    
                    </li>

                    <li>
                        <a href="../views/comm.php">IEM Community</a>            
                    </li>

                    <li>
                        <a href="">Customize</a> 
                    </li>

                    <li>
                        <a class="shop" href="../views/shopp.php">Shop</a> 
                    </li>

                    <div class="logn">
                        <a href=""><i class="fa-solid fa-user-plus"></i></a>
                    </div>
                </ul>
            </nav>
        </header>

        <div class="library">
            <div class="library-title">
                <h2>Gear Libary</h2>
            </div>

            <div class="card-container">
                <div class="library-card">
                    <img src="../img/p1.png" alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

                    <div class="modal" id="modal">
                        <div class="modal-header">
                            <div class="title">Musical</div>
                            <button data-close-button class="close-button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <img src="" alt="">
                            <h3>Lorem</h3>
                        </div>  
                    </div>
                </div>

                <div class="library-card">
                    <img src="../img/p1.png" alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

                    <div class="modal" id="modal">
                        <div class="modal-header">
                            <div class="title">Musical</div>
                            <button data-close-button class="close-button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <img src="img/iem.png" alt="">
                            <h3>Lorem</h3>
                        </div>  
                    </div>
                </div>

                <div class="library-card">
                    <img src="../img/p1.png" alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

                    <div class="modal" id="modal">
                        <div class="modal-header">
                            <div class="title">Musical</div>
                            <button data-close-button class="close-b">&times;</button>
                        </div>
                        <div class="modal-body">
                            <img src="img/iem.png" alt="">
                            <h3>Lorem</h3>
                        </div>  
                    </div>
                </div>

                <div class="library-card">
                    <img src="../img/p1.png" alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

                    <div class="modal" id="modal">
                        <div class="modal-header">
                            <div class="title">Musical</div>
                            <button data-close-button class="close-button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <img src="img/iem.png" alt="">
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
                            <a href="./index.php">Home</a>
                        </li>

                        <li>
                            <a href="./views/library.php">Gear Library</a>
                        </li>

                        <li>
                            <a href="./views/community.php">IEM Community</a>
                        </li>

                        <li>
                            <a href="">Customize</a>
                        </li>

                        <li>
                            <a href="../views/shop.php">Shop</a>
                        </li>   
                    </ul>
                
                <div class="media">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
                
            </footer>
    </body>

</html>