<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный дневник эмоций</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <div class="logo"><img src="img/logo.png" alt="logo"></div>
            <nav class="header-nav">
                <a href="#hero">Главная</a>
                <a href="#features">Возможности</a>
                
                <a href="#about">О нас</a>
            </nav>
            <div class="header-profile" id="openSignup" role="button" aria-label="Открыть регистрацию">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="hero" id="hero">
            <div class="hero-content">
                <h1>Ваш личный дневник,</h1>
                <p class="hero-subtitle">для эмоционального всплеска, ярких чувств и воспоминаний.</p>
                <button class="hero-btn" onclick="scrollToSection('features')">заведи свой дневник!</button>
            </div>
            <div class="img1">
                <img src="img/img1.png" alt="imaginea  1">
            </div>
        </section>

        <section class="features" id="features">
            <h2 class="features-title">Что мы предлагаем?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-visual">
                            <div class="mini-calendar">
                                <img src="img/calendar.png" alt="calendar">
                            </div>
                    </div>
                        <div class="feature-text">
                            <h3>Креативный календарь</h3>
                            <p>посматривайте свою эмоций на протяжение определённого времени.</p>
                        </div>
                </div>
                <div class="feature-card feature-reverse">
                    <div class="feature-text">
                        <h3>Собственный выбор</h3>
                        <p>выбирайте сами ассоциацию к той или иной эмоций</p>
                    </div>
                    <div class="feature-visual">
                        <div class="color-picker-demo">
                            <div class="color-wheel" id="colorWheel"></div>
                            <div class="intensity-slider">
                                <div class="slider-track" id="sliderTrack">
                                    <div class="slider-thumb" id="sliderThumb"></div>
                                </div>
                            </div>
                            <div class="emoji-preview" id="emojiPreview">☺️</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <h2>О дневнике эмоций</h2>
            <p>Наш дневник помогает отслеживать ваше эмоциональное состояние, анализировать настроение и сохранять важные моменты жизни. Каждая запись — это шаг к лучшему пониманию себя.</p>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-logo">Fn</div>
            <div class="footer-links">
                <a href="#hero">Главная</a>
                <a href="#features">Возможности</a>
                <a href="#about">О нас</a>
            </div>
            <p class="footer-copy">© 2026 Личный дневник эмоций</p>
        </div>
    </footer>

</body>
</html>

