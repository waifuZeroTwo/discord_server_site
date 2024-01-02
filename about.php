<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - PixelPioneers</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Global Styles -->
    <link rel="stylesheet" href="css/about.css">
    <script src="https://kit.fontawesome.com/02436e92fd.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav>
        <img src="img/Logo.png" alt="PixelPioneers Logo" class="logo">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="#">Merchandise</a>
        <a href="#">Donate</a>
    </nav>
</header>

<main>
    <!-- About Intro Section -->
    <section class="about-intro" onclick="openOverlay('aboutIntroOverlay')">
        <div class="container">
            <h2>About PixelPioneers</h2>
            <p>Welcome to PixelPioneers, a vibrant community where gaming and anime enthusiasts converge...</p>
        </div>
    </section>

    <!-- Mission Statement Section -->
    <section class="mission-statement" onclick="openOverlay('missionStatementOverlay')">
        <div class="container">
            <h2>Our Mission</h2>
            <p>At PixelPioneers, our mission is to create a welcoming, inclusive environment...</p>
        </div>
    </section>

    <!-- Community Highlights Section -->
    <section class="community-highlights">
        <div class="container">
            <h2>Community Highlights</h2>
            <p>Join us in events, gaming nights, anime watch parties, and more...</p>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="join-us">
        <div class="container">
            <h2>Join the Adventure</h2>
            <p>Ready to be part of something special? Join PixelPioneers today...</p>
            <a href="https://discord.gg/Qc99bS7BTS" class="join-btn">Join Our Discord</a>
        </div>
    </section>

    <!-- Additional Content Sections -->
    <!-- Add more sections as needed for other content -->

</main>

<footer>
    <div class="container">
        <p class="footer-heading">🌟 PixelPioneers's Digital Domain 🌟</p>
        <p>© 2023 PixelPioneers. All Rights Reserved. In the realm of creativity and code, respect is paramount.</p>
        <p>Visitors are courteously reminded that 'Shroomies', the github project, and its source code, as featured in the <a href="https://github.com/waifuZeroTwo/Shroomies" target="_blank">GitHub repository</a>, are the exclusive intellectual property of their creator.</p>
        <p>Reproduction, use, or derivative works are strictly forbidden without explicit, written consent. This is not merely a request, but shall be regarded as a breach of intellectual propriety.</p>
    </div>
</footer>
<div id="aboutIntroOverlay" class="overlay">
    <div class="overlay-content">
        <span class="close-btn" onclick="closeOverlay('aboutIntroOverlay')">&times;</span>
        <h2>More About PixelPioneers</h2>
        <p>Founded in 2023, PixelPioneers is more than just a community; it's a thriving haven where gaming and anime cultures intertwine. Born from a shared passion for immersive gaming experiences and the captivating art of anime, our community has grown into a diverse and dynamic group.</p>

        <h3>Our Core Values</h3>
        <p>At the heart of PixelPioneers are values that define us: inclusivity, respect, creativity, and a relentless passion for all things gaming and anime. We believe in creating a space where every member feels valued, heard, and excited to participate.</p>

        <h3>What Sets Us Apart</h3>
        <p>PixelPioneers isn't just another gaming server. Here, members find a unique blend of gaming sessions, anime discussions, creative showcases, and collaborative events. From exclusive game nights to anime trivia and art contests, every activity is a chance to connect and grow.</p>

        <h3>Join the Adventure</h3>
        <p>Whether you're a seasoned gamer, an anime aficionado, or just starting your journey, PixelPioneers offers a welcoming platform to explore your interests, make lasting friendships, and be part of an ever-evolving story. Join us and be part of something special!</p>
    </div>
</div>
<div id="missionStatementOverlay" class="overlay">
    <div class="overlay-content">
        <span class="close-btn" onclick="closeOverlay('missionStatementOverlay')">&times;</span>
        <h2>Our Mission at PixelPioneers</h2>
        <p>PixelPioneers isn't just a community; it's a beacon for gaming and anime enthusiasts. Our mission transcends beyond creating a digital space – it's about crafting an experience where passion for gaming and anime thrives, connections deepen, and creativity blossoms.</p>

        <h3>Inclusivity at its Core</h3>
        <p>Our ethos is built on inclusivity and respect. We welcome members from all walks of life, embracing diversity as our strength. Here, every voice matters, every opinion is valued, and every member is a vital part of our ever-growing family.</p>

        <h3>A Hub for Creativity and Collaboration</h3>
        <p>At PixelPioneers, creativity knows no bounds. We encourage members to express themselves, whether it's through game development, anime art, storytelling, or collaborative projects. Our community is a canvas for your creativity.</p>

        <h3>Engagement and Empowerment</h3>
        <p>We're committed to engaging and empowering our members. From interactive gaming sessions to insightful anime discussions and workshops, we offer an array of activities to fuel your passions and develop your skills.</p>

        <h3>Join Us in Our Pioneering Journey</h3>
        <p>Our mission is an ongoing journey, and every member of PixelPioneers plays a crucial role in shaping its path. We invite you to be part of our story, to grow with us, and to help us build a community where the love for gaming and anime echoes in every corner.</p>
    </div>
</div>

<script src="JS/script.js"></script>
</body>
</html>
