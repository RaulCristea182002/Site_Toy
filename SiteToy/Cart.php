<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
</head>
<link rel="stylesheet" href="Cart.css">
<script src="script.js"></script>
<body>

<form>
  <h2>Shopping Cart</h2>
  <div class="form-group">
    <label for="product">Product:</label>
    <select id="product" name="product">
      <option value="product1">Mini Figurina Woddy</option>
      <option value="product2">Mini Figurina Bucsa</option>
      <option value="product3">Mini figurina Spider Man</option>
      <option value="product4">Lego Masina Ferrari</option>
      <option value="product5">Lego Samurai</option>
      <option value="product6">Mini figurina Buzz</option>
      <option value="product7">Mini figurina Venom</option>
      <option value="product8">Papusa Barbie Bucatareasa</option>
      <option value="product9">Mini figurina Messi(de colectie)</option>
      <option value="product10">Mini figurina Cristiano Ronaldo(de colectie)</option>
      <option value="product11">Barbie Fashion</option>
      <option value="product12">Macheta Lamborghini</option>
      <option value="product13">Macheta Fulger Mcqueen</option>
      <option value="product14">Lego Star Wars</option>
      <option value="product15">Lego Testoasele Ninja</option>
      <option value="product16">Lego Corabie Piratii din Caraibe</option>
      <option value="product17">Papusa Doctorita Plusica</option>
      <option value="product18">Lego Ninjago</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" max="10">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" id="price" name="price" value="$0.00" readonly>
  </div>
  <button type="submit">Add to Cart</button>
</form>
</body>
</html>