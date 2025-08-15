<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengasuhan - PTQ IQRO'</title>
    <link rel="icon" type="image/x-icon" href="logoptq.png">
    <meta name="title" content="Pengasuhan Pesantren PTQ IQRO: Kurikulum Tarbiyah Pendewasaan dan Pembentukan Karakter Santri">
    <meta name="description" content="Pelajari bagaimana pengasuhan di PTQ IQRO mengintegrasikan kurikulum tarbiyah pendewasaan untuk membentuk karakter santri mandiri, disiplin, bertanggung jawab, dan siap berkontribusi di masyarakat.">
    <meta name="keywords" content="pengasuhan pesantren, pengasuhan PTQ IQRO, kurikulum tarbiyah pendewasaan, pembentukan karakter santri, pendewasaan santri, pendidikan pesantren modern, pembinaan santri, karakter santri, pendidikan karakter pesantren">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
      <a href="/" class="sigma-brand-logo">
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
        <li class="sigma-menu-item">
          <a href="/report" class="sigma-menu-link">Laporan</a>
        </li>
        
        <!-- Profil Dropdown -->
        <li class="sigma-menu-item sigma-dropdown active">
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

<!-- ===== HERO SECTION ===== -->
<section class="hero-section">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content" data-aos="fade-up">
      <h1 class="hero-title">
        <span class="hero-highlight">PENGASUHAN</span> PTQ IQRO'</h1>
      <p class="hero-subtitle">Kurikulum Tarbiyah Pendewasaan & Pembentukan Karakter Santri</p>
      <div class="hero-buttons">
        <a href="#about" class="hero-button primary">Lihat Selengkapnya</a>
        <a href="#visimisi" class="hero-button secondary">Keunggulan kami</a>
      </div>
    </div>
  </div>
</section>

<style>
/* ===== HERO SECTION STYLES ===== */
.hero-section {
  position: relative;
  height: 100vh;
  min-height: 500px;
  max-height: 900px;
  background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
              url('https://ptqiqro.id/public/foto/15.jpg') center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  overflow: hidden;
  text-align: center;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(26, 116, 70, 0.7) 0%, rgba(245, 183, 0, 0.5) 100%);
  z-index: 1;
}

.container {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  width: 90%;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.hero-title {
  font-size: clamp(2rem, 8vw, 3.5rem);
  font-weight: 800;
  margin-bottom: 15px;
  line-height: 1.2;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  text-align: center;
  width: 100%;
}

.hero-highlight {
  background: linear-gradient(90deg, var(--kuning-emas), var(--kuning-cerah));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  display: inline-block;
}

.hero-subtitle {
  font-size: clamp(1rem, 4vw, 1.5rem);
  margin-bottom: 30px;
  opacity: 0.9;
  text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  text-align: center;
  width: 100%;
  max-width: 90%;
}

.hero-buttons {
  display: flex;
  gap: 15px;
  justify-content: center;
  flex-wrap: wrap;
  width: 100%;
}

.hero-button {
  padding: 12px 25px;
  border-radius: 50px;
  font-weight: 600;
  font-size: clamp(0.9rem, 3vw, 1.1rem);
  transition: all 0.3s ease;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.hero-button.primary {
  background: linear-gradient(90deg, var(--kuning-emas), var(--kuning-cerah));
  color: var(--hijau-tua);
  box-shadow: 0 5px 15px rgba(245, 183, 0, 0.4);
}

.hero-button.secondary {
  background: transparent;
  color: white;
  border: 2px solid white;
  box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
}

.hero-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(245, 183, 0, 0.5);
}

/* Media Queries */
@media (max-width: 768px) {
  .hero-section {
    min-height: 400px;
  }
  
  .hero-buttons {
    gap: 10px;
  }
  
  .hero-button {
    padding: 10px 20px;
  }
  
  .hero-subtitle {
    max-width: 100%;
  }
}

@media (max-width: 480px) {
  .hero-content {
    width: 95%;
    padding: 10px;
  }
  
  .hero-title {
    margin-bottom: 10px;
  }
  
  .hero-subtitle {
    margin-bottom: 20px;
  }
  
  .hero-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .hero-button {
    width: 100%;
    max-width: 250px;
    justify-content: center;
  }
}
</style>

 <!-- ===== pengasuhan ptq iqro ===== -->
<section class="content-section" style="background-color: #f8f9fa; padding: 40px 0;" id="about">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="content-card" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden;">
            
            <div class="content-header" style="background: linear-gradient(135deg, #1a7446 0%, #1a7446 70%, #fad25d 100%); padding: 30px; color: white;">
                <h3 class="content-header-title" style="margin: 0; font-size: 28px; font-weight: 700;">Kurikulum <span style="color: #fad25d;">Pengasuhan</span> PTQ IQRO</h3>
                <p class="content-header-subtitle" style="margin: 10px 0 0; font-size: 18px; opacity: 0.9;">Kurikulum Tarbiyah Pendewasaan & Pembentukan Karakter <span style="font-weight: 600; color: #fad25d;">Santri</span></p>
            </div>
            
            <div class="content-body" style="padding: 30px;">
                
                <div class="section-block" style="margin-bottom: 40px;">
                    <h3 class="section-title" style="font-size: 24px; color: #1a7446; margin-bottom: 20px; position: relative; padding-bottom: 10px;">
                        Gambaran <span style="color: #f5b700;">Umum</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: #f5b700;"></span>
                    </h3>
                    <p style="line-height: 1.8; color: #555;">
                        Program pengasuhan di PTQ IQRO dirancang untuk membentuk santri yang <strong>berkarakter Islami, mandiri, dan siap menghadapi tantangan global</strong>. Melalui pendekatan holistik, kurikulum ini mengintegrasikan nilai-nilai Al-Qur'an dengan keterampilan hidup, kepemimpinan, dan pengabdian masyarakat. Santri tidak hanya menjadi penghafal Al-Qur'an, tetapi juga generasi yang <strong>aqil, kreatif, dan responsif terhadap lingkungan</strong>.
                    </p>
                    <div style="background: #f9f5e8; padding: 20px; border-left: 4px solid #f5b700; margin: 20px 0; border-radius: 0 5px 5px 0;">
                        <strong style="color: #1a7446;">Filosofi Pengasuhan PTQ IQRO</strong><br>
                        <p style="margin: 10px 0 0; color: #555;">
                            "Menyiapkan santri yang <strong>berilmu, beradab, dan bermanfaat</strong> melalui pembiasaan ibadah, kemandirian, dan kepedulian sosial. Program pengasuhan kami menekankan pada <strong>keseimbangan antara spiritualitas, intelektualitas, dan emotional intelligence</strong>."
                        </p>
                    </div>
                    <p style="line-height: 1.8; color: #555;">
                        Kurikulum pengasuhan PTQ IQRO bertujuan untuk:
                    </p>
                    <ul style="padding-left: 20px; color: #555; line-height: 1.8;">
                        <li style="margin-bottom: 8px;"><span style="color: #1a7446; font-weight: bold;">✓</span> Menanamkan <strong>akidah yang kokoh</strong> dan akhlak mulia.</li>
                        <li style="margin-bottom: 8px;"><span style="color: #1a7446; font-weight: bold;">✓</span> Membentuk <strong>kemandirian</strong> melalui pembiasaan hidup disiplin.</li>
                        <li style="margin-bottom: 8px;"><span style="color: #1a7446; font-weight: bold;">✓</span> Mengasah <strong>kepemimpinan</strong> dan tanggung jawab sosial.</li>
                        <li><span style="color: #1a7446; font-weight: bold;">✓</span> Mempersiapkan santri menjadi <strong>aqil baligh</strong> yang siap berkontribusi untuk umat.</li>
                    </ul>
                </div>
                
             
                <div class="section-block" style="margin-bottom: 40px;">
                    <h3 class="section-title" style="font-size: 24px; color: #1a7446; margin-bottom: 20px; position: relative; padding-bottom: 10px;">
                        Tujuan <span style="color: #f5b700;">Kurikulum</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: #f5b700;"></span>
                    </h3>
                    <div class="content-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                        <div style="background: #f9f9f9; border-radius: 8px; padding: 20px; border-top: 3px solid #1a7446;">
                            <strong style="color: #1a7446; font-size: 18px;">Pendewasaan Dini</strong><br>
                            <p style="margin-top: 10px; color: #555; line-height: 1.6;">Program <strong>Prodemas & Aqil Baligh</strong> untuk mematangkan emosional dan spiritual santri.</p>
                        </div>
                        <div style="background: #f9f9f9; border-radius: 8px; padding: 20px; border-top: 3px solid #f5b700;">
                            <strong style="color: #1a7446; font-size: 18px;">Eksplorasi Lingkungan</strong><br>
                            <p style="margin-top: 10px; color: #555; line-height: 1.6;">Kegiatan <strong>Backpacker, Rihlah, Visit Campus & Library</strong> memperluas wawasan santri.</p>
                        </div>
                        <div style="background: #f9f9f9; border-radius: 8px; padding: 20px; border-top: 3px solid #1a7446;">
                            <strong style="color: #1a7446; font-size: 18px;">Khidmat Sosial</strong><br>
                            <p style="margin-top: 10px; color: #555; line-height: 1.6;">Pengabdian masyarakat untuk melatih <strong>kepedulian dan empati</strong>.</p>
                        </div>
                    </div>
                </div>
                
                 
                <div class="section-block" style="margin-bottom: 40px;" id="visimisi">
                    <h3 class="section-title" style="font-size: 24px; color: #1a7446; margin-bottom: 20px; position: relative; padding-bottom: 10px;">
                        Program <span style="color: #f5b700;">Pengasuhan</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: #f5b700;"></span>
                    </h3>
                    
                    <div class="program-tabs">
 
<div class="tab-nav" style="display: flex; border-bottom: 2px solid #eee; margin-bottom: 30px; overflow-x: auto;">
    <button class="tab-btn active" onclick="openTab(event, 'wajib')" 
            style="background: none; border: none; padding: 12px 25px; cursor: pointer; 
                   font-weight: 600; color: #1a7446; border-bottom: 3px solid #f5b700; 
                   margin-right: 10px; white-space: nowrap; transition: all 0.3s ease;">
        Pembiasaan Harian
    </button>
    <button class="tab-btn" onclick="openTab(event, 'pilihan')" 
            style="background: none; border: none; padding: 12px 25px; cursor: pointer; 
                   font-weight: 600; color: #555; border-bottom: 3px solid transparent; 
                   margin-right: 10px; white-space: nowrap; transition: all 0.3s ease;">
        Eksplorasi & Sosial
    </button>
    <button class="tab-btn" onclick="openTab(event, 'khusus')" 
            style="background: none; border: none; padding: 12px 25px; cursor: pointer; 
                   font-weight: 600; color: #555; border-bottom: 3px solid transparent; 
                   margin-right: 10px; white-space: nowrap; transition: all 0.3s ease;">
        Program Khusus
    </button>
</div>

                      
                        <div id="wajib" class="tab-content" style="display: block;">
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                                <div class="program-card" style="background: #f9f9f9; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                                    <div class="program-icon" style="background: #1a7446; color: white; text-align: center; padding: 20px; font-size: 30px;">
                                        <i class="fas fa-pray"></i>
                                    </div>
                                    <div class="program-details" style="padding: 20px;">
                                        <h5 style="margin: 0 0 10px; color: #1a7446; font-size: 20px;">Pembiasaan Ibadah</h5>
                                        <p style="margin: 0; color: #555; line-height: 1.6;">Shalat berjamaah, dzikir pagi-petang, puasa sunnah, dan muhasabah harian.</p>
                                    </div>
                                </div>
                                
                                <div class="program-card" style="background: #f9f9f9; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                                    <div class="program-icon" style="background: #f5b700; color: white; text-align: center; padding: 20px; font-size: 30px;">
                                        <i class="fas fa-hands-helping"></i>
                                    </div>
                                    <div class="program-details" style="padding: 20px;">
                                        <h5 style="margin: 0 0 10px; color: #1a7446; font-size: 20px;">Kemandirian</h5>
                                        <p style="margin: 0; color: #555; line-height: 1.6;">Melatih santri mengurus kebutuhan pribadi (membersihkan kamar, mencuci pakaian).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="pilihan" class="tab-content" style="display: none;">
                            <div class="program-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
                                <div class="program-item" style="background: white; border-radius: 10px; padding: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 3px solid #f5b700; transition: transform 0.3s;">
                                    <i class="fas fa-hiking" style="font-size: 30px; color: #1a7446; margin-bottom: 10px;"></i>
                                    <span style="display: block; font-weight: 600; color: #333;">Backpacker</span>
                                </div>
                                <div class="program-item" style="background: white; border-radius: 10px; padding: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 3px solid #1a7446; transition: transform 0.3s;">
                                    <i class="fas fa-university" style="font-size: 30px; color: #1a7446; margin-bottom: 10px;"></i>
                                    <span style="display: block; font-weight: 600; color: #333;">Visit Campus</span>
                                </div>
                                <div class="program-item" style="background: white; border-radius: 10px; padding: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 3px solid #f5b700; transition: transform 0.3s;">
                                    <i class="fas fa-book-open" style="font-size: 30px; color: #1a7446; margin-bottom: 10px;"></i>
                                    <span style="display: block; font-weight: 600; color: #333;">Visit Library</span>
                                </div>
                                <div class="program-item" style="background: white; border-radius: 10px; padding: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 3px solid #1a7446; transition: transform 0.3s;">
                                    <i class="fas fa-hands" style="font-size: 30px; color: #1a7446; margin-bottom: 10px;"></i>
                                    <span style="display: block; font-weight: 600; color: #333;">Khidmat Masyarakat</span>
                                </div>
                                <div class="program-item" style="background: white; border-radius: 10px; padding: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 3px solid #f5b700; transition: transform 0.3s;">
                                    <i class="fas fa-mountain" style="font-size: 30px; color: #1a7446; margin-bottom: 10px;"></i>
                                    <span style="display: block; font-weight: 600; color: #333;">Rihlah</span>
                                </div>
                            </div>
                        </div>
                        
                        <div id="khusus" class="tab-content" style="display: none;">
                            <div class="competency-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                                <div class="competency-item" style="background: #f9f9f9; border-radius: 10px; padding: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                                    <h4 style="color: #1a7446; margin-top: 0; border-bottom: 2px solid #f5b700; padding-bottom: 10px; display: inline-block;">Prodemas</h4>
                                    <p style="color: #555;">Program pendewasaan santri melalui pelatihan kepemimpinan dan tanggung jawab.</p>
                                </div>
                                <div class="competency-item" style="background: #f9f9f9; border-radius: 10px; padding: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                                    <h4 style="color: #1a7446; margin-top: 0; border-bottom: 2px solid #1a7446; padding-bottom: 10px; display: inline-block;">Aqil Baligh</h4>
                                    <p style="color: #555;">Pembekalan pemahaman kedewasaan dalam Islam (fiqh baligh, kesehatan reproduksi).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="section-block">
                    <h3 class="section-title" style="font-size: 24px; color: #1a7446; margin-bottom: 20px; position: relative; padding-bottom: 10px;">
                        Keunggulan <span style="color: #f5b700;">Kurikulum</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: #f5b700;"></span>
                    </h3>
                    <div class="advantage-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                        <div class="advantage-item" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid #1a7446;">
                            <strong style="color: #1a7446; display: block; margin-bottom: 10px;">Integrasi Ibadah & Keterampilan Hidup</strong> 
                            <span style="color: #555; line-height: 1.6;">Santri belajar mengaplikasikan nilai Islam dalam aktivitas sehari-hari.</span>
                        </div>
                        <div class="advantage-item" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid #f5b700;">
                            <strong style="color: #1a7446; display: block; margin-bottom: 10px;">Program Eksklusif</strong> 
                            <span style="color: #555; line-height: 1.6;">Backpacker, Visit Campus, dan Prodemas untuk pengalaman unik.</span>
                        </div>
                        <div class="advantage-item" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid #1a7446;">
                            <strong style="color: #1a7446; display: block; margin-bottom: 10px;">Pendampingan Intensif</strong> 
                            <span style="color: #555; line-height: 1.6;">Ustadz/ustadzah mendampingi perkembangan santri secara personal.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tabbuttons;
    
    // Hide all tab content
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
    // Remove active class from all tab buttons
    tabbuttons = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tabbuttons.length; i++) {
        tabbuttons[i].style.color = "#555";
        tabbuttons[i].style.borderBottom = "3px solid transparent";
        tabbuttons[i].className = tabbuttons[i].className.replace(" active", "");
    }
    
    // Show the current tab and add active class to the button
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.style.color = "#1a7446";
    evt.currentTarget.style.borderBottom = "3px solid #f5b700";
    evt.currentTarget.className += " active";
}
</script>


<!-- Enhanced Contact & Footer Section -->
<div class="container-fluid sigma-contact-footer"></div>

<!-- Modern Footer Section -->
    <div class="container-fluid sigma-footer-section py-5" style="background-color: #1a7446;">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Brand Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="sigma-footer-widget">
                        <div class="sigma-widget-header d-flex align-items-center mb-4">
                            <img src="/logoptq.png" alt="PTQ IQRO Logo" class="sigma-footer-logo me-3">
                            <div>
                                <h4 class="sigma-widget-title text-white mb-0">PTQ IQRO' CIKUNIR</h4>
                                <p class="sigma-widget-subtitle text-white-50 mb-0">Pesantren Tahfizh Al-Qur'an IQRO'</p>
                            </div>
                        </div>
                        <div class="sigma-widget-body">
                            <p class="text-white mb-4">Lembaga pendidikan yang mengintegrasikan hafalan Al-Qur'an dengan pengembangan akademik dan keterampilan hidup.</p>
                            
                            <div class="sigma-contact-info">
                                <div class="sigma-contact-item">
                                    <i class="fas fa-envelope sigma-contact-icon"></i>
                                    <a href="mailto:mediaptqiqroputra@gmail.com" class="sigma-contact-link">mediaptqiqroputra@gmail.com</a>
                                </div>
                                <div class="sigma-contact-item">
                                    <i class="fas fa-phone-alt sigma-contact-icon"></i>
                                    <a href="https://wa.me/+62896-6749-4297" class="sigma-contact-link">+62 896 6749 4297 (Putra)</a>
                                </div>
                                <div class="sigma-contact-item">
                                    <i class="fas fa-phone-alt sigma-contact-icon"></i>
                                    <a href="https://wa.me/+6281388204775" class="sigma-contact-link">+62 813 8820 4775 (Putri)</a>
                                </div>
                            </div>
                            
                            <div class="sigma-social-links mt-4">
                                <a href="https://www.facebook.com/ptqiqroputra" target="_blank" class="sigma-social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/ptqiqroputra_official/" target="_blank" class="sigma-social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/@MEDIAPTQI" target="_blank" class="sigma-social-icon">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://wa.me/+62896-6749-4297" class="sigma-social-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="sigma-footer-widget">
                        <h4 class="sigma-widget-title">Menu Utama</h4>
                        <ul class="sigma-quick-links">
                            <li><a href="/home" class="sigma-quick-link">Beranda</a></li>
                            <li><a href="/blog" class="sigma-quick-link">Berita</a></li>
                            <li><a href="/login-gate" class="sigma-quick-link">Laporan</a></li>
                            <li><a href="/profile" class="sigma-quick-link">Profil</a></li>
                            <li><a href="https://wa.me/+62896-6749-4297" class="sigma-quick-link">Informasi</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Operational Hours -->
                <div class="col-lg-3 col-md-6">
                    <div class="sigma-footer-widget">
                        <h4 class="sigma-widget-title">Jam Operasional</h4>
                        <div class="sigma-op-hours">
                            <div class="sigma-op-hour-item">
                                <span class="sigma-op-day">Senin - Jumat</span>
                                <span class="sigma-op-time">08:00 - 14:00 WIB</span>
                            </div>
                            <div class="sigma-op-hour-item">
                                <span class="sigma-op-day">Sabtu</span>
                                <span class="sigma-op-time">08:00 - 12:00 WIB</span>
                            </div>
                            <div class="sigma-op-hour-item">
                                <span class="sigma-op-day">Minggu</span>
                                <span class="sigma-op-time">Libur</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Maps -->
                <div class="col-lg-3 col-md-6">
                    <div class="sigma-footer-widget">
                        <h4 class="sigma-widget-title">Lokasi Kami</h4>
                        <div class="sigma-location-tabs">
                            <ul class="nav nav-tabs" id="locationTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="putra-tab" data-bs-toggle="tab" data-bs-target="#putra-map" type="button" role="tab">Putra</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="putri-tab" data-bs-toggle="tab" data-bs-target="#putri-map" type="button" role="tab">Putri</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="locationTabContent">
                                <div class="tab-pane fade show active" id="putra-map" role="tabpanel">
                                    <div class="sigma-map-container">
                                        <iframe src="https://maps.google.com/maps?q=PTQ%20IQRO%20CIKUNIR&t=&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <a href="https://maps.app.goo.gl/jjUWnhuHHJNTzQV66" target="_blank" class="sigma-map-btn">
                                        <i class="fas fa-map-marker-alt me-2"></i> Buka Map Putra
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="putri-map" role="tabpanel">
                                    <div class="sigma-map-container">
                                        <iframe src="https://maps.google.com/maps?q=PTQ%20IQRO%20Putri&t=&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <a href="https://maps.app.goo.gl/6hVM2tVTz7toJjtf8" target="_blank" class="sigma-map-btn">
                                        <i class="fas fa-map-marker-alt me-2"></i> Buka Map Putri
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="container-fluid sigma-copyright-section py-3" style="background-color: #0d4b2a;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="sigma-copyright-text">&copy; <script>document.write(new Date().getFullYear())</script> PTQ IQRO'. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="sigma-credit-text">Dikembangkan dengan <i class="fas fa-heart text-danger"></i> oleh Tim IT PTQ IQRO'</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WhatsApp Script -->
<script>
document.getElementById('sigma-contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('sigma-name').value.trim();
    const email = document.getElementById('sigma-email').value.trim();
    const recipient = document.getElementById('sigma-recipient').value;
    const message = document.getElementById('sigma-message').value.trim();
    
    // Determine recipient number
    let phoneNumber;
    switch(recipient) {
        case 'putra':
            phoneNumber = "6289667494297";
            break;
        case 'putri':
            phoneNumber = "6281388204775"; // Replace with actual Putri number
            break;
        case 'admin':
            phoneNumber = "6289667494297";
            break;
        default:
            phoneNumber = "6289667494297";
    }
    
    // Format message
    const formattedMessage = `*PTQ IQRO' Contact Form*\n\n` +
                            `*Nama:* ${name}\n` +
                            `*Email:* ${email}\n` +
                            `*Tujuan:* ${document.getElementById('sigma-recipient').options[document.getElementById('sigma-recipient').selectedIndex].text}\n` +
                            `*Pesan:* ${message}`;
    
    // Encode for URL
    const encodedMessage = encodeURIComponent(formattedMessage);
    
    // Open WhatsApp
    window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank');
});
</script>

<style>
/* ===== Contact Section Styles ===== */
.sigma-contact-section {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #edfafd 0%, #e1f7fa 100%);
}

.sigma-section-header {
    position: relative;
    z-index: 2;
}

.sigma-section-title {
    font-weight: 700;
    font-size: 2.5rem;
    position: relative;
    display: inline-block;
    background: linear-gradient(to right, #1a7446, #0d4b2a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 15px;
}

.sigma-title-divider {
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, #fad25d, #f5b700);
    margin-top: 15px;
    border-radius: 2px;
}

.sigma-section-subtitle {
    color: #5a7c8a;
    font-size: 1.1rem;
}

.sigma-contact-form {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(26, 116, 70, 0.1);
    position: relative;
    overflow: hidden;
}

.sigma-contact-form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(to bottom, #1a7446, #fad25d);
}

.sigma-input {
    height: 50px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    padding: 12px 20px;
    transition: all 0.3s;
    font-size: 0.95rem;
}

.sigma-input:focus {
    border-color: #1a7446;
    box-shadow: 0 0 0 0.25rem rgba(26, 116, 70, 0.15);
}

textarea.sigma-input {
    height: auto;
    min-height: 150px;
}

.sigma-send-btn {
    background: linear-gradient(to right, #1a7446, #0d4b2a);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(26, 116, 70, 0.3);
    position: relative;
    overflow: hidden;
}

.sigma-send-btn:hover {
    background: linear-gradient(to right, #fad25d, #f5b700);
    color: #1a7446;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(250, 210, 93, 0.4);
}

.sigma-send-btn::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(255,255,255,0.2), rgba(255,255,255,0));
    transform: translateX(-100%);
    transition: transform 0.5s ease;
}

.sigma-send-btn:hover::after {
    transform: translateX(100%);
}

/* ===== Footer Section Styles ===== */
.sigma-footer-section {
    position: relative;
    background: linear-gradient(135deg, #1a7446 0%, #0d4b2a 100%);
    overflow: hidden;
}

.sigma-footer-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 10px;
    background: linear-gradient(to right, #fad25d, #f5b700);
}

.sigma-footer-widget {
    margin-bottom: 30px;
    position: relative;
    z-index: 2;
}

.sigma-widget-header {
    margin-bottom: 25px;
}

.sigma-footer-logo {
    height: 60px;
    width: auto;
    object-fit: contain;
}

.sigma-widget-title {
    color: #fad25d;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}

.sigma-widget-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(to right, #fad25d, #f5b700);
    border-radius: 3px;
}

.sigma-widget-subtitle {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
}

.sigma-contact-info {
    margin-top: 20px;
}

.sigma-contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
}

.sigma-contact-icon {
    color: #fad25d;
    margin-right: 12px;
    margin-top: 4px;
    font-size: 1.1rem;
}

.sigma-contact-link {
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    transition: all 0.3s;
    flex: 1;
}

.sigma-contact-link:hover {
    color: #fad25d;
    padding-left: 5px;
}

.sigma-social-links {
    display: flex;
    gap: 12px;
    margin-top: 25px;
}

.sigma-social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(250, 210, 93, 0.2);
    color: #fad25d;
    border-radius: 50%;
    font-size: 1rem;
    transition: all 0.3s;
    border: 1px solid rgba(250, 210, 93, 0.3);
}

.sigma-social-icon:hover {
    background: #fad25d;
    color: #1a7446;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(250, 210, 93, 0.3);
}

.sigma-quick-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sigma-quick-link {
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    display: block;
    padding: 8px 0;
    transition: all 0.3s;
    position: relative;
}

.sigma-quick-link:hover {
    color: #fad25d;
    padding-left: 10px;
}

.sigma-quick-link::before {
    content: '»';
    position: absolute;
    left: -5px;
    top: 8px;
    color: #fad25d;
    opacity: 0;
    transition: all 0.3s;
}

.sigma-quick-link:hover::before {
    left: 0;
    opacity: 1;
}

.sigma-op-hours {
    margin: 0;
    padding: 0;
    list-style: none;
}

.sigma-op-hour-item {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px dashed rgba(255,255,255,0.1);
}

.sigma-op-day {
    color: rgba(255,255,255,0.9);
}

.sigma-op-time {
    color: #fad25d;
    font-weight: 500;
}

/* Location Tabs */
.sigma-location-tabs {
    background: rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
}

.nav-tabs {
    border-bottom: none;
    background: rgba(0,0,0,0.2);
}

.nav-tabs .nav-link {
    color: rgba(255,255,255,0.8);
    border: none;
    padding: 10px 15px;
    font-size: 0.9rem;
    border-radius: 0;
    transition: all 0.3s;
}

.nav-tabs .nav-link.active {
    color: #1a7446;
    background-color: #fad25d;
    font-weight: 600;
}

.nav-tabs .nav-link:hover {
    color: #fad25d;
    background: rgba(250, 210, 93, 0.1);
}

.tab-content {
    padding: 0;
}

.sigma-map-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%; /* Aspect ratio 16:9 */
    background: #f5f5f5;
    border-radius: 8px 8px 0 0;
}

.sigma-map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    border: 0;
}

.sigma-map-btn {
    display: block;
    text-align: center;
    background: rgba(250, 210, 93, 0.2);
    color: #fad25d;
    padding: 8px;
    text-decoration: none;
    font-size: 0.9rem;
    transition: all 0.3s;
}

.sigma-map-btn:hover {
    background: #fad25d;
    color: #1a7446;
}

/* ===== Copyright Section ===== */
.sigma-copyright-section {
    background: linear-gradient(135deg, #0d4b2a 0%, #083822 100%);
    position: relative;
}

.sigma-copyright-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: linear-gradient(to right, transparent, rgba(250, 210, 93, 0.5), transparent);
}

.sigma-copyright-text, .sigma-credit-text {
    color: rgba(255,255,255,0.7);
    font-size: 0.9rem;
    margin: 0;
}

.sigma-credit-text a {
    color: #fad25d;
    text-decoration: none;
    transition: all 0.3s;
}

.sigma-credit-text a:hover {
    color: #f5b700;
    text-decoration: underline;
}

/* ===== Responsive Styles ===== */
@media (max-width: 991px) {
    .sigma-footer-widget {
        margin-bottom: 40px;
    }
    
    .sigma-contact-info {
        margin-top: 15px;
    }
    
    .sigma-widget-title {
        font-size: 1.2rem;
    }
}

@media (max-width: 767px) {
    .sigma-contact-form {
        padding: 25px;
    }
    
    .sigma-section-title {
        font-size: 2rem;
    }
    
    .sigma-footer-widget {
        text-align: center;
    }
    
    .sigma-widget-title::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .sigma-social-links {
        justify-content: center;
    }
    
    .sigma-quick-link {
        justify-content: center;
    }
    
    .sigma-copyright-text, .sigma-credit-text {
        text-align: center !important;
    }
    
    .sigma-credit-text {
        margin-top: 10px;
    }
}

@media (max-width: 575px) {
    .sigma-contact-form {
        padding: 20px 15px;
    }
    
    .sigma-section-title {
        font-size: 1.8rem;
    }
    
    .sigma-footer-logo {
        height: 50px;
    }
}
</style>

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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Inisialisasi carousel
var myCarousel = new bootstrap.Carousel(document.getElementById('iqroCarousel'), {
    interval: 5000,
    wrap: true
});

// Animasi saat scroll
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    
    const observerOptions = {
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    }, observerOptions);
    
    sections.forEach(section => {
        observer.observe(section);
    });
});
</script>

</body>
</html>