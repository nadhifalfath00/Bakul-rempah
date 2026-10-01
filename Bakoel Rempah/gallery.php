<?php require_once __DIR__ . '/visitor-counter.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery — Bakoel Rempah</title>
<link rel="shortcut icon" href="Logo.jpeg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="inner-page.css">
</head>
<body>
<div class="topline"></div>
<header>
  <div class="nav-wrap">
    <a class="brand" href="index.php"><span class="brand-mark"><img src="Logo.jpeg" alt="Bakoel Rempah logo"></span><span class="brand-name">Bakoel Rempah<small>Aceh, Indonesia</small></span></a>
    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false">☰</button>
    <nav>
      <a id="nav-home" href="index.php">Home</a>
      <a id="nav-about" href="about.php">About Us</a>
      <a id="nav-gallery" href="gallery.php">Gallery</a>
      <a id="nav-contact" class="nav-contact" href="contact.php">Contact Us</a>
    </nav>
    <div class="lang-switch" aria-label="Language selector"><button class="lang-btn is-active" type="button" data-lang="id">ID</button><button class="lang-btn" type="button" data-lang="en">EN</button></div>
  </div>
</header>
<main>
  <section class="page-hero">
    <p id="gallery-eyebrow" class="eyebrow">From origin to opportunity</p>
    <h1><span id="gallery-title-1">People, products,</span> <em id="gallery-title-2">place.</em></h1>
    <p id="gallery-lead" class="lead">A closer look at the farmers, products, and places that connect local origins to global markets.</p>
  </section>
  <section class="page-content">
    <div class="gallery-tools" aria-label="Gallery categories">
      <button id="filter-all" class="gallery-filter active" type="button" data-filter="all">All photos</button>
      <button id="filter-origin" class="gallery-filter" type="button" data-filter="origin">Farmers & origins</button>
      <button id="filter-product" class="gallery-filter" type="button" data-filter="product">Products</button>
      <button id="filter-coffee" class="gallery-filter" type="button" data-filter="coffee">Coffee</button>
      <button id="filter-natural" class="gallery-filter" type="button" data-filter="natural">Natural ingredients</button>
    </div>
    <div class="photo-gallery">
      <figure data-category="product"><img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=1200&q=85" alt="Indonesian spices arranged for selection" loading="lazy"><figcaption>Indonesian spices</figcaption></figure>
      <figure data-category="origin"><img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&w=900&q=85" alt="Farmer working in an agricultural field" loading="lazy"><figcaption>Farmers at origin</figcaption></figure>
      <figure data-category="origin"><img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?auto=format&fit=crop&w=900&q=85" alt="Green agricultural field and farm landscape" loading="lazy"><figcaption>Growing communities</figcaption></figure>
      <figure data-category="coffee"><img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=900&q=85" alt="Coffee beans from producing communities" loading="lazy"><figcaption>Coffee from origin</figcaption></figure>
      <figure data-category="natural"><img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=900&q=85" alt="Natural oils and botanical ingredients" loading="lazy"><figcaption>Natural ingredients</figcaption></figure>
    </div>
    <p id="gallery-note" style="margin: 34px 0 0;">Every image represents the people, products, and places behind a trade connection. For product details and sourcing inquiries, we would be glad to hear from you.</p>
    <div class="gallery-actions"><a id="gallery-button-primary" class="button" href="contact.php">Contact us <span>→</span></a><a id="gallery-button-secondary" class="button secondary" href="about.php">Learn more <span>→</span></a></div>
  </section>
</main>
<div class="lightbox" aria-hidden="true"><figure><button class="lightbox-close" type="button" aria-label="Close image">×</button><img src="" alt=""><figcaption></figcaption></figure></div>
<footer class="site-footer">
  <div class="footer-inner"><div class="footer-brand-wrap"><a class="footer-brand" href="index.php"><span class="brand-mark"><img src="Logo.jpeg" alt="Bakoel Rempah logo"></span><span class="brand-name">Bakoel Rempah<small>Aceh, Indonesia</small></span></a><p>Connecting Indonesian spice origins with trusted global trade opportunities.</p></div><div class="footer-column"><h4>Explore</h4><a href="index.php">Home</a><a href="about.php">About Us</a><a href="gallery.php">Gallery</a><a href="contact.php">Contact</a></div><div class="footer-column"><h4>Contact</h4><a href="https://wa.me/6281234567890?text=Hello%20Bakoel%20Rempah" target="_blank" rel="noopener">WhatsApp 1</a><a href="https://wa.me/6281234567891?text=Hello%20Bakoel%20Rempah" target="_blank" rel="noopener">WhatsApp 2</a><span>Aceh, Indonesia</span></div></div>
  <div class="footer-bottom"><span>© <?= date('Y') ?> Bakoel Rempah. All Rights Reserved.</span></div>
</footer>
<?php require __DIR__ . '/visitor-widget.php'; ?>
<script>
  const menuButton = document.querySelector('.menu-toggle');
  const navigation = document.querySelector('nav');
  menuButton.addEventListener('click', () => {
    const isOpen = navigation.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
  });

  const filters = document.querySelectorAll('.gallery-filter');
  const galleryItems = document.querySelectorAll('.photo-gallery figure');
  filters.forEach((filter) => filter.addEventListener('click', () => {
    filters.forEach((item) => item.classList.remove('active'));
    filter.classList.add('active');
    galleryItems.forEach((item) => item.classList.toggle('is-hidden', filter.dataset.filter !== 'all' && item.dataset.category !== filter.dataset.filter));
  }));

  const lightbox = document.querySelector('.lightbox');
  const lightboxImage = lightbox.querySelector('img');
  const lightboxCaption = lightbox.querySelector('figcaption');
  const closeLightbox = () => {
    lightbox.classList.remove('open');
    lightbox.setAttribute('aria-hidden', 'true');
  };
  galleryItems.forEach((item) => item.addEventListener('click', () => {
    const image = item.querySelector('img');
    lightboxImage.src = image.src;
    lightboxImage.alt = image.alt;
    lightboxCaption.textContent = item.querySelector('figcaption').textContent;
    lightbox.classList.add('open');
    lightbox.setAttribute('aria-hidden', 'false');
  }));
  lightbox.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', (event) => { if (event.target === lightbox) closeLightbox(); });
  document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeLightbox(); });
  const translations = {id:{'nav-home':'Beranda','nav-about':'Tentang Kami','nav-gallery':'Galeri','nav-contact':'Kontak','gallery-eyebrow':'Dari asal ke peluang','gallery-title-1':'Orang, produk,','gallery-title-2':'tempat.','gallery-lead':'Tinjauan lebih dekat mengenai petani, produk, dan tempat yang menghubungkan asal lokal dengan pasar global.','filter-all':'Semua foto','filter-origin':'Petani & asal','filter-product':'Produk','filter-coffee':'Kopi','filter-natural':'Bahan alami','gallery-note':'Setiap gambar mewakili orang, produk, dan tempat di balik hubungan perdagangan. Untuk detail produk dan pertanyaan pengadaan, kami dengan senang hati akan mendengarkan Anda.','gallery-button-primary':'Hubungi kami','gallery-button-secondary':'Pelajari lebih lanjut'},en:{'nav-home':'Home','nav-about':'About Us','nav-gallery':'Gallery','nav-contact':'Contact Us','gallery-eyebrow':'From origin to opportunity','gallery-title-1':'People, products,','gallery-title-2':'place.','gallery-lead':'A closer look at the farmers, products, and places that connect local origins to global markets.','filter-all':'All photos','filter-origin':'Farmers & origins','filter-product':'Products','filter-coffee':'Coffee','filter-natural':'Natural ingredients','gallery-note':'Every image represents the people, products, and places behind a trade connection. For product details and sourcing inquiries, we would be glad to hear from you.','gallery-button-primary':'Contact us','gallery-button-secondary':'Learn more'}};function applyLanguage(lang){const data=translations[lang]||translations.id;Object.entries(data).forEach(([key,value])=>{const el=document.getElementById(key);if(el)el.textContent=value;const filterMap={'filter-all':'all','filter-origin':'origin','filter-product':'product','filter-coffee':'coffee','filter-natural':'natural'};const filterEl=document.getElementById(filterMap[key]);if(filterEl&&key.startsWith('filter-'))filterEl.textContent=value;});document.documentElement.lang=lang;document.querySelectorAll('.lang-btn').forEach((button)=>button.classList.toggle('is-active',button.dataset.lang===lang));localStorage.setItem('lang',lang);}document.querySelectorAll('.lang-btn').forEach((button)=>button.addEventListener('click',()=>applyLanguage(button.dataset.lang)));applyLanguage(localStorage.getItem('lang')||'id');
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
