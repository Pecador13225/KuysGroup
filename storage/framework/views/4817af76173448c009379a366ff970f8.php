<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biography</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }
    table {
      width: 700px;
      margin: 20px auto;
      border-collapse: collapse;
      border: 1px solid #000;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    th, td {
      border: 1px solid #000;
      padding: 10px;
      text-align: left;
    }
    th {
      text-align: center;
    }
    th.section-header {
      background-color: blue;
      color: white;
      font-size: 20px;
    }
    img {
      width: 100%;
      height: auto;
      border-radius: 50%;
    }
    ul {
      margin: 0;
      padding-left: 20px;
      text-align: left;
    }
    a {
      color: blue;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    footer {
      margin-top: 20px;
      font-size: 12px;
    }
  </style>
</head>
<body>

  <table>
    <tr>
      <td rowspan="2" style="width: 200px;">
        <img src="images/rene.jpg" alt="My Photo">
      </td>
      <th class="section-header">My Biography</th>
    </tr>

    <tr>
      <td>
        <ul>
          <li><strong>Name:</strong> Rene S. Garcia</li>
          <li><strong>Birth Date:</strong> March 29, 2004</li>
          <li><strong>Birth Place:</strong> Gabur, Tagudin, Ilocos Sur</li>
          <li><strong>Hobbies:</strong> Playing Online Games, Playing Basketball, Watching Anime</li>
        </ul>
      </td>
    </tr>

    <tr>
      <th colspan="2" class="section-header">About Me</th>
    </tr>
    <tr>
      <td colspan="2">
        My name is Rene S. Garcia. I am 21 years old and a student at Ilocos Sur Polytechnic State College.
        My family lives a simple life. We go through good times and tough times, just like everyone else.
      </td>
    </tr>

    <tr>
      <th colspan="2" class="section-header">Social Media</th>
    </tr>
    <tr>
      <td colspan="2">
        <p>Check me out on:</p>
        <ul>
          <li><a href="https://www.facebook.com/somerarene">Facebook</a></li>
          <li><a href="https://www.instagram.com/renxcia?igsh=dnZ1eTg4eWFmaTlm">Instagram</a></li>
          <li><a href="https://discord.com/users/1396721393860739213">Discord</a></li>
        </ul>
      </td>
    </tr>
  </table>

  <footer>
    &copy; 2025 Rene S. Garcia. All rights reserved.
  </footer>

</body>
</html><?php /**PATH C:\Users\Kurt\Desktop\Laravel\Laravel\resources\views/rene.blade.php ENDPATH**/ ?>