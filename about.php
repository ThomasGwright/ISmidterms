<!DOCTYPE html>
<html>
<head>
  <title>Ski Website - About Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      height: 120px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    header img {
      height: 144px; /* Approximate height for 1.5 inches */
      width: auto;
    }
    
    nav {
      background-color: #f2f2f2;
      padding: 10px;
      text-align: center;
    }
    
    nav a {
      text-decoration: none;
      margin: 10px;
      color: #333;
      font-weight: bold;
    }
    
    main {
      margin: 20px;
    }
    
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .textbox {
      margin-bottom: 10px;
      width: 100%;
      padding: 10px;
    }

    .button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
  <script>
    function displayPrompt() {
      var userPrompt = prompt("Tell us about your skiing experience:");
      if (userPrompt != null && userPrompt !== "") {
        alert("That sounds exciting! Can you share more details about your skiing adventure?");
        window.location.href = "login.html";
      }
    }
  </script>
</head>
<body>
  <header>
    <img src="logo.jpg" alt="Logo">
  </header>
  
  <nav>
    <a href="home.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="skis.php">Skis</a>
    <a href="reviews.php">Reviews</a>
    <a href="login.php">Login</a>
  </nav>
  
  <main>
    <h1>About Us</h1>
    <p>Kitten Factory is a brand established in 2023. We are passionate about crafting high-quality skis for skiers who demand the best performance on the slopes. Our skis are designed and built by skiers who understand the needs and preferences of fellow skiing enthusiasts.</p>
    <p>If you would like to enroll as one of our customers, <b><a href="login.html">click here</a></b>.</p>

    <div>
      <textarea class="textbox" placeholder="Tell us about your skiing experience"></textarea>
      <button class="button" onclick="displayPrompt()">Share Your Skiing Experience</button>
    </div>
  </main>
  
  <footer>
    <p>&copy; 2023 Ski Website. All rights reserved.</p>
  </footer>
</body>
</html>
