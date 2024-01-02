<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelPioneers</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Global Styles -->
    <link rel="stylesheet" href="css/index.css"> <!-- Page-Specific Styles for index.php -->
    <!-- Additional CSS files or scripts can be added here -->
</head>
<body>
<header>
    <nav>
        <img src="img/Logo.png" alt="PixelPioneers Logo" class="logo"> <!-- Logo in the navbar -->
        <!-- Navigation links -->
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="#">Merchandise</a>
        <a href="#">Donate</a>
    </nav>
</header>

<section class="header-content">
    <h1>Welcome to PixelPioneers!</h1>
    <p>Join our vibrant journey into the world of gaming and anime.</p>
    <button onclick="location.href='https://discord.gg/Qc99bS7BTS'">Join Us</button>
    <div class="additional-info">
        <p>Explore the latest in gaming, discuss your favorite anime, and be a part of a passionate community. From retro classics to the newest releases, dive deep into discussions, reviews, and fan art. Share, learn, and grow with fellow enthusiasts in a place where every gamer and anime fan feels at home.</p>
    </div>
</section>

<main>
    <section class="hero-section">
        <div class="hero-content">
            <h2>Embark on an Epic Adventure</h2>
            <p>Step into a world where gaming and anime collide in the most spectacular fashion.</p>
            <button onclick="location.href='#discover-more'">Discover More</button>
        </div>
    </section>

    <section class="intro-section">
        <div class="container">
            <h2>The Odyssey Begins Here</h2>
            <div class="intro-preview" id="intro-preview">
                <button id="expand-intro" onclick="toggleIntro()">Click this if you like reading lol</button>
            </div>
            <div class="full-intro" id="full-intro">
            <p>In the ever-expanding universe of PixelPioneers, a realm awaits where boundaries blur between the digital and the real, where gaming and anime enthusiasts unite under a banner of shared passion and relentless pursuit of mastery.</p>
            <p>Here, in this sanctum, every click, every scroll is a step through uncharted territories of virtual worlds and animated sagas. Journey with us through landscapes etched in pixel and narrative, where every member's voice contributes to the grand tapestry of our community's saga.</p>
            <p>From the adrenaline-pumping thrills of the latest AAA games to the intricate storylines of hidden-gem animes, PixelPioneers is more than just a server; it's a sanctuary for those who seek refuge in the realms of digital wonders and narrative marvels.</p>
            <p>Whether you're a veteran gamer etching your legacy, an anime connoisseur weaving through layers of storyline, or a newcomer setting forth on your maiden voyage into these rich domains, your quest for connection, discussion, and discovery culminates here.</p>
            <p>Welcome to PixelPioneers, where every moment is a story waiting to unfold, every discussion a pathway to new horizons. Embrace the adventure.</p>
            </div>
        </div>
    </section>

    <section class="featured-content">
        <div class="container">
            <h2>Featured Highlights</h2>
            <div class="content-grid">
                <div class="content-item">
                    <a href="placeholder-link.html" class="content-link">
                        <h3>🤖 "Aegis": My Personal Discord Sidekick 🌟</h3>
                        <p>
                            <span class="fa fa-user-secret"></span> Shroomies: A custom bot for exclusive servers.
                            🛡️ <strong>Moderation</strong> that's precise and private.
                            🎫 <strong>Tickets</strong> with a personal touch for each member.
                            ⚙️ <strong>Utility Tools</strong> that keep things running smoothly.
                            🗣️ <strong>Commands</strong> that understand your community's vibe.
                            💖 Tailored for a familiar, secure, and intimate server experience.
                        </p>
                    </a>
                </div>

                <div class="content-item" onclick="openOverlay('waifuZeroTwoOverlay')">
                    <h3>Zero: Where Coding Meets Creativity</h3>
                    <p>🚀 Journey with a tech enthusiast who blends the art of anime with the science of software development. Discover a world where each line of code is a story, and every project is an adventure!</p>
                    <!-- More content -->
                </div>

            </div>
        </div>
    </section>

    <!-- Additional sections as needed -->
</main>

<footer>
    <div class="container">
        <p class="footer-heading">🌟 waifuZeroTwo's Digital Domain 🌟</p>
        <p>© 2023 waifuZeroTwo. All Rights Reserved. In the realm of creativity and code, respect is paramount.</p>
        <p>Visitors are courteously reminded that 'Shroomies', the github project, and its source code, as featured in my <a href="https://github.com/waifuZeroTwo/Shroomies" target="_blank">GitHub repository</a>, are the exclusive intellectual property of their creator.</p>
        <p>Reproduction, use, or derivative works are strictly forbidden without explicit, written consent . This is not merely a request, but shall be regarded as a breach of intellectual propriety.</p>
    </div>
</footer>

<!-- Overlay for detailed description -->
<div id="waifuZeroTwoOverlay" class="overlay">
    <div class="overlay-content">
        <span class="close-btn" onclick="closeOverlay('waifuZeroTwoOverlay')">&times;</span>
        <h2>🌟 Zero: A Creative Tech Maestro 🌟</h2>
        <p>👋 Hey there! I'm <strong>waifuZeroTwo</strong>, not just your average software development student, but a <em>whiz</em> at blending the creative with the technical. 🚀</p>
        <p>🎓 As a passionate coder, I'm all about innovating and pushing boundaries. I speak the language of tech as fluently as I do Dutch, and I'm on a thrilling quest to master English, Arabic, Russian, and Chinese. 🌏</p>
        <p>👨‍💻 Tech is my playground, and I love exploring every bit of it - from crafting sleek UIs in full-stack development to unraveling the mysteries of AI and machine learning. 💡</p>
        <p>🕹️ But wait, there's more! I fuse my love for gaming with coding skills to create epic game development projects. It's like playing God in the digital world! 🎮</p>
        <p>🇯🇵 Anime isn't just a hobby; it's a lifestyle. Inspired by the intricate storytelling and stunning art, I bring a touch of anime magic to everything I do. ✨</p>
        <p>🖌️ Imagine the intersection of technology and art – that's where you'll find me, constantly experimenting and bringing creative visions to life. 🎨</p>
        <p>🚀 Excited about what I do? Check out my project 'Shroomies', a unique Discord bot, or let's connect to talk tech, creativity, or just geek out over anime! 📧</p>
        <a href="https://github.com/waifuZeroTwo" class="github-btn" target="_blank">Visit My GitHub</a>
    </div>

</div>
<!-- JavaScript files -->
<script src="JS/script.js"></script>
<script src="https://kit.fontawesome.com/02436e92fd.js" crossorigin="anonymous"></script>
</body>
</html>
