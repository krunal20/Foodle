<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu and Cart</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body>
  <header id="header" class="header">
    <div class="container">
      <div class="row">
        <div>
          <button class="logout" onclick="window.location='logout.php'">LOGOUT</button>
        </div>
        <div class="four columns">
          <img style ="height: 10rem; width: = 10rem;" src="https://res-2.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/v1413659156/eshiaj42iwtxgzcnpvfh.png" alt="logo"id="logo">
        </div>
        <div class="two columns u-pull-right">
          <ul>
            <li class="submenu">
              
              <img style = " margin-top: 2rem;"src="img/cart.png" id="img-cart">
              <span style="font-family: 'Times New Roman', Times, serif; font-size: 1.5rem;"><strong>CART</strong></span>
              <div id="cart"> 
                <table id="list-cart" class="u-full-width">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
                <a href="#" id="vacate-cart" class="button u-full-width">Empty Cart</a>
                <button onclick="window.location ='https://paypal.com'" class="button u-full-width">Pay</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <section>
  <div style="display:flex;" class="main-menu" id="main-menu1">
            <a href="blog.html">FOODLEBLOG</a>
            <a href="index.php">ABOUT US</a>
            <a href="recipes.html">RECIPES</a>
            <a href="insights.html">INSIGHTS</a>
  </div>
</section>
  </div>
  <div id="list-cursos">
    <h1 id="encabezado__cursos">FOODLE MENU</h1>

    <div class="cursos__container">
      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.foodiecrush.com/wp-content/uploads/2019/09/Caesar-Salad-foodiecrush.com-019-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Crispy Crouton Salad</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹250</span>  </p>
            <a href="#" class="add-cart" data-id="1"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://4.imimg.com/data4/HF/DS/MY-2/hakka-noodle-500x500.jpg" alt="noodles" class="imagen__curso">
          <div class="info__card">
            <h4>Schezwan Noodles</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹150</span> </p>
            <a href="#" class="add-cart" data-id="2"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div>
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.cookwithmanali.com/wp-content/uploads/2016/09/Veggie-Lovers-Baked-Pasta-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Baked Pasta</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹250</span>  </p>
            <a href="#"  class="add-cart"  data-id="3"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.whiskaffair.com/wp-content/uploads/2020/03/Hakka-Noodles-2-3-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Hakka Noodles</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹180</span>  </p>
            <a href="#"  class="add-cart"  data-id="4"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://brooklynfarmgirl.com/wp-content/uploads/2013/11/Cheesy-Lasagna-Skillet-Featured-Image_1-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Cheesy Lasagna</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹350</span>  </p>
            <a href="#"  class="add-cart"  data-id="5"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.lecremedelacrumb.com/wp-content/uploads/2017/01/baked-chicken-parmesan-101-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Chicken Parmesan</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹350</span>  </p>
            <a href="#"  class="add-cart"  data-id="6"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://cdn.loveandlemons.com/wp-content/uploads/2019/06/homemade-pizza-2-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Pizza</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span><span class="discount">₹450</span>  </p>
            <a href="#"  class="add-cart"  data-id="7"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.biggerbolderbaking.com/wp-content/uploads/2015/05/BBB71-Homemade-Ice-Cream-Milkshakes-Thumbnail-v.1-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Milkshake</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">10 mins</span> <span class="discount">₹150</span>  </p>
            <a href="#" class="add-cart"  data-id="8"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.cookingclassy.com/wp-content/uploads/2018/01/chicken-piccata-19-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Chicken Piccata</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey"> 30 mins</span> <span class="discount">₹340</span>  </p>
            <a href="#" class="add-cart"  data-id="9"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.theflavorbender.com/wp-content/uploads/2017/06/Color-Changing-Lemonade-The-Flavor-Bender-Featured-Image-SQ-1-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Lemonade Slush</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">10 mins</span> <span class="discount">₹120</span>  </p>
            <a href="#"  class="add-cart"  data-id="10"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.thecraftpatchblog.com/wp-content/uploads/2018/07/strawberry-cloud-dessert-hero-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Strawberry Cloud</h4>
            <img src="img/estrellas.png">
            <p><span style="color: grey">30 mins</span> <span class="discount">₹240</span>  </p>
            <a href="#"  class="add-cart"  data-id="11"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>

      <div class="curso__item">
        <div class="curso__card">
          <img src="https://www.jocooks.com/wp-content/uploads/2018/11/new-york-style-cheesecake-1-2-500x500.jpg" class="imagen__curso">
          <div class="info__card">
            <h4>Cheesecake</h4>
            <img src="img/estrellas.png">
            <p><span style="color: gret">20 mins</span> <span class="discount">₹300</span>  </p>
            <a href="#"  class="add-cart"  data-id="12"><i class="fa fa-cart-plus"></i>&nbsp;  ADD TO CART</a>
          </div>
        </div> <!--.card-->
      </div>
    </div>
  </div>
  <footer class="footer">
        <div class="footer-content">
          <p class="copyright">
            Copyright &copy; 2020
          </p>
          <div class="social-list">
            <a href="https://www.facebook.com/bestfoodpage"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/cruncheesyy?igshid=km4ormyfz7ll"><i class="fab fa-instagram"></i></a>
            <a href="https://mobile.twitter.com/twitterfood"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </footer>

  <script src="js/menujs.js"></script>

</body>
</html>
