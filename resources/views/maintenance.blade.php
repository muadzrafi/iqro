<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PTQ IQRO' - We'll Be Back Soon</title>
  <link rel="icon" href="/logoptq.png" type="image/png" />
  <style>
    :root {
      --green-dark: #14532d;
      --green: #166534;
      --yellow: #facc15;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, var(--green-dark), var(--green));
      color: white;
      text-align: center;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      overflow: hidden;
      position: relative;
    }

    .container {
      max-width: 600px;
      margin: auto;
      z-index: 2;
    }

    .logo-wrapper {
      background: rgba(255, 255, 255, 0.08);
      border: 2px solid rgba(250, 204, 21, 0.2);
      border-radius: 50%;
      width: 120px;
      height: 120px;
      margin: 0 auto 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 0 15px rgba(250, 204, 21, 0.2);
    }

    .logo-wrapper:hover {
      transform: scale(1.08);
      box-shadow: 0 0 30px rgba(250, 204, 21, 0.4);
    }

    .logo {
      width: 60px;
      height: auto;
      animation: pulse 4s infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.05); opacity: 0.95; }
    }

    h1 {
      font-size: 2.8rem;
      font-weight: bold;
      margin-bottom: 1rem;
      color: var(--yellow);
      text-shadow: 0 0 5px rgba(250, 204, 21, 0.3);
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      opacity: 0.95;
      line-height: 1.6;
    }

    .contacts {
      margin-top: 2rem;
      font-size: 1rem;
      background: rgba(255, 255, 255, 0.05);
      padding: 1rem;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
    }

    .contacts a {
      color: var(--yellow);
      text-decoration: none;
      display: block;
      margin: 0.5rem 0;
      transition: all 0.3s;
    }

    .contacts a:hover {
      color: #fff;
    }

    footer {
      margin-top: 2rem;
      font-size: 0.9rem;
      opacity: 0.6;
    }

    .glow {
      position: absolute;
      width: 300px;
      height: 300px;
      background: var(--yellow);
      filter: blur(100px);
      opacity: 0.2;
      border-radius: 50%;
      animation: move 10s ease-in-out infinite alternate;
    }

    .glow:nth-child(1) {
      top: -100px;
      left: -100px;
    }

    .glow:nth-child(2) {
      bottom: -100px;
      right: -100px;
      animation-delay: 2s;
    }

    @keyframes move {
      0% { transform: translate(0, 0); }
      100% { transform: translate(50px, 50px); }
    }

    @media (max-width: 500px) {
      h1 {
        font-size: 2rem;
      }

      .logo-wrapper {
        width: 90px;
        height: 90px;
      }

      .logo {
        width: 50px;
      }
    }
  </style>
</head>
<body>
  <div class="glow"></div>
  <div class="glow"></div>
  <div class="container">
    <div class="logo-wrapper">
      <img src="/logoptq.png" alt="PTQ IQRO' Logo" class="logo" />
    </div>
    <h1>We'll Be Back Soon</h1>
    <p>Thank you for visiting <strong>PTQ IQRO'</strong>.<br>
      Our website is temporarily offline as we align with our core values and community vision. <br>
      We'll be back stronger and better!</p>
    <div class="contacts">
      <p><strong>Need to reach us?</strong></p>
      <a href="https://wa.me/6285711212732" target="_blank">📱 WhatsApp: 0857-1121-2732</a>
      <a href="https://www.instagram.com/ptqiqroputra_official/" target="_blank">📸 Instagram: @ptqiqroputra_official</a>
    </div>
    <footer>— PTQ IQRO’ Development Team</footer>
  </div>
</body>
</html>
