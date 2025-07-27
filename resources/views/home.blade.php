<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTQ IQRO' - Home</title>
    <link rel="icon" type="image/x-icon" href="logoptq.png">
    <meta name="title" content="PTQ IQRO’ Bekasi | Pesantren Tahfizh 30 Juz Bersanad, Ekskul & Kurikulum Akil Baligh">
    <meta name="keywords" content="Pesantren Tahfizh, Al-Qur'an, PTQ IQRO', pendidikan Islam, tahfizh Al-Qur'an, santri, pendidikan akhlak, kurikulum terpadu, generasi Qur'ani, pendidikan agama, pesantren terbaik, pendaftaran santri">
    <meta name="description" content="Selamat datang di Pesantren Tahfizh Al-Qur'an IQRO'. Kami berkomitmen untuk mencetak generasi Qur'ani yang berakhlak mulia melalui program tahfizh Al-Qur'an dan pendidikan agama yang berkualitas. Bergabunglah bersama kami untuk masa depan yang lebih baik.">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing-page/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing-page/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing-page/css/style.css') }}" rel="stylesheet">
        <style>
        /* Tambahkan CSS ini untuk rasio 16:9 */
        .img-16by9 {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
        }
        
        .card-img-top {
            height: 200px; /* Tinggi tetap untuk kartu program */
            object-fit: cover;
        }
        
        /* Efek hover untuk tombol Selengkapnya yang sudah diperbaiki */
        .btn-primary {
            background-color: #fad25d !important;
            border-color: #fad25d !important;
            color: #1a7446 !important;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #1a7446 !important;
            border-color: #1a7446 !important;
            color: #fad25d !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(26, 116, 70, 0.3);
        }
    </style>
    
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border" style="width: 4rem; height: 4rem; color: #1a7446; border-width: 0.25rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow" style="width: 4rem; height: 4rem; color: #fad25d;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<style>
    /* Animasi untuk spinner-border */
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Styling untuk spinner-border */
    .spinner-border {
        animation: spin 1s linear infinite;
        border-top-color: #fad25d; /* Warna kuning */
        border-right-color: #1a7446; /* Warna hijau */
        border-bottom-color: #fad25d; /* Warna kuning */
        border-left-color: #1a7446; /* Warna hijau */
    }

    /* Styling untuk spinner-grow */
    .spinner-grow {
        animation: spin 1.5s linear infinite;
        opacity: 0.7;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #1a7446; /* Warna hijau */
    }

    /* Background overlay */
    #spinner {
        background-color: rgba(255, 255, 255, 0.9); /* Background semi-transparan */
    }
</style>

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
        <li class="sigma-menu-item active">
          <a href="/home" class="sigma-menu-link">Beranda</a>
        </li>
        <li class="sigma-menu-item">
          <a href="/blog" class="sigma-menu-link">Berita</a>
        </li>
        <li class="sigma-menu-item">
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

<!-- ===== SUPERCHARGED HERO CAROUSEL ===== -->
<section class="sigma-hero-carousel">
  
  <!-- Carousel Items -->
  <div class="sigma-carousel-container">
    <!-- Slide 1 -->
    <div class="sigma-carousel-item active">
      <div class="sigma-carousel-image-wrapper">
        <img src="https://ptqiqro.id/public/foto/8.jpg" alt="Pondok Pesantren IQRO'" loading="lazy" class="sigma-carousel-img">
      </div>
      <div class="sigma-carousel-overlay"></div>
      <div class="sigma-carousel-content">
        <h4 class="sigma-carousel-subtitle" data-aos="fade-down" data-aos-delay="100">Selamat Datang</h4>
        <h2 class="sigma-carousel-title" data-aos="fade-up" data-aos-delay="200">Generasi Qur'ani Berakhlak Mulia</h2>
        <p class="sigma-carousel-text" data-aos="fade-up" data-aos-delay="300">Mencetak penghafal Al-Qur'an dengan karakter islami</p>
        <div data-aos="fade-up" data-aos-delay="400">
          <a href="/profile" class="sigma-carousel-btn">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="sigma-carousel-item">
      <div class="sigma-carousel-image-wrapper">
        <img src="https://ptqiqro.id/public/foto-galeri-home/ustbironapel.jpg" alt="Program Unggulan IQRO'" loading="lazy" class="sigma-carousel-img">
      </div>
      <div class="sigma-carousel-overlay"></div>
      <div class="sigma-carousel-content">
        <h4 class="sigma-carousel-subtitle" data-aos="fade-down" data-aos-delay="100">Program Unggulan</h4>
        <h2 class="sigma-carousel-title" data-aos="fade-up" data-aos-delay="200">Tahfizh Al-Qur'an Terpadu</h2>
        <p class="sigma-carousel-text" data-aos="fade-up" data-aos-delay="300">Kurikulum lengkap tahfizh dan pendidikan agama</p>
        <div data-aos="fade-up" data-aos-delay="400">
          <a href="https://wa.me/+62896-6749-4297" class="sigma-carousel-btn">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="sigma-carousel-item">
      <div class="sigma-carousel-image-wrapper">
        <img src="https://ptqiqro.id/public/foto/13.jpg" alt="Pendaftaran Santri Baru" loading="lazy" class="sigma-carousel-img">
      </div>
      <div class="sigma-carousel-overlay"></div>
      <div class="sigma-carousel-content">
        <h4 class="sigma-carousel-subtitle" data-aos="fade-down" data-aos-delay="100">Bergabunglah</h4>
        <h2 class="sigma-carousel-title" data-aos="fade-up" data-aos-delay="200">Daftarkan Putra-Putri Anda</h2>
        <p class="sigma-carousel-text" data-aos="fade-up" data-aos-delay="300">Bentuk generasi qur'ani bersama keluarga besar IQRO'</p>
        <div data-aos="fade-up" data-aos-delay="400">
         <a href="https://ptqiqro.id/profile" class="sigma-carousel-btn sigma-carousel-btn">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <button class="sigma-carousel-prev">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="sigma-carousel-next">
      <i class="fas fa-chevron-right"></i>
    </button>

    <!-- Indicators -->
    <div class="sigma-carousel-indicators"></div>
    
    <!-- Scrolldown indicator -->
    <div class="sigma-scroll-down">
      <div class="sigma-scroll-down-inner"></div>
    </div>
  </div>
</section>

<style>
/* ===== SUPERCHARGED HERO CAROUSEL STYLE ===== */
:root {
  --iqro-primary: #1a7446;
  --iqro-secondary: #fad25d;
  --iqro-dark: #0d3b23;
  --iqro-light: #f8f9fa;
}

.sigma-hero-carousel {
  position: relative;
  width: 100%;
  overflow: hidden;
  margin-bottom: 0;
}

.sigma-carousel-container {
  position: relative;
  height: 100vh;
  min-height: 600px;
  overflow: hidden;
}

.sigma-carousel-item {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 1.2s cubic-bezier(0.65, 0, 0.35, 1);
  will-change: opacity;
}

.sigma-carousel-item.active {
  opacity: 1;
}

.sigma-carousel-image-wrapper {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.sigma-carousel-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  transform: scale(1.1);
  transition: transform 8s cubic-bezier(0.25, 0.45, 0.45, 0.95);
  will-change: transform;
}

.sigma-carousel-item.active .sigma-carousel-img {
  transform: scale(1);
}

.sigma-carousel-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(26, 116, 70, 0.8) 100%, rgba(245, 183, 0, 0.0) 0%);
  z-index: 1;
}

.sigma-carousel-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  width: 90%;
  max-width: 900px;
  padding: 30px;
  z-index: 2;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

.sigma-carousel-subtitle {
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: 3px;
  color: var(--iqro-secondary);
  margin-bottom: 15px;
  text-transform: uppercase;
  opacity: 0;
  transform: translateY(20px);
}

.sigma-carousel-title {
  font-size: 3.5rem;
  font-weight: 800;
  line-height: 1.2;
  margin-bottom: 20px;
  opacity: 0;
  transform: translateY(30px);
}

.sigma-carousel-text {
  font-size: 1.3rem;
  margin-bottom: 30px;
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
  opacity: 0;
  transform: translateY(20px);
}

.sigma-carousel-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 35px;
  background-color: var(--iqro-secondary);
  color: var(--iqro-primary);
  border-radius: 50px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  border: 2px solid transparent;
  box-shadow: 0 4px 15px rgba(250, 210, 93, 0.3);
  opacity: 0;
  transform: translateY(20px);
}

.sigma-carousel-btn-wa {
  background-color: #25D366;
  color: white;
  box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
}

.sigma-carousel-btn:hover {
  background-color: transparent;
  color: var(--iqro-secondary);
  border-color: var(--iqro-secondary);
  transform: translateY(-3px) translateY(20px);
  box-shadow: 0 8px 25px rgba(250, 210, 93, 0.4);
}

.sigma-carousel-btn-wa:hover {
  background-color: transparent;
  color: #25D366;
  border-color: #25D366;
  box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
}

.sigma-carousel-btn i {
  transition: transform 0.3s ease;
}

.sigma-carousel-btn:hover i {
  transform: translateX(5px);
}

/* Active state animations */
.sigma-carousel-item.active .sigma-carousel-subtitle,
.sigma-carousel-item.active .sigma-carousel-title,
.sigma-carousel-item.active .sigma-carousel-text,
.sigma-carousel-item.active .sigma-carousel-btn {
  opacity: 1;
  transform: translateY(0);
}

.sigma-carousel-item.active .sigma-carousel-subtitle {
  transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
}

.sigma-carousel-item.active .sigma-carousel-title {
  transition: opacity 0.8s ease 0.4s, transform 0.8s ease 0.4s;
}

.sigma-carousel-item.active .sigma-carousel-text {
  transition: opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s;
}

.sigma-carousel-item.active .sigma-carousel-btn {
  transition: opacity 0.8s ease 0.6s, transform 0.8s ease 0.6s, all 0.3s ease;
}

/* Navigation */
.sigma-carousel-prev,
.sigma-carousel-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 60px;
  height: 60px;
  background-color: rgba(26, 116, 70, 0.8);
  border: none;
  border-radius: 50%;
  color: white;
  font-size: 1.5rem;
  cursor: pointer;
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  opacity: 0.7;
  backdrop-filter: blur(5px);
}

.sigma-carousel-prev {
  left: 30px;
}

.sigma-carousel-next {
  right: 30px;
}

.sigma-carousel-prev:hover,
.sigma-carousel-next:hover {
  background-color: var(--iqro-secondary);
  color: var(--iqro-primary);
  transform: translateY(-50%) scale(1.1);
  opacity: 1;
}

/* Indicators */
.sigma-carousel-indicators {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 12px;
  z-index: 10;
}

.sigma-carousel-indicators span {
  display: block;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.5);
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  position: relative;
  overflow: hidden;
}

.sigma-carousel-indicators span::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--iqro-secondary);
  transform: scale(0);
  border-radius: 50%;
  transition: transform 4s linear;
}

.sigma-carousel-indicators span.active {
  background-color: transparent;
}

.sigma-carousel-indicators span.active::before {
  transform: scale(1);
  animation: indicatorProgress 5s linear forwards;
}

@keyframes indicatorProgress {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}

/* Scrolldown indicator */
.sigma-scroll-down {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 10;
  width: 30px;
  height: 50px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 15px;
  display: flex;
  justify-content: center;
  padding-top: 10px;
  opacity: 0.7;
  transition: all 0.3s ease;
}

.sigma-scroll-down:hover {
  opacity: 1;
  border-color: var(--iqro-secondary);
}

.sigma-scroll-down-inner {
  width: 4px;
  height: 10px;
  background-color: var(--iqro-secondary);
  border-radius: 2px;
  animation: scrollDownAnimation 2s infinite;
}

@keyframes scrollDownAnimation {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  50% {
    transform: translateY(10px);
    opacity: 0.5;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Responsive */
@media (max-width: 1200px) {
  .sigma-carousel-title {
    font-size: 3rem;
  }
}

@media (max-width: 992px) {
  .sigma-carousel-container {
    height: 80vh;
    min-height: 500px;
  }
  
  .sigma-carousel-title {
    font-size: 2.5rem;
  }
  
  .sigma-carousel-text {
    font-size: 1.1rem;
  }
  
  .sigma-carousel-btn {
    padding: 14px 30px;
  }
}

@media (max-width: 768px) {
  .sigma-carousel-container {
    height: 70vh;
    min-height: 400px;
  }
  
  .sigma-carousel-title {
    font-size: 2rem;
  }
  
  .sigma-carousel-subtitle {
    font-size: 1rem;
  }
  
  .sigma-carousel-text {
    font-size: 1rem;
  }
  
  .sigma-carousel-btn {
    padding: 12px 25px;
    font-size: 0.9rem;
  }
  
  .sigma-carousel-prev,
  .sigma-carousel-next {
    width: 50px;
    height: 50px;
    font-size: 1.2rem;
  }
}

@media (max-width: 576px) {
  .sigma-carousel-container {
    height: 85vh;
    min-height: 350px;
  }
  
  .sigma-carousel-content {
    padding: 20px;
    width: 95%;
  }
  
  .sigma-carousel-title {
    font-size: 1.8rem;
    margin-bottom: 15px;
  }
  
  .sigma-carousel-subtitle {
    font-size: 0.9rem;
    margin-bottom: 10px;
    letter-spacing: 2px;
  }
  
  .sigma-carousel-text {
    margin-bottom: 20px;
  }
  
  .sigma-carousel-prev,
  .sigma-carousel-next {
    width: 40px;
    height: 40px;
    font-size: 1rem;
  }
  
  .sigma-carousel-indicators {
    bottom: 30px;
  }
  
  .sigma-scroll-down {
    bottom: 15px;
    width: 25px;
    height: 40px;
  }
}

/* Smooth transitions for all elements */
*, *::before, *::after {
  transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
}
</style>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
// Initialize AOS
document.addEventListener('DOMContentLoaded', function() {
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: false,
    mirror: true
  });
  
  // Enhanced Carousel Script
  const items = document.querySelectorAll('.sigma-carousel-item');
  const indicators = document.querySelectorAll('.sigma-carousel-indicators span');
  const prevBtn = document.querySelector('.sigma-carousel-prev');
  const nextBtn = document.querySelector('.sigma-carousel-next');
  let currentIndex = 0;
  let isAnimating = false;
  let slideInterval;
  
  // Create indicators
  items.forEach((_, index) => {
    const indicator = document.createElement('span');
    indicator.addEventListener('click', () => goToSlide(index));
    if(index === 0) indicator.classList.add('active');
    document.querySelector('.sigma-carousel-indicators').appendChild(indicator);
  });
  
  function updateCarousel() {
    if (isAnimating) return;
    isAnimating = true;
    
    // Reset all animations
    document.querySelectorAll('.sigma-carousel-subtitle, .sigma-carousel-title, .sigma-carousel-text, .sigma-carousel-btn').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
    });
    
    items.forEach((item, index) => {
      item.classList.toggle('active', index === currentIndex);
    });
    
    document.querySelectorAll('.sigma-carousel-indicators span').forEach((indicator, index) => {
      indicator.classList.toggle('active', index === currentIndex);
      indicator.style.animation = 'none';
      indicator.offsetHeight; // Trigger reflow
      if (index === currentIndex) {
        indicator.style.animation = 'indicatorProgress 5s linear forwards';
      }
    });
    
    // Animate active slide content
    if (items[currentIndex]) {
      const activeContent = items[currentIndex].querySelector('.sigma-carousel-content');
      const subtitle = activeContent.querySelector('.sigma-carousel-subtitle');
      const title = activeContent.querySelector('.sigma-carousel-title');
      const text = activeContent.querySelector('.sigma-carousel-text');
      const btn = activeContent.querySelector('.sigma-carousel-btn');
      
      setTimeout(() => {
        subtitle.style.opacity = '1';
        subtitle.style.transform = 'translateY(0)';
      }, 300);
      
      setTimeout(() => {
        title.style.opacity = '1';
        title.style.transform = 'translateY(0)';
      }, 400);
      
      setTimeout(() => {
        text.style.opacity = '1';
        text.style.transform = 'translateY(0)';
      }, 500);
      
      setTimeout(() => {
        btn.style.opacity = '1';
        btn.style.transform = 'translateY(0)';
        isAnimating = false;
      }, 600);
    }
  }
  
  function goToSlide(index) {
    if (isAnimating) return;
    currentIndex = (index + items.length) % items.length;
    updateCarousel();
    resetTimer();
  }
  
  function nextSlide() {
    goToSlide(currentIndex + 1);
  }
  
  function prevSlide() {
    goToSlide(currentIndex - 1);
  }
  
  function startTimer() {
    slideInterval = setInterval(nextSlide, 5000);
  }
  
  function resetTimer() {
    clearInterval(slideInterval);
    startTimer();
  }
  
  // Auto slide
  startTimer();
  
  // Pause on hover
  const carousel = document.querySelector('.sigma-carousel-container');
  carousel.addEventListener('mouseenter', () => clearInterval(slideInterval));
  carousel.addEventListener('mouseleave', startTimer);
  
  // Button events
  nextBtn.addEventListener('click', () => {
    nextSlide();
  });
  
  prevBtn.addEventListener('click', () => {
    prevSlide();
  });
  
  // Touch events for mobile
  let touchStartX = 0;
  let touchEndX = 0;
  
  carousel.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
    clearInterval(slideInterval);
  }, {passive: true});
  
  carousel.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
    startTimer();
  }, {passive: true});
  
  function handleSwipe() {
    if (touchEndX < touchStartX - 50) nextSlide();
    if (touchEndX > touchStartX + 50) prevSlide();
  }
  
  // Parallax effect on scroll
  window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const activeItem = document.querySelector('.sigma-carousel-item.active');
    if (activeItem) {
      const img = activeItem.querySelector('.sigma-carousel-img');
      img.style.transform = `scale(${1 + scrollPosition * 0.0005})`;
    }
  });
});
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Navbar & Hero End -->

<!-- ===== SAMBUTAN MUDIR ===== -->
<section class="sigma-welcome-section">
  <!-- Dekorasi Gelombang -->
  <!--<div class="sigma-wave-deco"></div>-->
  
  <div class="container">
    <div class="sigma-welcome-wrapper">
      <!-- Foto Mudir -->
      <div class="sigma-mudir-photo" data-aos="fade-right">
        <div class="sigma-photo-frame">
          <img src="https://ptqiqro.id/public/foto/ustbiron.jpeg" alt="Mudir PTQ IQRO'" loading="lazy">
          <div class="sigma-photo-overlay">
            <span>Mudir PTQ IQRO'</span>
          </div>
        </div>
      </div>

      <!-- Kata Sambutan -->
      <div class="sigma-welcome-content" data-aos="fade-left">
        <div class="sigma-section-header">
          <h5 class="sigma-subtitle" style="color: #fad25d;">Kata Sambutan</h5>
          <h2 class="sigma-title" style="color: #1a7446;">Assalamu'alaikum Warahmatullahi Wabarakatuh</h2>
        </div>

        <div class="sigma-welcome-text">
          <p>Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang,</p>
          <p>Segala puji dihaturkan bagi Rabb semesta alam yang telah mengutus Nabi mulia, Muhammad Shallallahu alaihi wa sallam, pembawa risalah sejati yang tak pernah lekang oleh zaman, dan diteruskan oleh para pewarisnya: ulama-ulama nan hakiki.</p>
          <p>Zaman berganti, peristiwa demi peristiwa berlalu, tantangan datang silih berganti. Roda terus berputar. Patah tumbuh, Hilang berganti. Namun dakwah ia tak pernah mati. Ia terus mengalir, mencari ruang untuk tumbuh subur.</p>
          <p>Dan ruang ini, adalah pintu. Pintu untuk menyaksikan indahnya taman-taman Al-Qur'an. Ruang ini, adalah jendela. Agar taman-taman itu merasakan hangatnya pelukan Sang Maha Kasih.</p>
        </div>

        <div class="sigma-welcome-footer">
          <p class="sigma-signature">~ Ustadz Biron Yusuf Hakim, S.Sos.I, Al-Hafizh</p>
          <span class="sigma-position">Mudir PTQ IQRO'</span>
          
          <a href="/profile" class="sigma-btn sigma-btn-primary">
            Selengkapnya <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* ===== STYLE SAMBUTAN ===== */
/* PENYESUAIAN UTAMA */
.sigma-apple-carousel {
  position: relative;
  z-index: 1;
  margin-bottom: -80px; /* Memungkinkan overlap */
}

.sigma-welcome-section {
  position: relative;
  z-index: 2;
  padding: 180px 0 100px;
  background: linear-gradient(to bottom, transparent 80px, #edfafd 80px);
}

/*.sigma-wave-deco {*/
/*  top: -20px;*/
/*  bottom: auto;*/
/*  transform: rotate(180deg);*/
/*}*/

.sigma-welcome-section {
  position: relative;
  padding: 100px 0;
  background-color: #edfafd;
  overflow: hidden;
}

/* Dekorasi Gelombang */
/*.sigma-wave-deco {*/
/*  position: absolute;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  width: 50%;*/
/*  height: 150px;*/
/*  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%231a7446"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%231a7446"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23fad25d"></path></svg>');*/
/*  background-size: cover;*/
/*  z-index: 1;*/
/*}*/

/* Wrapper Utama */
.sigma-welcome-wrapper {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  align-items: center;
  position: relative;
  z-index: 2;
}

/* Foto Mudir */
.sigma-mudir-photo {
  flex: 1 1 400px;
}

.sigma-photo-frame {
  position: relative;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 20px 30px rgba(26, 116, 70, 0.2);
  border: 15px solid #1a7446;
}

.sigma-photo-frame img {
  width: 100%;
  height: auto;
  aspect-ratio: 3/4;
  object-fit: cover;
  display: block;
  transition: transform 0.5s;
}

.sigma-mudir-photo:hover img {
  transform: scale(1.03);
}

.sigma-photo-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 15px;
  background: linear-gradient(to top, rgba(26, 116, 70, 0.8), transparent);
  color: white;
  text-align: center;
  font-weight: 600;
}

/* Konten Sambutan */
.sigma-welcome-content {
  flex: 1 1 500px;
  background: rgba(255, 255, 255, 0.9);
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(26, 116, 70, 0.1);
  text-align: justify;
}

.sigma-section-header {
  margin-bottom: 30px;
}

.sigma-subtitle {
  font-size: 1.2rem;
  font-weight: 700;
  margin-bottom: 10px;
  display: inline-block;
  position: relative;
}

.sigma-subtitle::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 50px;
  height: 3px;
  background-color: #fad25d;
}

.sigma-title {
  font-size: 2.5rem;
  font-weight: 800;
  line-height: 1.3;
  margin-bottom: 20px;
}

.sigma-welcome-text p {
  color: #555;
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 20px;
}

/* Footer Sambutan */
.sigma-welcome-footer {
  margin-top: 40px;
  padding-top: 20px;
  border-top: 2px dashed #fad25d;
}

.sigma-signature {
  color: #1a7446;
  font-weight: 700;
  font-size: 1.2rem;
  margin-bottom: 5px;
}

.sigma-position {
  display: block;
  color: #777;
  font-size: 1rem;
  margin-bottom: 25px;
}

/* Tombol */
.sigma-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 25px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s;
}

.sigma-btn-primary {
  background-color: #fad25d;
  color: #1a7446;
}

.sigma-btn-primary:hover {
  background-color: #1a7446;
  color: #fad25d;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(26, 116, 70, 0.3);
}

/* Responsive */
@media (max-width: 992px) {
  .sigma-welcome-wrapper {
    flex-direction: column;
  }
  
  .sigma-mudir-photo {
    flex: 1 1 100%;
    max-width: 400px;
    margin: 0 auto;
  }
  
  .sigma-welcome-content {
    flex: 1 1 100%;
  }
}

@media (max-width: 768px) {
  .sigma-welcome-section {
    padding: 60px 0;
  }
  
  .sigma-title {
    font-size: 2rem;
  }
  
  .sigma-welcome-text p {
    font-size: 1rem;
  }
  
  .sigma-welcome-content {
    padding: 30px;
  }
}

@media (max-width: 576px) {
  .sigma-title {
    font-size: 1.8rem;
  }
  
  .sigma-photo-frame {
    border-width: 10px;
  }
  
  .sigma-btn {
    width: 100%;
    justify-content: center;
  }
}
</style>

<!-- AOS Animation -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- ===== PROGRAM UNGGULAN SECTION ===== -->
<section class="sigma-programs-section">
  <!-- Animated Background Waves -->
  <div class="sigma-programs-waves"></div>
  
  <div class="container">
    <!-- Section Header with Cool Animation -->
    <div class="sigma-section-header text-center">
      <h2 class="sigma-section-title">
        <span class="sigma-title-line">Program</span>
        <span class="sigma-title-highlight">Unggulan</span>
      </h2>
      <p class="sigma-section-subtitle">Membangun Generasi Qur'ani yang Cerdas, Mandiri, dan Berakhlak Mulia</p>
    </div>

    <!-- Program Cards Grid -->
    <div class="sigma-programs-grid">
      <!-- Program 1 -->
      <div class="sigma-program-card">
        <div class="sigma-program-image">
          <img src="https://ptqiqro.id/public/foto/pengasuhan1.jpg" alt="Kurikulum Akil Baligh">
          <div class="sigma-program-overlay"></div>
        </div>
        <div class="sigma-program-content">
          <div class="sigma-program-icon">
            <i class="fas fa-hands-helping"></i>
          </div>
          <h3>Kurikulum Aqil Baligh</h3>
          <p>Membentuk pribadi muslim yang mandiri dan bertanggung jawab melalui sistem pengasuhan terpadu, mempersiapkan santri menjadi problem solver di masyarakat.</p>
          <a href="/pengasuhan" class="sigma-program-btn">
            Pelajari Kurikulum
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <!-- Program 2 -->
      <div class="sigma-program-card">
        <div class="sigma-program-image">
          <img src="https://ptqiqro.id/public/foto/30.jpg" alt="Program Tahfizh Qur'an">
          <div class="sigma-program-overlay"></div>
        </div>
        <div class="sigma-program-content">
          <div class="sigma-program-icon">
            <i class="fas fa-book-quran"></i>
          </div>
          <h3>Tahfizh Al-Qur'an</h3>
          <p>Program intensif menghafal 30 juz dengan sanad bersambung hingga Rasulullah SAW, didukung metode tahfizh terkini dan bimbingan ustadz/ustadzah berpengalaman.</p>
          <a href="/tahfizh" class="sigma-program-btn">
            Pelajari Metode
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <!-- Program 3 -->
      <div class="sigma-program-card">
        <div class="sigma-program-image">
          <img src="https://ptqiqro.id/public/foto/29.jpg" alt="Kurikulum Minat Bakat">
          <div class="sigma-program-overlay"></div>
        </div>
        <div class="sigma-program-content">
          <div class="sigma-program-icon">
            <i class="fas fa-star"></i>
          </div>
          <h3>Kurikulum Minat Bakat</h3>
          <p>Wadah eksplorasi potensi santri melalui 15+ ekstrakurikuler pilihan seperti coding, futsal, multimedia, hingga literasi dan jurnalistik.</p>
          <a href="/ekskul" class="sigma-program-btn">
            Temukan Bakatmu
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <!-- Program 4 -->
      <div class="sigma-program-card">
        <div class="sigma-program-image">
          <img src="https://ptqiqro.id/public/foto/28.jpg" alt="Kurikulum Non Tahfizh">
          <div class="sigma-program-overlay"></div>
        </div>
        <div class="sigma-program-content">
          <div class="sigma-program-icon">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <h3>Pendidikan Umum</h3>
          <p>Kurikulum seimbang mengintegrasikan ilmu agama dan umum, memadukan keunggulan akademik dengan pembentukan karakter islami para santri.</p>
          <a href="/nontahfizh" class="sigma-program-btn">
            Lihat Kurikulum
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* ===== SUPER KEREN PROGRAMS STYLES ===== */
.sigma-programs-section {
  position: relative;
  padding: 100px 0;
  background-color: #edfafd;
  overflow: hidden;
}

.sigma-programs-waves {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 150px;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%231a7446"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%231a7446"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%231a7446"></path></svg>');
  background-size: cover;
  z-index: 1;
}

/* Section Header */
.sigma-section-header {
  position: relative;
  margin-bottom: 70px;
  z-index: 3;
}
.sigma-section-title {
  font-size: 3rem;
  font-weight: 800;
  color: #1a7446;
  margin-bottom: 15px;
  position: relative;
  display: inline-block;
}
.sigma-title-highlight {
  color: #0d4b2a; /* Hijau lebih gelap */
}
.sigma-title-highlight::after {
  background-color: #f5b700; /* Kuning emas */
  opacity: 1;
}
.sigma-section-subtitle {
  color: #5a7c8a;
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto;
}

/* Programs Grid */
.sigma-programs-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  position: relative;
  z-index: 2;
}

/* Program Card */
.sigma-program-card {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 15px 30px rgba(26, 116, 70, 0.1);
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
}

.sigma-program-card:hover {
  transform: translateY(-15px);
  box-shadow: 0 25px 50px rgba(26, 116, 70, 0.2);
}

.sigma-program-image {
  height: 220px;
  position: relative;
  overflow: hidden;
}

.sigma-program-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.sigma-program-card:hover .sigma-program-image img {
  transform: scale(1.1);
}

.sigma-program-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgba(26, 116, 70, 0.7), transparent);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.sigma-program-card:hover .sigma-program-overlay {
  opacity: 1;
}

.sigma-program-content {
  padding: 25px;
  position: relative;
}

.sigma-program-icon {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #fad25d, #f5b700);
  color: #1a7446;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  position: absolute;
  top: -30px;
  left: 25px;
  box-shadow: 0 10px 20px rgba(250, 210, 93, 0.3);
  transition: all 0.3s ease;
}

.sigma-program-card:hover .sigma-program-icon {
  transform: rotate(15deg) scale(1.1);
}

.sigma-program-content h3 {
  color: #1a7446;
  font-size: 1.5rem;
  margin-top: 30px;
  margin-bottom: 15px;
  font-weight: 700;
}

.sigma-program-content p {
  color: #5a7c8a;
  margin-bottom: 20px;
  line-height: 1.6;
}

.sigma-program-btn {
  display: inline-flex;
  align-items: center;
  color: #1a7446;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.sigma-program-btn i {
  margin-left: 8px;
  transition: transform 0.3s ease;
}

.sigma-program-btn:hover {
  color: #f5b700;
}

.sigma-program-btn:hover i {
  transform: translateX(5px);
}

/* ===== RESPONSIVE STYLES ===== */
@media (max-width: 1200px) {
  .sigma-section-title {
    font-size: 2.5rem;
  }
}

@media (max-width: 992px) {
  .sigma-programs-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .sigma-section-title {
    font-size: 2.2rem;
  }
}

@media (max-width: 768px) {
  .sigma-programs-section {
    padding: 80px 0;
  }
  
  .sigma-section-header {
    margin-bottom: 50px;
  }
}

@media (max-width: 576px) {
  .sigma-programs-grid {
    grid-template-columns: 1fr;
  }
  
  .sigma-section-title {
    font-size: 2rem;
  }
  
  .sigma-program-image {
    height: 200px;
  }
}
</style>

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- ===== SECTION BERITA ===== -->
<section class="sigma-news-section">
  <!-- Gelombang Dekoratif -->
  <div class="sigma-news-waves"></div>
  
  <div class="container">
    <!-- Header -->
    <div class="sigma-news-header text-center">
      <h2 class="sigma-section-title">
        <span class="sigma-title-line">Berita</span>
        <span class="sigma-title-highlight">Terkini</span>
      </h2>
      <p class="sigma-section-subtitle">Update kegiatan dan informasi terkini dari PTQ IQRO'</p>
    </div>

    <!-- Grid Berita -->
    <div class="sigma-news-grid">
      <!-- Berita 1 -->
      <article class="sigma-news-card">
        <div class="sigma-news-thumbnail">
          <img src="https://ptqiqro.id/public/foto/1.jpg" alt="Kegiatan Tahfizh">
          <div class="sigma-news-badge">Kegiatan</div>
        </div>
        <div class="sigma-news-content">
          <div class="sigma-news-meta">
            <span class="sigma-news-date"><i class="far fa-calendar-alt"></i> 15 Juni 2023</span>
            <span class="sigma-news-author"><i class="far fa-user"></i> Admin</span>
          </div>
          <h3 class="sigma-news-title">Santri PTQ IQRO' Raih Juara MTQ Nasional</h3>
          <p class="sigma-news-excerpt">Prestasi membanggakan dari santri kelas XI yang berhasil menyabet juara 1 lomba tahfizh...</p>
          <a href="/blog" class="sigma-news-link">
            Baca Selengkapnya
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- Berita 2 -->
      <article class="sigma-news-card">
        <div class="sigma-news-thumbnail">
          <img src="https://ptqiqro.id/public/foto/2.jpg" alt="Kegiatan Tahfizh">
          <div class="sigma-news-badge">Pengumuman</div>
        </div>
        <div class="sigma-news-content">
          <div class="sigma-news-meta">
            <span class="sigma-news-date"><i class="far fa-calendar-alt"></i> 10 Juni 2023</span>
            <span class="sigma-news-author"><i class="far fa-user"></i> Kepala Sekolah</span>
          </div>
          <h3 class="sigma-news-title">Jadwal Pembukaan Pendaftaran Santri Baru</h3>
          <p class="sigma-news-excerpt">Pendaftaran santri baru tahun ajaran 2023/2024 akan dibuka mulai 1 Juli mendatang...</p>
          <a href="/blog" class="sigma-news-link">
            Baca Selengkapnya
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- Berita 3 -->
      <article class="sigma-news-card">
        <div class="sigma-news-thumbnail">
          <img src="https://ptqiqro.id/public/foto/3.jpg" alt="Kegiatan Tahfizh">
          <div class="sigma-news-badge">Acara</div>
        </div>
        <div class="sigma-news-content">
          <div class="sigma-news-meta">
            <span class="sigma-news-date"><i class="far fa-calendar-alt"></i> 5 Juni 2023</span>
            <span class="sigma-news-author"><i class="far fa-user"></i> Humas</span>
          </div>
          <h3 class="sigma-news-title">Pentas Seni Tahunan Santri PTQ IQRO'</h3>
          <p class="sigma-news-excerpt">Menampilkan berbagai bakat seni islami dari santri mulai dari kaligrafi hingga nasyid...</p>
          <a href="/blog" class="sigma-news-link">
            Baca Selengkapnya
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>
    </div>

    <!-- Tombol Lainnya -->
    <div class="text-center mt-1">
        
    </div>
  </div>
</section>

<style>
/* ===== STYLE UTAMA ===== */
.sigma-news-section {
  position: relative;
  padding: 100px 0;
  background-color: #edfafd;
  overflow: hidden;
}

.sigma-news-waves {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 150px;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%231a7446"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%231a7446"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%231a7446"></path></svg>');
  background-size: cover;
  z-index: 1;
}

/* Header Section */
.sigma-news-header {
  position: relative;
  margin-bottom: 60px;
  z-index: 3;
}

.sigma-section-title {
  font-size: 3rem;
  font-weight: 800;
  color: #1a7446;
  margin-bottom: 15px;
  position: relative;
  display: inline-block;
}
.sigma-title-highlight {
  color: #0d4b2a; /* Hijau lebih gelap */
}
.sigma-title-highlight::after {
  background-color: #f5b700; /* Kuning emas */
  opacity: 1;
}

.sigma-section-subtitle {
  color: #5a7c8a;
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto;
}

/* Grid Berita */
.sigma-news-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  position: relative;
  z-index: 2;
}

/* Card Berita */
.sigma-news-card {
  background: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(26, 116, 70, 0.1);
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.sigma-news-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(26, 116, 70, 0.2);
}

.sigma-news-thumbnail {
  height: 220px;
  position: relative;
  overflow: hidden;
}

.sigma-news-thumbnail img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.sigma-news-card:hover .sigma-news-thumbnail img {
  transform: scale(1.05);
}

.sigma-news-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  background: #fad25d;
  color: #1a7446;
  padding: 5px 15px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  box-shadow: 0 3px 10px rgba(250, 210, 93, 0.3);
}

.sigma-news-content {
  padding: 25px;
}

.sigma-news-meta {
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
  font-size: 0.85rem;
  color: #7a9ca7;
}

.sigma-news-meta i {
  margin-right: 5px;
  color: #f5b700;
}

.sigma-news-title {
  color: #1a7446;
  font-size: 1.4rem;
  margin-bottom: 15px;
  line-height: 1.4;
  transition: color 0.3s ease;
}

.sigma-news-card:hover .sigma-news-title {
  color: #0d4b2a;
}

.sigma-news-excerpt {
  color: #5a7c8a;
  margin-bottom: 20px;
  line-height: 1.6;
}

.sigma-news-link {
  display: inline-flex;
  align-items: center;
  color: #1a7446;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.sigma-news-link i {
  margin-left: 8px;
  transition: transform 0.3s ease;
}

.sigma-news-link:hover {
  color: #f5b700;
}

.sigma-news-link:hover i {
  transform: translateX(5px);
}

/* Tombol Lainnya */
.sigma-news-more-btn {
  display: inline-flex;
  align-items: center;
  background: linear-gradient(to right, #1a7446, #0d4b2a);
  color: white;
  padding: 12px 30px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  box-shadow: 0 5px 15px rgba(26, 116, 70, 0.3);
  transition: all 0.3s ease;
}

.sigma-news-more-btn:hover {
  background: linear-gradient(to right, #fad25d, #f5b700);
  color: #1a7446;
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(250, 210, 93, 0.4);
}

.sigma-news-more-btn i {
  margin-left: 8px;
  transition: transform 0.3s ease;
}

.sigma-news-more-btn:hover i {
  transform: translateX(5px);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
  .sigma-section-title {
    font-size: 2.5rem;
  }
}

@media (max-width: 992px) {
  .sigma-news-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .sigma-section-title {
    font-size: 2.2rem;
  }
}

@media (max-width: 768px) {
  .sigma-news-section {
    padding: 80px 0;
  }
  
  .sigma-news-header {
    margin-bottom: 40px;
  }
}

@media (max-width: 576px) {
  .sigma-news-grid {
    grid-template-columns: 1fr;
  }
  
  .sigma-section-title {
    font-size: 2rem;
  }
  
  .sigma-news-thumbnail {
    height: 200px;
  }
}
</style>

<!-- Font Awesome untuk Ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<!-- ===== ORGANISASI & EKSTRAKURIKULER ===== -->
<section class="sigma-organizations-section">
    
  <!-- Dekorasi Sudut -->
  <div class="sigma-corner-deco sigma-corner-left"></div>
  
  <div class="container">
      
    <!-- Gelombang Dekoratif -->
  <div class="sigma-news-waves"></div>
  
  <div class="container">
      
    <!-- Header Section -->
    <div class="sigma-section-header text-center">
      <h2 class="sigma-section-title">
        <span class="sigma-title-line">Organisasi</span>
        <span class="sigma-title-highlight">& Ekstrakurikuler</span>
      </h2>
      <p class="sigma-section-subtitle">Wadah pengembangan bakat dan karakter santri PTQ IQRO'</p>
    </div>

    <!-- Grid Organisasi -->
    <div class="sigma-organizations-grid">
      <!-- Jurnalistik -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="100">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto/3.jpg" alt="Jurnalistik">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">Jurnalistik</h3>
            <p class="sigma-org-desc">Mengasah keterampilan menulis berita, opini, hingga karya sastra Islami.</p>
            <a href="/jurnalis" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #fad25d;">
            <i class="fas fa-pen-fancy"></i>
          </div>
        </div>
      </div>

      <!-- OSIS -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="200">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto-profile-pengasuhan/isqi/profilisqi.jpg" alt="OSIS">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">ISQI'</h3>
            <p class="sigma-org-desc">Melatih kepemimpinan, kreativitas, dan tanggung jawab sosial santri.</p>
            <a href="/isqi" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #1a7446;">
            <i class="fas fa-users"></i>
          </div>
        </div>
      </div>

      <!-- MPK -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="300">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto-profile-pengasuhan/mpk/homempk.jpg" alt="MPK">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">MPK</h3>
            <p class="sigma-org-desc">Wadah aspirasi untuk membentuk lingkungan belajar yang inspiratif.</p>
            <a href="/mpk" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #f5b700;">
            <i class="fas fa-comments"></i>
          </div>
        </div>
      </div>

      <!-- DKM -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="400">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto/16.jpg" alt="DKM">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">DKM</h3>
            <p class="sigma-org-desc">Menghidupkan kegiatan masjid serta memperkuat karakter keislaman.</p>
            <a href="/dkm" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #1a7446;">
            <i class="fas fa-mosque"></i>
          </div>
        </div>
      </div>

      <!-- Keolahragaan -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="500">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto/79.jpg" alt="Keolahragaan">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">Keolahragaan</h3>
            <p class="sigma-org-desc">Menanamkan nilai sportifitas dan menjaga kesehatan jasmani santri.</p>
            <a href="/keolahragaan" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #fad25d;">
            <i class="fas fa-running"></i>
          </div>
        </div>
      </div>

      <!-- Perpustakaan -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="600">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto/49.jpg" alt="Perpustakaan">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">Perpustakaan</h3>
            <p class="sigma-org-desc">Meningkatkan literasi dan wawasan melalui budaya membaca yang kuat.</p>
            <a href="/perpus" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #f5b700;">
            <i class="fas fa-book-open"></i>
          </div>
        </div>
      </div>

      <!-- Tim Coding -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="700">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto/54.jpg" alt="Tim Coding">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">Tim Coding</h3>
            <p class="sigma-org-desc">Belajar membangun solusi digital islami untuk masa depan umat.</p>
            <a href="/coding" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #1a7446;">
            <i class="fas fa-code"></i>
          </div>
        </div>
      </div>

      <!-- Prodemas -->
      <div class="sigma-org-card" data-aos="fade-up" data-aos-delay="800">
        <div class="sigma-org-card-inner">
          <div class="sigma-org-img-wrapper">
            <img src="https://ptqiqro.id/public/foto/18.jpg" alt="Prodemas">
            <div class="sigma-org-overlay" style="background: linear-gradient(to bottom, transparent 0%, rgba(26, 116, 70, 0.7) 100%);"></div>
          </div>
          <div class="sigma-org-content">
            <h3 class="sigma-org-title">Prodemas</h3>
            <p class="sigma-org-desc">Berlatih menjadi agen perubahan sosial melalui program kemasyarakatan.</p>
            <a href="/prodemas" class="sigma-org-link">
              <span>Lihat Kegiatan</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="sigma-org-badge" style="background-color: #fad25d;">
            <i class="fas fa-hands-helping"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* ===== STYLE ORGANISASI ===== */
.sigma-organizations-section {
  position: relative;
  padding: 100px 0;
  background-color: #edfafd;
  overflow: hidden;
}

.sigma-corner-deco {
  position: absolute;
  width: 200px;
  height: 200px;
  background-size: cover;
}

.sigma-corner-left {
  top: 0;
  left: 0;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path fill="%231a7446" opacity="0.1" d="M0,0 L0,200 L200,0 C100,0 50,100 0,0 Z"/></svg>');
}

.sigma-news-waves {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 150px;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%231a7446"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%231a7446"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23fad25d"></path></svg>');
  background-size: cover;
  z-index: 1;
}

.sigma-organizations-grid {
  position: relative;
  z-index: 2; /* Pastikan grid di atas gelombang */
}
/* Header Section */
.sigma-section-header {
  margin-bottom: 60px;
}

.sigma-section-title {
  font-size: 3rem;
  font-weight: 800;
  color: #1a7446;
  margin-bottom: 15px;
  position: relative;
  display: inline-block;
}
.sigma-title-highlight {
  color: #0d4b2a; /* Hijau lebih gelap */
}
.sigma-title-highlight::after {
  background-color: #f5b700; /* Kuning emas */
  opacity: 1;
}
.sigma-section-subtitle {
  color: #5a7c8a;
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto;
}

/* Grid Organisasi */
.sigma-organizations-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 30px;
}

.sigma-org-card {
  perspective: 1000px;
}

.sigma-org-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(26, 116, 70, 0.1);
}

.sigma-org-card:hover .sigma-org-card-inner {
  transform: translateY(-10px);
}

.sigma-org-img-wrapper {
  position: relative;
  width: 100%;
  height: 200px;
  overflow: hidden;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.sigma-org-img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s;
}

.sigma-org-card:hover .sigma-org-img-wrapper img {
  transform: scale(1.1);
}

.sigma-org-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.sigma-org-content {
  padding: 25px;
  background: white;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}

.sigma-org-title {
  color: #1a7446;
  font-size: 1.4rem;
  font-weight: 700;
  margin-bottom: 12px;
}

.sigma-org-desc {
  color: #5a7c8a;
  line-height: 1.6;
  margin-bottom: 20px;
}

.sigma-org-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: #f5b700;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s;
}

.sigma-org-link:hover {
  color: #1a7446;
  gap: 12px;
}

.sigma-org-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1.2rem;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  z-index: 2;
}

/* Responsive */
@media (max-width: 1200px) {
  .sigma-organizations-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }
}

@media (max-width: 768px) {
  .sigma-section-title {
    font-size: 2.2rem;
  }
  
  .sigma-organizations-grid {
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
  }
  
  .sigma-org-img-wrapper {
    height: 180px;
  }
}

@media (max-width: 576px) {
  .sigma-organizations-section {
    padding: 60px 0;
  }
  
  .sigma-section-title {
    font-size: 1.8rem;
  }
  
  .sigma-organizations-grid {
    grid-template-columns: 1fr;
  }
  
  .sigma-org-img-wrapper {
    height: 220px;
  }
}
</style>

<!-- AOS Library CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<!-- Gallery Start -->
<div class="container-fluid gallery py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="section-header text-center mb-5">
            <h2 style="color: #1a7446; font-weight: bold; position: relative; display: inline-block;">
                Galeri Kegiatan
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 3px; background: #fad25d;"></span>
            </h2>
            <p class="mt-3" style="color: #555;">Dokumentasi momen berharga di PTQ IQRO'</p>
        </div>

        <div class="row gallery-container">
            <!-- Item 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto-galeri-home/abdan.jpg" class="img-fluid" alt="Kegiatan Santri" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Halaqoh Qur'an</h5>
                            <p>Waktu untuk santri bersama Qur'an</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/1.jpg" class="img-fluid" alt="Hafalan Qur'an" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Santri Cup</h5>
                            <p>Salah satu Proker ISQI</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/23.jpg" class="img-fluid" alt="Outbound Santri" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Mabit</h5>
                            <p>Malam bina iman dan taqwa</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/50.jpg" class="img-fluid" alt="Pelajaran Agama" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Wawancara</h5>
                            <p>Kegiatan Tim Jurnalistik</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/45.jpg" class="img-fluid" alt="Olahraga Santri" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Visit Library</h5>
                            <p>Perpustakaan Jakarta (cikini)</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/2.jpg" class="img-fluid" alt="Kegiatan Seni" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Imam Tarawih</h5>
                            <p>Edisi Bulan Ramadhan</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/14.jpg" class="img-fluid" alt="Acara Tahunan" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Visit Library</h5>
                            <p>OMAH Library</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6 gallery-item mb-4">
                <div class="gallery-card">
                    <img src="https://ptqiqro.id/public/foto/17.jpg" class="img-fluid" alt="Kegiatan Sosial" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Qurban</h5>
                            <p>with santri PTQ IQRO'</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button id="load-more" class="btn btn-primary px-4 py-2" style="background-color: #1a7446; border-color: #1a7446;">
                <i class="fas fa-plus-circle me-2"></i>Muat Lebih Banyak
            </button>
        </div>
    </div>
</div>
<!-- Gallery End -->


<style>
    /* Enhanced Gallery Styles */
    .gallery-card {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 250px;
        margin-bottom: 20px;
    }
    
    .gallery-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 116, 70, 0.85);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 15px;
        box-sizing: border-box;
    }
    
    .gallery-caption {
        text-align: center;
        transform: translateY(20px);
        transition: transform 0.3s ease;
        width: 100%;
    }
    
    .gallery-caption h5 {
        color: #fad25d;
        font-weight: bold;
        margin-bottom: 8px;
        font-size: 1.1rem;
    }
    
    .gallery-caption p {
        font-size: 0.9rem;
        margin-bottom: 0;
    }
    
    .gallery-item:hover .gallery-card {
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }
    
    .gallery-item:hover .gallery-caption {
        transform: translateY(0);
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    #load-more {
        transition: all 0.3s ease;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    #load-more:hover {
        background-color: #fad25d !important;
        color: #1a7446 !important;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(26, 116, 70, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .gallery-card {
            height: 220px;
        }
    }
    
    @media (max-width: 768px) {
        .gallery-card {
            height: 200px;
        }
        
        .gallery-caption h5 {
            font-size: 1rem;
        }
        
        .gallery-caption p {
            font-size: 0.8rem;
        }
    }
</style>

<script>
    // Enhanced Gallery JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreBtn = document.getElementById('load-more');
        const galleryContainer = document.querySelector('.gallery-container');
        
        // Full gallery data (30 items)
        const galleryData = [
            // Initial 8 items
            {
                img: "https://ptqiqro.id/public/foto/27.jpg",
                title: "Tarhib Ramadhan",
                desc: "Pawai santri, menyambut bulan Ramadhan"
            },
            {
                img: "https://ptqiqro.id/public/foto/1.jpg",
                title: "Santri Cup",
                desc: "Salah satu Proker ISQI"
            },
            {
                img: "https://ptqiqro.id/public/foto/23.jpg",
                title: "Mabit",
                desc: "Malam bina iman dan taqwa"
            },
            {
                img: "https://ptqiqro.id/public/foto/50.jpg",
                title: "Wawancara",
                desc: "Kegiatan Tim Jurnalistik"
            },
            {
                img: "https://ptqiqro.id/public/foto/45.jpg",
                title: "Visit Library",
                desc: "Perpustakaan Jakarta (cikini)"
            },
            {
                img: "https://ptqiqro.id/public/foto/2.jpg",
                title: "Imam Tarawih",
                desc: "Edisi Bulan Ramadhan"
            },
            {
                img: "https://ptqiqro.id/public/foto/14.jpg",
                title: "Visit Library",
                desc: "OMAH Library"
            },
            {
                img: "https://ptqiqro.id/public/foto/17.jpg",
                title: "Qurban",
                desc: "with santri PTQ IQRO'"
            },
            
            // Additional 22 items
            {
                img: "https://ptqiqro.id/public/foto/59.jpg",
                title: "Rihlah & Qur'an Camp",
                desc: "Villa Mang Iding"
            },
            {
                img: "https://ptqiqro.id/public/foto/40.jpg",
                title: "Fashion Show",
                desc: "Cosplay Ali & Azzahir Baybars"
            },
            {
                img: "https://ptqiqro.id/public/foto/34.jpg",
                title: "Rihlah Jogja",
                desc: "Wisata Kaliurang"
            },
            {
                img: "https://ptqiqro.id/public/foto/18.jpg",
                title: "PRODEMAS",
                desc: "PRODEMAS 2024, Desa Cibogo"
            },
            {
                img: "https://ptqiqro.id/public/foto/27.jpg",
                title: "Tarhib Ramadhan",
                desc: "Edisi menyambut Ramadhan 2024"
            },
            {
                img: "https://ptqiqro.id/public/foto/21.jpg",
                title: "Interview Jurnalistik",
                desc: "With Mr. Dandung, CEO of Geoforce Indonesia"
            },
            {
                img: "https://ptqiqro.id/public/foto/31.jpg",
                title: "Rihlah Jogja",
                desc: "Wisata Bumi Merapi"
            },
            {
                img: "https://ptqiqro.id/public/foto/35.jpg",
                title: "Penampilan Hadroh",
                desc: "Di acara Khotmul Qur'an 15"
            },
            {
                img: "https://ptqiqro.id/public/foto/62.jpg",
                title: "Visit IBF",
                desc: "Feat vbi_djenggotten"
            },
            {
                img: "https://ptqiqro.id/public/foto/68.jpg",
                title: "JANTARA 2024",
                desc: "Jambore Santri Nusantara"
            },
            {
                img: "https://ptqiqro.id/public/foto/74.jpg",
                title: "Podcast Perdana",
                desc: "Ustadz Ridwan Mahesa S.Ag"
            },
            {
                img: "https://ptqiqro.id/public/foto/76.jpg",
                title: "Silaturahmi",
                desc: "Ust. Mahfudz Abdurrahman, S.Sos."
            },
            {
                img: "https://ptqiqro.id/public/foto/20.jpg",
                title: "PRODEMAS SMP 2024",
                desc: "TPA As- Syakirin "
            },
            {
                img: "https://ptqiqro.id/public/foto/25.jpg",
                title: "Interview Jurnalistik",
                desc: "Ustadz Sunu Sumartono S.H."
            },
            {
                img: "https://ptqiqro.id/public/foto/29.jpg",
                title: "Penampilan Hadroh",
                desc: "Maulid Akbar PTQ IQRO'"
            },
            {
                img: "https://ptqiqro.id/public/foto/33.jpg",
                title: "Isra Mi'raj",
                desc: "Syekh Muhammad Al Farabi bin Asmar"
            },
        ];

        let currentItems = 8;
        const itemsPerLoad = 8;
        
        // Load more function
        function loadMoreItems() {
            const fragment = document.createDocumentFragment();
            
            for (let i = currentItems; i < currentItems + itemsPerLoad && i < galleryData.length; i++) {
                const item = galleryData[i];
                const newItem = document.createElement('div');
                newItem.className = 'col-lg-3 col-md-4 col-sm-6 gallery-item mb-4';
                newItem.innerHTML = `
                    <div class="gallery-card">
                        <img src="${item.img}" class="img-fluid" alt="${item.title}" loading="lazy">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">
                                <h5>${item.title}</h5>
                                <p>${item.desc}</p>
                            </div>
                        </div>
                    </div>
                `;
                fragment.appendChild(newItem);
            }
            
            galleryContainer.appendChild(fragment);
            currentItems += itemsPerLoad;
            
            // Hide button when all items are loaded
            if (currentItems >= galleryData.length) {
                loadMoreBtn.style.display = 'none';
            }
        }
        
        // Initial load
        loadMoreBtn.addEventListener('click', loadMoreItems);
        
        // Lazy load images
        const lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
        
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });
            
            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    });
</script>

<!-- Alumni Counter Section -->
<section id="alumni-counter" class="py-5 position-relative overflow-hidden" style="background: linear-gradient(to right, #1a7446, #13874d); color: #fad25d;">
    
    <!-- Background garis halus -->
    <div class="animated-lines"></div>

    <div class="container text-center position-relative" style="z-index:2;">
        <h2 class="mb-5 title-flash" style="font-weight: bold; font-size: 2.8rem; background: linear-gradient(to right, #fff8e7, #fad25d); -webkit-background-clip: text; color: transparent; text-shadow: 2px 2px 5px rgba(0,0,0,0.2);">Bersama Mencetak Generasi Qur'ani</h2>
        
        <div class="row g-5 justify-content-center">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="counter-card p-4 rounded-4 shadow text-center rise-up" style="animation-delay: 0.2s;">
                    <div class="icon mb-3" style="font-size: 40px;">🎓</div>
                    <h1 id="alumniCount" class="mb-2" style="font-size: 3rem; font-weight: bold;">0</h1>
                    <p style="font-size: 18px; font-weight: 600;">Alumni Qur'ani</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="counter-card p-4 rounded-4 shadow text-center rise-up" style="animation-delay: 0.4s;">
                    <div class="icon mb-3" style="font-size: 40px;">🔰</div>
                    <h1 id="programCount" class="mb-2" style="font-size: 3rem; font-weight: bold;">0</h1>
                    <p style="font-size: 18px; font-weight: 600;">Hafizh</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="counter-card p-4 rounded-4 shadow text-center rise-up" style="animation-delay: 0.6s;">
                    <div class="icon mb-3" style="font-size: 40px;">🌱</div>
                    <h1 id="generationCount" class="mb-2" style="font-size: 3rem; font-weight: bold;">0</h1>
                    <p style="font-size: 18px; font-weight: 600;">Generasi Dihasilkan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animate Counter Script -->
<script>
function animateCounter(id, start, end, duration) {
    let current = start;
    const increment = end > start ? 1 : -1;
    const stepTime = Math.abs(Math.floor(duration / (end - start)));
    const obj = document.getElementById(id);

    const timer = setInterval(function() {
        current += increment;
        obj.textContent = current;
        if (current == end) {
            clearInterval(timer);
            obj.classList.add('flash-number');
        }
    }, stepTime);
}

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom >= 0
    );
}

let counted = false;
window.addEventListener('scroll', function() {
    const counterSection = document.getElementById('alumni-counter');
    if (!counted && isInViewport(counterSection)) {
        animateCounter("alumniCount", 0, 169, 2000);
        animateCounter("programCount", 0, 28, 500);
        animateCounter("generationCount", 0, 7, 500); 
        counted = true;
    }
});
</script>

<!-- CSS Tambahan -->
<style>
.counter-card {
    background: #edfafd;
    color: #1a7446;
    transition: transform 0.5s, box-shadow 0.5s, opacity 0.7s;
    border: 2px solid #fad25d;
    opacity: 0;
    transform: translateY(50px);
}
.counter-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}
.icon {
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.15); }
    100% { transform: scale(1); }
}

/* Background garis animasi */
.animated-lines {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(120deg, rgba(255,255,255,0.08) 1px, transparent 1px),
                      linear-gradient(60deg, rgba(255,255,255,0.08) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: moveLines 20s linear infinite;
    opacity: 0.15;
}
@keyframes moveLines {
    0% { background-position: 0 0, 0 0; }
    100% { background-position: 100px 100px, 100px 100px; }
}

/* Rise Up Animation */
.rise-up {
    animation: riseUp 1s forwards ease-out;
}
@keyframes riseUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Title Flash Animation */
.title-flash {
    animation: flashText 2s ease-out forwards;
}
@keyframes flashText {
    0% { opacity: 0; transform: scale(0.9); }
    50% { opacity: 1; transform: scale(1.05); }
    100% { transform: scale(1); }
}

/* Flash Number */
.flash-number {
    animation: flashNumber 0.8s ease forwards;
}
@keyframes flashNumber {
    from { background-color: rgba(250,210,93,0.3); border-radius: 10px; }
    to { background-color: transparent; }
}
</style>


<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<!-- SIGMA TIMELINE REVISI -->
<section id="sigma-timeline" class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="color: #1a7446; font-weight: 700; position: relative;">
                PERJALANAN <span style="color: #fad25d;">PTQ IQRO'</span>
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 100px; height: 4px; background: linear-gradient(90deg, #1a7446, #fad25d);"></span>
            </h2>
            <p class="mt-3" style="color: #555;">Catatan Sejarah Perjuangan dan Tumbuh Kembang Pesantren</p>
        </div>

        <div class="sigma-timeline">
            <!-- Item 1: 2014 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2014</div>
                    <h3 style="color: #1a7446;">Cikal Bakal Pesantren</h3>
                    <p>Rencana pembangunan divisi baru PTQ IQRO' sebagai pesantren tahfizh mulai digodok. Visi mencetak generasi penghafal Al-Qur'an yang berakhlak mulia dirumuskan.</p>
                    <div class="sigma-icon">
                        <!--<img src="https://ptqiqro.com/public/foto/longpicttest.jpg" alt="Rapat Perencanaan" loading="lazy">-->
                    </div>
                </div>
            </div>

            <!-- Item 2: 2015 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-mosque"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2015</div>
                    <h3 style="color: #1a7446;">Kelahiran Pesantren</h3>
                    <p>Resmi berdiri dengan 15 santri perintis. Pembelajaran difokuskan pada tahfizh Al-Qur'an dan pembentukan karakter Islami.</p>
                    <div class="sigma-badge" style="background-color: rgba(26, 116, 70, 0.1);">
                        <span style="color: #1a7446;">10 Santri Perintis</span>
                    </div>
                </div>
            </div>

            <!-- Item 3: 2016 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2016</div>
                    <h3 style="color: #1a7446;">Era Kepemimpinan Baru</h3>
                    <p>Pergantian mudir dari Ustadz Syaiful Anwar kepada Ustadz Biron Yusuf membawa penyegaran sistem pendidikan.</p>
                    <div class="sigma-icon">
                        <!--<img src="https://ptqiqro.com/public/foto/longpicttest.jpg.jpg" alt="Ustadz Biron Yusuf" loading="lazy">-->
                    </div>
                </div>
            </div>

            <!-- Item 4: 2017 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-fire"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2017</div>
                    <h3 style="color: #1a7446;">Revolusi Pendidikan</h3>
                    <p>Perintisan kembali kurikulum terintegrasi: Tahfizh, Akademik, dan Keterampilan Hidup. Sistem "Mentoring Qur'ani" pertama kali diterapkan.</p>
                </div>
            </div>

            <!-- Item 5: 2018 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2018</div>
                    <h3 style="color: #1a7446;">Generasi Pertama Lulus</h3>
                    <p>12 santri angkatan pertama menyelesaikan program dengan 3 hafizh dan 9 santri berprestasi akademik.</p>
                    <div class="sigma-stats">
                        <div class="stat-item">
                            <span style="color: #1a7446;">12</span>
                            <small>Lulusan</small>
                        </div>
                        <div class="stat-item">
                            <span style="color: #fad25d;">3</span>
                            <small>Hafizh</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 6: 2019 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-building"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2019</div>
                    <h3 style="color: #1a7446;">Ekspansi ke Cikunir</h3>
                    <p>Pindah ke gedung baru di Cikunir dengan fasilitas lebih memadai. Kerjasama strategis dengan Geoforce Indonesia terbentuk untuk pendanaan pendidikan.</p>
                    <div class="sigma-icon">
                        <!--<img src="https://ptqiqro.com/public/foto/longpicttest.jpg" alt="Gedung Cikunir" loading="lazy">-->
                    </div>
                </div>
            </div>

            <!-- Item 7: 2020 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-virus"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2020</div>
                    <h3 style="color: #1a7446;">Ujian Pandemi</h3>
                    <p>KBM sempat terhenti, namun menjadi pionir dalam uji coba pembelajaran tatap muka terbatas dengan protokol ketat saat sekolah lain masih PJJ.</p>
                    <div class="sigma-badge" style="background-color: rgba(26, 116, 70, 0.1);">
                        <span style="color: #1a7446;">Protokol Ketat</span>
                    </div>
                </div>
            </div>

            <!-- Item 8: 2021 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2021</div>
                    <h3 style="color: #1a7446;">Rebranding Sistem</h3>
                    <p>Pembangunan ulang kurikulum pasca pandemi dan reshuffle struktur pengurus. Rencana pembukaan pesantren akhwat mulai dirancang.</p>
                </div>
            </div>

            <!-- Item 9: 2022 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-female"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2022</div>
                    <h3 style="color: #1a7446;">Era Santriwati</h3>
                    <p>Pesantren akhwat resmi dibuka dengan 20 santriwati generasi pertama. Program tahfizh khusus perempuan dikembangkan.</p>
                    <div class="sigma-stats">
                        <div class="stat-item">
                            <span style="color: #1a7446;">10</span>
                            <small>Santriwati</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 10: 2022 (Agustus) -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-heart-broken"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2022</div>
                    <h3 style="color: #1a7446;">Duka Mendalam</h3>
                    <p>16 Agustus 2022, PTQ IQRO' kehilangan Ustadz Moh. Rizky Noer - sosok pengajar senior yang menginspirasi banyak santri sejak awal berdiri.</p>
                    <div class="sigma-icon">
                        <!--<img src="https://www.instagram.com/p/BzV0FAip1ps/?utm_source=ig_web_button_share_sheet&igsh=MzRlODBiNWFlZA==" alt="Ustadz Rizky Noer" loading="lazy" style="filter: grayscale(30%);">-->
                    </div>
                </div>
            </div>

            <!-- Item 11: 2023 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2023</div>
                    <h3 style="color: #1a7446;">Kebangkitan Digital</h3>
                    <p>Perbaikan sistem manajemen, penambahan kurikulum IT dasar, dan awal digitalisasi laporan hafalan santri.</p>
                    <div class="sigma-tag">
                        <span style="background-color: #1a7446;">Inovasi</span>
                        <span style="background-color: #fad25d; color: #1a7446;">Teknologi</span>
                    </div>
                </div>
            </div>

            <!-- Item 12: 2024 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2024</div>
                    <h3 style="color: #1a7446;">Ekspansi Jaringan</h3>
                    <p>Rihlah edukatif ke Jogja, launching web laporan hafalan, dan perluasan jaringan melalui program jurnalistik yang bertemu tokoh nasional.</p>
                    <div class="sigma-icon">
                        <!--<img src="https://ptqiqro.com/public/foto/longpicttest.jpg" alt="Rihlah Jogja" loading="lazy">-->
                    </div>
                </div>
            </div>

            <!-- Item 13: 2025 -->
            <div class="sigma-timeline-item">
                <div class="sigma-timeline-point" style="background: linear-gradient(135deg, #1a7446, #0d4b2a);">
                    <i class="fas fa-star"></i>
                </div>
                <div class="sigma-timeline-content" style="border-left: 3px solid #fad25d;">
                    <div class="sigma-year" style="background-color: #fad25d; color: #1a7446;">2025</div>
                    <h3 style="color: #1a7446;">Puncak Prestasi</h3>
                    <p>Program takhosus mencetak 3 hafizh dalam 3 minggu. Angkatan pertama santriwati dan angkatan 8 ikhwan siap melanjutkan estafet perjuangan.</p>
                    <div class="sigma-goal">
                        <span style="background: linear-gradient(90deg, #1a7446, #fad25d);">#GenerasiQuraniMasaDepan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* SIGMA TIMELINE STYLES */
    .sigma-timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 50px;
    }

    .sigma-timeline::before {
        content: '';
        position: absolute;
        width: 3px;
        background: linear-gradient(to bottom, #1a7446, #fad25d);
        top: 0;
        bottom: 0;
        left: 35px;
        border-radius: 10px;
    }

    .sigma-timeline-item {
        position: relative;
        margin-bottom: 50px;
        transition: all 0.3s ease;
    }

    .sigma-timeline-item:hover {
        transform: translateX(5px);
    }

    .sigma-timeline-point {
        position: absolute;
        left: -60px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        box-shadow: 0 0 0 5px rgba(26, 116, 70, 0.2);
        z-index: 1;
    }

    .sigma-timeline-content {
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-left: 30px;
        position: relative;
    }

    .sigma-timeline-content::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 20px;
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-right: 10px solid white;
    }

    .sigma-year {
        position: absolute;
        top: -15px;
        left: 20px;
        font-weight: bold;
        padding: 5px 15px;
        border-radius: 50px;
        box-shadow: 0 3px 10px rgba(250, 210, 93, 0.3);
    }

    .sigma-timeline-content h3 {
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .sigma-timeline-content p {
        color: #555;
        line-height: 1.6;
    }

    .sigma-icon img {
        width: 100%;
        max-height: 150px;
        object-fit: cover;
        border-radius: 5px;
        margin-top: 15px;
        border: 2px solid rgba(26, 116, 70, 0.1);
    }

    .sigma-badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        margin-top: 10px;
        font-size: 0.8rem;
    }

    .sigma-tag {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .sigma-tag span {
        padding: 3px 10px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: bold;
        color: white;
    }

    .sigma-stats {
        display: flex;
        gap: 20px;
        margin-top: 15px;
    }

    .stat-item {
        text-align: center;
    }

    .stat-item span {
        font-size: 1.5rem;
        font-weight: bold;
        display: block;
    }

    .stat-item small {
        font-size: 0.8rem;
        color: #777;
    }

    .sigma-goal span {
        display: inline-block;
        padding: 5px 15px;
        border-radius: 50px;
        color: white;
        font-weight: bold;
        margin-top: 15px;
        font-size: 0.9rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .sigma-timeline {
            padding-left: 30px;
        }

        .sigma-timeline::before {
            left: 15px;
        }

        .sigma-timeline-point {
            left: -40px;
            width: 30px;
            height: 30px;
            font-size: 0.9rem;
        }

        .sigma-timeline-content {
            margin-left: 15px;
            padding: 15px;
        }

        .sigma-year {
            font-size: 0.9rem;
            padding: 3px 10px;
        }

        .sigma-timeline-content h3 {
            font-size: 1.2rem;
        }
    }
</style>

<script>
    <!-- Timeline JS (Animasi untuk Timeline) -->
    const timelineItems = document.querySelectorAll('.timeline-item .timeline-content');
    window.addEventListener('scroll', () => {
        timelineItems.forEach(item => {
            const itemTop = item.getBoundingClientRect().top;
            if (itemTop < window.innerHeight - 50) {
                item.style.opacity = 1;
                item.style.transform = 'translateX(0)';
            }
        });
    });
</script>

<!-- 🌟 COPY DARI SINI -->
<section id="sigma-testimonials" class="sigma-section">
  <!-- Holographic Particles -->
  <div class="sigma-particles" id="particles-js"></div>

  <!-- Header Simple -->
  <div class="sigma-header">
    <h2>APA KATA <span>MEREKA?</span></h2>
    <p>Dengar langsung dari santri, alumni, dan Wali santri PTQ IQRO'</p>
  </div>

  <!-- Testimonial Container -->
  <div class="sigma-container">
    <button class="sigma-nav-btn prev">❮</button>
    <div class="sigma-testimonial-list">
        
      <!-- Testimonial 1 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(fahrul).jpeg" alt="Fahrul Mustofa Rozi">
          <div>
            <h3>Fahrul Mustofa Rozi</h3>
            <p>Alumni Angkatan 6</p>
          </div>
        </div>
        <blockquote>
          Pesantren Tahfizh Al Qur'an IQRO' adalah tempat yang tepat untuk menghafal Al-Qur'an dan mengembangkan hard skill santri. Selain fokus pada pendidikan agama, di sini santri juga dibekali keterampilan hidup.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>

      <!-- Testimonial 2 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(qois).jpg" alt="Qois Faqih Khaerullah">
          <div>
            <h3>Qois Faqih Khaerullah</h3>
            <p>Mahasiswa UPI, Alumni Angkatan 2</p>
          </div>
        </div>
        <blockquote>
          Bergabung dengan PTQ IQRO' membentuk saya menjadi pribadi yang berakhlak Qur'ani. Nilai-nilai yang saya pelajari menjadi bekal berharga dalam kehidupan bermasyarakat dan dunia kerja.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>

      <!-- Testimonial 3 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(umar).jpg" alt="Umar Abdul Aziz">
          <div>
            <h3>Umar Abdul Aziz</h3>
            <p>Alumni Angkatan 6</p>
          </div>
        </div>
        <blockquote>
          Akademis, akhlak, dan Al-Qur'an adalah tiga hal yang sulit digabungkan dan ditemukan pada sekolah atau pesantren zaman sekarang. Namun di PTQ IQRO', ketiganya diajarkan dan terasa lebih berkah.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>

      <!-- Testimonial 4 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(ridho).jpg" alt="Mr. Ridho">
          <div>
            <h3>Mr. Ridho</h3>
            <p>Guru Bahasa Inggris</p>
          </div>
        </div>
        <blockquote>
          The Islamic and family-like work environment here truly makes me feel comfortable and helps me grow. Religious values are not just respected-they're embedded in our daily work culture.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>

      <!-- Testimonial 5 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(hamas).jpg" alt="Hamas Sabiqul Khoir">
          <div>
            <h3>Hamas Sabiqul Khoir</h3>
            <p>Alumni Angkatan 6</p>
          </div>
        </div>
        <blockquote>
          PTQ IQRO' adalah tempat pembelajaran yang bisa mendewasakan sebuah pemikiran untuk aspek dan nilai kehidupan sehari-hari. Bukan hanya itu, di PTQ ini mengajarkan betapa pentingnya akhlak dan iman untuk menjadi tumpuan hidup agar menjadi berkah dan bermanfaat dalam kehidupan.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>

      <!-- Testimonial 6 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(umifaatih).jpg" alt="Umi Faatih Aminullah">
          <div>
            <h3>Umi Faatih Aminullah</h3>
            <p>Wali Santri</p>
          </div>
        </div>
        <blockquote>
          PTQ IQRO' itu... Kecil area nya, tapi besar visi misi nya. Sempit lahan bermain nya, tapi luas cara berpikir akademisi nya. Sedikit daya tampung nya, tapi banyak aksi nyata santri nya. Gak nyesel mondokin anak di PTQ iqro. Dia yang dulu hanya punya sedikit kosakata, kini bisa ngajak ngobrol para tokoh. Dia yang dulu baru hafal 1 juz awal dan akhir, kini sudah hampir tasmi' kompre, insyaaAllah.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>

      <!-- Testimonial 7 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(akrom).jpg">
          <div>
            <h3>Akrom Ridho</h3>
            <p>Ketua OSIS As-Syafiiyah, Alumni Angkatan 6</p>
          </div>
        </div>
        <blockquote>
          PTQ IQRO' merupakan lembaga pendidikan yang mengintegrasikan: Hafalan dan pemahaman Al-Qur'an, Keunggulan akademik, Pembentukan Akhlakul Karimah. Bergabung di PTQ IQRO' telah membuka mata hati saya akan indahnya hidup yang selaras dengan Al-Qur'an.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>
      
      <!-- Testimonial 8 -->
      <div class="sigma-card">
        <div class="sigma-user">
          <img src="https://ptqiqro.id/public/foto-testimoni-home/testimoni(ghazy).jpg" alt="Akrom Ridho">
          <div>
            <h3>Ghazy Abhinaya</h3>
            <p>Mahasiswa BSI, Alumni Angkatan 7</p>
          </div>
        </div>
        <blockquote>
        Saya mendapatkan pelajaran berharga—bukan sekadar memenuhi ruang kosong di kepala, tetapi benar-benar mengubah cara saya memandang dunia. Sudut pandang saya berubah. Dulu, saya hanya melihat sesuatu sekilas. Sekarang, saya mulai memahami makna di balik setiap kejadian. Bahasa gampangnya, saya jadi bisa mengambil hikmah dari setiap hal yang saya alami.
        </blockquote>
        <div class="sigma-stars">★★★★★</div>
      </div>
      
    </div>
    <button class="sigma-nav-btn next">❯</button>
  </div>

</section>

<style>
/* 🎨 MAIN STYLES */
.sigma-section {
  padding: 80px 20px;
  background: radial-gradient(ellipse at top, #1a7446, #000);
  position: relative;
  overflow: hidden;
  font-family: 'Poppins', sans-serif;
  color: white;
}

/* 🌌 PARTICLES */
#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
  opacity: 0.3;
}

/* 🏷 HEADER */
.sigma-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 50px;
  position: relative;
  z-index: 2;
}
.sigma-header h2 {
  font-size: 2.7rem;
  margin-bottom: 15px;
  font-weight: 700;
  color: white;
  line-height: 1.3;
}
.sigma-header h2 span {
  color: #fad25d;
  position: relative;
}
.sigma-header p {
  font-size: 1.15rem;
  opacity: 0.9;
  margin-top: 10px;
}

/* 🃏 TESTIMONIAL CARDS */
.sigma-container {
  display: flex;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}
.sigma-testimonial-list {
  display: flex;
  gap: 28px;
  padding: 20px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  width: 100%;
  scroll-behavior: smooth;
}
.sigma-testimonial-list::-webkit-scrollbar {
  height: 8px;
  background: rgba(255,255,255,0.1);
}
.sigma-testimonial-list::-webkit-scrollbar-thumb {
  background: linear-gradient(90deg, #fad25d, #1a7446);
  border-radius: 10px;
}

/* 🪄 CARD STYLES */
.sigma-card {
  min-width: 320px;
  background: rgba(0,0,0,0.42);
  backdrop-filter: blur(12px);
  border-radius: 18px;
  padding: 28px 24px;
  border: 1.5px solid rgba(250,210,93,0.23);
  box-shadow: 0 12px 40px rgba(0,0,0,0.32);
  scroll-snap-align: start;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}
.sigma-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 18px 50px rgba(0,0,0,0.45);
  border-color: #fad25d;
}
.sigma-card:after {
  content: '';
  position: absolute;
  inset: -2px;
  z-index: -1;
  background: linear-gradient(45deg, #fad25d, #1a7446, #fad25d);
  background-size: 200%;
  border-radius: 20px;
  animation: borderFlow 6s linear infinite;
  opacity: 0.5;
}
@keyframes borderFlow {
  0% { background-position: 0% 50%; }
  100% { background-position: 200% 50%; }
}

/* 👤 USER PROFILE */
.sigma-user {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 20px;
}
.sigma-user img {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  border: 2.5px solid #fad25d;
  object-fit: cover;
  box-shadow: 0 2px 12px #fad25d33;
}
.sigma-user h3 {
  margin: 0;
  color: #fad25d;
  font-size: 1.2rem;
  font-weight: 600;
}
.sigma-user p {
  margin: 5px 0 0;
  font-size: 0.9rem;
  opacity: 0.8;
}

/* 💬 TESTIMONIAL TEXT */
.sigma-card blockquote {
  font-style: italic;
  line-height: 1.7;
  position: relative;
  margin: 0;
  color: #fff;
  padding-left: 25px;
  font-size: 1rem;
}
.sigma-card blockquote:before {
  content: "“";
  position: absolute;
  left: 0;
  top: -10px;
  font-size: 3rem;
  color: #fad25d33;
  font-family: serif;
  line-height: 1;
}
.sigma-card blockquote:after {
  content: "”";
  position: absolute;
  right: 10px;
  bottom: -20px;
  font-size: 3rem;
  color: #fad25d33;
  font-family: serif;
  line-height: 1;
}

/* ⭐ RATING STARS */
.sigma-stars {
  margin-top: 20px;
  color: #fad25d;
  font-size: 1.3rem;
  letter-spacing: 3px;
}

/* ◀️ ▶️ NAV BUTTONS */
.sigma-nav-btn {
  background: rgba(250,210,93,0.2);
  border: none;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  color: #fad25d;
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.3s;
  flex-shrink: 0;
  z-index: 3;
  display: flex;
  align-items: center;
  justify-content: center;
}
.sigma-nav-btn:hover {
  background: #fad25d;
  color: #000;
  transform: scale(1.1);
}

/* 📱 RESPONSIVE */
@media (max-width: 768px) {
  .sigma-section {
    padding: 60px 15px;
  }
  .sigma-header h2 {
    font-size: 2rem;
  }
  .sigma-card {
    min-width: 85vw;
    padding: 20px;
  }
  .sigma-nav-btn {
    display: none;
  }
}
</style>

<script>
// 📜 LIGHTWEIGHT SCRIPT
document.addEventListener('DOMContentLoaded', () => {

  // Carousel
  const list = document.querySelector('.sigma-testimonial-list');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  
  let autoScroll = setInterval(() => {
    list.scrollLeft += 320;
    if (list.scrollLeft >= list.scrollWidth - list.clientWidth) {
      list.scrollLeft = 0;
    }
  }, 3000);

  list.addEventListener('mouseenter', () => clearInterval(autoScroll));
  list.addEventListener('mouseleave', () => {
    autoScroll = setInterval(() => {
      list.scrollLeft += 320;
      if (list.scrollLeft >= list.scrollWidth - list.clientWidth) {
        list.scrollLeft = 0;
      }
    }, 3000);
  });

  prevBtn.addEventListener('click', () => list.scrollBy({ left: -320, behavior: 'smooth' }));
  nextBtn.addEventListener('click', () => list.scrollBy({ left: 320, behavior: 'smooth' }));
});

// Load Resources
const particlesScript = document.createElement('script');
particlesScript.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
document.head.appendChild(particlesScript);

const fontLink = document.createElement('link');
fontLink.href = 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap';
fontLink.rel = 'stylesheet';
document.head.appendChild(fontLink);
</script>
<!-- 🚀 COPY SAMPAI SINI -->


<!-- Load particles.js if not already loaded -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

 <!--Mini Quiz Section -->
<section id="quiz" class="py-5" style="background: linear-gradient(to right, #edfafd, #dff6e1);">
    <div class="container text-center">
        <h2 class="mb-5" style="color: #1a7446;">Quiz Seru Tentang PTQ IQRO'</h2>
        <div class="quiz-container">
            <div class="progress mb-4" style="height: 20px; background-color: #e2e6ea;">
                <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%; background-color: #fad25d;"></div>
            </div>
            <div class="timer mb-3 fs-5 fw-bold" style="color: #1a7446;">Sisa Waktu: <span id="timer">15</span> detik</div>
            <div id="question" class="mb-4 fs-4 fw-bold" style="opacity: 0;">Loading...</div>
            <div id="answer-buttons" class="d-flex flex-column gap-3"></div>
            <p id="quizResult" class="mt-4 fs-5"></p>
        </div>
    </div>
</section>

 <!--Sound Effects -->
<audio id="clickSound" src="https://cdn.pixabay.com/audio/2022/03/15/audio_5cefbda2b1.mp3"></audio>
<audio id="correctSound" src="https://cdn.pixabay.com/audio/2021/08/04/audio_810b1c14e5.mp3"></audio>
<audio id="wrongSound" src="https://cdn.pixabay.com/audio/2021/08/04/audio_e4fdfd5c1d.mp3"></audio>

<script>
// Soal-soal
const questions = [
    { question: "Tahun berapa PTQ IQRO' didirikan?", answers: ["2015", "2016", "2008"], correct: "2015" },
    { question: "Siapa ketua ISQI Periode 2024-2025?", answers: ["Muhammad Faqih Robbani", "Assabil Abdan Syakuro", "Faisal Fikri"], correct: "Muhammad Faqih Robbani" },
    { question: "Berapa jumlah angkatan PTQ IQRO' yang sudah lulus?", answers: ["Lima", "Dua Belas", "Tujuh"], correct: "Tujuh" },
    { question: "Siapa Kordinator Tahfizh saat ini?", answers: ["Ustadz Assabil Abdan Syakuro", "Ustadz Abdullah Fatih", "Ustadz Fahrul Mustofa Rozi"], correct: "Ustadz Abdullah Fatih" },
    { question: "Berapa jumlah AC yang ada di PTQ IQRO'?", answers: ["20", "15", "17"], correct: "20" },
    { question: "Siapa mudir PTQ IQRO' yang pertama?", answers: ["Ustadz Syaiful Anwar", "Ustadz Biron Yusuf", "Ustadz Syam"], correct: "Ustadz Syaiful Anwar" },
    { question: "Apa warna khas logo PTQ IQRO'?", answers: ["Biru", "Hijau", "Merah"], correct: "Hijau" },
    { question: "Siapa ketua Departemen Kesehatan ISQI Periode 2020-2021?", answers: ["Ahmad Chozin Al-Gifari", "Zhafranul Ilham", "Ridho Muzakki"], correct: "Ridho Muzakki" },
    { question: "Siapa pembina Yayasan IQRO'?", answers: ["Ustadz Ahmad Syaikhu", "Pak Mardani Ali Sera", "Semua benar"], correct: "Semua benar" },
    { question: "Siapa Presiden Alumni saat ini?", answers: ["Ahdan Zuhdi", "Faqih Zain", "Raihan Wakasara"], correct: "Ahdan Zuhdi" }
];

let currentQuestionIndex = 0;
let score = 0;
let timer;
let timerInterval;

const clickSound = document.getElementById('clickSound');
const correctSound = document.getElementById('correctSound');
const wrongSound = document.getElementById('wrongSound');

function startQuiz() {
    showQuestion();
}

function showQuestion() {
    clearInterval(timerInterval);
    const questionElement = document.getElementById('question');
    const answerButtons = document.getElementById('answer-buttons');
    const quizResult = document.getElementById('quizResult');
    const progressBar = document.getElementById('progress-bar');
    const timerElement = document.getElementById('timer');

    quizResult.textContent = '';
    answerButtons.innerHTML = '';

    const currentQuestion = questions[currentQuestionIndex];
    questionElement.style.opacity = 0;

    setTimeout(() => {
        questionElement.textContent = currentQuestion.question;
        questionElement.style.opacity = 1;
    }, 300);

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement('button');
        button.classList.add('btn', 'btn-outline-success', 'py-2', 'px-4', 'fs-5', 'fw-bold');
        button.style.transition = "all 0.4s ease";
        button.textContent = answer;
        button.onclick = () => {
            clickSound.play();
            selectAnswer(answer);
        };
        answerButtons.appendChild(button);
    });

    // Timer logic
    let timeLeft = 15;
    timerElement.textContent = timeLeft;
    timerInterval = setInterval(() => {
        timeLeft--;
        timerElement.textContent = timeLeft;
        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            wrongSound.play();
            document.getElementById('quizResult').innerHTML = `<span class="text-danger fw-bold">Waktu Habis! ðŸ˜¥ Jawaban benar: <b>${currentQuestion.correct}</b></span>`;
            setTimeout(() => {
                currentQuestionIndex++;
                if (currentQuestionIndex < questions.length) {
                    showQuestion();
                } else {
                    showFinalScore();
                }
            }, 1000);
        }
    }, 1000);

    // Progress bar animation
    progressBar.style.width = `${(currentQuestionIndex / questions.length) * 100}%`;
}

function selectAnswer(selectedAnswer) {
    clearInterval(timerInterval);
    const currentQuestion = questions[currentQuestionIndex];
    const quizResult = document.getElementById('quizResult');

    if (selectedAnswer === currentQuestion.correct) {
        score++;
        correctSound.play();
        quizResult.innerHTML = "<span class='text-success fw-bold'>Benar! 🎉</span>";
    } else {
        wrongSound.play();
        quizResult.innerHTML = `<span class="text-danger fw-bold">Salah! ❌️ Jawaban benar: <b>${currentQuestion.correct}</b></span>`;
    }

    setTimeout(() => {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion();
        } else {
            showFinalScore();
        }
    }, 1000);
}

function showFinalScore() {
    clearInterval(timerInterval);
    const questionElement = document.getElementById('question');
    const answerButtons = document.getElementById('answer-buttons');
    const quizResult = document.getElementById('quizResult');
    const progressBar = document.getElementById('progress-bar');

    questionElement.style.opacity = 0;
    answerButtons.innerHTML = '';
    progressBar.style.width = "100%";

    setTimeout(() => {
        questionElement.textContent = "Quiz Selesai!✨️";
        questionElement.style.opacity = 1;
        quizResult.innerHTML = `<span class="fw-bold fs-4" style="color: #1a7446;">Skor Akhir: ${score} / ${questions.length}</span><br><br><button onclick="restartQuiz()" class="btn btn-success mt-3 py-2 px-4">Main Lagi</button>`;
    }, 300);
}

function restartQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    startQuiz();
}

document.addEventListener('DOMContentLoaded', startQuiz);
</script>

<style>
#quiz {
    animation: fadeIn 1s ease;
}
.quiz-container {
    animation: slideUp 1s ease;
}
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}
@keyframes slideUp {
    from {transform: translateY(50px); opacity: 0;}
    to {transform: translateY(0); opacity: 1;}
}
</style>

<!-- Video YouTube Section - GEN Z STYLE -->
<section id="video-gallery" class="py-5" style="background: linear-gradient(135deg, #edfafd 0%, #dff6e1 100%);">
  <div class="container text-center">
    <h2 class="mb-5" style="color: #1a7446; font-weight: 800; font-size: 2.5rem; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); letter-spacing: 0.5px;">
      🎬 <span class="text-gradient">Sorotan Kegiatan Seru PTQ IQRO'</span> 🌟
    </h2>

    <div class="row gy-4">
      <!-- Video 1: Rihlah Jogja -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/HqxS2pk9B_4" title="Rihlah Jogja" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">🚌✨</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">🚌</span> <strong>Rihlah ke Jogja</strong> — Serunya jalan-jalan bareng keluarga besar PTQ IQRO'. Banyak kenangan, banyak tawa!</p>
  </div>
</div>

<!-- Video 2: Prodemas SMP -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/ZS1XFv8rs0U" title="Prodemas SMP" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">📚🔥</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">📚</span> <strong>Prodemas SMP</strong> — Kegiatan pembinaan seru buat para remaja. Energi positif & semangat belajar luar biasa!</p>
  </div>
</div>

<!-- Video 3: Prodemas SMA -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/oGgrUrdTO2k" title="Prodemas SMA" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">🎓💡</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">🎓</span> <strong>Prodemas SMA</strong> — Momen kebersamaan yang membentuk karakter generasi hebat!</p>
  </div>
</div>

<!-- Video 4: Idul Adha -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/DonrTZ6P4FU" title="Iddul Adha" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">🐄🕌</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">🐄</span> <strong>Idul Adha</strong> — Suasana penuh keberkahan saat berkurban bersama di lingkungan PTQ.</p>
  </div>
</div>

<!-- Video 5: 17 Agustus -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/UECfHMy3CSI" title="17 Agustus" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">🇮🇩🎉</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">🇮🇩</span> <strong>17 Agustus</strong> — HUT RI bareng keluarga PTQ! Penuh semangat, lomba, dan tawa.</p>
  </div>
</div>

<!-- Video 6: Visit Campus -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/O-91BAzU1Iw" title="Visit Campus" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">🏫🌟</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">🏫</span> <strong>Visit Campus</strong> — Jalan-jalan ke kampus favorit! Belajar sambil menatap masa depan.</p>
  </div>
</div>

<!-- Video 7: Visit Library -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/70f2k7ysaXw" title="Visit Library" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">📖✨</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">📖</span> <strong>Visit Library</strong> — Jelajah ilmu, serunya baca bareng di perpustakaan modern.</p>
  </div>
</div>

<!-- Video 8: Interview Pak Anies -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/Q4k6flDshhk" title="Interview Pak Anies" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">🎤🌟</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">🎤</span> <strong>Wawancara bareng Pak Anies</strong> — Obrolan inspiratif soal pendidikan & masa depan bangsa.</p>
  </div>
</div>

<!-- Video 9: Visit Library (duplikat) -->
<div class="col-lg-4 col-md-6">
  <div class="video-card" data-tilt data-tilt-max="8" data-tilt-speed="400">
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/D3mnUv4qV7E" title="Visit Library" allowfullscreen></iframe>
      <div class="play-overlay">
        <div class="play-icon">▶</div>
        <div class="emoji-float">📖✨</div>
      </div>
    </div>
    <p class="video-desc mt-3"><span class="emoji-badge">📖</span> <strong>Visit Library</strong> — Jelajah ilmu, serunya baca bareng di perpustakaan modern.</p>
  </div>
</div>

    </div>
  </div>
</section>

<style>
  /* === GLOBAL STYLE === */
  #video-gallery {
    padding: 80px 0;
    background: linear-gradient(135deg, #edfafd 0%, #dff6e1 100%) !important;
  }

  .text-gradient {
    background: linear-gradient(45deg, #1a7446 0%, #f5b700 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    display: inline;
  }

  /* === VIDEO CARD === */
  .video-card {
    position: relative;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
  }

  .video-container {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(26, 116, 70, 0.2);
    height: 0;
    padding-bottom: 56.25%;
    transition: all 0.3s ease;
    z-index: 1;
  }

  .video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
  }

  /* === HOVER EFFECT === */
  .video-card:hover {
    transform: translateY(-8px);
  }

  .video-card:hover .video-container {
    box-shadow: 0 15px 40px rgba(245, 183, 0, 0.3);
  }

  /* === PLAY OVERLAY === */
  .play-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(26, 116, 70, 0.3);
    opacity: 0;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .play-icon {
    font-size: 60px;
    color: #fad25d;
    text-shadow: 0 0 20px rgba(250, 210, 93, 0.7);
    transform: scale(0.8);
    transition: all 0.3s ease;
  }

  .emoji-float {
    position: absolute;
    font-size: 24px;
    animation: float 3s infinite ease-in-out;
  }

  /* === VIDEO DESC === */
  .video-desc {
    color: #333;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    padding: 0 10px;
  }

  .emoji-badge {
    background: #f5b700;
    padding: 5px 10px;
    border-radius: 50px;
    margin-right: 8px;
    display: inline-block;
    transform: rotate(0deg);
    transition: all 0.3s ease;
  }

  .video-card:hover .emoji-badge {
    transform: rotate(15deg) scale(1.1);
    background: #1a7446;
    color: white;
  }

  /* === ANIMATIONS === */
  @keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
  }

  /* === RESPONSIVE === */
  @media (max-width: 768px) {
    #video-gallery h2 {
      font-size: 2rem;
    }
    .video-desc {
      font-size: 1rem;
    }
  }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
<script>
  // 3D Tilt Effect
  document.querySelectorAll('.video-card').forEach(card => {
    VanillaTilt.init(card, {
      max: 8,
      speed: 400,
      glare: true,
      "max-glare": 0.2,
    });
  });

  // Play Button Hover Effect
  document.querySelectorAll('.video-container').forEach(container => {
    container.addEventListener('mouseenter', () => {
      container.querySelector('.play-overlay').style.opacity = '1';
      container.querySelector('.play-icon').style.transform = 'scale(1)';
    });
    container.addEventListener('mouseleave', () => {
      container.querySelector('.play-overlay').style.opacity = '0';
      container.querySelector('.play-icon').style.transform = 'scale(0.8)';
    });
  });
</script>

    


<!-- Enhanced Contact & Footer Section -->
<div class="container-fluid sigma-contact-footer">
    <!-- Modern Contact Section -->
    <div class="container-fluid sigma-contact-section py-5" style="background-color: #edfafd;">
        <div class="container py-4">
            <div class="sigma-section-header text-center mb-5">
                <h2 class="sigma-section-title" style="color: #1a7446;">Hubungi Kami</h2>
                <div class="sigma-title-divider mx-auto"></div>
                <p class="sigma-section-subtitle mt-3">Ada pertanyaan? Silakan kirim pesan kepada kami</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form id="sigma-contact-form" class="sigma-contact-form">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" id="sigma-name" class="form-control sigma-input" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="sigma-email" class="form-control sigma-input" placeholder="Alamat Email" required>
                            </div>
                            <div class="col-12">
                                <select id="sigma-recipient" class="form-select sigma-input">
                                    <option value="">Pilih Tujuan Pesan</option>
                                    <option value="putra">PTQ IQRO' Putra</option>
                                    <option value="putri">PTQ IQRO' Putri</option>
                                    <option value="admin">Administrasi</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea id="sigma-message" class="form-control sigma-input" rows="5" placeholder="Isi Pesan Anda" required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn sigma-send-btn">
                                    <i class="fab fa-whatsapp me-2"></i> Kirim via WhatsApp
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    height: 200px;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.sigma-map-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
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

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="{{ asset('landing-page/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('landing-page/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('landing-page/lib/lightbox/js/lightbox.min.js')}}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ asset('landing-page/js/main.js')}}"></script>
</body>

</html>

