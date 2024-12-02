<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <section class="cart red-black-buy">
              <h2>Shopping Cart</h2>
              <div id="cartItems"></div>
              <p>Total: $<span id="totalPrice">0</span></p>
              <a href="checkout.php"><button class="checkout-btn">Checkout</button></a>
          </section>
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
        </script>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>