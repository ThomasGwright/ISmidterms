<!DOCTYPE html>
<html>
<head>
  <title>Kitten Factory - Reviews</title>
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

    textarea {
      width: 100%;
      height: 100px;
      margin-bottom: 10px;
    }

    h1 {
      color: #333;
    }
    
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <img src="logo.jpg" alt="Kitten Factory Logo">
  </header>
  
  <nav>
    <a href="home.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="skis.php">Skis</a>
    <a href="reviews.php">Reviews</a>
    <a href="login.php">Login</a>
  </nav>
  
  <main>
    <h1>Leave a Review</h1>
    <p>We love hearing from our customers! Let us know your thoughts on our skis:</p>
    <form action="login.html" method="post">
      <textarea name="review" placeholder="Your review..."></textarea>
      <input type="submit" value="Submit">
    </form>
  </main>
  
  <footer>
    <p>&copy; 2023 Kitten Factory. All rights reserved.</p>
  </footer>
</body>
</html>
