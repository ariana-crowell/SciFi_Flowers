<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
        <style>
            .col-md-2 {
                color:whitesmoke;
                background-color:#ccc;

                
            }
            .aboutus {
          font-family: Jacques Francois Shadow;
          color:whitesmoke;
        }
        .shop{
            background-color:rgba(59, 58, 57, 0.7);
        }
    

        </style>
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <center><h1 class="aboutus">Shop Now</h1></center>
        <br>
        <br>
        <main>
            <div class="row ">
            <div class="col-md-1"></div>
                <div class="col-md-2">
                    <p class="padding">Purple Peony</p>
                    <button class="btn btn-dark" onclick="addToCart('Purple Peony', 27)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Grey-Blue Peony</p>
                    <button class="btn btn-dark" onclick="addToCart('Grey-Blue Peony', 31)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Orange-Yellow Peony</p>
                    <button class="btn btn-dark" onclick="addToCart('Orange-Yellow Peony', 29)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Pink Peony</p>
                    <button class="btn btn-dark" onclick="addToCart('Pink Peony', 29)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Green Peony</p>
                    <button class="btn btn-dark" onclick="addToCart('Green Peony', 27)">Add to Cart</button>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="cart">
                
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <p class="padding">Purple Lily</p>
                    <button class="btn btn-dark" onclick="addToCart('Purple Lily', 25)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Grey-Blue Lily</p>
                    <button class="btn btn-dark" onclick="addToCart('Grey-Blue Lily', 29)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Orange-Yellow Lily</p>
                    <button class="btn btn-dark" onclick="addToCart('Orange-Yellow Lily', 27)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Pink Lily</p>
                    <button class="btn btn-dark" onclick="addToCart('Pink Lily', 27)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Green Lily</p>
                    <button class="btn btn-dark" onclick="addToCart('Green Lily', 25)">Add to Cart</button>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <p class="padding">Purple Rose</p>
                    <button class="btn btn-dark" onclick="addToCart('Purple Rose', 23)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Grey-Blue Rose</p>
                    <button class="btn btn-dark" onclick="addToCart('Grey-Blue Rose', 27)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Orange-Yellow Rose</p>
                    <button class="btn btn-dark" onclick="addToCart('Orange-Yellow Rose', 25)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Pink Rose</p>
                    <button class="btn btn-dark" onclick="addToCart('Pink Rose', 25)">Add to Cart</button>
                </div>
                <div class="col-md-2">
                    <p class="padding">Green Rose</p>
                    <button class="btn btn-dark" onclick="addToCart('Green Rose', 23)">Add to Cart</button>
                </div>
                <div class="col-md-1"></div>
            </div>
<br>
          <center>
            <section class="cart red-black-buy">
                <div class="container shop">
                <h2 class="aboutus">Shopping Cart</h2>
                    <div id="cartItems"></div>
                    <p>Total: $<span id="totalPrice">0</span></p>
                    <a href="checkout.php"><button class="checkout-btn btn btn-dark">Checkout</button></a>
                </div>              
          </section>
    </center>
          <script>
              let cart = [];
              let total = 0;
      
              function addToCart(alien, price) {
      
                  cart.push({ alien, price });
                  total += price;
      
                  if (alien === 'Galactic Bundle') {
                      galacticBundleCount++;
                  }
      
                  updateCartDisplay();
              }
      
              function updateCartDisplay() {
                  const cartItemsDiv = document.getElementById('cartItems');
                  cartItemsDiv.innerHTML = '';
                  cart.forEach(item => {
                      const cartItemDiv = document.createElement('div');
                      cartItemDiv.classList.add('cart-item');
                      cartItemDiv.innerHTML = `
                          <span>${item.alien} - $${item.price}</span>
                          <button onclick="removeFromCart('${item.alien}', ${item.price})">Remove</button>
                      `;
                      cartItemsDiv.appendChild(cartItemDiv);
                  });
      
                  document.getElementById('totalPrice').innerText = total;
              }
      
              function removeFromCart(alien, price) {
                  const index = cart.findIndex(item => item.alien === alien && item.price === price);
                  if (index !== -1) {
                      total -= price;
      
                      if (alien === 'Galactic Bundle') {
                          galacticBundleCount--;
                      }
      
                      cart.splice(index, 1);
                      updateCartDisplay();
                  }
              }
      
              function checkout() {
                  alert(`Your total comes out to:\n${cart.map(item => `${item.alien} - $${item.price}`).join('\n')}\nTotal: $${total}`);
                  cart = [];
                  total = 0;
                  galacticBundleCount = 0;
                  updateCartDisplay();
              }
          </script>
        </main>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>