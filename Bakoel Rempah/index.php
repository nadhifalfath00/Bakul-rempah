<?php require_once __DIR__ . '/visitor-counter.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Bakoel Rempah connects Indonesian spice producers with global buyers and trade partners.">

    <title>Bakoel Rempah — Indonesian Spices, Global Opportunities</title>

    <link rel="shortcut icon" href="Logo.jpeg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <div class="topline"></div>

    <!-- Header -->
    <header>
        <div class="nav-wrap">

            <a class="brand" href="index.php">
                <span class="brand-mark">
                    <img src="Logo.jpeg" alt="Bakoel Rempah logo">
                </span>

                <span class="brand-name">
                    Bakoel Rempah
                    <small>Aceh, Indonesia</small>
                </span>
            </a>

            <button
                class="menu-toggle"
                aria-label="Open menu"
                aria-expanded="false">
                ☰
            </button>

            <nav aria-label="Main navigation">
                <a id="nav-home" href="index.php">Home</a>
                <a id="nav-about" href="about.php">About Us</a>
                <a id="nav-gallery" href="gallery.php">Gallery</a>
                <a id="nav-contact" class="nav-contact" href="contact.php">Contact Us</a>
            </nav>

            <div class="lang-switch" aria-label="Language selector">
                <button class="lang-btn is-active" type="button" data-lang="id">ID</button>
                <button class="lang-btn" type="button" data-lang="en">EN</button>
            </div>

        </div>
    </header>

    <main>

        <!-- Hero Section -->
        <section class="hero">

            <div class="hero-copy">

                <p id="hero-badge" class="eyebrow">
                    Aceh, Indonesia · Spice trade connections
                </p>

                <h1>
                    <span id="hero-title-1">Indonesian spices.</span>
                    <em id="hero-title-2">Global opportunities.</em>
                </h1>

                <p id="hero-copy">
                    We connect quality Indonesian spices with buyers, traders,
                    and partners around the world.
                </p>

                <div>
                    <a id="btn-about" class="button" href="about.php">
                        Discover our story
                        <span>→</span>
                    </a>

                    <a id="btn-gallery" class="button secondary" href="gallery.php">
                        View gallery
                        <span>→</span>
                    </a>
                </div>

            </div>

            <div
                class="hero-image"
                role="img"
                aria-label="Indonesian spices ready for global markets">

                <span class="hero-label">
                    Local origins · Global connections
                </span>

            </div>

        </section>

        <!-- Introduction -->
        <section class="intro">

            <div>
                <p id="about-eyebrow" class="eyebrow">
                    About Bakoel Rempah
                </p>

                <h2 id="about-title" class="section-title">
                    Local roots. Reliable global supply.
                </h2>
            </div>

            <div class="intro-copy">

                <p id="about-copy-1">
                    Bakoel Rempah is an Aceh-based trading company connecting
                    Indonesian spices, producers, and opportunities with the
                    right global partners.
                </p>

                <p id="about-copy-2">
                    We build dependable relationships through clear
                    communication, thoughtful coordination, and respect for
                    the people behind every product.
                </p>

                <a id="about-link" class="text-link" href="about.php">
                    Learn more about us
                    <span>→</span>
                </a>

            </div>

        </section>

        <!-- Products -->
        <section class="products products-featured">

            <div class="section-head">

                <div>
<p id="product-eyebrow" class="eyebrow">
                    Our products
                </p>

                <h2 id="product-title" class="section-title">
                    Spices from our origins.
                </h2>
                </div>

                <p id="product-note" class="section-note">
                    Selected Indonesian spices for international buyers,
                    traders, and industry partners.
                </p>

            </div>

            <div class="product-grid">

                <!-- Cinnamon -->
                <article class="product-card product-card-featured">

                    <img
                        src="img/Cinnamon%20Sticks%20Fragrance%20Oil%20_%20Nature's%20Garden.jpg"
                        alt="Indonesian cinnamon and spices"
                        loading="eager" fetchpriority="high">

                    <div class="product-copy">

                        <h3>Cinnamon</h3>

                        <p>
                            Warm, aromatic cinnamon supplied for food,
                            beverage, seasoning, and spice businesses.
                        </p>

                    </div>

                </article>

                <!-- Cloves -->
                <article class="product-card">

                    <img
                        src="img/147730c0c77cbbab0aeb4ad7cedb42b2.jpg"
                        alt="Indonesian cloves"
                        loading="lazy">

                    <div class="product-copy">

                        <h3>Cloves</h3>

                        <p>
                            Fragrant cloves with a distinctive aroma and
                            flavor for culinary and food manufacturing use.
                        </p>

                    </div>

                </article>

                <!-- Nutmeg -->
                <article class="product-card">

                    <img
                        src="img/Indian%20Nutmeg.jpg"
                        alt="Whole Indonesian nutmeg"
                        loading="lazy">

                    <div class="product-copy">

                        <h3>Nutmeg</h3>

                        <p>
                            Whole nutmeg with a rich, warm character for
                            sauces, seasoning blends, and culinary products.
                        </p>

                    </div>

                </article>

                <!-- Mace -->
                <article class="product-card">

                    <img
                        src="img/download%20(9).jpg"
                        alt="Mace spice"
                        loading="lazy">

                    <div class="product-copy">

                        <h3>Mace</h3>

                        <p>
                            The delicate outer covering of the nutmeg seed,
                            valued for its warm color, aroma, and flavor.
                        </p>

                    </div>

                </article>

                <!-- Candlenut -->
                <article class="product-card">

                    <img
                        src="img/Kemiri%20Utuh%20-%20100gram,%20250gram,%20500gram.jpg"
                        alt="Candlenuts and Indonesian ingredients"
                        loading="lazy">

                    <div class="product-copy">

                        <h3>Candlenut</h3>

                        <p>
                            A traditional Indonesian ingredient used in
                            sauces, spice pastes, and culinary products.
                        </p>

                    </div>

                </article>

                <!-- Red Chili -->
                <article class="product-card">

                    <img
                        src="img/Red%20Chili%20Powder%20410g%20_%20Pisi%20Hui%20Lal%20Mirch%20Spice%20for%20Indian%20Cooking.jpg"
                        alt="Dried red chili peppers"
                        loading="lazy">

                    <div class="product-copy">

                        <h3>Red Chili</h3>

                        <p>
                            Dried red chili bringing bold color and heat to
                            seasoning brands and food producers.
                        </p>

                    </div>

                </article>

            </div>

            <div class="product-followup">
                <h3>Looking for the right product specification?</h3>
                <p>Tell us your preferred origin, form, quantity, and destination. We can help you discuss the most suitable product for your market.</p>
                <div class="product-points">
                    <span>Origin and product details</span>
                    <span>Quantity and packaging discussion</span>
                    <span>Export inquiry support</span>
                </div>
            </div>

            <a class="button" href="contact.php">
                Contact us
                <span>→</span>
            </a>

        </section>

        <!-- Process -->
        <section class="process">

            <div>

                <p class="eyebrow">
                    How we work
                </p>

                <h2>
                    Clear steps. Stronger trade connections.
                </h2>

            </div>

            <div class="process-grid">

                <div class="process-item">
                    <span>01</span>

                    <h3>Understand</h3>

                    <p>
                        We listen to your product needs, specifications,
                        volume, and destination.
                    </p>
                </div>

                <div class="process-item">
                    <span>02</span>

                    <h3>Connect</h3>

                    <p>
                        We review suitable products, producers,
                        and trade opportunities.
                    </p>
                </div>

                <div class="process-item">
                    <span>03</span>

                    <h3>Coordinate</h3>

                    <p>
                        We align quality expectations, packaging,
                        and delivery details.
                    </p>
                </div>

                <div class="process-item">
                    <span>04</span>

                    <h3>Move forward</h3>

                    <p>
                        We support the next steps with clear communication
                        between partners.
                    </p>
                </div>

            </div>

        </section>

        <!-- Gallery Preview -->
        <section class="home-gallery">

            <div class="section-head">

                <div>

                    <p class="eyebrow">
                        From origin to opportunity
                    </p>

                    <h2 class="section-title">
                        People, products, place.
                    </h2>

                </div>

                <p class="section-note">
                    A glimpse of the farmers, ingredients, and communities
                    behind our trade connections.
                </p>

            </div>

            <div class="gallery-preview">

                <figure>

                    <img
                        src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=1000&q=85"
                        alt="Indonesian spices"
                        loading="lazy">

                    <figcaption>
                        Indonesian spices
                    </figcaption>

                </figure>

                <figure>

                    <img
                        src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&w=800&q=85"
                        alt="Farmer in an agricultural field"
                        loading="lazy">

                    <figcaption>
                        Farmers at origin
                    </figcaption>

                </figure>

                <figure>

                    <img
                        src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?auto=format&fit=crop&w=800&q=85"
                        alt="Growing agricultural community"
                        loading="lazy">

                    <figcaption>
                        Growing communities
                    </figcaption>

                </figure>

                <figure>

                    <img
                        src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=800&q=85"
                        alt="Natural ingredients"
                        loading="lazy">

                    <figcaption>
                        Natural ingredients
                    </figcaption>

                </figure>

            </div>

            <a class="button secondary" href="gallery.php">
                Explore full gallery
                <span>→</span>
            </a>

        </section>

        <!-- CTA -->
        <section class="home-cta">

            <h2>
                Have a product or sourcing opportunity in mind?
            </h2>

            <a class="button" href="contact.php">
                Contact Bakoel Rempah
                <span>→</span>
            </a>

        </section>

    </main>

    <!-- Footer -->
    <footer class="site-footer">

        <div class="footer-inner">

            <div class="footer-brand-wrap">
                <a class="footer-brand" href="index.php">
                    <span class="brand-mark">
                        <img src="Logo.jpeg" alt="Bakoel Rempah logo">
                    </span>
                    <span class="brand-name">
                        Bakoel Rempah
                        <small>Aceh, Indonesia</small>
                    </span>
                </a>
                <p>
                    Connecting Indonesian spice origins with trusted global trade opportunities.
                </p>
            </div>

            <div class="footer-column">
                <h4>Explore</h4>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="gallery.php">Gallery</a>
                <a href="contact.php">Contact</a>
            </div>

            <div class="footer-column">
                <h4>Contact</h4>
                <a href="https://wa.me/6281234567890?text=Hello%20Bakoel%20Rempah" target="_blank" rel="noopener">WhatsApp 1</a>
                <a href="https://wa.me/6281234567891?text=Hello%20Bakoel%20Rempah" target="_blank" rel="noopener">WhatsApp 2</a>
                <span>Aceh, Indonesia</span>
            </div>

        </div>

        <div class="footer-bottom">
            <span>© <?= date('Y') ?> Bakoel Rempah. All Rights Reserved.</span>
        </div>

    </footer>
<?php require __DIR__ . '/visitor-widget.php'; ?>

    <!-- Mobile Menu -->
    <script>
        const menuButton = document.querySelector('.menu-toggle');
        const navigation = document.querySelector('nav');

        menuButton.addEventListener('click', () => {
            const isOpen = navigation.classList.toggle('open');

            menuButton.setAttribute(
                'aria-expanded',
                String(isOpen)
            );
        });

        const translations = {
            id: {
                'nav-home': 'Beranda',
                'nav-about': 'Tentang Kami',
                'nav-gallery': 'Galeri',
                'nav-contact': 'Kontak',
                'hero-badge': 'Aceh, Indonesia · Koneksi perdagangan rempah',
                'hero-title-1': 'Rempah Indonesia.',
                'hero-title-2': 'Peluang global.',
                'hero-copy': 'Kami menghubungkan rempah Indonesia berkualitas dengan pembeli, pedagang, dan mitra di seluruh dunia.',
                'btn-about': 'Temukan kisah kami',
                'btn-gallery': 'Lihat galeri',
                'about-eyebrow': 'Tentang Bakoel Rempah',
                'about-title': 'Akar lokal. Pasokan global yang dapat diandalkan.',
                'about-copy-1': 'Bakoel Rempah adalah perusahaan perdagangan berbasis di Aceh yang menghubungkan rempah Indonesia, produsen, dan peluang dengan mitra global yang tepat.',
                'about-copy-2': 'Kami membangun hubungan yang dapat diandalkan melalui komunikasi yang jelas, koordinasi yang matang, dan rasa hormat terhadap orang-orang di balik setiap produk.',
                'about-link': 'Pelajari lebih lanjut',
                'product-eyebrow': 'Produk kami',
                'product-title': 'Rempah dari asal kami.',
                'product-note': 'Rempah Indonesia pilihan untuk pembeli internasional, pedagang, dan industri.'
            },
            en: {
                'nav-home': 'Home',
                'nav-about': 'About Us',
                'nav-gallery': 'Gallery',
                'nav-contact': 'Contact Us',
                'hero-badge': 'Aceh, Indonesia · Spice trade connections',
                'hero-title-1': 'Indonesian spices.',
                'hero-title-2': 'Global opportunities.',
                'hero-copy': 'We connect quality Indonesian spices with buyers, traders, and partners around the world.',
                'btn-about': 'Discover our story',
                'btn-gallery': 'View gallery',
                'about-eyebrow': 'About Bakoel Rempah',
                'about-title': 'Local roots. Reliable global supply.',
                'about-copy-1': 'Bakoel Rempah is an Aceh-based trading company connecting Indonesian spices, producers, and opportunities with the right global partners.',
                'about-copy-2': 'We build dependable relationships through clear communication, thoughtful coordination, and respect for the people behind every product.',
                'about-link': 'Learn more about us',
                'product-eyebrow': 'Our products',
                'product-title': 'Spices from our origins.',
                'product-note': 'Selected Indonesian spices for international buyers, traders, and industry partners.'
            }
        };

        function applyLanguage(lang) {
            const data = translations[lang] || translations.id;
            Object.entries(data).forEach(([key, value]) => {
                const el = document.getElementById(key);
                if (el) el.textContent = value;
            });

            document.documentElement.lang = lang;
            document.querySelectorAll('.lang-btn').forEach((button) => {
                button.classList.toggle('is-active', button.dataset.lang === lang);
            });

            localStorage.setItem('lang', lang);
        }

        document.querySelectorAll('.lang-btn').forEach((button) => {
            button.addEventListener('click', () => applyLanguage(button.dataset.lang));
        });

        applyLanguage(localStorage.getItem('lang') || 'id');
    </script>

<script>
    (() => {
        const brandName = 'Serambi bakul rempah';
        const replaceBrand = () => {
            document.title = document.title.replace(/Bakoel Rempah/gi, brandName);
            document.querySelectorAll('meta[content], img[alt]').forEach((element) => {
                const attribute = element.hasAttribute('content') ? 'content' : 'alt';
                element.setAttribute(attribute, element.getAttribute(attribute).replace(/Bakoel Rempah/gi, brandName));
            });
            const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT);
            while (walker.nextNode()) if (/Bakoel Rempah/i.test(walker.currentNode.nodeValue)) walker.currentNode.nodeValue = walker.currentNode.nodeValue.replace(/Bakoel Rempah/gi, brandName);
        };
        replaceBrand();
        new MutationObserver(replaceBrand).observe(document.body, { childList: true, subtree: true, characterData: true });
    })();
</script>
</body>

</html>