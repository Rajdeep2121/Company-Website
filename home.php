<html>
    <head>
        <link rel="stylesheet" href="home.css">
        <title>Website</title>
    </head>
    <body  style="background-color:lightgrey;">
        <div class="main">
            <div class="logo">
                <img src="pics/logo.png">    
            </div>
            <ul>
                <li class="active" style="background-color: #4c8bf5;color: #000;"><a href=#>Home</a></li>
                <li><a href=#>Products</a></li>
                <li><a href=#>Services</a></li>
                <li><a href=#>Why We?</a></li>
                <li><a href=#>Blogs</a></li>
                <li><a href=#>Contact Us</a></li>
                <li><a href=#>About Us</a></li>
                <li><a class="log" href="login.php">Login</a></li>
            </ul>
            <br><br><br><br>
            <hr><hr>
            <div class="check">
              <h1 style="border:1px solid lightgrey;width:100%;background-color:lightgrey;font-family:Belinda;text-align:center;font-size:50;">My Website</h1>
            </div>
          </div>
        <br><br>
<div class="slideshow-container">

    <div class="mySlides fade">
      <img src="pics/1.jpg" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="pics/2.jpg" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="pics/3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="pics/4.jpg" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="pics/5.jpg" style="width:100%">
    </div>
    
    </div>
    <br>
    
    
    <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
    
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {
          slideIndex = 1
      }    
    
      slides[slideIndex-1].style.display = "block";  
    
      setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
    </script>
    <form method="POST" action="contact.php">
    <div class="message">
        <label>Name</label><br>
        <input type="text" name="sender" placeholder="Name" id="name1"><br>
        <label>Contact</label><br>
        <input type="text" name="email" placeholder="Email" id="contact1"><br>
        <label>Feedback</label><br>
        <textarea rows="5" cols="30" placeholder="Feedback" name="feedback"></textarea><br>
        <button type="submit" style="padding:10px;background-color:#4c8bf5;color:white;border:none;">Submit</button>
    </div>




    </body>
</html>