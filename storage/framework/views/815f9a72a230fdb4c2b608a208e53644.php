<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Autobiography</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #111;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 900px;
      background-color: #1c1c1c;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    }

    .image {
      flex: 1 1 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .image img {
      width: 100%;
      height: auto;
      object-fit: cover;
      display: block;
    }

    .content {
      flex: 1 1 400px;
      padding: 30px;
    }

    h1 {
      margin-top: 0;
      color: #ffcc00;
    }

    p {
      line-height: 1.6;
    }

    .social-links a {
      display: inline-block;
      margin-right: 10px;
      color: #ffcc00;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .social-links a:hover {
      color: white;
    }

    /* Mobile adjustments */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        text-align: center;
      }
      .content {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image">
      <img src="images/peejay.jpg" alt="My Photo">
    </div>
    <div class="content">
      <h1>My Autobiography</h1>
      <p>
        Hello! My name is Peejay Pascual Labador. I was born on July 13, 2005, in Old Central, Sudipen, La Union.
        I grew up with a passion for playing basketball, inspired by my family. I aspire to surpass their achievements and trophies in the sport. 
        In addition to basketball, I enjoy playing online games like Mobile Legends and Clash of Clans. I also love singing, even though my voice isn’t perfect.
        My dream is to finish my studies so I can become successful and support my family, as well as help other people.
      </p>
      <div class="social-links">
        <a href="https://facebook.com/peejay.labador.3" target="_blank">Facebook</a>
        <a href="https://www.instagram.com/khown_as_pecador?igsh=MXN5amN4aWd1b3drbQ==" target="_blank">Instagram</a>
        <a href="https://twitter.com/yourusername" target="_blank">Twitter</a>
      </div>
    </div>
  </div>
</body>
</html><?php /**PATH C:\Users\Kurt\Desktop\Laravel\Laravel\resources\views/peejay.blade.php ENDPATH**/ ?>