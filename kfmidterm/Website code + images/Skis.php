<!DOCTYPE html>
<html>
<head>
  <title>Kitten Factory - Skis</title>
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
      height: 144px; /* Set the height of the logo */
      width: auto; /* Maintain aspect ratio */
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
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      justify-items: center;
    }
    
    h1 {
      color: #333;
      grid-column: span 3;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    a {
      text-align: center;
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
    <img src="logo.jpg" alt="Ski Website Logo">
  </header>
  
  <nav>
    <a href="home.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="skis.php">Skis</a>
    <a href="reviews.php">Reviews</a>
    <a href="login.php">Login</a>
  </nav>
  
  <main>
    <h1>Our Skis</h1>
    <a href="login.html">
      <img src="bent.chetler.jpg" alt="Bent Chetler 2023">
      <p>Bent Chetler 2023</p>
    </a>
    <a href="login.html">
      <img src="mfree.jpg" alt="M Free 2023">
      <p>M Free 2023</p>
    </a>
    <a href="login.html">
      <img src="black.crows.jpg" alt="Black Crows 2023">
      <p>Black Crows 2023</p>
    </a>
  </main>
  
  <footer>
    <p>&copy; 2023 Kitten Factory. All rights reserved.</p>
  </footer>
</body>
</html>
