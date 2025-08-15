<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISQI' - PTQ IQRO'</title>
    <link rel="icon" type="image/x-icon" href="logoptq.png">
    <meta name="title" content="Ikatan Santri Qur’an IQRO (ISQI) | Organisasi Santri Pesantren Tahfizh IQRO Bekasi">
    <meta name="description" content="Kenali ISQI, organisasi resmi santri SMP dan SMA di Pesantren Tahfizh Qur’an IQRO Bekasi yang aktif mengembangkan bakat, kepemimpinan, dan karakter santri melalui berbagai kegiatan positif.">
    <meta name="keywords" content="ISQI, Ikatan Santri Qur’an IQRO, organisasi santri pesantren IQRO, kegiatan santri IQRO, pembinaan kesiswaan, pesantren tahfizh Bekasi">

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
    
    /* ===== CAROUSEL SECTION ===== */
    .carousel-section {
        padding: 80px 0;
        background-color: var(--biru-muda);
        position: relative;
        overflow: hidden;
    }
    
    .iqro-carousel {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        margin: 0 5px;
    }
    
    .carousel-indicators button.active {
        background-color: var(--kuning-cerah);
    }
    
    .carousel-control-prev, .carousel-control-next {
        width: 50px;
        height: 50px;
        background-color: rgba(26, 116, 70, 0.8);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 1;
    }
    
    .carousel-control-prev:hover, .carousel-control-next:hover {
        background-color: var(--hijau-tua);
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
    </style>
</head>

<body></body>

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
        <li class="sigma-menu-item sigma-dropdown active">
          <a href="#" class="sigma-menu-link">
            Organisasi <i class="fas fa-chevron-down sigma-dropdown-icon"></i>
          </a>
          <ul class="sigma-dropdown-menu">
            <li>
              <a href="/jurnalis" class="sigma-dropdown-item active">
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
<section class="jurnalistik-hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">
        <span class="hero-highlight">ISQI</span><br>
        Ikatan Santri Qur’an IQRO
      </h1>
      <p class="hero-subtitle">Jantung Kegiatan Santri, Pilar Pembinaan Karakter di PTQ IQRO Bekasi</p>
      <div class="social-links">
        <a href="https://www.instagram.com/isqiptqiqro?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-link instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.instagram.com/isqi_ptqputri?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-link instagram"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</section>


<!-- ===== ABOUT SECTION ===== -->
<section class="jurnalistik-about">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">
        <span class="title-highlight">Profil</span> ISQI
        <div class="title-underline"></div>
      </h2>
    </div>
    <div class="about-content">
      <div class="about-image">
        <img src="https://ptqiqro.id/public/foto-profile-pengasuhan/isqi/profilisqi.jpg" alt="ISQI PTQ IQRO" class="featured-image">
        <div class="image-badge">
          <i class="fas fa-users"></i> Organisasi Santri
        </div>
      </div>
      <div class="about-text">
        <p class="lead-text">
          <span class="text-highlight">ISQI</span> (Ikatan Santri Qur’an IQRO) adalah organisasi resmi dan wadah utama bagi seluruh santri tingkat SMP dan SMA di Pesantren Tahfizh Qur’an IQRO Bekasi. ISQI menjadi motor penggerak yang mendorong santri untuk aktif berpartisipasi dalam berbagai kegiatan pesantren, sekaligus menjadi sarana pembinaan kesiswaan untuk mengembangkan minat, bakat, dan potensi setiap santri.
        </p>
        <div class="features-grid">
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-users"></i></div>
            <div class="feature-text">
              <h4>Struktur Organisasi</h4>
              <p>Ketua, wakil, bendahara, sekretaris, dan berbagai departemen seperti ibadah, keamanan, kebersihan, sarpras, bahasa, dan media.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
            <div class="feature-text">
              <h4>Wadah Aspirasi</h4>
              <p>Tempat santri menyuarakan ide, berdiskusi, dan merancang kegiatan pesantren seperti acara, lomba, hingga program sosial.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-balance-scale"></i></div>
            <div class="feature-text">
              <h4>Transparansi & Akuntabilitas</h4>
              <p>Pengelolaan dana kegiatan melalui iuran santri dengan sistem yang transparan dan akuntabel.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <div class="feature-text">
              <h4>Nilai & Karakter</h4>
              <p>Menanamkan nilai keadilan, kepemimpinan, ilmu, dan komitmen Hak Asasi Santri dalam setiap aktivitasnya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===== ACTIVITIES SECTION ===== -->
<section class="jurnalistik-activities">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">
        <span class="title-highlight">Kegiatan</span> ISQI
        <div class="title-underline"></div>
      </h2>
    </div>
    <div class="activities-grid">
      <!-- 1. Perencanaan Program Kerja -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-calendar-check"></i></div>
        <h3>Perencanaan Program Kerja</h3>
        <p>ISQI aktif merancang dan melaksanakan berbagai program kerja pesantren, mulai dari kegiatan keagamaan, lomba, hingga program sosial yang bermanfaat bagi seluruh santri.</p>
        <div class="activity-badge">Rutin Tahunan</div>
      </div>
      <!-- 2. Estafet Kepemimpinan -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-handshake"></i></div>
        <h3>Estafet Kepemimpinan</h3>
        <p>Menjalankan program estafet kepemimpinan yang melatih santri untuk bertanggung jawab dan mempersiapkan regenerasi pengurus ISQI secara berkelanjutan.</p>
        <div class="activity-badge">Rutin Tahunan</div>
      </div>
      <!-- 3. Iuran Santri -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-coins"></i></div>
        <h3>Iuran Santri</h3>
        <p>Pengelolaan iuran santri secara transparan untuk mendukung pendanaan kegiatan ISQI dan memastikan semua program berjalan dengan baik dan akuntabel.</p>
        <div class="activity-badge">Reguler</div>
      </div>
      <!-- 4. Pemetaan dan Pengawasan Program Kerja -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-search-location"></i></div>
        <h3>Pemetaan & Pengawasan Program Kerja</h3>
        <p>Melakukan pemetaan kebutuhan dan pengawasan pelaksanaan program kerja agar sesuai tujuan dan memberikan manfaat maksimal bagi santri.</p>
        <div class="activity-badge">Berkelanjutan</div>
      </div>
      <!-- 5. Penjembatan Antar Santri dan Ustadz -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-users"></i></div>
        <h3>Penjembatan Antar Santri dan Ustadz</h3>
        <p>Menjadi penghubung yang efektif antara santri dan ustadz untuk memperlancar komunikasi, konsultasi, dan koordinasi dalam berbagai kegiatan pesantren.</p>
        <div class="activity-badge">Konsisten</div>
      </div>
      <!-- 6. Sebagai Role Model untuk Santri -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-user-check"></i></div>
        <h3>Role Model untuk Santri</h3>
        <p>Menjadi teladan dalam sikap, disiplin, dan kepemimpinan bagi seluruh santri, memotivasi mereka untuk berkembang secara positif.</p>
        <div class="activity-badge">Setiap Hari</div>
      </div>
      <!-- 7. Pelayan Santri -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-hands-helping"></i></div>
        <h3>Pelayan Santri</h3>
        <p>Memberikan pelayanan dan bantuan kepada santri dalam berbagai kebutuhan agar lingkungan pesantren tetap nyaman dan kondusif.</p>
        <div class="activity-badge">Sepanjang Tahun</div>
      </div>
      <!-- 8. Penggerak Semangat Santri -->
      <div class="activity-card">
        <div class="activity-icon"><i class="fas fa-bolt"></i></div>
        <h3>Penggerak Semangat Santri</h3>
        <p>Memotivasi dan menginspirasi santri untuk aktif berpartisipasi dalam kegiatan pesantren dan mengembangkan potensi diri secara maksimal.</p>
        <div class="activity-badge">Berlanjut</div>
      </div>
    </div>
  </div>
</section>


<!-- ===== GALLERY SECTION ===== -->
<!--<section class="jurnalistik-gallery">-->
<!--  <div class="container">-->
<!--    <div class="section-header">-->
<!--      <h2 class="section-title">-->
<!--        <span class="title-highlight">Galeri</span> Karya-->
<!--        <div class="title-underline"></div>-->
<!--      </h2>-->
<!--      <p class="section-subtitle">Dokumentasi kegiatan dan karya kreatif Tim ISQI</p>-->
<!--    </div>-->
    
<!--    <div class="gallery-grid">-->
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/1.jpg" alt="Sesi Podcast">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Santri show</h3>-->
<!--            <p>Ajang untuk santri membangun jati diri.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/2.jpg" alt="Wawancara Tokoh">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Santri cup</h3>-->
<!--            <p>Mennamkan jiwa kompetitif santri.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/3.jpg" alt="Pembuatan Buletin">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Santri cerdas</h3>-->
<!--            <p>Kegiatan untuk mengasah kecerdasan santri.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/4.jpg" alt="Kunjungan Perpustakaan">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Khotmul Bulanan</h3>-->
<!--            <p>Kegiatan rutin di OMAH Library untuk memperdalam kecintaan pada Al-Qur’an.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/5.jpg" alt="Liputan Kegiatan">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Class meet</h3>-->
<!--            <p>Event Khotmul yang diadakan sebulan sekali.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/6.jpg" alt="Diskusi Kreatif">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Rapat kerja</h3>-->
<!--            <p>Diskusi dan perencanaan program kerja ISQI secara intensif.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/7.jpg" alt="Diskusi Kreatif">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Jogging mingguan</h3>-->
<!--            <p>Aktivitas olahraga rutin untuk menjaga kebugaran dan semangat santri.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
      
<!--      <div class="gallery-item">-->
<!--        <img src="https://ptqiqro.id/public/foto/8.jpg" alt="Diskusi Kreatif">-->
<!--        <div class="gallery-overlay">-->
<!--          <div class="gallery-info">-->
<!--            <h3>Futsal bulanan</h3>-->
<!--            <p>Turnamen futsal sebagai ajang sportivitas dan kekompakan antar santri.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->


 <!--===== NARASI SECTION ===== -->
<section class="jurnalistik-narasi">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">
        <span class="title-highlight">Tentang</span> ISQI
        <div class="title-underline"></div>
      </h2>
    </div>
    <div class="narasi-content">
      <p>
        Ikatan Santri Qur’an IQRO (ISQI) adalah organisasi santri resmi di Pesantren Tahfizh Qur’an IQRO Bekasi yang menjadi jantung kegiatan dan pembinaan karakter santri. ISQI hadir sebagai wadah utama bagi seluruh santri tingkat SMP dan SMA untuk berpartisipasi aktif, menyalurkan minat dan bakat, serta mengembangkan potensi diri dalam lingkungan pesantren.
      </p>
      <p>
        ISQI berperan penting dalam merencanakan dan melaksanakan berbagai kegiatan pesantren, mulai dari acara keagamaan, lomba, hingga program sosial. Setiap kegiatan dirancang melalui musyawarah dan diajukan secara transparan kepada pihak pesantren. Pengelolaan dana pun dilakukan secara akuntabel melalui iuran santri, sehingga setiap kegiatan berjalan dengan baik dan penuh tanggung jawab.
      </p>
      <p>
        Lambang ISQI memiliki makna mendalam: tulisan ISQI sebagai identitas, padi melambangkan keadilan, sosok santri bersongkok sebagai simbol kepemimpinan, buku terbuka menandakan pentingnya ilmu, dan pita biru sebagai komitmen memperjuangkan Hak Asasi Santri.
      </p>
      <p>
        Struktur organisasi ISQI terdiri dari ketua, wakil, bendahara, sekretaris, serta berbagai departemen seperti ibadah, keamanan, kebersihan, sarpras, bahasa, dan media. Setiap pengurus dipilih untuk memastikan kegiatan berjalan lancar dan tujuan organisasi tercapai.
      </p>
      <p>
        ISQI bertujuan membentuk santri yang beriman, bertakwa, berakhlak mulia, serta berjiwa kepemimpinan yang bertanggung jawab. Nilai-nilai sportifitas, kejujuran, disiplin, dan kerja sama selalu ditekankan dalam setiap aktivitas, demi menciptakan lingkungan pesantren yang tertib, bersih, dan kondusif untuk belajar.
      </p>
      <p>
        Keanggotaan ISQI terbuka untuk seluruh santri aktif tingkat SMP dan SMA. Pengurus mengenakan almamater khusus, sementara anggota biasa memakai rompi. Setiap anggota memiliki hak dan kewajiban yang sama dalam berkontribusi dan berpartisipasi.
      </p>
      <p>
        Fungsi strategis ISQI meliputi sebagai wadah penyaluran aspirasi, motivator semangat berorganisasi, preventif terhadap permasalahan santri, serta mitra strategis pesantren dalam memajukan kualitas pendidikan dan kegiatan. Dengan peran ini, ISQI menjadi pilar penting pembentukan karakter dan pengembangan potensi santri di PTQ IQRO Bekasi.
      </p>
    </div>
  </div>
</section>


<style>
/* ===== GLOBAL VARIABLES ===== */
:root {
  --biru-muda: #edfafd;
  --kuning-cerah: #fad25d;
  --hijau-tua: #1a7446;
  --kuning-emas: #f5b700;
  --text-dark: #333333;
  --text-light: #ffffff;
}

/* ===== HERO SECTION STYLES ===== */
.jurnalistik-hero {
  position: relative;
  height: 100vh;
  min-height: 500px;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
              url('https://ptqiqro.id/public/foto-profile-pengasuhan/isqi/heroisqi.jpg') center center no-repeat;
  background-size: cover; /* atau ganti dengan contain jika ingin seluruh gambar terlihat */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
  overflow: hidden;
  padding: 0 20px;
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

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  margin: 0 auto; /* Agar konten berada di tengah */
  text-align: center; /* Teks rata tengah */
  padding: 0 15px;
}

.hero-title {
  font-size: 3rem;
  font-weight: 800;
  margin-bottom: 20px;
  line-height: 1.2;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  /* Hilangkan position: center; karena tidak valid */
}

.hero-highlight {
  background: linear-gradient(90deg, var(--kuning-emas), var(--kuning-cerah));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.hero-subtitle {
  font-size: 1.5rem;
  margin-bottom: 40px;
  opacity: 0.9;
  text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  text-align: center; /* Pastikan subtitle juga rata tengah */
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  font-size: 1.5rem;
  color: white;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.social-link:hover {
  transform: translateY(-5px) scale(1.1);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.social-link.instagram {
  background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
}

.social-link.youtube {
  background: #FF0000;
}

/* ===== ABOUT SECTION STYLES ===== */
.jurnalistik-about {
  padding: 100px 0;
  background-color: var(--biru-muda);
  position: relative;
}

.section-header {
  text-align: center;
  margin-bottom: 60px;
}

.section-title {
  font-size: 2.5rem;
  font-weight: 800;
  color: var(--hijau-tua);
  margin-bottom: 15px;
  position: relative;
  display: inline-block;
}

.title-highlight {
  background: linear-gradient(90deg, var(--kuning-emas), var(--kuning-cerah));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.title-underline {
  width: 60px;
  height: 5px;
  background: linear-gradient(90deg, var(--kuning-emas), var(--hijau-tua));
  border-radius: 5px;
  margin-top: 10px;
}

.about-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: center;
}

.about-image {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.featured-image {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.5s ease;
}

.about-image:hover .featured-image {
  transform: scale(1.05);
}

.image-badge {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background: rgba(255, 255, 255, 0.9);
  color: var(--hijau-tua);
  padding: 8px 15px;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.9rem;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  gap: 8px;
}

.lead-text {
  font-size: 1.1rem;
  line-height: 1.8;
  color: var(--text-dark);
  margin-bottom: 30px;
}

.text-highlight {
  background-color: rgba(250, 210, 93, 0.3);
  padding: 0 5px;
  border-radius: 3px;
  font-weight: 600;
}

.features-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.feature-item {
  display: flex;
  gap: 15px;
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
}

.feature-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.feature-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, var(--kuning-emas), var(--kuning-cerah));
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  flex-shrink: 0;
}

.feature-text h4 {
  color: var(--hijau-tua);
  margin-bottom: 8px;
  font-size: 1.1rem;
}

.feature-text p {
  color: #666;
  font-size: 0.9rem;
  line-height: 1.5;
}

/* ===== ACTIVITIES SECTION STYLES ===== */
.jurnalistik-activities {
  padding: 80px 0;
  background: white;
}

.activities-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 30px;
}

.activity-card {
  background: white;
  border-radius: 15px;
  padding: 30px;
  box-shadow: 0 10px 30px rgba(26, 116, 70, 0.1);
  transition: all 0.3s ease;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-top: 5px solid var(--kuning-emas);
}

.activity-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(26, 116, 70, 0.2);
}

.activity-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, var(--kuning-emas), var(--kuning-cerah));
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8rem;
  margin: 0 auto 20px;
  transition: all 0.3s ease;
}

.activity-card:hover .activity-icon {
  transform: rotate(15deg) scale(1.1);
}

.activity-card h3 {
  color: var(--hijau-tua);
  font-size: 1.3rem;
  margin-bottom: 15px;
}

.activity-card p {
  color: #666;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 20px;
}

.activity-badge {
  display: inline-block;
  background: rgba(26, 116, 70, 0.1);
  color: var(--hijau-tua);
  padding: 5px 15px;
  border-radius: 50px;
  font-size: 0.8rem;
  font-weight: 600;
}

/* ===== GALLERY SECTION STYLES ===== */
.jurnalistik-gallery {
  padding: 80px 0;
  background-color: var(--biru-muda);
}

.section-subtitle {
  color: #666;
  font-size: 1.1rem;
  max-width: 700px;
  margin: 0 auto;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 20px;
  margin-top: 40px;
}

.gallery-item {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  height: 250px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.gallery-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.gallery-item:hover img {
  transform: scale(1.1);
}

.gallery-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgba(26, 116, 70, 0.8), transparent);
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  align-items: flex-end;
  padding: 20px;
}

.gallery-item:hover .gallery-overlay {
  opacity: 1;
}

.gallery-info h3 {
  color: white;
  font-size: 1.2rem;
  margin-bottom: 5px;
}

.gallery-info p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 0.9rem;
}

.btn-more {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: linear-gradient(to right, var(--hijau-tua), #2a8a5d);
  color: white;
  padding: 12px 30px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(26, 116, 70, 0.3);
}

.btn-more:hover {
  background: linear-gradient(to right, var(--kuning-emas), var(--kuning-cerah));
  color: var(--hijau-tua);
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(250, 210, 93, 0.4);
}

.btn-more i {
  transition: transform 0.3s ease;
}

.btn-more:hover i {
  transform: translateX(5px);
}

/* ===== NARASI SECTION STYLES ===== */
.jurnalistik-narasi {
  padding: 80px 0;
  background: white;
}

.narasi-content {
  max-width: 800px;
  margin: 0 auto;
}

.narasi-content p {
  font-size: 1.05rem;
  line-height: 1.8;
  color: var(--text-dark);
  margin-bottom: 20px;
  text-align: justify;
}

/* ===== RESPONSIVE STYLES ===== */
@media (max-width: 1200px) {
  .hero-title {
    font-size: 2.5rem;
  }
  
  .section-title {
    font-size: 2.2rem;
  }
}

@media (max-width: 992px) {
  .about-content {
    grid-template-columns: 1fr;
  }
  
  .features-grid {
    grid-template-columns: 1fr;
  }
  
  .hero-title {
    font-size: 2.2rem;
  }
  
  .hero-subtitle {
    font-size: 1.2rem;
  }
}

@media (max-width: 768px) {
  .jurnalistik-hero {
    height: 60vh;
    min-height: 400px;
  }
  
  .section-title {
    font-size: 2rem;
  }
  
  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }
}

@media (max-width: 576px) {
  .hero-title {
    font-size: 1.8rem;
  }
  
  .hero-subtitle {
    font-size: 1rem;
  }
  
  .social-link {
    width: 40px;
    height: 40px;
    font-size: 1.2rem;
  }
  
  .section-title {
    font-size: 1.8rem;
  }
  
  .activity-card {
    padding: 20px;
  }
  
  .gallery-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Enhanced Contact & Footer Section -->
<div class="container-fluid sigma-contact-footer">
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