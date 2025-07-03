<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lofi Vibes - Retro Chill Zone</title>
    <link href="https://fonts.googleapis.com/css2?family=VT323&family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier Prime', monospace;
            background: linear-gradient(135deg, #2d1b69 0%, #11998e 100%);
            color: #f4f1de;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Background image overlay when applied */
        body.with-bg-image {
            background-image: url('<?php echo isset($_GET['bg_image']) ? htmlspecialchars($_GET['bg_image']) : ''; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-blend-mode: overlay;
        }

        body.with-bg-image::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(45, 27, 105, 0.7) 0%, rgba(17, 153, 142, 0.7) 100%);
            z-index: -2;
            pointer-events: none;
        }

        header {
            text-align: center;
            padding: 2rem 1rem;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #e07a5f;
        }

        .logo {
            font-family: 'VT323', monospace;
            font-size: 3rem;
            color: #f2cc8f;
            text-shadow: 0 0 20px rgba(242, 204, 143, 0.5);
            margin-bottom: 0.5rem;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 20px rgba(242, 204, 143, 0.5); }
            to { text-shadow: 0 0 30px rgba(242, 204, 143, 0.8), 0 0 40px rgba(242, 204, 143, 0.3); }
        }

        .tagline {
            font-size: 1.2rem;
            color: #81b29a;
            font-style: italic;
        }

        /* Navigation */
        nav {
            background: rgba(45, 27, 105, 0.8);
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid #e07a5f;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        nav a {
            color: #f4f1de;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border: 2px solid transparent;
            border-radius: 20px;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        nav a:hover {
            border-color: #f2cc8f;
            background: rgba(242, 204, 143, 0.1);
            transform: translateY(-2px);
        }

        /* Main content */
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .section {
            margin-bottom: 3rem;
            background: rgba(0, 0, 0, 0.2);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid rgba(224, 122, 95, 0.3);
            backdrop-filter: blur(5px);
        }

        .section h2 {
            font-family: 'VT323', monospace;
            font-size: 2.5rem;
            color: #f2cc8f;
            margin-bottom: 1rem;
            text-align: center;
        }

        /* Image gallery */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .image-card {
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid #e07a5f;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-card:hover {
            transform: translateY(-5px) rotate(1deg);
            box-shadow: 0 10px 30px rgba(224, 122, 95, 0.3);
        }

        .image-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            filter: sepia(20%) saturate(1.2);
        }

        .image-card .caption {
            padding: 1rem;
            text-align: center;
            font-style: italic;
            color: #81b29a;
        }

        /* Animated elements */
        .vinyl-record {
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, #1a1a1a 30%, #333 31%, #333 40%, #1a1a1a 41%);
            border-radius: 50%;
            margin: 2rem auto;
            position: relative;
            animation: spin 3s linear infinite;
        }

        .vinyl-record::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background: #e07a5f;
            border-radius: 50%;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Retro TV frame */
        .tv-frame {
            background: #8b4513;
            padding: 20px;
            border-radius: 20px;
            margin: 2rem auto;
            max-width: 400px;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .tv-screen {
            background: #000;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            border: 3px solid #333;
        }

        .tv-screen img {
            width: 100%;
            border-radius: 5px;
            filter: contrast(1.2) brightness(0.9);
        }

        /* Cassette tape */
        .cassette {
            width: 200px;
            height: 120px;
            background: linear-gradient(45deg, #8b4513, #a0522d);
            border-radius: 10px;
            margin: 2rem auto;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .cassette::before,
        .cassette::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            background: #1a1a1a;
            border-radius: 50%;
            top: 20px;
        }

        .cassette::before { left: 30px; }
        .cassette::after { right: 30px; }

        /* Quote section */
        .quote {
            text-align: center;
            font-size: 1.5rem;
            font-style: italic;
            color: #f2cc8f;
            margin: 2rem 0;
            padding: 2rem;
            border-left: 4px solid #e07a5f;
            background: rgba(224, 122, 95, 0.1);
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.5);
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
            border-top: 2px solid #e07a5f;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .logo { font-size: 2rem; }
            nav ul { flex-direction: column; gap: 1rem; }
            .image-grid { grid-template-columns: 1fr; }
            .section { padding: 1rem; }
        }

        /* Glitch effect */
        .glitch {
            animation: glitch 2s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
        }
    </style>
</head>
<body<?php echo isset($_GET['bg_image']) ? ' class="with-bg-image"' : ''; ?>>

    <?php if (isset($_GET['music']) && $_GET['music'] == 'lofi'): ?>
    <!-- Audio element for lofi music -->
    <audio id="lofi-audio" autoplay loop style="display: none;">
        <source src="lofi.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <?php endif; ?>

    <!-- Header -->
    <header>
        <h1 class="logo glitch">LOFI VIBES</h1>
        <p class="tagline">~ chill beats for your soul ~</p>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#music">Music</a></li>
            <li><a href="#vibes">Vibes</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Main content -->
    <main>
        <!-- Welcome section -->
        <section class="section" id="home">
            <h2>Welcome to the Chill Zone</h2>
            <div class="vinyl-record"></div>
            <p style="text-align: center; font-size: 1.1rem; margin-top: 1rem;">
                Step into a world where time slows down and every moment feels like a warm embrace. 
                Here, vintage aesthetics meet modern relaxation in perfect harmony.
            </p>
        </section>

        <!-- Gallery section -->
        <section class="section" id="gallery">
            <h2>Aesthetic Gallery</h2>
            <div class="image-grid">
                <div class="image-card">
                    <img src="/placeholder.svg?height=200&width=300" alt="Lofi study setup with vintage radio">
                    <div class="caption">Late night study sessions</div>
                </div>
                <div class="image-card">
                    <img src="/placeholder.svg?height=200&width=300" alt="Retro coffee shop interior">
                    <div class="caption">Cozy coffee corner</div>
                </div>
                <div class="image-card">
                    <img src="/placeholder.svg?height=200&width=300" alt="Vintage record collection">
                    <div class="caption">Vinyl memories</div>
                </div>
                <div class="image-card">
                    <img src="/placeholder.svg?height=200&width=300" alt="Neon city lights at night">
                    <div class="caption">City dreams</div>
                </div>
                <div class="image-card">
                    <img src="/placeholder.svg?height=200&width=300" alt="Retro gaming setup">
                    <div class="caption">Pixel perfect nights</div>
                </div>
                <div class="image-card">
                    <img src="/placeholder.svg?height=200&width=300" alt="Vintage polaroid photos">
                    <div class="caption">Captured moments</div>
                </div>
            </div>
        </section>

        <!-- Music section -->
        <section class="section" id="music">
            <h2>Now Playing</h2>
            <div class="tv-frame">
                <div class="tv-screen">
                    <img src="/placeholder.svg?height=200&width=350" alt="Animated lofi girl studying">
                </div>
            </div>
            <div class="cassette"></div>
            <p style="text-align: center; margin-top: 1rem;">
                🎵 Currently vibing to: "Midnight City Lights" 🎵
            </p>
        </section>

        <!-- Quote section -->
        <section class="section" id="vibes">
            <h2>Daily Vibes</h2>
            <div class="quote">
                "In the quiet moments between the beats, 
                we find the rhythm of our souls."
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <div style="display: inline-block; padding: 1rem; background: rgba(129, 178, 154, 0.2); border-radius: 10px;">
                    ☕ Grab your favorite drink<br>
                    🎧 Put on your headphones<br>
                    🌙 Let the vibes take over<br>
                    ✨ Find your inner peace
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section class="section" id="contact">
            <h2>Stay Connected</h2>
            <div style="text-align: center;">
                <p style="margin-bottom: 1rem;">Join our community of chill seekers</p>
                <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap; margin-top: 2rem;">
                    <div style="padding: 1rem; background: rgba(224, 122, 95, 0.2); border-radius: 10px;">
                        📧 lofi@chillvibes.com
                    </div>
                    <div style="padding: 1rem; background: rgba(129, 178, 154, 0.2); border-radius: 10px;">
                        🎵 @lofivibes
                    </div>
                    <div style="padding: 1rem; background: rgba(242, 204, 143, 0.2); border-radius: 10px;">
                        📱 Follow the journey
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Lofi Vibes. Made with ❤️ for the chill community.</p>
            <p style="margin-top: 0.5rem; font-size: 0.9rem; opacity: 0.8;">
                "Life is like a lofi track - it's all about finding beauty in the simple moments."
            </p>
        </div>
    </footer>
</body>
</html>