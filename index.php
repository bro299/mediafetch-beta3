<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaFetch - Unduh Media dengan Mudah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<nav class="navbar">
        <div class="container navbar-content">
            <div class="navbar-logo" id="logo">MediaFetch</div>
            <button class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-links" id="navbarLinks">
                <a href="#about" data-translate="about">Tentang</a>
                <a href="#contact" data-translate="contact">Kontak</a>
                <a href="#api" data-translate="api">API</a>
                <select class="language-select" id="languageSelect">
                    <option value="id">Indonesia</option>
                    <option value="en">English</option>
                    <option value="jv">Jawa</option>
                </select>
                <button class="dark-mode-toggle" id="darkModeToggle">
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </div>
    </nav>

    <div id="notification" class="notification">
        <p id="notificationText"></p>
    </div>
    
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="hero-title animate-on-scroll" data-translate="heroTitle">Unduh Video, Musik & Gambar dengan Mudah</h1>
            <div class="icon-container animate-on-scroll">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-spotify"></i>
                <i class="fab fa-tiktok"></i>
            </div>
            <p class="hero-subtitle animate-on-scroll" data-translate="heroSubtitle">Masukkan URL di bawah ini untuk memulai!</p>
        </div>
    </section>

    <div class="container">
        <div class="input-section animate-on-scroll">
            <div class="input-group">
                <input type="text" id="urlInput" class="input-field" data-translate="inputPlaceholder" placeholder="Masukkan URL di sini...">
                <button id="pasteBtn" class="paste-btn"><i class="fas fa-paste"></i></button>
            </div>
            <button id="downloadBtn" class="download-btn" data-translate="downloadBtn">Unduh</button>
        </div>
        <div id="content" class="mt-4"></div>
        <div id="spinner" class="text-center" style="display: none;">
            <i class="fas fa-spinner fa-spin fa-3x"></i>
        </div>
    </div>

    <section class="features-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll" data-translate="featuresTitle">Fitur Unggulan</h2>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-bolt feature-icon"></i>
                    <h3 data-translate="featureSpeed">Cepat</h3>
                    <p data-translate="featureSpeedDesc">Unduh dalam hitungan detik</p>
                </div>
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-lock feature-icon"></i>
                    <h3 data-translate="featureSecurity">Aman</h3>
                    <p data-translate="featureSecurityDesc">Unduhan yang aman dan terpercaya</p>
                </div>
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-globe feature-icon"></i>
                    <h3 data-translate="featurePlatform">Multi Platform</h3>
                    <p data-translate="featurePlatformDesc">Unduh dari berbagai platform</p>
                </div>
                <div class="feature-card animate-on-scroll">
                    <i class="fas fa-mobile-alt feature-icon"></i>
                    <h3 data-translate="featureMobile">Mobile Friendly</h3>
                    <p data-translate="featureMobileDesc">Bekerja dengan baik di perangkat mobile</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll" data-translate="aboutTitle">Tentang Kami</h2>
            <div class="about-content animate-on-scroll">
                <p data-translate="aboutDesc1">MediaFetch adalah platform unduhan media yang mudah digunakan dan gratis. Kami menyediakan layanan untuk mengunduh video, musik, dan gambar dari berbagai platform media sosial populer.</p>
                <p data-translate="aboutDesc2">Misi kami adalah membuat proses unduhan konten digital menjadi sesederhana dan seefisien mungkin bagi pengguna kami.</p>
            </div>
        </div>
    </section>

    <section id="api" class="api-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll" data-translate="apiTitle">API Pihak Ketiga</h2>
            <div class="api-content animate-on-scroll">
                <p data-translate="apiDesc">MediaFetch menggunakan API pihak ketiga terpercaya untuk memberikan layanan unduhan terbaik. Beberapa API yang kami gunakan meliputi:</p>
                <ul class="api-list">
                    <li data-translate="apiYoutube">YouTube Data API</li>
                    <li data-translate="apiInstagram">Instagram Basic Display API</li>
                    <li data-translate="apiTwitter">Twitter API v2</li>
                    <li data-translate="apiSpotify">Spotify Web API</li>
                    <li data-translate="apiTiktok">TikTok API</li>
                </ul>
                <p data-translate="apiConclusion">Penggunaan API ini memungkinkan kami untuk menyediakan unduhan yang cepat, aman, dan berkualitas tinggi dari berbagai platform populer.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll" data-translate="contactTitle">Kontak Kami</h2>
            <div class="contact-content animate-on-scroll">
                <p data-translate="contactDesc">Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk menghubungi kami:</p>
                <ul class="contact-info">
                    <li class="email" data-translate="contactEmail">info@mediafetch.com</li>
                    <li class="phone" data-translate="contactPhone">+62 123 4567 890</li>
                    <li class="address" data-translate="contactAddress">Jl. Contoh No. 123, Jakarta, Indonesia</li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p data-translate="footerText">  2024 MediaFetch. Hak cipta dilindungi undang-undang.</p>
    </footer>

    <!-- Untuk bagian JavaScript, simpan dalam file terpisah dan panggil di bawah ini -->
    <script src="js/translations.js"></script>
    <script>
        // Tempatkan kode JavaScript Anda di sini
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
    const navbarLinks = document.getElementById('navbarLinks');
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const pasteBtn = document.getElementById('pasteBtn');
    const urlInput = document.getElementById('urlInput');
    const downloadBtn = document.getElementById('downloadBtn');
    const languageSelect = document.getElementById('languageSelect');

    // Menu Toggle
    menuToggle.addEventListener('click', () => {
        navbarLinks.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });

    // Dark Mode Toggle
    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const isDarkMode = body.classList.contains('dark-mode');
        darkModeToggle.innerHTML = isDarkMode ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
    });

    // Paste Button
    pasteBtn.addEventListener('click', () => {
        navigator.clipboard.readText().then(text => {
            urlInput.value = text;
        }).catch(err => {
            console.error('Failed to read clipboard contents: ', err);
        });
    });

    // Download Button
    downloadBtn.addEventListener('click', fetchData);

    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });

                if (navbarLinks.classList.contains('active')) {
                    navbarLinks.classList.remove('active');
                    menuToggle.classList.remove('active');
                }
            }
        });
    });

    // Language Change
    let currentLang = 'id';

    function changeLanguage(lang) {
        currentLang = lang;
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[lang] && translations[lang][key]) {
                if (element.tagName === 'INPUT') {
                    element.placeholder = translations[lang][key];
                } else {
                    element.textContent = translations[lang][key];
                }
            }
        });
        document.documentElement.lang = lang;
    }

    languageSelect.addEventListener('change', function() {
        changeLanguage(this.value);
    });

    // Scroll Animations
    function handleScrollAnimations() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            if (rect.top <= windowHeight * 0.8) {
                el.classList.add('show');
            } else {
                el.classList.remove('show');
            }
        });
    }

    window.addEventListener('scroll', handleScrollAnimations);
    handleScrollAnimations(); // Initial check

    // Initialize default language
    changeLanguage('id');
});
        // Ambil Aja Apinya

        // Fungsi untuk mengambil data dari API
        async function fetchData() {
            const urlInput = document.getElementById('urlInput').value.trim();
            const content = document.getElementById('content');
            const spinner = document.getElementById('spinner');

            content.innerHTML = '';
            spinner.style.display = 'block';

            if (!urlInput) {
                content.innerHTML = '<p class="text-danger">Silakan masukkan URL yang valid.</p>';
                spinner.style.display = 'none';
                return;
            }

            let apiUrl;
            if (urlInput.includes('tiktok.com')) {
                apiUrl = `https://api.tiklydown.eu.org/api/download/v5?url=${encodeURIComponent(urlInput)}`;
            } else if (urlInput.includes('spotify.com')) {
                apiUrl = `https://itzpire.com/download/spotify?url=${encodeURIComponent(urlInput)}`;
            } else if (urlInput.includes('instagram.com')) {
                if (urlInput.includes('/reel/') || urlInput.includes('/p/')) {
                    apiUrl = `https://api.nyxs.pw/dl/ig?url=${encodeURIComponent(urlInput)}`;
                } else {
                    content.innerHTML = '<p class="text-red-500 font-semibold">Invalid Instagram URL. Please enter a valid Instagram reel or post URL.</p>';
                    spinner.style.display = 'none';
                    return;
                }
            } else if (urlInput.includes('facebook.com')) {
                apiUrl = `https://apis.ryzendesu.vip/api/downloader/fbdl?url=${encodeURIComponent(urlInput)}`;
            } else if (urlInput.includes('twitter.com') || urlInput.includes('x.com')) {
                apiUrl = `https://itzpire.com/download/twitter?url=${encodeURIComponent(urlInput)}`;
            } else {
                content.innerHTML = '<p class="text-red-500 font-semibold">Invalid URL. Please enter a TikTok, Spotify, Instagram, Facebook, or Twitter URL.</p>';
                spinner.style.display = 'none';
                return;
            }

            try {
                const response = await fetch(apiUrl);
                const data = await response.json();

                // Render content based on the platform
                if (urlInput.includes('tiktok.com')) {
                    renderTikTokContent(data);
                } else if (urlInput.includes('spotify.com')) {
                    renderSpotifyContent(data);
                } else if (urlInput.includes('instagram.com')) {
                    renderInstagramContent(data, urlInput);
                } else if (urlInput.includes('facebook.com')) {
                    renderFacebookContent(data, urlInput);
                } else if (urlInput.includes('twitter.com') || urlInput.includes('x.com')) {
                    renderTwitterContent(data);
                }
            } catch (error) {
                console.error(error);
                content.innerHTML = '<p class="text-red-500 font-semibold">An error occurred while fetching data.</p>';
            } finally {
                spinner.style.display = 'none';
            }
        }

        // Fungsi render untuk platform
        function renderTikTokContent(data) {
    const content = document.getElementById('content');
    if (data.result.id) {
        const { title, play, hdplay, music, size, hd_size, author, images, digg_count, comment_count, share_count, cover } = data.result;

        // Mengecek apakah hasil adalah gambar atau bukan
        const isImageContent = images && images.length > 0;

        content.innerHTML = `
            <div class="card mb-4">
                <div class="card-custom">
                    <img src="${author.avatar}" alt="Author Avatar" class="small-avatar rounded-circle mr-3 responsive-img">
                    <span class="font-bold">${author.nickname} (@${author.unique_id})</span>
                </div>
                <div class="mb-4">
                    <p class="font-semibold text-lg">${title}</p>
                </div>
                <div id="media-content" class="mb-4">
                    <img src="${cover}" alt="Video Thumbnail" class="responsive-img rounded-lg mb-2">
                </div>
                <div class="flex justify-between text-center mb-4">
                    <div>
                        <span>👍</span><br>
                        ${digg_count} Likes
                    </div>
                    <div>
                        <span>💬</span><br>
                        ${comment_count} Comments
                    </div>
                    <div>
                        <span>🔗</span><br>
                        ${share_count} Shares
                    </div>
                </div>
                ${!isImageContent ? `
                <div class="text-center mb-4">
                    ${hdplay ? `<a href="${hdplay}" download class="btn btn-primary-custom">Video HD</a> | Size: ${hd_size.format || 'N/A'} ` : ''}
                    ${play ? `<a href="${play}" download class="btn btn-primary-custom">Video SD</a> | Size: ${size.format || 'N/A'} ` : ''}
                    ${music ? `<a href="${music}" download class="btn btn-primary-custom">Download Music</a>` : ''}
                </div>
                ` : ''}
            </div>
        `;

        const mediaContent = document.getElementById('media-content');
        if (isImageContent) {
            images.forEach((image, index) => {
                const imageElement = document.createElement('div');
                imageElement.className = 'mb-4';
                imageElement.innerHTML = `
                    <img src="${image}" alt="TikTok Image ${index + 1}" class="responsive-img rounded-lg mb-2">
                    <a href="${image}" download class="btn btn-primary-custom">Download Image ${index + 1}</a>
                `;
                mediaContent.appendChild(imageElement);
            });
            // Tambahkan tombol unduh musik di bagian konten gambar
            if (music) {
                const musicElement = document.createElement('div');
                musicElement.className = 'text-center mt-4';
                musicElement.innerHTML = `
                    <a href="${music}" download class="btn btn-primary-custom">Download Music</a>
                `;
                mediaContent.appendChild(musicElement);
            }
        }
    } else {
        content.innerHTML = '<p class="text-red-500 font-semibold">Failed to fetch TikTok data.</p>';
    }
}

        function renderSpotifyContent(data) {
            const content = document.getElementById('content');
            if (data.status === 'success') {
                const { title, artist, image, download } = data.data;
                content.innerHTML = `
                    <div class="card mb-4">
                        <img src="${image}" alt="Song Image" class="responsive-img rounded-lg mb-2">
                        <p class="font-semibold text-lg">${title}</p>
                        <p class="text-sm text-gray-500">Artist: ${artist}</p>
                        <div class="text-center">
                            <a href="${download}" download class="btn btn-primary-custom">Download Music</a>
                        </div>
                    </div>
                `;
            } else {
                content.innerHTML = '<p class="text-red-500 font-semibold">Failed to fetch Spotify data.</p>';
            }
        }

        function renderInstagramContent(data, urlInput) {
            const content = document.getElementById('content');
            if (data.result) {
                const { result } = data;
                if (urlInput.includes('/reel/')) {
                    if (result.length > 0) {
                        const reel = result[0];
                        content.innerHTML = `
                            <video controls src="${reel.url}" class="responsive-video rounded-lg"></video>
                            <div class="text-center mt-4">
                                <a href="${reel.url}" download class="btn btn-primary-custom">Download Reel</a>
                            </div>
                        `;
                    } else {
                        content.innerHTML = '<p class="text-red-500">No reels found.</p>';
                    }
                } else if (urlInput.includes('/p/')) {
                    const post = result[0];
                    content.innerHTML = `
                        <img src="${post.thumbnail}" alt="Instagram Post" class="responsive-img rounded-lg mb-2">
                        <div class="text-center mt-4">
                            <a href="${post.url}" download class="btn btn-primary-custom">Download Post</a>
                        </div>
                    `;
                }
            } else {
                content.innerHTML = '<p class="text-red-500 font-semibold">Failed to fetch Instagram data.</p>';
            }
        }

        function renderFacebookContent(data, urlInput) {
            const content = document.getElementById('content');
            if (data.url) {
                content.innerHTML = `
                    <video controls src="${data.url}" class="responsive-video rounded-lg"></video>
                    <div class="text-center mt-4">
                        <a href="${data.url}" download class="btn btn-primary-custom">Download Video</a>
                    </div>
                `;
            } else {
                content.innerHTML = '<p class="text-red-500 font-semibold">Failed to fetch Facebook data.</p>';
            }
        }

        function renderTwitterContent(data) {
            const content = document.getElementById('content');
            if (data.url) {
                content.innerHTML = `
                    <video controls src="${data.url}" class="responsive-video rounded-lg"></video>
                    <div class="text-center mt-4">
                        <a href="${data.url}" download class="btn btn-primary-custom">Download Video</a>
                    </div>
                `;
            } else {
                content.innerHTML = '<p class="text-red-500 font-semibold">Failed to fetch Twitter data.</p>';
            }
        }
        // Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get the logo element by its ID
    var logo = document.getElementById('logo');

    // Add a click event listener to the logo
    logo.addEventListener('click', function() {
        // Reload the page when the logo is clicked
        window.location.reload();
    });
});

    </script>
</body>
</html>
