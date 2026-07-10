
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vishal | Senior Laravel Developer</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/home/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders:opsz,wght@10..72,100..900&amp;family=Outfit:wght@100..900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/%40tabler/icons-webfont%40latest/dist/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media-query.css') }}">
</head>

<body>
    <div id="preloader">
        <p class="loader-logo">
            <span>V</span>
            <span>I</span>
            <span>S</span>
            <span>H</span>
            <span>A</span>
            <span>L</span>
        </p>
    </div>
    <!-- ======================== Header ========================== -->
    <header id="nav">
        <a class='nav-logo' href="{{ url()->current() }}">VISHAL</a>
        <button class="menu-toggle">
            <i class="ti ti-menu-2"></i>
        </button>
    </header>
    <div class="side-menu">
        <a href="#hero" class="nav-link"><i class="ti ti-home"></i>Home</a>
        <a href="#about" class="nav-link"><i class="ti ti-user"></i>About</a>
        <a href="#skills" class="nav-link"><i class="ti ti-code"></i>Skills</a>
        <a href="#resume" class="nav-link"><i class="ti ti-file-text"></i>Resume</a>
        <a href="#contact" class="nav-link"><i class="ti ti-mail"></i>Contact</a>
    </div>
    <!-- ======================== HERO Section ========================== -->
    <section id="hero">
        <canvas id="hero-canvas"></canvas>
        <div class="hero-bg-word">VISHAL</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-inner">
                        <p class="hero-tag">👋 HELLO, I'M</p>
                        <h1 class="hero-name">
                            <span class="l1" id="hl1">VISHAL</span>
                            <span class="l2" id="hl2">SONI</span>
                        </h1>
                        <div class="hero-bottom">
                            <p class="hero-tagline">
                                Experienced Software Developer specializing in PHP, Laravel, REST APIs, and scalable web applications, focused on building reliable, high-performance solutions.
                            </p>
                            <div class="hero-cta-row">
                                <a class="btn-quote" href="#resume">
                                    <i class="ti ti-briefcase"></i> My Resume
                                </a>
                                <a class="btn-quote btn-trasp" href="#contact">
                                    <i class="ti ti-download"></i> Hire Me
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-person-main">
                        <!-- BACK GLOW -->
                        <div class="hero-person-glow"></div>
                        <div class="tech-badge html">
                            <img src="{{ asset('assets/images/home/html.png') }}" alt="html">
                            HTML
                        </div>
                        <div class="tech-badge css">
                            <img src="{{ asset('assets/images/home/codeigniter.webp') }}" alt="codeigniter">
                            CODEIGNITER
                        </div>
                        <div class="tech-badge js">
                            <img src="{{ asset('assets/images/home/javascript.png') }}" alt="javascript">
                            JavaScript
                        </div>
                        <div class="tech-badge react">
                            <img src="{{ asset('assets/images/home/react.png') }}" alt="react">
                            React
                        </div>
                        <div class="tech-badge figma">
                            <img src="{{ asset('assets/images/home/laravel.png') }}" alt="laravel">
                            Laravel
                        </div>
                        <!-- PERSON IMAGE -->
                        <img class="heroImgPerson" src="assets/images/home/heroImg.png" alt="heroImg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== ABOUT Section ========================== -->
    <section id="about" class="section-pad  page-top-padding">
        <div class="container">
            <p class="sec-num">01</p>
            <div class="row about-row">
                <div class="col-xl-6 ">
                    <div class="portrait-frame reveal">
                        <div class="portrait-placeholder">
                            <img src="assets/images/home/profile-img.png" alt="profile-img">
                        </div>
                        <div class="portrait-overlay">
                            <a href="#" class="portrait-badge">// ryan.nova@dev.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-info reveal">
                        <p class="eyebrow abutwho rotate-text">Who I Am</p>
                        <h2 class="big-title rotate-text"><em>About</em> Me</h2>
                        <p class="about-bio">
                            Hello, I'm <strong>Vishal Soni</strong>, a <strong>Software Developer with 5+ years of experience</strong> in building scalable and user-friendly web applications. I specialize in <strong>PHP</strong> and <strong>Laravel</strong>, with hands-on experience developing CRM, HRMS, SaaS platforms, REST APIs, and custom business solutions. I'm passionate about writing clean, maintainable code and continuously expanding my skills in <strong>Node.js</strong>, <strong>React.js</strong>, and <strong>AI technologies</strong> to build modern, high-performance applications.
                        </p>

                        <div class="row about-mel-datils">
                            <div class="col-md-6">
                                <ul>
                                    <li><i class="ti ti-brand-upwork"></i> Available for Freelance</li>
                                    <li><i class="ti ti-mail"></i> vsoni9297@gmail.com</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><i class="ti ti-language"></i> English, Hindi</li>
                                    <li class="mb-0"><i class="ti ti-map-pin"></i> Based in Beniganj, Hardoi, Uttar Pradesh, India</li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-right">
                            <div class="about-card">
                                <h2 class="counter" data-count="5">0</h2>
                                <h3>Experience</h3>
                            </div>
                            <div class="about-card">
                                <h2 class="counter" data-count="4">0</h2>
                                <h3>Certificates</h3>
                            </div>
                            <div class="about-card">
                                <h2 class="counter" data-count="45">0</h2>
                                <h3>Projects</h3>
                            </div>
                        </div>
                        <div class="hero-cta-row about-buton-main">
                            <a class="btn-quote" href="https://wa.me/8052633491" target="_blank">
                                <i class="ti ti-brand-whatsapp"></i> Let's Talk
                            </a>
                            <a class="btn-quote btn-trasp" href="assets/pdf/Vishal-Soni-Resume.pdf" target="_blank">
                                <i class="ti ti-download"></i> Download CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== SKILLS Section ========================== -->
    <section id="skills" class="section-pad">
        <div class="container">
            <p class="sec-num">02</p>
            <p class="eyebrow text-center rotate-text">Expertise</p>
            <h2 class="big-title text-center rotate-text">My <em>Skills</em></h2>
            <p class="lead-text text-center rotate-text">Technologies and tools I've mastered over 5+ years of crafting
                for the web.</p>
            <div class="portfolio-skill-wrapper" id="portfolioSkills">
                <!--  Frontend  -->
                <div class="frontend-box">
                    <h2 class="skill-box-title">frontend</h2>
                    <div class="skill-item-box" data-progress="99">
                        <h3 class="skill-name">Html/css</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">99</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                    <div class="skill-item-box" data-progress="90">
                        <h3 class="skill-name">Bootstrap</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">90</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                    <div class="skill-item-box" data-progress="80">
                        <h3 class="skill-name">React</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">80</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                    <div class="skill-item-box" data-progress="70">
                        <h3 class="skill-name">Vue JS</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">70</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                </div>
                <!--  Backend  -->
                <div class="backend-box">
                    <h2 class="skill-box-title">Backend</h2>
                    <div class="skill-item-box" data-progress="90">
                        <h3 class="skill-name">Laravel</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">90</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                    <div class="skill-item-box" data-progress="80">
                        <h3 class="skill-name">CodeIgniter</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">80</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                    <div class="skill-item-box" data-progress="70">
                        <h3 class="skill-name">Node.js</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">70</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                    <div class="skill-item-box" data-progress="95">
                        <h3 class="skill-name">Rest API</h3>
                        <div class="skill-percent">
                            <span class="skill-counter">95</span>%
                        </div>
                        <div class="custom-progress-line">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== RESUME Section ========================== -->
    <section id="resume" class="section-pad">
        <div class="container">
            <p class="sec-num">03</p>
            <p class="eyebrow text-center rotate-text">My Journey</p>
            <h2 class="big-title text-center rotate-text">Resume & <em>History</em></h2>
            <p class="lead-text text-center rotate-text">From curious student to seasoned professional.</p>
            <div class="row rv-tabs">
                <!-- EXPERIENCE PANEL -->
                <div class="col-lg-6">
                    <h2 class="rv-section-label rotate-text">experience</h2>
                    <div class=" rv-tl">
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2024 — PRESENT
                                <span class="rv-current">
                                    <span class="rv-current-dot"></span>Current</span>
                            </div>
                            <div class="rv-role">Senior Laravel Developer</div>
                            <div class="rv-company">
                                <i class="ti ti-map-pin"></i>KPYXAL Solution LLP — Gandhinagar, Gujrat
                            </div>
                            <p class="rv-desc">Working in a small but growing Indian IT services firm focused on building
                                digital products and ecommerce platforms for businesses looking to
                                improve their online presence and technology infrastructure.</p>
                            <div class="rv-pills">
                                <span class="rv-pill">React</span>
                                <span class="rv-pill">Laravel</span>
                                <span class="rv-pill">CodeIgniter</span>
                                <span class="rv-pill">PHP</span>
                                <span class="rv-pill">Client Communication</span>
                                <span class="rv-pill">Team Handling</span>
                            </div>
                        </div>
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2022 — 2024</div>
                            <div class="rv-role">Php Developer</div>
                            <div class="rv-company"><i class="ti ti-map-pin"></i>XipeTech India — Lucknow, Uttar Pradesh</div>
                            <p class="rv-desc">Developed software solutions, web designing, mobile apps, and managed
                                IT services across multiple customers, networks, and sites.                                
                            </p>
                            <div class="rv-pills">
                                <span class="rv-pill">React.js</span>
                                <span class="rv-pill">Laravel</span>
                                <span class="rv-pill">WordPress</span>
                                <span class="rv-pill">Website Hosting</span>
                                <span class="rv-pill">Client Communication</span>
                                <span class="rv-pill">Team Handling</span>
                            </div>
                        </div>
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2020 — 2021</div>
                            <div class="rv-role">Full Stack Developer</div>
                            <div class="rv-company"><i class="ti ti-map-pin"></i>V-Touch Solutions Pvt. Ltd. — Lucknow, Uttar Pradesh</div>
                            <p class="rv-desc">Worked in a Digital Marketing company offering web development, web
                                designing, and digital marketing services.
                                </p>
                            <div class="rv-pills">
                                <span class="rv-pill">CodeIgniter</span>
                                <span class="rv-pill">HTML/CSS</span>
                                <span class="rv-pill">Website Hosting</span>
                            </div>
                        </div>
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2020 — 2020</div>
                            <div class="rv-role">Web Designer</div>
                            <div class="rv-company"><i class="ti ti-map-pin"></i>Coding Brains Pvt. Ltd. — Lucknow, Uttar Pradesh</div>
                            <p class="rv-desc">Responsible for software development, web designing, mobile apps
                                development and managed IT services across multiple customers,
                                networks, and sites.
                                </p>
                            <div class="rv-pills">
                                <span class="rv-pill">CodeIgniter</span>
                                <span class="rv-pill">HTML/CSS</span>
                                <span class="rv-pill">Website Hosting</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- EDUCATION PANEL -->
                <div class="col-lg-6">
                    <h2 class="rv-section-label rotate-text">Education</h2>
                    <div class="rv-tl">
                
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2026 — Pursuing <span class="rv-date-badge">BACHELOR DEGREE In Technology</span></div>
                            <div class="rv-role">Bachelor Degree in Computer Science</div>
                            <div class="rv-company"><i class="ti ti-school"></i> Himalayan Institute Of Technology, Lucknow</div>
                            <p class="rv-desc">
                                Pursuing a Bachelor's degree in Computer Science with a focus on programming, web development, and software engineering.
                            </p>
                            <div class="rv-pills">
                                <span class="rv-pill">Programming</span>
                                <span class="rv-pill">Web Development</span>
                                <span class="rv-pill">Database</span>
                                <span class="rv-pill">Software Engineering</span>
                            </div>
                        </div>
                
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2016 — 2019 <span class="rv-date-badge">Diploma in Computer Science & Engineering</span></div>
                            <div class="rv-role">Diploma in Computer Science & Engineering</div>
                            <div class="rv-company"><i class="ti ti-school"></i> Government Polytechnic, Shahjahanpur</div>
                            <p class="rv-desc">
                                Built a strong foundation in programming, networking, databases, and software development through academic and practical learning.
                            </p>
                            <div class="rv-pills">
                                <span class="rv-pill">C Programming</span>
                                <span class="rv-pill">Database</span>
                                <span class="rv-pill">Networking</span>
                                <span class="rv-pill">Operating Systems</span>
                            </div>
                        </div>
                
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2015 — 2016 <span class="rv-date-badge">Intermediate</span></div>
                            <div class="rv-role">Intermediate</div>
                            <div class="rv-company"><i class="ti ti-school"></i> Gandhi Inter College, Beniganj, Hardoi</div>
                            <p class="rv-desc">
                                Completed Intermediate with a focus on Mathematics and Science, strengthening analytical and problem-solving skills.
                            </p>
                            <div class="rv-pills">
                                <span class="rv-pill">Mathematics</span>
                                <span class="rv-pill">Physics</span>
                                <span class="rv-pill">Chemistry</span>
                            </div>
                        </div>
                
                        <div class="rv-item">
                            <div class="rv-dot"></div>
                            <div class="rv-date">2013 — 2014 <span class="rv-date-badge">High School</span></div>
                            <div class="rv-role">High School</div>
                            <div class="rv-company"><i class="ti ti-school"></i> Gandhi Inter College, Beniganj, Hardoi</div>
                            <p class="rv-desc">
                                Completed High School with a strong academic foundation in Mathematics, Science, and English.
                            </p>
                            <div class="rv-pills">
                                <span class="rv-pill">Mathematics</span>
                                <span class="rv-pill">Science</span>
                                <span class="rv-pill">English</span>
                                <span class="rv-pill">Fundamentals</span>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============ CONTACT ============ -->
    <section class="contact-section section-pad" id="contact">
        <div class="container">
            <div class="sec-num">04</div>
            <p class="eyebrow text-center rotate-text">
                CONTACT ME
            </p>
            <h2 class="big-title text-center buidlmain rotate-text">
                Let,s Build Something <em>Amazing</em>
            </h2>
            <p class="lead-text text-center rotate-text">
                Have a project in mind or want to collaborate? Let's create modern digital experiences together.
            </p>
            <div class="row align-items-stretch contact-row">
                <div class="col-lg-7">
                    <div class="contact-form-main">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-input">
                                        <span class="input-icon">
                                            <i class="ti ti-user"></i>
                                        </span>
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input">
                                        <span class="input-icon">
                                            <i class="ti ti-mail"></i>
                                        </span>
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input">
                                        <span class="input-icon">
                                            <i class="ti ti-phone"></i>
                                        </span>
                                        <input type="text" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input">
                                        <span class="input-icon">
                                            <i class="ti ti-briefcase"></i>
                                        </span>
                                        <input type="text" placeholder="Project Type">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-input">
                                        <textarea placeholder="Tell me about your project"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn-quote pricing-btn">
                                        <i class="ti ti-arrow-up-right"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-main">
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="ti ti-mail"></i>
                            </div>
                            <div>
                                <span>Email Address</span>
                                <a href="mailto:vsoni9297@gmail.com">
                                    vsoni9297@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="contact-info-card">
                            <div class="contact-icon">
                                <i class="ti ti-phone"></i>
                            </div>
                            <div>
                                <span>Phone Number</span>
                                <a href="tel:+918052633491">
                                    +91 80526 33491
                                </a>
                            </div>
                        </div>
                        <div class="contact-social">
                            <a href="https://www.linkedin.com/in/vishal-soni-57421319b/" target="_blank">
                                <img src="assets/images/svg/LinkedIn.svg" alt="linkedin">
                            </a>
                            <a href="https://wa.me/8052633491" target="_blank">
                                <img src="assets/images/svg/whatsapp.svg" alt="whatsapp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== FOOTER Section ========================== -->
    <footer class="onepage-footer">
        <div class="footer-marquee">
            <h2>
                Building Modern Web Solutions —
                Turning Ideas Into Reality —
            </h2>
        </div>
        <div class="container">
            <div class="footer-flex">
                <div class="footer-left">
                    <a href="#" class="footer-logo">
                        Vishal
                    </a>
                    <p>
                        Experienced Software Developer specializing in PHP, Laravel, REST APIs, and scalable web applications, focused on building reliable, high-performance solutions.
                    </p>
                </div>
                <!-- CENTER -->
                <div class="footer-center">
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#resume">Resume</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-right">
                    <a href="mailto:vsoni9297@gmail.com" class="footer-mail">
                        vsoni9297@gmail.com
                    </a>
                    <div class="footer-social">
                        <a href="https://www.linkedin.com/in/vishal-soni-57421319b/" target="_blank">
                            <img src="assets/images/svg/LinkedIn.svg" alt="linkedin">
                        </a>
                        <a href="https://wa.me/8052633491" target="_blank">
                            <img src="assets/images/svg/whatsapp.svg" alt="whatsapp">
                        </a>
                    </div>
                </div>
            </div>
            <!-- BOTTOM -->
            <div class="footer-bottom">
                <p>© {{ date('Y') }} <a href="#">Vishal</a> — All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <a href="#hero" class="scroll-top">
        <span class="scroll-progress"></span>
        <i class="ti ti-arrow-up"></i>
    </a>
    <script src="{{ asset('assets/javascript/jquery.js') }}"></script>
    <script src="{{ asset('assets/javascript/gsap.js') }}"></script>
    <script src="{{ asset('assets/javascript/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/javascript/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/split-text.js') }}"></script>
    <script src="{{ asset('assets/javascript/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/script.js') }}"></script>
</body>
</html>