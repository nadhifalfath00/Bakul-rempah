<?php require_once __DIR__ . '/visitor-counter.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us — Bakoel Rempah</title>
<link rel="shortcut icon" href="Logo.jpeg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="inner-page.css">
</head>
<body class="contact-page">
<div class="topline"></div>
<header><div class="nav-wrap"><a class="brand" href="index.php"><span class="brand-mark"><img src="Logo.jpeg" alt="Bakoel Rempah logo"></span><span class="brand-name">Bakoel Rempah<small>Aceh, Indonesia</small></span></a><button class="menu-toggle" aria-label="Open menu" aria-expanded="false">☰</button><nav><a id="nav-home" href="index.php">Home</a><a id="nav-about" href="about.php">About Us</a><a id="nav-gallery" href="gallery.php">Gallery</a><a id="nav-contact" class="nav-contact" href="contact.php">Contact Us</a></nav><div class="lang-switch" aria-label="Language selector"><button class="lang-btn is-active" type="button" data-lang="id">ID</button><button class="lang-btn" type="button" data-lang="en">EN</button></div></div></header>
<main>
<section class="contact-layout">
	<div class="contact-intro">
		<p id="contact-eyebrow" class="eyebrow">Contact us</p>
		<h1 id="contact-title">Get in touch</h1>
		<h2 id="contact-subtitle">I'd like to hear from you!</h2>
		<p id="contact-lead" class="contact-description">If you have any inquiries or simply want to say hi, please use the contact form.</p>
		<div class="contact-points">
			<article class="contact-point">
				<span class="contact-point-label">Aceh, Indonesia</span>
				<h3>WhatsApp 1</h3>
				<p class="contact-point-address"><span class="contact-icon">⌂</span>Aceh, Indonesia</p>
				<a class="contact-point-link" href="https://wa.me/6281234567890" target="_blank" rel="noopener"><span class="contact-icon">WA</span>+62 812-3456-7890</a>
			</article>
			<article class="contact-point">
				<span class="contact-point-label">Malaysia</span>
				<h3>WhatsApp 2</h3>
				<p class="contact-point-address"><span class="contact-icon">⌂</span>Malaysia</p>
				<a class="contact-point-link" href="https://wa.me/6281234567891" target="_blank" rel="noopener"><span class="contact-icon">WA</span>+62 812-3456-7891</a>
			</article>
		</div>
		<div class="contact-socials" aria-label="Social media links"><a href="#" aria-label="Facebook"><img src="https://cdn.simpleicons.org/facebook/ffffff" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"><span class="social-fallback">f</span></a><a href="#" aria-label="LinkedIn"><img src="https://cdn.simpleicons.org/linkedin/ffffff" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"><span class="social-fallback">in</span></a><a href="#" aria-label="Instagram"><img src="https://cdn.simpleicons.org/instagram/ffffff" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"><span class="social-fallback">ig</span></a><a href="#" aria-label="TikTok"><img src="https://cdn.simpleicons.org/tiktok/ffffff" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"><span class="social-fallback">tk</span></a></div>
	</div>
	<form class="contact-form" id="contact-form">
		<div class="form-row"><label for="first-name" id="label-first-name">First Name</label><label for="last-name" id="label-last-name">Last Name</label><input id="first-name" name="firstName" type="text" autocomplete="given-name" required><input id="last-name" name="lastName" type="text" autocomplete="family-name"></div>
		<label for="email" id="label-email">Email <span>*</span></label><input id="email" name="email" type="email" autocomplete="email" required>
		<label for="message" id="label-message">Message</label><textarea id="message" name="message" rows="5" required></textarea>
		<button class="form-submit" id="contact-submit" type="submit">Send</button>
		<p class="form-status" id="form-status" role="status"></p>
	</form>
</section>
</main>
<footer class="site-footer"><div class="footer-inner"><div class="footer-brand-wrap"><a class="footer-brand" href="index.php"><span class="brand-mark"><img src="Logo.jpeg" alt="Bakoel Rempah logo"></span><span class="brand-name">Bakoel Rempah<small>Aceh, Indonesia</small></span></a><p>Connecting Indonesian spice origins with trusted global trade opportunities.</p></div><div class="footer-column"><h4>Explore</h4><a href="index.php">Home</a><a href="about.php">About Us</a><a href="gallery.php">Gallery</a><a href="contact.php">Contact</a></div><div class="footer-column"><h4>Contact</h4><a href="https://wa.me/6282330207007?text=Hello%20Bakoel%20Rempah" target="_blank" rel="noopener">WhatsApp 1</a><a href="https://wa.me/6281234567891?text=Hello%20Bakoel%20Rempah" target="_blank" rel="noopener">WhatsApp 2</a><span>Aceh, Indonesia</span></div></div><div class="footer-bottom"><span>© <?= date('Y') ?> Bakoel Rempah. All Rights Reserved.</span></div></footer>
<?php require __DIR__ . '/visitor-widget.php'; ?>
<script>const menuButton=document.querySelector('.menu-toggle');const navigation=document.querySelector('nav');menuButton.addEventListener('click',()=>{const isOpen=navigation.classList.toggle('open');menuButton.setAttribute('aria-expanded',String(isOpen));});const translations={id:{'nav-home':'Beranda','nav-about':'Tentang Kami','nav-gallery':'Galeri','nav-contact':'Kontak','contact-eyebrow':'Hubungi kami','contact-title-1':'Mari mulai percakapan','contact-title-2':'via WhatsApp.','contact-lead':'Ceritakan produk, jumlah, tujuan, atau peluang perdagangan yang Anda miliki. Kami dengan senang hati akan mendengar dari Anda.','contact-export-title':'Permintaan ekspor','contact-export-text':'Tanyakan tentang kayu manis, cengkeh, pala, bunga pala, kemiri, dan cabai merah Indonesia.','contact-import-title':'Permintaan impor','contact-import-text':'Bagikan produk, asal yang diinginkan, estimasi volume, dan tujuan pengiriman.','contact-wa-title':'Kontak WhatsApp','contact-address-title':'Alamat bisnis','contact-address-text':'Aceh, Indonesia<br>Office perdagangan dan koordinasi sumber untuk mitra ekspor dan impor.','contact-button-primary':'Chat via WhatsApp 1','contact-button-secondary':'Chat via WhatsApp 2'},en:{'nav-home':'Home','nav-about':'About Us','nav-gallery':'Gallery','nav-contact':'Contact Us','contact-eyebrow':'Contact us','contact-title-1':'Let\'s start a conversation','contact-title-2':'on WhatsApp.','contact-lead':'Tell us about the product, quantity, destination, or trade opportunity you have in mind. We will be glad to hear from you.','contact-export-title':'Export inquiries','contact-export-text':'Ask about Indonesian cinnamon, cloves, nutmeg, mace, candlenut, and red chili.','contact-import-title':'Import inquiries','contact-import-text':'Share the product, preferred origin, estimated volume, and delivery destination.','contact-wa-title':'WhatsApp contacts','contact-address-title':'Business address','contact-address-text':'Aceh, Indonesia<br>Trading office and sourcing coordination for export and import partners.','contact-button-primary':'Chat via WhatsApp 1','contact-button-secondary':'Chat via WhatsApp 2'}};function applyLanguage(lang){const data=translations[lang]||translations.id;Object.entries(data).forEach(([key,value])=>{const el=document.getElementById(key);if(el)el.textContent=value;});document.documentElement.lang=lang;document.querySelectorAll('.lang-btn').forEach((button)=>button.classList.toggle('is-active',button.dataset.lang===lang));localStorage.setItem('lang',lang);}document.querySelectorAll('.lang-btn').forEach((button)=>button.addEventListener('click',()=>applyLanguage(button.dataset.lang)));applyLanguage(localStorage.getItem('lang')||'id');</script>
<script>
	const contactTranslations = {
		id: { 'contact-eyebrow': 'Hubungi kami', 'contact-title': 'Mari terhubung', 'contact-subtitle': 'Kami senang mendengar dari Anda!', 'contact-lead': 'Jika Anda memiliki pertanyaan atau sekadar ingin menyapa, silakan gunakan formulir kontak.', 'label-first-name': 'Nama depan', 'label-last-name': 'Nama belakang', 'label-email': 'Email', 'label-message': 'Pesan', 'contact-submit': 'Kirim', 'contact-address': 'Aceh, Indonesia', 'form-status': 'Pesan Anda akan dibuka melalui WhatsApp.' },
		en: { 'contact-eyebrow': 'Contact us', 'contact-title': 'Get in touch', 'contact-subtitle': "I'd like to hear from you!", 'contact-lead': 'If you have any inquiries or simply want to say hi, please use the contact form.', 'label-first-name': 'First Name', 'label-last-name': 'Last Name', 'label-email': 'Email', 'label-message': 'Message', 'contact-submit': 'Send', 'contact-address': 'Aceh, Indonesia', 'form-status': 'Your message will open in WhatsApp.' }
	};
	function applyContactLanguage(lang) {
		const data = contactTranslations[lang] || contactTranslations.en;
		Object.entries(data).forEach(([id, value]) => {
			const element = document.getElementById(id);
			if (element) element.textContent = value;
		});
	}
	applyContactLanguage(localStorage.getItem('lang') || 'id');
	document.querySelectorAll('.lang-btn').forEach((button) => button.addEventListener('click', () => applyContactLanguage(button.dataset.lang)));
	document.getElementById('contact-form').addEventListener('submit', (event) => {
		event.preventDefault();
		const form = new FormData(event.currentTarget);
		const message = `Hello Bakoel Rempah,\n\nName: ${form.get('firstName')} ${form.get('lastName')}\nEmail: ${form.get('email')}\n\nMessage:\n${form.get('message')}`;
		window.open(`https://wa.me/601115956800?text=${encodeURIComponent(message)}`, '_blank', 'noopener');
	});
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
