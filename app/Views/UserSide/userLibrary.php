<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/library.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/footer.css") ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script defer src="<?= base_url("assets/js/script1.js") ?>"></script>
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
                    <a href="<?= base_url("/Home") ?>">
                        <img src=" <?= base_url("assets/img/301117165_464244785717653_8213835756832948193_n-removebg-preview.png") ?>" alt="">
                    </a>
                </div>

                <ul class="links">
                    <li>
                        <a href="<?= base_url("/Home") ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?= base_url("/Library") ?>">Gear Library</a>    
                    </li>

                    <li>
                        <a href="<?= base_url("/Community") ?>">IEM Community</a>            
                    </li>

                    <li>
                        <a href="<?= base_url("/Customize") ?>">Customize</a> 
                    </li>

                    <li>
                        <a class="shop" href="<?= base_url("/Shop") ?>">Shop</a> 
                    </li>

                    <div class="logn">
                        <a href="<?= base_url("/AccountSettings") ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg></a>
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
                    <img src=" <?= base_url("assets/img/p1.png") ?> " alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

                    <div class="modal" id="modal">
                        <div class="modal-header">
                            <div class="title">Musical</div>
                            <button data-close-button class="close-button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <img src="<?= base_url("") ?>" alt="">
                            <h3>Lorem</h3>
                        </div>  
                    </div>
                </div>

                <div class="library-card">
                    <img src="<?= base_url("assets/img/p1.png") ?>" alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

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
                    <button data-modal-target="#modal">Others</button>

                    <div class="modal" id="modal">
                        <div class="modal-header">
                            <div class="title">Musical</div>
                            <button data-close-button class="close-b">&times;</button>
                        </div>
                        <div class="modal-body">
                            <img src="  <?= base_url("assets/img/iem.png") ?>" alt="">
                            <h3>Lorem</h3>
                        </div>  
                    </div>
                </div>

                <div class="library-card">
                    <img src=" <?= base_url("assets/img/p1.png") ?>" alt="">
                    <h3>Musical Gear</h3>
                    <button data-modal-target="#modal">Others</button>

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