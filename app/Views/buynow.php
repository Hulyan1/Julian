<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url("assets/css/buynow.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/footer.css") ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script defer src=" <?= base_url("assets/js/script2.js") ?>"></script>

    <title>Checkoout</title>
</head>
<body>
<header>
    <div class="container">
      <div class="navigation">

        <div class="logo">
          <a href="<?= base_url("/") ?>">
            <img src=" <?= base_url("assets/img/301117165_464244785717653_8213835756832948193_n-removebg-preview.png") ?>" alt="">
          </a>
        </div>
        <div class="secure">
          <i class="icon icon-shield"></i>
          <span>Secure Checkout</span>

        </div>
      </div>

      <div class="address">
        <div class="address-text">
          <i class="fa-solid fa-location-pin"></i>
          <h4>Delivery Address</h4>
        </div>
        
        <div class="addres-info">
          <p>Full Name-------Phone number</p>
          <p>(address) Lorem ipsum dolor sit amet.</p>
          <p>Default</p>
          <button>Change</button>
        </div>
      </div>

    </div>
  </header>
  <section class="content">

    <div class="container">
  
    </div>
    <div class="details shadow">
      <div class="details__item">
  
        <div class="item__image">
          <img class="earphone" src="/img/try1.png" alt="">
        </div>
        <div class="item__details">
          <div class="item__title">
            Earphone
          </div>
          <div class="item__price">
            ₱ 10,000
          </div>
          <div class="item__quantity">
            Quantity: 1
          </div>
          <div class="item__description">
  
          </div>
        </div>
      </div>
    </div>
  
    <div class="discount"></div>
    
    <div class="container">
      <div class="payment">
        <div class="payment__title">
          Payment Method
        </div>
        <div class="payment-types">
          <button onclick="filterItems('cod')">Cash on Delivery</button>
          <button onclick="filterItems('gcash')">Gcash</button>
          <button onclick="filterItems('paypal')">Paypal</button>
          <button onclick="filterItems('bank')">Online Banking</button>
        </div>
      </div>
    </div>

        <div class="card-block">
          <div class="card cod">
            <h3>Cash on Delivery</h3>
          </div>

          <div class="card gcash">  
              <input type="checkbox">
              <img src="../img/payment/gcash.png" alt="">
          </div>

          <div class="card paypal">
            <input type="checkbox">
            <img src="../img/payment/paypal.png" alt="">
          </div>

          <div class="bank">
            <input type="checkbox">
            <img src="../img/payment/banktransfer.png" alt="">
          </div>
        </div>
  
  
        <div class="payment-done">
          <a href="#" class="btn action__submit">Place your Order
            <i class="icon icon-arrow-right-circle"></i>
          </a>
          <a href="shopp.php" class="backBtn">Go Back to Shop</a>
        </div>
  </section>

    
</body>
<script>
    function filterItems(category) {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (card.classList.contains(category)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
</html>