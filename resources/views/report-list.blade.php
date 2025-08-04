<!DOCTYPE html>
<html lang="id">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PTQ IQRO' - Laporan Hafalan</title>
   <link rel="icon" type="image/x-icon" href="logoptq.png">
  {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <style>
    :root {
        --biru-muda: #edfafd;
        --kuning-cerah: #fad25d;
        --hijau-tua: #1a7446;
        --kuning-emas: #f5b700;
        --text-dark: #333333;
        --text-light: #ffffff;
    }
    
    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--biru-muda);
        color: var(--text-dark);
    }
    
    /* ===== RESPONSIVE STYLES ===== */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1rem;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
    }
    
    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .hero-content {
            padding: 30px 15px;
        }
    }
    
      /*===== GLOBAL STYLES ===== */
      /*  * {*/
      /*      margin: 0;*/
      /*      padding: 0;*/
      /*      box-sizing: border-box;*/
      /*  }*/
        
      /*  body {*/
      /*      font-family: 'Poppins', sans-serif;*/
      /*      background-color: #f9f5e9;*/
      /*      color: #333;*/
      /*      line-height: 1.6;*/
      /*  }*/
        
      /*  .container {*/
      /*      max-width: 1200px;*/
      /*      margin: 0 auto;*/
      /*      padding: 0 20px;*/
      /*  }*/
        
      /*   ===== CONTENT SECTION ===== */
      /*  .content-section {*/
      /*      padding: 60px 0;*/
      /*  }*/
        
      /*  .content-card {*/
      /*      background: white;*/
      /*      border-radius: 15px;*/
      /*      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);*/
      /*      overflow: hidden;*/
      /*  }*/
        
      /*   Header Styles */
      /*  .content-header {*/
      /*      text-align: center;*/
      /*      padding: 40px 20px;*/
      /*      background: linear-gradient(135deg, #2a4365 0%, #1e3a8a 100%);*/
      /*      color: white;*/
      /*      position: relative;*/
      /*  }*/
        
      /*  .content-header::before {*/
      /*      content: "";*/
      /*      position: absolute;*/
      /*      bottom: 0;*/
      /*      left: 0;*/
      /*      width: 100%;*/
      /*      height: 10px;*/
      /*      background: linear-gradient(90deg, #F8D458, #E8B020);*/
      /*  }*/
        
      /*  .content-header-title {*/
      /*      font-size: 2.5rem;*/
      /*      font-weight: 700;*/
      /*      margin-bottom: 15px;*/
      /*  }*/
        
      /*  .content-header-title span {*/
      /*      color: #F8D458;*/
      /*  }*/
        
      /*  .content-header-subtitle {*/
      /*      font-size: 1.2rem;*/
      /*      opacity: 0.9;*/
      /*      max-width: 800px;*/
      /*      margin: 0 auto;*/
      /*  }*/
        
      /*  .content-header-subtitle span {*/
      /*      color: #F8D458;*/
      /*      font-weight: 500;*/
      /*  }*/
        
      /*   Content Body Styles */
      /*  .content-body {*/
      /*      padding: 40px;*/
      /*  }*/
        
      /*  .section-block {*/
      /*      margin-bottom: 40px;*/
      /*  }*/
        
      /*  .section-title {*/
      /*      font-size: 1.8rem;*/
      /*      color: #2a4365;*/
      /*      margin-bottom: 20px;*/
      /*      position: relative;*/
      /*      padding-bottom: 10px;*/
      /*  }*/
        
      /*  .section-title::after {*/
      /*      content: '';*/
      /*      position: absolute;*/
      /*      bottom: 0;*/
      /*      left: 0;*/
      /*      width: 60px;*/
      /*      height: 4px;*/
      /*      background: linear-gradient(90deg, #F8D458, #E8B020);*/
      /*  }*/
        
      /*  .section-title span {*/
      /*      color: #F8D458;*/
      /*  }*/
        
      /*  p {*/
      /*      margin-bottom: 15px;*/
      /*      font-size: 1.05rem;*/
      /*  }*/
        
      /*   List Styles */
      /*  .content-list {*/
      /*      margin: 20px 0 20px 30px;*/
      /*  }*/
        
      /*  .content-list li {*/
      /*      margin-bottom: 10px;*/
      /*      position: relative;*/
      /*      padding-left: 25px;*/
      /*  }*/
        
      /*  .content-list li::before {*/
      /*      content: '';*/
      /*      position: absolute;*/
      /*      left: 0;*/
      /*      top: 10px;*/
      /*      width: 10px;*/
      /*      height: 10px;*/
      /*      background-color: #F8D458;*/
      /*      border-radius: 50%;*/
      /*  }*/
        
      /*   Program Tabs */
      /*  .program-tabs {*/
      /*      margin-top: 30px;*/
      /*  }*/
        
      /*  .tab-nav {*/
      /*      display: flex;*/
      /*      border-bottom: 2px solid #eee;*/
      /*      margin-bottom: 25px;*/
      /*  }*/
        
      /*  .tab-btn {*/
      /*      padding: 12px 25px;*/
      /*      background: none;*/
      /*      border: none;*/
      /*      cursor: pointer;*/
      /*      font-weight: 600;*/
      /*      color: #718096;*/
      /*      position: relative;*/
      /*      font-size: 1rem;*/
      /*      transition: all 0.3s;*/
      /*  }*/
        
      /*  .tab-btn:hover {*/
      /*      color: #2a4365;*/
      /*  }*/
        
      /*  .tab-btn.active {*/
      /*      color: #2a4365;*/
      /*  }*/
        
      /*  .tab-btn.active::after {*/
      /*      content: '';*/
      /*      position: absolute;*/
      /*      bottom: -2px;*/
      /*      left: 0;*/
      /*      width: 100%;*/
      /*      height: 3px;*/
      /*      background: #F8D458;*/
      /*  }*/
        
      /*  .tab-content {*/
      /*      display: none;*/
      /*  }*/
        
      /*  .tab-content.active-tab {*/
      /*      display: block;*/
      /*      animation: fadeIn 0.5s;*/
      /*  }*/
        
      /*  @keyframes fadeIn {*/
      /*      from { opacity: 0; }*/
      /*      to { opacity: 1; }*/
      /*  }*/
        
      /*   Program Card Styles */
      /*  .program-card {*/
      /*      display: flex;*/
      /*      align-items: flex-start;*/
      /*      background: #f8f4e8;*/
      /*      border-radius: 10px;*/
      /*      padding: 25px;*/
      /*      margin-bottom: 20px;*/
      /*      transition: transform 0.3s;*/
      /*  }*/
        
      /*  .program-card:hover {*/
      /*      transform: translateY(-5px);*/
      /*      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);*/
      /*  }*/
        
      /*  .program-icon {*/
      /*      width: 60px;*/
      /*      height: 60px;*/
      /*      background: #F8D458;*/
      /*      border-radius: 50%;*/
      /*      display: flex;*/
      /*      align-items: center;*/
      /*      justify-content: center;*/
      /*      color: white;*/
      /*      font-size: 1.5rem;*/
      /*      margin-right: 20px;*/
      /*      flex-shrink: 0;*/
      /*  }*/
        
      /*  .program-details h5 {*/
      /*      font-size: 1.3rem;*/
      /*      color: #2a4365;*/
      /*      margin-bottom: 10px;*/
      /*  }*/
        
      /*   Program Grid Styles */
      /*  .program-grid {*/
      /*      display: grid;*/
      /*      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));*/
      /*      gap: 20px;*/
      /*  }*/
        
      /*  .program-item {*/
      /*      background: #f8f4e8;*/
      /*      border-radius: 10px;*/
      /*      padding: 25px 15px;*/
      /*      display: flex;*/
      /*      flex-direction: column;*/
      /*      align-items: center;*/
      /*      justify-content: center;*/
      /*      text-align: center;*/
      /*      transition: all 0.3s;*/
      /*  }*/
        
      /*  .program-item:hover {*/
      /*      background: #F8D458;*/
      /*      color: white;*/
      /*      transform: translateY(-5px);*/
      /*  }*/
        
      /*  .program-item i {*/
      /*      font-size: 2rem;*/
      /*      margin-bottom: 15px;*/
      /*  }*/
        
      /*  .program-item span {*/
      /*      font-weight: 500;*/
      /*  }*/
        
      /*   Competency List Styles */
      /*  .competency-list {*/
      /*      counter-reset: competency-counter;*/
      /*  }*/
        
      /*  .competency-item {*/
      /*      margin-bottom: 30px;*/
      /*      position: relative;*/
      /*      padding-left: 40px;*/
      /*  }*/
        
      /*  .competency-item::before {*/
      /*      counter-increment: competency-counter;*/
      /*      content: counter(competency-counter);*/
      /*      position: absolute;*/
      /*      left: 0;*/
      /*      top: 0;*/
      /*      width: 30px;*/
      /*      height: 30px;*/
      /*      background: #F8D458;*/
      /*      color: white;*/
      /*      border-radius: 50%;*/
      /*      display: flex;*/
      /*      align-items: center;*/
      /*      justify-content: center;*/
      /*      font-weight: bold;*/
      /*  }*/
        
      /*  .competency-item h4 {*/
      /*      font-size: 1.4rem;*/
      /*      color: #2a4365;*/
      /*      margin-bottom: 15px;*/
      /*  }*/
        
      /*  .competency-sublist {*/
      /*      margin: 15px 0 15px 20px;*/
      /*  }*/
        
      /*  .competency-sublist li {*/
      /*      margin-bottom: 8px;*/
      /*      padding-left: 25px;*/
      /*      position: relative;*/
      /*  }*/
        
      /*  .competency-sublist li::before {*/
      /*      content: '•';*/
      /*      position: absolute;*/
      /*      left: 10px;*/
      /*      color: #F8D458;*/
      /*      font-weight: bold;*/
      /*  }*/
        
      /*   Keunggulan Section */
      /*  .advantage-list {*/
      /*      display: grid;*/
      /*      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));*/
      /*      gap: 20px;*/
      /*      margin-top: 30px;*/
      /*  }*/
        
      /*  .advantage-item {*/
      /*      background: #f8f4e8;*/
      /*      border-radius: 10px;*/
      /*      padding: 25px;*/
      /*      transition: all 0.3s;*/
      /*  }*/
        
      /*  .advantage-item:hover {*/
      /*      transform: translateY(-5px);*/
      /*      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);*/
      /*  }*/
        
      /*  .advantage-item strong {*/
      /*      color: #2a4365;*/
      /*      font-weight: 600;*/
      /*  }*/
        
      /*   Responsive Styles */
      /*  @media (max-width: 768px) {*/
      /*      .content-header-title {*/
      /*          font-size: 2rem;*/
      /*      }*/
            
      /*      .content-header-subtitle {*/
      /*          font-size: 1rem;*/
      /*      }*/
            
      /*      .section-title {*/
      /*          font-size: 1.5rem;*/
      /*      }*/
            
      /*      .tab-nav {*/
      /*          flex-wrap: wrap;*/
      /*      }*/
            
      /*      .tab-btn {*/
      /*          padding: 10px 15px;*/
      /*          font-size: 0.9rem;*/
      /*      }*/
            
      /*      .program-grid {*/
      /*          grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));*/
      /*      }*/
            
      /*      .program-card {*/
      /*          flex-direction: column;*/
      /*      }*/
            
      /*      .program-icon {*/
      /*          margin-right: 0;*/
      /*          margin-bottom: 15px;*/
      /*      }*/
      /*  }*/
    </style>
</head>

<body>
<!-- ===== NAVBAR SUPER KEREN ===== -->
<nav class="sigma-navbar">
  <div class="sigma-navbar-container">
    <!-- Logo Brand -->
    <div class="sigma-navbar-brand">
      <a href="index.html" class="sigma-brand-logo">
        <img src="/logoptq.png" alt="Logo PTQ IQRO'" loading="lazy">
        <span>PTQ IQRO'</span>
      </a>
      <button class="sigma-navbar-toggler">
        <i class="sigma-toggle-icon"></i>
      </button>
    </div>

    <!-- Main Menu -->
    <div class="sigma-navbar-menu">
      <ul class="sigma-main-menu">
        <li class="sigma-menu-item">
          <a href="/home" class="sigma-menu-link">Beranda</a>
        </li>
        <li class="sigma-menu-item">
          <a href="/blog" class="sigma-menu-link">Berita</a>
        </li>
        <li class="sigma-menu-item active">
          <a href="/login-gate" class="sigma-menu-link">Laporan</a>
        </li>
        
        <!-- Profil Dropdown -->
        <li class="sigma-menu-item sigma-dropdown">
          <a href="#" class="sigma-menu-link">
            Profil <i class="fas fa-chevron-down sigma-dropdown-icon"></i>
          </a>
          <ul class="sigma-dropdown-menu">
            <li>
              <a href="/profile" class="sigma-dropdown-item">
                <i class="fas fa-university sigma-icon"></i>
                <span>PTQ IQRO'</span>
              </a>
            </li>
            <li>
              <a href="/tahfizh" class="sigma-dropdown-item">
                <i class="fas fa-book-open sigma-icon"></i>
                <span>Tahfizh</span>
              </a>
            </li>
            <li>
              <a href="/pengasuhan" class="sigma-dropdown-item">
                <i class="fas fa-child sigma-icon"></i>
                <span>Pengasuhan</span>
              </a>
            </li>
            <li>
              <a href="/nontahfizh" class="sigma-dropdown-item">
                <i class="fas fa-user-graduate sigma-icon"></i>
                <span>Non-Tahfizh</span>
              </a>
            </li>
            <li>
              <a href="/ekskul" class="sigma-dropdown-item">
                <i class="fas fa-palette sigma-icon"></i>
                <span>Ekstrakulikuler</span>
              </a>
            </li>
          </ul>
        </li>
        
        <!-- Organisasi Dropdown -->
        <li class="sigma-menu-item sigma-dropdown">
          <a href="#" class="sigma-menu-link">
            Organisasi <i class="fas fa-chevron-down sigma-dropdown-icon"></i>
          </a>
          <ul class="sigma-dropdown-menu">
            <li>
              <a href="/jurnalis" class="sigma-dropdown-item">
                <i class="fas fa-pen-nib sigma-icon"></i>
                <span>Jurnalistik</span>
              </a>
            </li>
            <li>
              <a href="/isqi" class="sigma-dropdown-item">
                <i class="fas fa-lightbulb sigma-icon"></i>
                <span>ISQI'</span>
              </a>
            </li>
            <li>
              <a href="/mpk" class="sigma-dropdown-item">
                <i class="fas fa-users sigma-icon"></i>
                <span>MPK</span>
              </a>
            </li>
            <li>
              <a href="/dkm" class="sigma-dropdown-item">
                <i class="fas fa-mosque sigma-icon"></i>
                <span>DKM</span>
              </a>
            </li>
            <li>
              <a href="/keolahragaan" class="sigma-dropdown-item">
                <i class="fas fa-futbol sigma-icon"></i>
                <span>Keolahragaan</span>
              </a>
            </li>
            <li>
              <a href="/perpus" class="sigma-dropdown-item">
                <i class="fas fa-book sigma-icon"></i>
                <span>Perpustakaan</span>
              </a>
            </li>
            <li>
              <a href="/coding" class="sigma-dropdown-item">
                <i class="fas fa-code sigma-icon"></i>
                <span>Tim Coding</span>
              </a>
            </li>
            <li>
              <a href="/prodemas" class="sigma-dropdown-item">
                <i class="fas fa-project-diagram sigma-icon"></i>
                <span>Prodemas</span>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="sigma-menu-item">
          <a href="https://wa.me/+62896-6749-4297" target="_blank" class="sigma-menu-link">Informasi</a>
        </li>
      </ul>
      
      <!-- Login Button -->
      <div class="sigma-navbar-actions">
        <a href="/admin" class="sigma-login-btn">
          <span>Login</span>
          <i class="fas fa-sign-in-alt"></i>
        </a>
      </div>
    </div>
  </div>
</nav>

<style>
/* ===== NAVBAR STYLE ===== */
:root {
  --hijau-tua: #1a7446;
  --kuning-cerah: #fad25d;
  --kuning-emas: #f5b700;
  --biru-muda: #edfafd;
  --text-light: #ffffff;
  --text-dark: #333333;
}

.sigma-navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--hijau-tua);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  padding: 10px 0;
  border-bottom: 3px solid var(--kuning-cerah);
  transition: all 0.3s ease;
}

.sigma-navbar.scrolled {
  padding: 5px 0;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
}

.sigma-navbar-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Brand Logo */
.sigma-navbar-brand {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
}

.sigma-brand-logo {
  display: flex;
  align-items: center;
  text-decoration: none;
  gap: 12px;
}

.sigma-brand-logo img {
  height: 60px;
  width: auto;
  filter: drop-shadow(2px 2px 5px rgba(0, 0, 0, 0.3));
  transition: all 0.3s ease;
}

.sigma-brand-logo span {
  color: var(--biru-muda);
  font-size: 26px;
  font-weight: 700;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease;
}

/* Navbar Toggler */
.sigma-navbar-toggler {
  background: none;
  border: none;
  cursor: pointer;
  display: none;
  padding: 10px;
}

.sigma-toggle-icon {
  display: block;
  width: 25px;
  height: 2px;
  background-color: var(--kuning-cerah);
  position: relative;
  transition: all 0.3s ease;
}

.sigma-toggle-icon::before,
.sigma-toggle-icon::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: var(--kuning-cerah);
  left: 0;
  transition: all 0.3s ease;
}

.sigma-toggle-icon::before {
  top: -8px;
}

.sigma-toggle-icon::after {
  bottom: -8px;
}

.sigma-navbar-toggler.active .sigma-toggle-icon {
  background-color: transparent;
}

.sigma-navbar-toggler.active .sigma-toggle-icon::before {
  transform: rotate(45deg);
  top: 0;
}

.sigma-navbar-toggler.active .sigma-toggle-icon::after {
  transform: rotate(-45deg);
  bottom: 0;
}

/* Main Menu */
.sigma-navbar-menu {
  display: flex;
  align-items: center;
}

.sigma-main-menu {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.sigma-menu-item {
  position: relative;
  margin: 0 5px;
}

.sigma-menu-link {
  color: var(--biru-muda);
  font-weight: 600;
  text-decoration: none;
  padding: 12px 18px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  transition: all 0.3s ease;
  position: relative;
}

.sigma-menu-link:hover {
  color: var(--kuning-cerah);
  background-color: rgba(250, 210, 93, 0.1);
}

.sigma-menu-link::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  background: var(--kuning-cerah);
  bottom: 8px;
  left: 50%;
  transform: translateX(-50%);
  transition: all 0.3s ease;
}

.sigma-menu-link:hover::after {
  width: calc(100% - 36px);
}

/* Dropdown Menu */
.sigma-dropdown {
  position: relative;
}

.sigma-dropdown-icon {
  margin-left: 5px;
  font-size: 12px;
  transition: transform 0.3s ease;
}

.sigma-dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 220px;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  list-style: none;
  padding: 10px 0;
  margin: 0;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all 0.3s ease;
  z-index: 1001;
}

.sigma-dropdown:hover .sigma-dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.sigma-dropdown:hover .sigma-dropdown-icon {
  transform: rotate(180deg);
}

.sigma-dropdown-item {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  color: var(--text-dark);
  text-decoration: none;
  transition: all 0.3s ease;
}

.sigma-dropdown-item:hover {
  background-color: var(--kuning-cerah);
  color: var(--hijau-tua);
  padding-left: 25px;
}

.sigma-icon {
  color: var(--hijau-tua);
  margin-right: 10px;
  width: 20px;
  text-align: center;
}

.sigma-dropdown-item:hover .sigma-icon {
  color: var(--hijau-tua);
}

/* Login Button */
.sigma-navbar-actions {
  margin-left: 30px;
}

.sigma-login-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  background-color: var(--kuning-cerah);
  color: var(--hijau-tua);
  font-weight: 600;
  padding: 12px 25px;
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.sigma-login-btn:hover {
  background-color: var(--kuning-emas);
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Active State */
.sigma-menu-item.active .sigma-menu-link {
  color: var(--kuning-cerah);
}

.sigma-menu-item.active .sigma-menu-link::after {
  width: calc(100% - 36px);
}

/* Responsive Styles */
@media (max-width: 992px) {
  .sigma-navbar-toggler {
    display: block;
  }
  
  .sigma-navbar-menu {
    position: fixed;
    top: 80px;
    left: 0;
    width: 100%;
    background-color: var(--hijau-tua);
    flex-direction: column;
    align-items: flex-start;
    padding: 20px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    transform: translateY(-150%);
    opacity: 0;
    transition: all 0.3s ease;
    z-index: 999;
  }
  
  .sigma-navbar-menu.active {
    transform: translateY(0);
    opacity: 1;
  }
  
  .sigma-main-menu {
    flex-direction: column;
    width: 100%;
  }
  
  .sigma-menu-item {
    width: 100%;
    margin: 5px 0;
  }
  
  .sigma-menu-link {
    padding: 12px 0;
    justify-content: space-between;
  }
  
  .sigma-dropdown-menu {
    position: static;
    box-shadow: none;
    background-color: rgba(0, 0, 0, 0.1);
    width: 100%;
    display: none;
    opacity: 1;
    visibility: visible;
    transform: none;
    margin-top: 5px;
  }
  
  .sigma-dropdown:hover .sigma-dropdown-menu {
    display: block;
  }
  
  .sigma-dropdown-icon {
    transform: rotate(0);
  }
  
  .sigma-dropdown:hover .sigma-dropdown-icon {
    transform: rotate(0);
  }
  
  .sigma-navbar-actions {
    margin: 20px 0 0;
    width: 100%;
  }
  
  .sigma-login-btn {
    width: 100%;
    justify-content: center;
  }
}

@media (max-width: 768px) {
  .sigma-brand-logo img {
    height: 50px;
  }
  
  .sigma-brand-logo span {
    font-size: 22px;
  }
}

@media (max-width: 576px) {
  .sigma-brand-logo img {
    height: 45px;
  }
  
  .sigma-brand-logo span {
    font-size: 20px;
  }
  
  .sigma-navbar-menu {
    top: 70px;
  }
}
</style>

<script>
// Navbar Script
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.sigma-navbar');
  const toggler = document.querySelector('.sigma-navbar-toggler');
  const menu = document.querySelector('.sigma-navbar-menu');
  
  // Toggle mobile menu
  toggler.addEventListener('click', function() {
    this.classList.toggle('active');
    menu.classList.toggle('active');
  });
  
  // Close menu when clicking on dropdown items
  const dropdownItems = document.querySelectorAll('.sigma-dropdown-item');
  dropdownItems.forEach(item => {
    item.addEventListener('click', function() {
      if (window.innerWidth <= 992) {
        toggler.classList.remove('active');
        menu.classList.remove('active');
      }
    });
  });
  
  // Sticky navbar on scroll
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
  
  // Initialize scroll state
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  }
});
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<body>
    <!-- Welcome Popup -->
<div id="welcomePopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-30 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-700">
  <div class="bg-gradient-to-r from-green-600 via-green-700 to-green-900 rounded-xl p-8 max-w-md text-center shadow-xl transform scale-75 opacity-0 transition-all duration-700">
    <h2 class="text-white font-extrabold text-3xl md:text-4xl tracking-wide font-sans uppercase drop-shadow-md">
      Selamat Datang!
    </h2>
    <p class="text-green-200 mt-3 font-medium text-lg">
      di Laporan Hafalan Santri PTQ IQRO'
    </p>
  </div>
</div>

<style>
/* Animasi garis bawah muncul dari titik ke penuh */
.underline-anim {
  position: relative;
}

.underline-anim::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  height: 2px;
  width: 0;
  background-color: #f5b700; /* kuning emas */
  transition: width 0.3s ease;
  border-radius: 1px;
}

.underline-anim:hover::after,
.underline-anim:focus::after {
  width: 100%;
  left: 0;
  transform: none;
}

/* Untuk item yang aktif (kelas tambahan) garis bawah langsung penuh */
.underline-active:: {
  width: 100% !important;
  left: 0 !important;
  transform: none !important;
}
  /* Custom font-sans if mau, bisa pakai Google Fonts juga */
  /* Animasi muncul dan hilang */
  #welcomePopup.show {
    opacity: 1;
    pointer-events: auto;
  }
  #welcomePopup.show > div {
    opacity: 1;
    transform: scale(1);
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("welcomePopup");

    // Cek apakah popup sudah pernah ditampilkan selama sesi ini
    if (!sessionStorage.getItem("welcomePopupShown")) {
      // Tampilkan popup
      popup.classList.add("show");

      // Simpan flag di sessionStorage
      sessionStorage.setItem("welcomePopupShown", "true");

      // Setelah 3 detik, sembunyikan popup
      setTimeout(() => {
        popup.classList.remove("show");
      }, 3000);
    }
  });
</script>

<nav class="bg-transparent text-transparent px-6 py-4  sticky top-0 z-50">
  <div class="container mx-auto flex justify-between items-center flex-wrap">
      
    <!-- Logo & Brand -->
    <!--<div class="flex items-center space-x-4">-->
    <!--  <img src="/logoptq.png" alt="Logo PTQ IQRO'" class="h-20 w-20 rounded-full drop-shadow-x2" />-->
    <!--  <span class="text-2xl md:text-3xl font-bold tracking-wide drop-shadow-md text-transparent">PTQ IQRO'</span>-->
    <!--</div>-->

    <!-- Menu -->
    <div class="flex flex-wrap items-center space-x-4 mt-4 md:mt-0" x-data="{ openProfil: false, openOrganisasi: false, activeProfilIndex: null, activeOrganisasiIndex: null }">

      <a href="https://ptqiqro.id" class="hover:text-transparent font-semibold transition duration-200 relative underline-anim">Beranda</a>
      <a href="/about.html" class="hover:text-transparent font-semibold transition duration-200 relative underline-anim">Berita</a>

      <!-- Dropdown Profil -->
      <div class="relative" @mouseenter="openProfil = true" @mouseleave="openProfil = false">
        <button class="font-semibold hover:text-transparent flex items-center gap-1 relative underline-anim text-transparent">
          Profil
        </button>
        <div
          x-show="openProfil"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 transform -translate-y-2"
          x-transition:enter-end="opacity-100 transform translate-y-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 transform translate-y-0"
          x-transition:leave-end="opacity-0 transform -translate-y-2"
          class="absolute bg-transparent text-transparent shadow-lg w-48 z-50 origin-top"
          style="display: none;"
        >
          <template x-for="(item, index) in [
            { href:'#', icon:'fas fa-university', label:`PTQ IQRO'` },
            { href:'#', icon:'fas fa-book-open', label:'Tahfizh' },
            { href:'#', icon:'fas fa-child', label:'Pengasuhan' },
            { href:'#', icon:'fas fa-user-graduate', label:'Non-Tahfizh' },
            { href:'#', icon:'fas fa-palette', label:'Ekstrakulikuler' }
          ]" :key="index">
            <a
              :href="item.href"
              class="block px-4 py-2 hover:bg-transparent hover:text-transparent relative flex items-center gap-2"
              :class="activeProfilIndex === index ? 'bg-transparent text-transparent font-semibold ' : ''"
              @click.prevent="activeProfilIndex = index"
              @mousedown.prevent
            >
              <i :class="item.icon + ' text-transparent'"></i>
              <span x-text="item.label" class="text-transparent"></span>

              <!-- Garis kuning bawah muncul saat active -->
              <span
                class="absolute left-0 bottom-0 h-0.5 bg-transparent w-full"
                x-show="activeProfilIndex === index"
                x-transition.opacity
              ></span>
            </a>
          </template>
        </div>
      </div>

      <!-- Dropdown Organisasi -->
      <div class="relative" @mouseenter="openOrganisasi = true" @mouseleave="openOrganisasi = false">
        <button class="font-semibold hover:text-transparent flex items-center gap-1 relative underline-anim text-transparent">
          Organisasi
        </button>
        <div
          x-show="openOrganisasi"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 transform -translate-y-2"
          x-transition:enter-end="opacity-100 transform translate-y-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 transform translate-y-0"
          x-transition:leave-end="opacity-0 transform -translate-y-2"
          class="absolute bg-transparent text-transparent shadow-lg w-52 z-50 origin-top"
          style="display: none;"
        >
          <template x-for="(item, index) in [
            { href:'#', icon:'fas fa-pen-nib', label:'Jurnalistik' },
            { href:'#', icon:'fas fa-lightbulb', label:'ISQI\'' },
            { href:'#', icon:'fas fa-users', label:'MPK' },
            { href:'#', icon:'fas fa-mosque', label:'DKM' },
            { href:'#', icon:'fas fa-futbol', label:'Keolahragaan' },
            { href:'#', icon:'fas fa-book', label:'Perpustakaan' },
            { href:'#', icon:'fas fa-code', label:'Tim Coding' },
            { href:'#', icon:'fas fa-project-diagram', label:'Prodemas' }
          ]" :key="index">
            <a
              :href="item.href"
              class="group block px-4 py-2 hover:bg-transparent hover:text-transparent relative flex items-center gap-2 transition-colors duration-200"
              :class="activeOrganisasiIndex === index ? 'bg-transparent text-transparent font-semibold' : ''"
              @click.prevent="activeOrganisasiIndex = index"
              @mousedown.prevent
            >
              <i
                :class="item.icon + ' text-transparent transition-transform duration-200 ease-in-out ' + (activeOrganisasiIndex === index ? 'scale-110' : '')"
              ></i>
              <span x-text="item.label" class="text-transparent"></span>

              <!-- Garis kuning bawah muncul saat active -->
              <span
                class="absolute left-0 bottom-0 h-0.5 bg-transparent w-full"
                x-show="activeOrganisasiIndex === index"
                x-transition.opacity
              ></span>
            </a>
          </template>
        </div>
      </div>

      <!-- Informasi -->
      <a href="https://wa.me/+62896-6749-4297" target="_blank" class="hover:text-transparent font-semibold transition duration-200 relative underline-anim">Informasi</a>

      <!-- Login -->
      <a class="ml-4 bg-transparent text-transparent font-bold px-4 transition duration-200"></a>
    </div>
  </div>
</nav>


    
  <!-- Background Image -->
 <div class="fixed top-0 left-0 w-full h-full -z-10 bg-repeat-y bg-auto opacity-50" style="background-image: url('https://ptqiqro.com/public/foto/bgweb.svg')"></div>


  <!-- Spinner -->
  <div id="spinner">
    <div class="spinner-border"></div>
    <div class="spinner-grow"></div>
  </div>

  <!-- Decorative Top Corners -->
  <div class="absolute top-0 left-0 w-40 h-40 bg-white-600  rounded-br-full blur-2xl z-0"></div>
  <div class="absolute top-0 right-0 w-32 h-32 bg-white-400 rounded-bl-full blur-xl z-0"></div>

  <div class="container mx-auto px-6 py-8 relative z-10">
    <!-- Header -->
 <div class="bg-white border border-white/50 rounded-xl p-4 md:p-6 shadow-2xl flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-8">
  <img src="/logoptq.png" alt="Logo" class="h-16 w-16 md:h-20 md:w-20 object-cover rounded-full shadow-md ring-2 ring-white">
  
  <div class="w-full max-w-2xl mx-auto p-4 md:p-8 bg-white rounded-3xl shadow-2xl backdrop-blur-sm bg-opacity-90 border border-yellow-200 transform transition-all hover:scale-[1.01] hover:shadow-lg">
    <div class="relative">
      <!-- Decorative elements -->
      <div class="absolute -top-3 -left-3 md:-top-5 md:-left-5 w-16 h-16 md:w-24 md:h-24 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-30"></div>
      <div class="absolute -bottom-3 -right-3 md:-bottom-5 md:-right-5 w-20 h-20 md:w-32 md:h-32 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-20"></div>
      
      <!-- Main content -->
      <h1 class="text-3xl md:text-5xl font-extrabold text-green-900 tracking-tight mb-2 md:mb-3 relative z-10">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-600 to-green-800">Laporan Hafalan Santri</span>
        <span class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-yellow-400 to-yellow-200 rounded-full"></span>
      </h1>
      
      <p class="text-base md:text-lg text-green-700/90 relative z-10 leading-relaxed">
        <span class="inline-block px-2 py-1 bg-yellow-50 rounded-lg border-l-4 border-yellow-300 text-sm md:text-base">Pantau perkembangan hafalan santri </span> 
        dengan <span class="font-medium text-green-800">mudah</span> dan <span class="font-medium text-green-800">praktis</span>.
      </p>
    </div>
    
    <!-- Glow effect -->
    <div class="absolute inset-0 rounded-3xl pointer-events-none border border-white/10 mix-blend-overlay shadow-[inset_0_0_15px_rgba(210,255,150,0.3)]"></div>
  </div>
</div>



    <!-- Filter Section -->
    <div class="bg-white backdrop-blur-lg border border-white/30 rounded-xl shadow-lg p-6 mb-6">
      <form method="GET" action="/report" class="grid md:grid-cols-3 gap-4 items-end">
        <div>
          <label class="block mb-1 font-semibold text-green-700">Nama Santri</label>
          <div class="relative">
            <input type="text" name="nama" placeholder="Cari nama santri..." value="{{ request('nama') }}"
              class="w-full pl-10 pr-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/80 backdrop-blur-md">
            <div class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-search"></i>
            </div>
          </div>
        </div>
        <div>
          <button type="submit"
            class="w-full bg-yellow-400 hover:bg-yellow-300 text-green-900 font-semibold py-2 px-4 rounded-lg shadow-md transition hover:-translate-y-1 hover:shadow-xl">
            Cari Data
          </button>
        </div>
        <div>
          <label for="bulan" class="font-semibold text-green-700">Pilih Bulan :</label>
          <select name="bulan" id="bulan"
            onchange="this.form.submit()"
            class="bg-yellow-100 border border-yellow-400 text-green-800 font-semibold rounded px-3 py-2 shadow-sm hover:bg-yellow-200 transition">
            @php
                use Carbon\Carbon;
                $now = Carbon::now();
            @endphp
            @for ($i = 0; $i < 2; $i++)
                @php
                    $bulan = $now->copy()->subMonths($i);
                    $value = $bulan->format('Y-m');
                    $label = $bulan->translatedFormat('F Y');
                @endphp
                <option value="{{ $value }}" {{ request('bulan', date('Y-m')) == $value ? 'selected' : '' }}>
                  {{ $label }}
                </option>
            @endfor
          </select>
        </div>
        <div>
          <label for="jenis_kelamin" class="font-semibold text-green-700">Jenis Kelamin :</label>
          <select name="jenis_kelamin" id="jenis_kelamin"
            onchange="this.form.submit()"
            class="bg-yellow-100 border border-yellow-400 text-green-800 font-semibold rounded px-3 py-2 shadow-sm hover:bg-yellow-200 transition">
            <option value="">Semua</option>
            @foreach ($jenisKelaminList as $jk)
              <option value="{{ $jk }}" {{ request('jenis_kelamin') == $jk ? 'selected' : '' }}>
                {{ $jk }}
              </option>
            @endforeach
          </select>
        </div>
      </form>
    </div>


    <!-- Table Section -->
    <div class="bg-white backdrop-blur-md border border-white/20 rounded-xl shadow-xl overflow-hidden">
      <div class="bg-yellow-400/90 px-6 py-4">
        <h2 class="text-lg font-bold text-green-900">Daftar Santri</h2>
      </div>
      <div class="overflow-x-auto md:overflow-visible">
      <table class="min-w-full divide-y divide-gray-200">
    
           <thead class="bg-green-700 text-white sticky top-0 z-10 backdrop-blur-md bg-green-700/90">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No.</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Hafalan Bulan Ini</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Halaman</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Keterangan</th>
              </tr>
            </thead>
           <tbody class="divide-y divide-gray-200 bg-white">
                @php($no=1)
                @foreach($santris as $santri)
                <tr class="" data-aos="fade-up">
                  <td class="px-6 py-4 text-sm text-gray-700 bg-white">{{ $no }}</td>
                  <td class="px-6 py-4 bg-white">
                  <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-3">
                      <img src="{{ empty($santri['photo']) ? asset('icon2.png') : asset('storage/' . $santri['photo']) }}"
                        alt="Photo" class="h-10 w-10 rounded-full shadow-md ring-1 ring-green-600/40">
                      <div>
                        <div class="text-sm font-semibold text-gray-900">{{ $santri['nama'] }}</div>
                        <div class="text-xs text-gray-500">Kelas: {{ $santri['kelas'] }}</div>
                      </div>
                    </div>
                  </td>
                  @if(empty($santri['ziyadahHalamanAwal']) || empty($santri['ziyadahHalamanTerakhir']))
                    <td colspan="3" class="px-6 py-4 text-sm text-red-600 italic text-center">
                        Belum ada laporan di bulan ini
                    </td>
                @else
                    <td class="px-6 py-4 text-sm text-gray-700 bg-white">
                        {{ $santri['totalZiyadah'] }} Halaman
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700 bg-white">
                        {{ $santri['ziyadahHalamanAwal'] }} - {{ $santri['ziyadahHalamanTerakhir'] }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700 bg-white">
                        {{ $santri['statusAkhirBulan'] }}
                    </td>
                @endif
                </tr>
                @php($no++)
                @endforeach
              </tbody>
          </table>
      </div>

    </div>
    
    <!-- Santri Turbo Kick: Ultimate Scrollback Attack -->
<div class="back-to-top-santri" id="backToTopSantri">
    <!-- Santri SVG -->
    <svg id="santriSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 100" width="70" height="100">
        <rect x="22" y="30" width="20" height="40" fill="#1a7446" rx="3" />
        <rect x="22" y="60" width="20" height="30" fill="#fad25d" rx="2" />
        <circle cx="32" cy="18" r="12" fill="#fff" stroke="#1a7446" stroke-width="2" />
        <rect x="20" y="5" width="24" height="10" fill="#000" rx="2" />
        <path d="M26 22 Q32 28 38 22" stroke="#1a7446" stroke-width="2" fill="transparent" />
    </svg>

    <!-- Bola SVG -->
    <svg id="bolaSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30" height="30" style="position:absolute; bottom:10px; left:50%; transform:translateX(-50%);">
        <circle cx="25" cy="25" r="20" fill="#ffffff" stroke="#1a7446" stroke-width="4" />
        <circle cx="25" cy="25" r="8" fill="#1a7446" />
    </svg>

    <!-- Sparkles -->
    <div id="sparklesContainer"></div>
</div>

<!-- Sound Effect -->
<audio id="kickSound" src="data:audio/mp3;base64,//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAACAAACcQCA..." preload="auto"></audio>

<style>
@keyframes pulse-border {
  0% {
    box-shadow: 0 0 0 0 rgba(250, 210, 93, 0.6);
  }
  100% {
    box-shadow: 0 0 15px 8px rgba(250, 210, 93, 0);
  }
}
.animate-pulse {
  animation: pulse-border 1.2s ease-out infinite;
}

    /* Container */
    .back-to-top-santri {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 70px;
        height: 100px;
        cursor: pointer;
        z-index: 999;
    }

    #santriSVG, #bolaSVG {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        user-select: none;
        pointer-events: none;
    }

    #santriSVG {
        bottom: 30px;
    }

    #bolaSVG {
        bottom: 10px;
        filter: drop-shadow(0 0 5px #fad25d);
        transition: bottom 1s ease, opacity 1s ease;
    }

    /* Bola tendang + glow + mantul */
    .bola-tendang {
        animation: tendangBola 3s forwards, spinBola 3s linear;
    }

    @keyframes tendangBola {
        0% { bottom: 10px; left: 50%; opacity: 1; }
        20% { bottom: 200px; left: 60%; }
        40% { bottom: 400px; left: 40%; }
        60% { bottom: 600px; left: 70%; }
        80% { bottom: 800px; left: 30%; }
        100% { bottom: 100vh; left: 50%; opacity: 0; }
    }

    @keyframes spinBola {
        from { transform: translateX(-50%) rotate(0deg) scale(1); }
        to { transform: translateX(-50%) rotate(1440deg) scale(1.2); }
    }

    /* Hover effect */
    .back-to-top-santri:hover #santriSVG {
        transform: translateX(-50%) scale(1.05);
    }

    /* Sparkles */
    #sparklesContainer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: visible;
    }

    .sparkle {
        position: absolute;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: radial-gradient(circle, #fad25d, #ff7f00, #ffc700);
        box-shadow: 0 0 10px #ffd700;
        opacity: 0.8;
        animation: sparkle-fly 1.5s forwards;
    }

    @keyframes sparkle-fly {
        0% {
            transform: translate(0,0) scale(1);
            opacity: 1;
        }
        100% {
            transform: translate(calc(-100px + 200px * var(--random-x)), -300px) scale(0.5);
            opacity: 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopSantri = document.getElementById('backToTopSantri');
        const bolaSVG = document.getElementById('bolaSVG');
        const kickSound = document.getElementById('kickSound');
        const sparklesContainer = document.getElementById('sparklesContainer');

        function createSparkles() {
            for (let i = 0; i < 20; i++) {
                const sparkle = document.createElement('div');
                sparkle.className = 'sparkle';
                sparkle.style.left = '50%';
                sparkle.style.bottom = '10px';
                sparkle.style.setProperty('--random-x', Math.random().toString());
                sparklesContainer.appendChild(sparkle);

                setTimeout(() => {
                    sparkle.remove();
                }, 1500);
            }
        }

        backToTopSantri.addEventListener('click', function() {
            // Play kick sound
            kickSound.currentTime = 0;
            kickSound.play();

            // Animate bola
            bolaSVG.classList.add('bola-tendang');

            // Sparkles
            createSparkles();

            // Scroll to Top - delay sedikit setelah bola naik
            setTimeout(() => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 800);

            // Reset bola after animation
            setTimeout(() => {
                bolaSVG.classList.remove('bola-tendang');
            }, 3000);
        });
    });
</script>

    <!-- Contact Section -->
    <div class="mt-10 bg-green-700 text-white p-6 rounded-xl shadow-lg text-center">
      <h3 class="text-lg font-semibold mb-2">Informasi Lebih Lanjut</h3>
      <p class="text-sm">Kordinator Ketahfizhan
      Ustadz Abdullah Fatih</p>
      <p class="text-sm mt-2">
        <i class="fab fa-whatsapp mr-2"></i>
        <a href="https://wa.me/+62 821-1905-4395" target="_blank" class="underline hover:text-yellow-300">+62 821-1905-4395</a>
      </p>
    </div>
  </div>

  <script>
    setTimeout(() => {
      document.getElementById('spinner').style.display = 'none';
    }, 1500);
  </script>
  <!-- AOS Animation Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: false,
    easing: 'ease-out',
  });
</script>
</body>
</html>

