<!DOCTYPE html>
<html>
<head>
  <title>Kitten Factory - Login</title>
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
      text-align: center;
    }
    
    h1 {
      color: #333;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      margin: 10px;
      width: 300px;
      font-size: 16px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
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
    <h1>Login</h1>
    <form>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </main>
  
  <footer>
    <p>&copy; 2023 Kitten Factory. All rights reserved.</p>
  </footer>
</body>
</html>
