<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Faatih Aminullah - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #f97316;
            --accent: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #94a3b8;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--primary);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--primary);
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            padding-top: 150px;
            padding-bottom: 80px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text h1 span {
            color: var(--primary);
        }

        .hero-text p {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 30px;
        }

        .hero-badges {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .badge {
            padding: 8px 16px;
            background: white;
            border-radius: 30px;
            font-size: 0.9rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .badge i {
            color: var(--primary);
        }

        .hero-image {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .hero-image::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid var(--primary);
            border-radius: 50%;
            top: 15px;
            left: 15px;
            z-index: -1;
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .about-text p {
            margin-bottom: 15px;
            color: #334155;
        }

        .about-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 30px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-item i {
            color: var(--primary);
            font-size: 1.2rem;
        }

        .about-image {
            flex: 1;
            text-align: center;
        }

        .about-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Education Section */
        .education-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .education-item {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .education-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .education-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .education-item .date {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }

        /* Achievements Section */
        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .achievement-item {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            text-align: center;
        }

        .achievement-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .achievement-item i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .achievement-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Skills Section */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .skill {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            text-align: center;
        }

        .skill:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .skill i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .skill h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Portfolio Section */
        .portfolio-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 5px;
            background: white;
            border: 1px solid var(--gray);
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .portfolio-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(37, 99, 235, 0.9);
            padding: 20px;
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }

        /* Contact Section */
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .contact-item i {
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: block;
        }

        .footer-logo span {
            color: var(--secondary);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-links h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background: var(--primary);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content, .about-content {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .hero-image, .about-image {
                margin-top: 40px;
            }
            
            .nav-links {
                display: none;
            }
            
            .hamburger {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }
            
            .hero {
                padding-top: 120px;
            }
            
            .hero-text h1 {
                font-size: 2rem;
            }
            
            .skill i {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .container {
                width: 95%;
            }
            
            .hero-text h1 {
                font-size: 1.8rem;
            }
            
            .btn {
                padding: 10px 20px;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .about-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Fastih<span>Portfolio.</span></a>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#education">Pendidikan</a></li>
                    <li><a href="#achievements">Prestasi</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hai, Saya <span>Muhammad Faatih Aminullah</span></h1>
                    <p>Siswa SMA Kelas 3, Jurnalis Muda, Fotografer, dan Hafizh Qur'an 30 Juz dari Bekasi, Indonesia.</p>
                    
                    <div class="hero-badges">
                        <div class="badge">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Pelajar SMA</span>
                        </div>
                        <div class="badge">
                            <i class="fas fa-camera"></i>
                            <span>Fotografer</span>
                        </div>
                        <div class="badge">
                            <i class="fas fa-pen"></i>
                            <span>Jurnalis</span>
                        </div>
                        <div class="badge">
                            <i class="fas fa-book-quran"></i>
                            <span>Hafizh Qur'an</span>
                        </div>
                    </div>
                    
                    <a href="#portfolio" class="btn">Lihat Karya Saya</a>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Muhammad Faatih Aminullah">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Saya</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Profil Singkat</h3>
                    <p>Saya Muhammad Faatih Aminullah, seorang pelajar SMA kelas 3 yang bersekolah di SMAN 17 Bekasi dan tinggal di Pondok Pesantren Tahfizh Al-Qur'an IQRO'. Saya memiliki minat besar dalam bidang jurnalistik, fotografi, dan multimedia.</p>
                    <p>Sebagai seorang hafizh Qur'an 30 juz, saya selalu berusaha mengintegrasikan nilai-nilai spiritual dalam aktivitas sehari-hari dan pekerjaan saya. Saya percaya bahwa dengan kombinasi pengetahuan modern dan nilai-nilai spiritual, kita dapat menciptakan karya yang bermanfaat bagi masyarakat.</p>
                    
                    <div class="about-details">
                        <div class="detail-item">
                            <i class="fas fa-user"></i>
                            <span>Nama: Muhammad Faatih Aminullah</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-calendar"></i>
                            <span>Tanggal Lahir: 7 April 2008</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lokasi: Bekasi, Indonesia</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-language"></i>
                            <span>Bahasa: Indonesia, Inggris, Jerman Dasar</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-quran"></i>
                            <span>Hafalan: 30 Juz Al-Qur'an</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Pendidikan: SMA Kelas 3 (IPS)</span>
                        </div>
                    </div>
                    
                    <a href="#contact" class="btn">Hubungi Saya</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80" alt="Tentang Saya">
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="education">
        <div class="container">
            <div class="section-title">
                <h2>Pendidikan</h2>
            </div>
            <div class="education-container">
                <div class="education-item">
                    <h3>SMAN 17 Bekasi</h3>
                    <span class="date">2021 - Sekarang</span>
                    <p>Jurusan Ilmu Pengetahuan Sosial (IPS)</p>
                    <p>Rata-rata Nilai: 83-85</p>
                </div>
                <div class="education-item">
                    <h3>Pondok Pesantren Tahfizh Al-Qur'an IQRO'</h3>
                    <span class="date">2021 - Sekarang</span>
                    <p>Program Tahfizh Al-Qur'an</p>
                    <p>Kegiatan: Mengajar anak-anak, kegiatan sosial, dan multimedia pesantren</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="achievements">
        <div class="container">
            <div class="section-title">
                <h2>Prestasi</h2>
            </div>
            <div class="achievements-container">
                <div class="achievement-item">
                    <i class="fas fa-trophy"></i>
                    <h3>Juara 1 Biologi Nasional</h3>
                    <p>Gojocen Competition</p>
                </div>
                <div class="achievement-item">
                    <i class="fas fa-medal"></i>
                    <h3>Emas Bahasa Indonesia</h3>
                    <p>Islamic Olympiad Festival II</p>
                </div>
                <div class="achievement-item">
                    <i class="fas fa-award"></i>
                    <h3>Juara 1 QMQ Bahasa Inggris</h3>
                    <p>National English Center</p>
                </div>
                <div class="achievement-item">
                    <i class="fas fa-camera"></i>
                    <h3>Juara Lomba Fotografi Nature</h3>
                    <p>Kompetisi Fotografi Tingkat Regional</p>
                </div>
                <div class="achievement-item">
                    <i class="fas fa-film"></i>
                    <h3>Juara 3 Reels Competition</h3>
                    <p>Jantara Competition</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <div class="section-title">
                <h2>Keahlian</h2>
            </div>
            <div class="skills-container">
                <div class="skill">
                    <i class="fas fa-camera"></i>
                    <h3>Fotografi & Videografi</h3>
                    <p>Keahlian dalam pengambilan gambar dan video dengan estetika visual yang baik</p>
                </div>
                <div class="skill">
                    <i class="fas fa-pen-nib"></i>
                    <h3>Jurnalistik</h3>
                    <p>Kemampuan menulis artikel, berita, dan konten kreatif lainnya</p>
                </div>
                <div class="skill">
                    <i class="fas fa-paint-brush"></i>
                    <h3>Desain Grafis</h3>
                    <p>Mendesain konten visual menggunakan Canva dan tools lainnya</p>
                </div>
                <div class="skill">
                    <i class="fas fa-microphone"></i>
                    <h3>Public Speaking</h3>
                    <p>MC dan public speaking untuk berbagai acara formal dan semi-formal</p>
                </div>
                <div class="skill">
                    <i class="fas fa-code"></i>
                    <h3>Web Development</h3>
                    <p>Pengembangan website front-end dasar</p>
                </div>
                <div class="skill">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Edukator</h3>
                    <p>Mengajar dan membimbing anak-anak</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="photo">Fotografi</button>
                <button class="filter-btn" data-filter="journalism">Jurnalistik</button>
                <button class="filter-btn" data-filter="design">Desain</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="photo">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Fotografi Alam">
                    <div class="portfolio-overlay">
                        <h3>Fotografi Alam</h3>
                        <p>Karya fotografi landscape dan nature</p>
                    </div>
                </div>
                <div class="portfolio-item" data-category="journalism">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Wawancara Tokoh">
                    <div class="portfolio-overlay">
                        <h3>Wawancara Tokoh Nasional</h3>
                        <p>Bertemu dan mewawancarai tokoh-tokoh nasional</p>
                    </div>
                </div>
                <div class="portfolio-item" data-category="design">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1768&q=80" alt="Desain Grafis">
                    <div class="portfolio-overlay">
                        <h3>Desain Grafis</h3>
                        <p>Karya desain menggunakan Canva</p>
                    </div>
                </div>
                <div class="portfolio-item" data-category="photo">
                    <img src="https://images.unsplash.com/photo-1554080353-321e452ccf19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Fotografi Event">
                    <div class="portfolio-overlay">
                        <h3>Dokumentasi Event</h3>
                        <p>Dokumentasi kegiatan sekolah dan pesantren</p>
                    </div>
                </div>
                <div class="portfolio-item" data-category="journalism">
                    <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" alt="Artikel Jurnalistik">
                    <div class="portfolio-overlay">
                        <h3>Artikel Jurnalistik</h3>
                        <p>Karya tulis untuk media sekolah dan pesantren</p>
                    </div>
                </div>
                <div class="portfolio-item" data-category="design">
                    <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1800&q=80" alt="Media Sosial">
                    <div class="portfolio-overlay">
                        <h3>Konten Media Sosial</h3>
                        <p>Manajemen media sosial Instagram & YouTube</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Kontak Saya</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Mari Terhubung</h3>
                    <p>Silakan hubungi saya melalui informasi kontak berikut atau isi formulir di samping.</p>
                    
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>aminullahfaatih30@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Telepon/WhatsApp</h4>
                            <p>+62 851-7962-5063</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Lokasi</h4>
                            <p>Bekasi, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://instagram.com/fatihnullh" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6285179625063" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:aminullahfaatih30@gmail.com"><i class="far fa-envelope"></i></a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <a href="#" class="footer-logo">Fastih<span>Portfolio.</span></a>
                    <p>Portfolio digital Muhammad Faatih Aminullah - Pelajar, Jurnalis, dan Fotografer dari Bekasi, Indonesia.</p>
                    
                    <div class="social-links">
                        <a href="https://instagram.com/fatihnullh" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6285179625063" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:aminullahfaatih30@gmail.com"><i class="far fa-envelope"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#education">Pendidikan</a></li>
                        <li><a href="#achievements">Prestasi</a></li>
                        <li><a href="#skills">Keahlian</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#">Fotografi</a></li>
                        <li><a href="#">Videografi</a></li>
                        <li><a href="#">Jasa Desain</a></li>
                        <li><a href="#">Konten Media Sosial</a></li>
                        <li><a href="#">MC & Public Speaking</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Muhammad Faatih Aminullah. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple form validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah berhasil dikirim. Saya akan membalasnya segera.');
            this.reset();
        });

        // Portfolio filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                button.classList.add('active');
                
                // Get filter value
                const filterValue = button.getAttribute('data-filter');
                
                // Show/hide portfolio items based on filter
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });

        // Update copyright year
        document.querySelector('.copyright p').innerHTML = `&copy; ${new Date().getFullYear()} Muhammad Faatih Aminullah. All Rights Reserved.`;
    </script>
</body>
</html>