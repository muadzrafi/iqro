<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LOGIN GATE - PTQ IQRO'</title>
  <link rel="icon" href="{{ asset('logoptq.png') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    :root {
      --primary: #1a7446;
      --secondary: #fad25d;
      --dark: #0d3b22;
      --light: #f8f9fa;
      --text: #2d3748;
      --text-light: #718096;
      --glass: rgba(255, 255, 255, 0.15);
      --glass-border: rgba(255, 255, 255, 0.2);
    }

    * { 
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
      background: url('https://ptqiqro.id/public/foto/8.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: var(--text);
      overflow: hidden;
      position: relative;
    }

    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(26, 116, 70, 0.9), rgba(250, 210, 93, 0.7));
      z-index: -1;
    }

    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .gate-container {
      width: 100%;
      max-width: 420px;
      perspective: 1000px;
      padding: 20px;
    }

    .gate-wrapper {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-radius: 24px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25),
                  0 0 0 1px rgba(255, 255, 255, 0.1);
      padding: 40px;
      text-align: center;
      transform-style: preserve-3d;
      transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
      position: relative;
      overflow: hidden;
    }

    .gate-wrapper::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(
        to bottom right,
        rgba(255, 255, 255, 0.3) 0%,
        rgba(255, 255, 255, 0) 60%
      );
      transform: rotate(30deg);
      pointer-events: none;
    }

    .gate-wrapper:hover {
      transform: translateY(-5px) rotateX(2deg) rotateY(2deg);
      box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3),
                  0 0 0 1px rgba(255, 255, 255, 0.2);
    }

    .gate-logo {
      width: 80px;
      height: 80px;
      margin: 0 auto 25px;
      background: white;
      border-radius: 22px;
      padding: 15px;
      box-shadow: 0 10px 30px rgba(26, 116, 70, 0.2),
                  0 0 0 1px rgba(255, 255, 255, 0.3);
      transform: translateZ(20px);
      transition: all 0.5s ease;
      animation: float 6s ease-in-out infinite;
    }

    .gate-logo:hover {
      transform: translateZ(30px) scale(1.05);
      box-shadow: 0 15px 40px rgba(26, 116, 70, 0.3),
                  0 0 0 1px rgba(255, 255, 255, 0.4);
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) translateZ(20px); }
      50% { transform: translateY(-10px) translateZ(20px); }
    }

    .gate-wrapper h2 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: var(--primary);
      letter-spacing: -0.5px;
      transform: translateZ(30px);
    }

    .gate-wrapper p {
      color: var(--text-light);
      margin-bottom: 30px;
      font-size: 0.95rem;
      line-height: 1.6;
      transform: translateZ(20px);
    }

    .gate-input-group {
      position: relative;
      margin-bottom: 25px;
      transform: translateZ(20px);
    }

    .gate-input {
      width: 100%;
      padding: 16px 20px 16px 48px;
      border-radius: 14px;
      border: none;
      outline: none;
      font-size: 1rem;
      background: rgba(245, 245, 245, 0.8);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05),
                  0 0 0 1px rgba(0, 0, 0, 0.03);
      transition: all 0.3s ease;
      font-weight: 500;
      color: var(--text);
    }

    .gate-input:focus {
      background: rgba(255, 255, 255, 0.95);
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05),
                  0 0 0 2px var(--secondary),
                  0 5px 15px rgba(250, 210, 93, 0.2);
    }

    .gate-input-icon {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--primary);
      opacity: 0.7;
      transition: all 0.3s ease;
    }

    .gate-input:focus + .gate-input-icon {
      color: var(--secondary);
      opacity: 1;
    }

    .gate-btn {
      width: 100%;
      background: linear-gradient(135deg, var(--primary), var(--dark));
      color: white;
      border: none;
      padding: 16px;
      border-radius: 14px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(26, 116, 70, 0.3);
      position: relative;
      overflow: hidden;
      transform: translateZ(20px);
    }

    .gate-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: 0.5s;
    }

    .gate-btn:hover {
      transform: translateY(-2px) translateZ(20px);
      box-shadow: 0 6px 20px rgba(26, 116, 70, 0.4);
    }

    .gate-btn:hover::before {
      left: 100%;
    }

    .gate-btn:active {
      transform: translateY(0) translateZ(20px);
    }

    .gate-error {
      color: #e63946;
      font-size: 0.85rem;
      margin-top: 10px;
      transform: translateZ(20px);
    }

    .gate-footer {
      margin-top: 30px;
      font-size: 0.85rem;
      color: var(--text-light);
      transform: translateZ(20px);
    }

    .gate-footer a {
      color: var(--secondary);
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      position: relative;
    }

    .gate-footer a::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--secondary);
      transition: width 0.3s ease;
    }

    .gate-footer a:hover::after {
      width: 100%;
    }

    /* Loader Overlay */
    .loader-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      background: rgba(26, 116, 70, 0.95);
      z-index: 9999;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    .loader-content {
      text-align: center;
      transform: translateZ(50px);
    }

    .logo-pulse {
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
      animation: pulse 2s ease-in-out infinite;
      background: white;
      border-radius: 22px;
      padding: 15px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.05); opacity: 0.9; }
      100% { transform: scale(1); opacity: 1; }
    }

    .bismillah-text {
      font-size: 1.2rem;
      font-weight: bold;
      color: white;
      margin-top: 20px;
      letter-spacing: 1px;
    }

    .loading-bar {
      width: 300px;
      height: 4px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 2px;
      margin-top: 20px;
      overflow: hidden;
      position: relative;
    }

    .loading-progress {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 0;
      background: var(--secondary);
      animation: loading 2s ease-in-out infinite;
    }

    @keyframes loading {
      0% { width: 0; left: 0; }
      50% { width: 100%; left: 0; }
      100% { width: 0; left: 100%; }
    }

    /* Particles */
    .particle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      pointer-events: none;
    }

    /* Responsive */
    @media (max-width: 480px) {
      .gate-wrapper {
        padding: 30px;
        border-radius: 20px;
      }

      .gate-logo {
        width: 70px;
        height: 70px;
      }

      .bismillah-text {
        font-size: 1rem;
      }
    }

    /* 3D Tilt Effect */
    .gate-wrapper {
      transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);
      
      
    }
  </style>
  
</head>
<body>
  <!-- Particles Background -->
  <div class="particles" id="particles"></div>

  <!-- Loader -->
  <div class="loader-overlay" id="loader">
    <div class="loader-content">
      <img src="{{ asset('logoptq.png') }}" alt="Loading" class="logo-pulse">
      <div class="bismillah-text">Bismillahirrahmanirrahim</div>
      <div class="loading-bar">
        <div class="loading-progress"></div>
      </div>
    </div>
  </div>

  <!-- Form Card -->
  <div class="gate-container">
    <div class="gate-wrapper" id="gateWrapper">
        <img src="{{ asset('logoptq.png') }}" alt="Logo PTQ IQRO'" class="gate-logo" />
        <h2>Akses Data Hafalan</h2>
        <p>Masukkan passcode yang telah diberikan oleh admin PTQ IQRO' untuk mengakses sistem</p>

        <form id="gateForm" method="POST" action="{{ route('check-passcode') }}">
            @csrf

            {{-- Simpan jenis laporan (ikhwan/akhwat) --}}
            <input type="hidden" name="jenis" value="{{ request('jenis') }}">

            <div class="gate-input-group">
                <input type="password" name="passcode" placeholder="Masukkan Passcode" class="gate-input" required />
                <i class="fas fa-lock gate-input-icon"></i>
            </div>

            <button type="submit" class="gate-btn">
                <span class="btn-text">Masuk</span>
            </button>

            @if(session('error'))
                <div class="gate-error">{{ session('error') }}</div>
            @endif
        </form>

        <div class="gate-footer">
            Butuh bantuan? <a href="https://wa.me/6285711212732" target="_blank">Hubungi Admin</a>
        </div>
    </div>
</div>


  <!-- Bismillah Audio -->
  <audio id="bismillahAudio" src="{{ asset('audio/bismillah.mp3') }}"></audio>

  <script>
    // 3D Tilt Effect
    const gateWrapper = document.getElementById('gateWrapper');
    
    gateWrapper.addEventListener('mousemove', (e) => {
      const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
      const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
      gateWrapper.style.transform = `perspective(1000px) rotateX(${yAxis}deg) rotateY(${xAxis}deg) scale3d(1, 1, 1)`;
    });

    gateWrapper.addEventListener('mouseleave', () => {
      gateWrapper.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    });

    // Form Submission
    const form = document.getElementById('gateForm');
    const loader = document.getElementById('loader');
    const audio = document.getElementById('bismillahAudio');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      loader.style.display = 'flex';
      audio.play();
      
      // Simulate loading before form submission
      setTimeout(() => {
        this.submit();
      }, 2000);
    });

    // Particles Effect
    const particlesContainer = document.getElementById('particles');
    const particleCount = 30;

    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');
      
      // Random properties
      const size = Math.random() * 5 + 2;
      const posX = Math.random() * 100;
      const posY = Math.random() * 100;
      const delay = Math.random() * 10;
      const duration = Math.random() * 20 + 10;
      const opacity = Math.random() * 0.5 + 0.1;
      
      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;
      particle.style.left = `${posX}%`;
      particle.style.top = `${posY}%`;
      particle.style.animationDelay = `${delay}s`;
      particle.style.animationDuration = `${duration}s`;
      particle.style.opacity = opacity;
      
      // Random animation
      const animationName = Math.random() > 0.5 ? 'floatParticle' : 'floatParticleAlt';
      particle.style.animation = `${animationName} ${duration}s ease-in-out ${delay}s infinite`;
      
      particlesContainer.appendChild(particle);
    }

    // Add keyframes dynamically
    const style = document.createElement('style');
    style.innerHTML = `
      @keyframes floatParticle {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(10px, 10px) rotate(5deg); }
        50% { transform: translate(-10px, 5px) rotate(-5deg); }
        75% { transform: translate(5px, -10px) rotate(5deg); }
      }
      
      @keyframes floatParticleAlt {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(-15px, 5px) rotate(-5deg); }
        50% { transform: translate(10px, -10px) rotate(5deg); }
        75% { transform: translate(-5px, 15px) rotate(-5deg); }
      }
    `;
    document.head.appendChild(style);
  </script>
</body>
</html>