<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Ruby Anne Seraon Profile</title>
<style>
  /* Reset & base */
  * {
    box-sizing: border-box;
  }
  body {
    background-color: #222;
    color: #eee;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 40px;
    line-height: 1.5;
  }

  /* Container */
  .container {
    max-width: 850px;
    margin: auto;
    background: #2b2b2b;
    padding: 25px 30px;
    border-radius: 12px;
    position: relative;
  }

  /* Header section */
  header {
    display: flex;
    gap: 25px;
    align-items: center;
    margin-bottom: 30px;
  }
  header img {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 4px;
    /* Removed grayscale filter to show image in color */
  }

  .header-text {
    flex-grow: 1;
  }
  .header-text h1 {
    font-size: 2.3rem;
    font-weight: 900;
    margin: 0;
    line-height: 1.15;
  }
  .contact-info {
    display: flex;
    justify-content: flex-start;
    gap: 50px;
    margin-top: 16px;
    font-weight: 600;
    font-size: 0.9rem;
  }
  .contact-info > div {
    display: flex;
    gap: 8px;
    font-weight: 400;
    color: #ddd;
  }
  .contact-info strong {
    font-weight: 700;
    min-width: 60px;
  }
  .separator {
    border-left: 1px solid #666;
    height: 18px;
    align-self: center;
  }
  .header-underline {
    border-top: 1px solid #666;
    width: 100%;
    margin-top: 12px;
  }

  /* About section */
  .about {
    background: #333;
    border-radius: 12px;
    padding: 20px 25px;
    font-size: 1rem;
  }
  .about h2 {
    font-weight: 900;
    margin-top: 0;
    margin-bottom: 10px;
  }
  .about p {
    margin-top: 0;
    margin-bottom: 30px;
    font-weight: 400;
  }

  /* Dual columns: hobbies and facts */
  .info-columns {
    display: flex;
    justify-content: space-between;
    gap: 35px;
  }
  .info-columns > div {
    flex: 1;
  }
  .info-columns h3 {
    font-weight: 900;
    margin-bottom: 12px;
  }
  ul {
    margin: 0;
    padding-left: 20px;
  }
  li {
    margin-bottom: 8px;
    font-weight: 400;
  }

  /* Facts bold text */
  .facts li strong {
    font-weight: 700;
  }

  /* Border between columns in info */
  .info-columns > div:not(:last-child) {
    border-right: 2px solid #666;
    padding-right: 20px;
  }
</style>
</head>
<body>
  <main class="container">
    <header>
      <img src="images/ruby.jpg" alt="Ruby Anne Seraon" onerror="this.style.display='none'" />
      <div class="header-text">
        <h1>RUBY ANNE SERAON</h1>
        <div class="header-underline"></div>
        <div class="contact-info">
          <div>
            <strong>Phone :</strong>
            <span>09456718412</span>
          </div>
          <div class="separator" aria-hidden="true"></div>
          <div>
            <strong>Email :</strong>
            <span>seraonrubyanne09@gmail.com</span>
          </div>
        </div>
      </div>
    </header>

    <section class="about">
      <h2>ABOUT ME</h2>
      <p>
        Hi! I’m Ruby Anne Seraon, but you can simply call me Ruby. I’m 20 years old and I live in Besalan, Santa Cruz, Ilocos Sur. I’m someone who believes that every day is a chance to learn something new and become better than yesterday. 
        As I always remind myself and others: “No matter how slow you go, as long as you don’t stop, you’re already ahead.” Let’s keep moving forward, with faith in ourselves and kindness in our hearts.
      </p>
      <div class="info-columns">
        <div class="hobbies">
          <h3>HOBBIES</h3>
          <ul>
            <li>Reading Books</li>
            <li>Playing games</li>
            <li>Watching Videos</li>
          </ul>
        </div>
        <div class="facts">
          <h3>FACTS ABOUT ME</h3>
          <ul>
            <li><strong>I’m always curious. I love asking questions and discovering how things work.</strong></li>
            <li><strong>I’m passionate about mental health awareness. I believe everyone should feel supported and understood.</strong></li>
            <li><strong>I’m a coffee lover. I can’t start my day without a good cup of coffee.</strong></li>
          </ul>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
