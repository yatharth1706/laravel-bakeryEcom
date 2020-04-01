<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset(css/admin.css)}}">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/2f55da0773.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
     <div class="welcome">
     <h1>WELCOME MASTER</h1>
     </div>
       <div class="product">
          <h2>PRODUCTS</h2>
       <form action="../php/product.php" method="post">
         <div class="form-group">
         <select class="form-control" name="product" >
           <option value="cupcakes" selected>CUPCAKES</option>
           <option value="cookies">COOKIES</option>
           <option value="cakes">CAKES</option>
           <option value="breads">BREADS</option>
           <option value="pizzas">PIZZAS</option>
           <option value="puddings">PUDDINGS</option>
           <option value="jams">JAMS</option>
           <option value="deserts">DESERTS</option>
           <option value="decorations">DECORATION MATERIALS</option>
         </select></div>
         
         <button class="btn btn-block btn-primary">GO TO THE PRODUCT</button>
       </form>
     </div>
</body>
</html>