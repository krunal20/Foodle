<?php
require_once 'connection.php';
$error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $name = trim($_POST['namefield']);
    $email = trim($_POST['mailfield']);
    $msg = trim($_POST['msgfield']);
    $query = $con->prepare('INSERT INTO feedback (name, email, message) VALUES (?, ?, ?);');
    $query->bind_param('sss', $name, $email, $msg);
    $result = $query->execute();
    if($result){
        $error .= '<p class="success">Feedback received!';
    }
    else{
        $error .= '<p class="error">Something went wrong!';
    }
    $query->close();
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Food Ordering Website</title>
    <script src="validation.js"></script>
    <link rel="stylesheet" href="styleA.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

<link
      rel="stylesheet"link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>
  <body bgcolor="black">
    <div class="spinner-container">
      <div class="circles">
        <div></div>
        <div></div>
        <div></div>
        
        
      </div>
    </div>

    <div class="container">
      <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div>
      <header class="header">
        <div class="img-wrapper">
          <img src="images/cheif.gif" />
        </div>
        <div class="banner">
            
                    <h1> About Us </h1>
            
          
          
          <!-- <button onclick="window.location.href = 'login.html';"> 
        Login
    </button> 
    <button onclick="window.location.href = 'login.html';"> 
        Register
    </button>  -->
        </div>
      </header>

      <section class="sidebar">
        <ul class="menu">
          <li class="menu-item">
            <a href="login.php" class="menu-link" data-content="Login">Login</a>
          </li>
          <li class="menu-item">
            <a href="menu.php" class="menu-link" data-content="Menu">Menu</a>
          </li>
          <li class="menu-item">
            <a href="blog.html" class="menu-link" data-content="Blog">Blog</a></li>
          <li class="menu-item">
          <li class="menu-item">
            <a href="foodGallery.html" class="menu-link" data-content="Gallery">Gallery</a></li>
          <li class="menu-item">
            <a href="insights.html" class="menu-link" data-content="Insights">Insights</a></li>
          <!-- <li class="menu-item">
            <a href="#" class="menu-link" data-content="Cart">Cart</a>
          </li> -->
        </ul>
        
        <div class="social-media">
          <a href="https://www.facebook.com/FoodleIndia/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/foodlefr/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/foodlefr?lang=en"><i class="fab fa-twitter"></i></a>
        </div>
      </section>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">About Us</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
              <i class="fas fa-seedling"></i>
              <h3>Quality ingredients</h3>
            </div>
            <p class="service-text">
                When fresh food is in season and ripe off the vine, there's nothing more delicious. People love to savor the genuine wholesomeness that comes from fresh ingredients we use. Our fresh foods deliver a bright, lively experience that can be just as addictive as salt, sugar, or fat (but in a good way!).
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-bread-slice"></i>
              <h3>Culinary expertise
            </h3>
            </div>
            <p class="service-text">
                When people walk through the restaurant doors, they are expecting to enjoy their meal. A good restaurant does not compromise when it comes to serving great food. And so our restaurant will houses highly experienced chefs, who prepare meals using the best, high quality ingredients to ensure consistency.
               </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-cocktail"></i>
              <h3>Dining experience </h3>
            </div>
            <p class="service-text">
                When you go out, you want to know that you are eating in a clean environment and getting the best service. Our restaurant will ensure to enhance the guest experience through being courteous and maintaining a great attitude. The servers are knowledgeable about the cuisine, something very helpful when you love exotic cuisine! We address issues promptly and make sure that the food and drinks get to the customers in a timely manner.
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="fas fa-spa"></i>
              <h3>Ambience</h3>
            </div>
            <p class="service-text">
                People like to have a dining experience that is enjoyable and this includes a great location, the right mood, the best character and the right atmosphere. Our restaurant’s ambience including the decor, comfortable seating, background music, openness, and the lighting helps us stay unique and stand out from the rest.</p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-smile"></i>
              <h3>Cleanliness</h3>
            </div>
            <p class="service-text">
                No one wants to eat in a place that is dirty as it reflects badly on the overall service. A clean space will encourage people to sit and anticipate a great meal. Keeping the space clean is something our management is trained to adhere to with utmost detail.
            </p>
          </div>
          
          <div class="service">
            <div class="service-header">
              <i class="fas fa-donate"></i>
              <h3>Affordable prices </h3>
            </div>
            <p class="service-text">
                 People pay for the overall experience and not just the food when they are dining out. We ensure to match our Customer’s expectations in terms of our prices reflecting the type of food, level of service and the overall atmosphere of the restaurant.</p>
          </div>
         
          <div class="about-us-img-wrapper">
            <img src="images/cooking.gif" />
          </div>
        </div>
      </section>

      <section class="team">
        <div class="section-header">
          <h1 class="section-heading">Our Team</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person-1.jpg" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>Leafia Dias</h2>
              <h3>Head Chef</h3>
              <p>
                "Executive chef of Foodle. She holds more than 15 years of restaurant and catering experience.At her first Central Market, where she became executive sous chef, she honed her culinary skills, learning from some of the country's most respected chefs. His entrepreneurial spirit and desire to create unforgettable food led to the opening of Foodle in 2006. Though Brent spends most of his time thinking about food, in his spare time, he loves competing in extreme ironman races, playing the drums, and staying on top of culinary trends. She's an animal lover, rottweiler devotee, and the proud leader of team  Foodle."
              </p>
              <button onclick="window.location.href='https://instagram.com/leafnex?igshid=1az69f7q90iez'"> Connect </button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person-2.jpg" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Krunal Doshi</h2>
              <h3>Sous Chef</h3>
              <p>
                "A native Indian, Krunal has been cooking for over 10 years, over 6 of those at Foodle!. He has a passion for food and learning about new trends, flavors, and loves to challenge himself in the kitchen. When not at Foodle, Marco enjoys spending time with his family, two pups, and barbecuing as much as possible."
              </p>
             <button onclick="window.location.href='https://instagram.com/kruzzzzzzzzz?igshid=2s3dp9pqzyi7'"> Connect </button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person-3.jpg" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Anviksha Dixit</h2>
              <h3>Sales Manager</h3>
              <p>
                "Born and raised in Mumbai, Anviksha fell in love with culinary art while attending The University of Mumbai and never looked back! Her love of events and passion for food led her to Foodle where she loves helping make client's event dreams come true - she's allll about those details. When she is not planning events, she enjoys spending time with friends, exploring new restaurants Check out her food blog @cruncheesy!"
              </p>
              <button onclick="window.location.href='https://instagram.com/cruncheesyy?igshid=km4ormyfz7ll'"> Visit </button>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="contact-in">
  <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241326.1686681065!2d72.87765590322411!3d19.07598368099473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1602566225464!5m2!1sen!2sin" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div class="contact-form">
    <h1>Contact US</h1>
    <?php echo $error ?>
    <form name="feedback" onsubmit="return feedbackCheck()" method="post">
      <input name="namefield" type="text" placeholder="Name" class="contact-form-txt">
      <input name="mailfield" type="email" placeholder="Email" class="contact-form-txt">
      <textarea name="msgfield" placeholder="Message" class="contact-form-textarea"></textarea>
      <input type="submit" name="submit" class = "contact-form-btn">
    </form>
   </div>
      </section>


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
      <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
      </a>
    </div>

    <script src="scriptA.js"></script>
  </body>
</html>