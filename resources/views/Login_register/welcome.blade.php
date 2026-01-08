<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLLO - Powering Creators Economy</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo ollo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #9575FF 0%, #7C4DFF 50%, #6A3EE8 100%);
            min-height: 100vh;
            color: #333;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><rect fill="%23ffffff" fill-opacity="0.05" width="1920" height="1080"/></svg>');
            pointer-events: none;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 80px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .logo {
            font-size: 32px;
            font-weight: 800;
            color: #FFFFFF;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo img {
            filter: brightness(0) invert(1);
            transition: all 0.3s;
        }

        .logo:hover img {
            transform: scale(1.05);
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            list-style: none;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s;
        }

        .nav-menu .btn-admin{
            color: rgb(51, 51, 51);
        }

        .nav-menu .btn-admin:hover {
            color: #FFFFFF;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .link-login:hover{
            color: rgba(32, 13, 100, 0.9);
            text-shadow: 0 0 15px rgb(255, 255, 255);
        }

        .btn-admin {
            background: #ffffff;
            /* color: #000000; */
            padding: 10px 28px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            
        }

        .btn-admin:hover {
            background: rgba(32, 13, 100, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(255, 255, 255, 0.4);
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 80px 40px;
            gap: 60px;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero-title {
            font-size: 56px;
            font-weight: 800;
            line-height: 1.2;
            color: #FFFFFF;
            margin-bottom: 24px;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.6;
            margin-bottom: 40px;
            text-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            display: flex;
            gap: 12px;
            align-items: center;
            background: #FFFFFF;
            padding: 8px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            max-width: 500px;
        }

        .input-field {
            flex: 1;
            border: none;
            padding: 14px 20px;
            font-size: 16px;
            outline: none;
            color: #333;
        }

        .input-field::placeholder {
            color: #999;
        }

        .btn-create {
            background: #7C4DFF;
            color: #FFFFFF;
            padding: 14px 36px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .btn-create:hover {
            background: #6A3EE8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(124, 77, 255, 0.4);
        }

        /* Hero Image */
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .mockup-container {
            position: relative;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .phone-mockup {
            width: 320px;
            height: 640px;
            background: linear-gradient(180deg, #9575FF 0%, #7C4DFF 50%, #6A3EE8 100%);
            border-radius: 40px;
            padding: 20px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
        }

        .phone-header {
            background: rgba(0, 0, 0, 0.2);
            padding: 15px;
            border-radius: 20px 20px 0 0;
            color: white;
            font-weight: 600;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .phone-content {
            background: white;
            height: 520px;
            border-radius: 20px;
            margin-top: 10px;
            padding: 20px;
            overflow: hidden;
        }

        .profile-card {
            text-align: center;
            padding: 20px;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, #7C4DFF, #FF4081);
            margin: 0 auto 15px;
        }

        .profile-name {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }

        .profile-bio {
            font-size: 12px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            background: #7C4DFF;
            border-radius: 50%;
        }

        .btn-view {
            background: #FFFFFF;
            color: #7C4DFF;
            padding: 12px 40px;
            border: none;
            border-radius: 25px;
            font-weight: 700;
            width: 100%;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(124, 77, 255, 0.2);
            transition: all 0.3s;
        }

        .btn-view:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 77, 255, 0.3);
        }

        .product-list {
            margin-top: 20px;
        }

        .product-item {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-icon {
            width: 40px;
            height: 40px;
            background: #FFB74D;
            border-radius: 8px;
        }

        .price-tag {
            background: #7C4DFF;
            color: white;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(124, 77, 255, 0.3);
        }

        /* Decorative Elements */
        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.6;
        }

        .circle-1 {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #FFB74D, #FF9800);
            top: -50px;
            right: -50px;
            z-index: -1;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #7C4DFF, #9C27B0);
            bottom: 50px;
            left: -30px;
            z-index: -1;
        }

        .floating-card {
            position: absolute;
            background: white;
            padding: 12px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: float 3s ease-in-out infinite;
        }

        .card-1 {
            top: 100px;
            left: -80px;
            animation-delay: 0.5s;
        }

        .card-2 {
            bottom: 150px;
            right: -80px;
            animation-delay: 1s;
        }

        .card-icon {
            width: 40px;
            height: 40px;
            background: #FFB74D;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .card-text {
            font-size: 10px;
            color: #666;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .navbar {
                padding: 20px 40px;
            }

            .hero-section {
                padding: 60px 40px;
                flex-direction: column;
            }

            .hero-title {
                font-size: 42px;
            }

            .phone-mockup {
                width: 280px;
                height: 560px;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                gap: 20px;
                font-size: 14px;
            }

            .navbar {
                padding: 15px 20px;
            }

            .logo {
                font-size: 24px;
            }

            .hero-section {
                padding: 40px 20px;
            }

            .hero-title {
                font-size: 32px;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            .input-group {
                flex-direction: column;
            }

            .btn-create {
                width: 100%;
            }

            .floating-card {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo ollo.png') }}" alt="OLLO" style="height: 50px; width: auto;">
        </div>
        <ul class="nav-menu">
            <li><a href="{{ route('login') }}" class="link-login">Login</a></li>
            <li><a href="#admin" class="btn-admin">REGISTER</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Powering Creators Economy</h1>
            <p class="hero-subtitle">
                Create Instant Mobile Webpage to sell your knowledge, Chat,
                Video Calls, Events, Digital Product. Share it across social media.
            </p>
            <div class="input-group">
                <input type="text" class="input-field" placeholder="ollo.id/YourName">
                <button class="btn-create">Create</button>
            </div>
        </div>

        <div class="hero-image">
            <div class="mockup-container">
                <!-- Decorative Elements -->
                <div class="decoration-circle circle-1"></div>
                <div class="decoration-circle circle-2"></div>

                <!-- Floating Cards -->
                <div class="floating-card card-1">
                    <div class="card-icon"></div>
                    <div class="card-text">Appointment</div>
                </div>

                <div class="floating-card card-2">
                    <div class="card-icon"></div>
                    <div class="card-text">Course</div>
                </div>

                <!-- Phone Mockup -->
                <div class="phone-mockup">
                    <div class="phone-header">
                        <span>☰</span>
                        <span>Home</span>
                        <span>🔍 🛒</span>
                    </div>
                    <div class="phone-content">
                        <div class="profile-card">
                            <div class="profile-pic"></div>
                            <div class="profile-name">Laura Sofia Moeta</div>
                            <div class="profile-bio">
                                Hi, I'm digital illustrator based in Jakarta that made several best selling children books
                            </div>
                            <div class="social-icons">
                                <div class="social-icon"></div>
                                <div class="social-icon"></div>
                                <div class="social-icon"></div>
                                <div class="social-icon"></div>
                            </div>
                            <button class="btn-view">View Detail</button>
                        </div>

                        <div class="product-list">
                            <div class="product-item">
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div class="product-icon"></div>
                                    <div>
                                        <div style="font-size: 12px; font-weight: 600;">Illustration 101</div>
                                        <div style="font-size: 10px; color: #999;">Course by Laura</div>
                                    </div>
                                </div>
                                <div class="price-tag">IDR 150k</div>
                            </div>

                            <div class="product-item">
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div class="product-icon"></div>
                                    <div>
                                        <div style="font-size: 12px; font-weight: 600;">Personal ProCreate</div>
                                        <div style="font-size: 10px; color: #999;">Brush Set</div>
                                    </div>
                                </div>
                                <div class="price-tag">IDR 99k</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.hero-content, .hero-image').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>
