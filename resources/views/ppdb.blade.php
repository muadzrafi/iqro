<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Santri Baru 2024/2025 - PTQ IQRO' Cikunir</title>
    <link rel="icon" type="image/x-icon" href="logoptq.png">
    <meta name="title" content="PPDB Santri Baru 2024/2025 - Pesantren Tahfizh Al-Qur'an IQRO'">
    <meta name="description" content="Pendaftaran Santri Baru Tahun Ajaran 2024/2025 PTQ IQRO' Cikunir. Daftarkan putra/putri Anda untuk pendidikan tahfizh Al-Qur'an terpadu dengan kurikulum nasional.">
    <meta name="keywords" content="ppdb ptq iqro, pendaftaran santri baru 2024, pesantren tahfizh cikunir, sekolah islam boarding school, pendidikan al-qur'an, pondok pesantren tahfizh, sekolah islam bogor">

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
    
    /* ===== NAVBAR STYLE ===== */
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

    /* ===== KHUSUS STYLE PPDB ===== */
    .ppdb-hero {
        background: linear-gradient(135deg, var(--biru-muda) 0%, #d8f4fa 100%);
        padding: 100px 0 60px;
        margin-top: 80px; /* Adjust untuk navbar fixed */
    }
    
    .ppdb-form-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(26, 116, 70, 0.1);
        overflow: hidden;
        border-top: 5px solid var(--kuning-emas);
    }
    
    .ppdb-form-header {
        background: var(--hijau-tua);
        color: white;
        padding: 20px;
        text-align: center;
    }
    
    .ppdb-form-body {
        padding: 30px;
    }
    
    .ppdb-form-group label {
        color: var(--hijau-tua);
        font-weight: 600;
    }
    
    .ppdb-form-control {
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 12px 15px;
    }
    
    .ppdb-form-control:focus {
        border-color: var(--hijau-tua);
        box-shadow: 0 0 0 0.25rem rgba(26, 116, 70, 0.15);
    }
    
    .ppdb-btn-submit {
        background: linear-gradient(to right, var(--hijau-tua), #0d4b2a);
        color: white;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s;
    }
    
    .ppdb-btn-submit:hover {
        background: linear-gradient(to right, var(--kuning-emas), var(--kuning-cerah));
        transform: translateY(-3px);
    }

    /* Embed Google Form Style */
    .ppdb-embed-container {
        background: var(--biru-muda);
        padding: 30px;
        border-radius: 15px;
        margin: 40px 0;
    }
    
    .ppdb-embed-container iframe {
        width: 100%;
        height: 1800px;
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(26, 116, 70, 0.15);
    }
    
    .btn-download {
        background: var(--kuning-emas);
        color: var(--hijau-tua);
        font-weight: 600;
        padding: 12px 25px;
        border-radius: 50px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
        transition: all 0.3s;
    }
    
    .btn-download:hover {
        background: var(--kuning-cerah);
        transform: translateY(-3px);
    }

    /* Footer Style */
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

    .sigma-copyright-section {
        background: linear-gradient(135deg, #0d4b2a 0%, #083822 100%);
        position: relative;
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
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
        
        .ppdb-hero {
            padding: 80px 0 40px;
        }
        
        .sigma-brand-logo img {
            height: 50px;
        }
        
        .sigma-brand-logo span {
            font-size: 22px;
        }
    }
    
    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .hero-content {
            padding: 30px 15px;
        }
        
        .sigma-brand-logo img {
            height: 45px;
        }
        
        .sigma-brand-logo span {
            font-size: 20px;
        }
        
        .sigma-navbar-menu {
            top: 70px;
        }
        
        .ppdb-embed-container iframe {
            height: 2000px;
        }
    }
    </style>
</head>

<body>
<!-- ===== NAVBAR ===== -->
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
        <li class="sigma-menu-item sigma-dropdown active">
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

<!-- HERO SECTION PPDB -->
<section class="ppdb-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 style="color: var(--hijau-tua); font-weight: 700;">PENDAFTARAN SANTRI BARU</h1>
                <p class="lead" style="color: var(--hijau-tua);">Tahun Ajaran 2024/2025</p>
                <a href="#form-ppdb" class="btn" style="background: var(--kuning-emas); color: var(--hijau-tua); font-weight: 600;">
                    Daftar Sekarang <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
            <div class="col-lg-6">
                <img src="https://ptqiqro.id/public/foto/12.jpg" alt="Ilustrasi PPDB" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- FORM SECTION -->
<section id="form-ppdb" class="py-5">
    <div class="container">
        <div class="ppdb-embed-container">
            <!-- Kode embed Google Form -->
            <iframe 
                src="https://docs.google.com/forms/d/e/1FAIpQLScdhLKgQu0FglV75P5zHhBELJzdNNWIUQ85cjZ0EQjHlIv8ag/viewform?usp=sharing&ouid=102103584608178344442" 
                width="100%" 
                height="1800" 
                frameborder="0" 
                marginheight="0" 
                marginwidth="0"
                style="border: none; border-radius: 15px; box-shadow: 0 10px 25px rgba(26, 116, 70, 0.15);">
                Memuat…
            </iframe>
            
            <!-- TOMBOL DOWNLOAD SYARAT -->
            <div class="text-center mt-4">
                <a href="LINK_PDF_SYARAT_KAMU" 
                   class="btn btn-warning shadow-sm"
                   style="background: #f5b700; color: #1a7446; font-weight: 600;">
                    <i class="fas fa-file-pdf me-2"></i> Download Syarat & Ketentuan Lengkap
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER SECTION -->
<div class="container-fluid sigma-footer-section py-5">
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
<div class="container-fluid sigma-copyright-section py-3">
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

<!-- SCRIPTS -->
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

    // Auto-resize iframe
    const iframe = document.querySelector('.ppdb-embed-container iframe');
    iframe.onload = function() {
        this.style.height = this.contentWindow.document.body.scrollHeight + 'px';
    };
});

// WhatsApp Script
document.getElementById('sigma-contact-form')?.addEventListener('submit', function(e) {
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
            phoneNumber = "6281388204775";
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Auto adjust iframe height
document.querySelector('.ppdb-embed-container iframe').onload = function() {
    this.style.height = this.contentWindow.document.body.scrollHeight + 100 + 'px';
};
</script>

</body>
</html>