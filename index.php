<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food delivery web</title>
    <!-- box icon link  -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- link/css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
  <header>
    <a href="#" class="logo">chef</a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a class="activee" href="#home">home</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#chefs">our chefs</a></li>
        <li><a href="#contact">contact</a></li>
    </ul>
  </header>
  <!-- home// -->
  <section class="home" id="home">
    <div class="home-text">
        <h3>mor then faster</h3>
        <h1>bethe fastest <br>in dilivering <br> you <span>food</span></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, mollitia debitis?</p>
        <a href="#contact" class="btn">contact here</a>
    </div>
    <div class="home-img">
      <!-- ///// -->
      <div class="red-div"></div>
      <!-- ///// -->
        <img src="p/3.png" alt="home-img">
    </div>
  </section>
  <!-- services -->
  <section class="services" id="services">
    <div class="heading">
        <p>what we serve</p>
        <h2>your fevorit food <br>delivery partner</h2>
    </div>

    <div class="services-container">
        <div class="box">
            <img src="p/4.png" alt="img">
            <h2>easy to order</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, laborum?</p>
        </div>
        <div class="box">
            <img src="p/1png.png" alt="img">
            <h2>fastest delivary</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, laborum?</p>
        </div>
        <div class="box">
            <img src="p/5.png" alt="img">
            <h2>best quality</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, laborum?</p>
        </div>
    </div>
  </section>
  <!-- chef section -->
  <section class="chefs" id="chefs">
    <div class="heading">
      <p>our chefs</p>
        <h2>our awesom chef's</h2>
    </div>
    <div class="chefs-container">
      <div class="chef-box">
        <img src="p/p(2).png" alt="img">
        <div class="text">
            <h2>jhon watson</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, cum.</p>
            <a href="#" class="btn">hire now</a>
        </div>
      </div>
      <div class="chef-box">
        <img src="p/3.png" alt="img">
        <div class="text">
            <h2>jhon watson</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, cum.</p>
            <a href="#" class="btn">hire now</a>
        </div>
      </div>
      <div class="chef-box">
        <img src="p/p(1).png" alt="img">
        <div class="text">
            <h2>jhon boosh</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, cum.</p>
            <a href="#" class="btn">hire now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- contact  -->
  <section class="contact" id="contact">
    <div class="heading">
      <p>have any question?</p>
      <h2>contact us</h2>
    </div>
    <div class="contact-form">
      <form action="save.php" method="post">
        <label>name</label>
        <input type="text" name="name" placeholder="enter you name">
        <label>email</label>
        <input type="email" name="email" id="" placeholder="enter your email...">
        <label>mobile</label>
        <input type="mobile" name="mobile" id="" placeholder="enter your mobile no...">
        <label>massage</label>
        <textarea name="massage" cols="30" rows="10" placeholder="write your massage..."></textarea>
        <input type="submit" name="submit" value="send"class="contact-button">
      </form>
    </div>
  </section>
  <!-- copyright -->
  <div class="copyright">
    <p> &#169; carpoolvinom all right reservices.</p>
  </div>



    <!-- js//// -->
    <script src="index.js"></script>
</body>
</html>