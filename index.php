<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/tablet.css" media="(max-width: 1024px) and (min-width: 769px)">
<link rel="stylesheet" href="css/mobile.css" media="(max-width: 768px)"> <!-- Must be last! -->

<!-- ================= 1. HOME SECTION ================= -->

<!-- FULLSCREEN BACKGROUND VIDEO -->
<div class="video-background-wrapper">
    <video autoplay muted loop playsinline id="bg-video">
        <source src="images/background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <!-- Dark tint overlay to keep text and cards easy to read -->
    <div class="video-overlay"></div>
</div>

<!-- ================= 1. HOME SECTION ================= -->
<section id="home" class="hero-banner-section">
    <div class="hero-container">
        
        <!-- Left Content Area -->
        <div class="hero-content">
            <div class="hero-brand-logo">
                <span class="brand-text">Hi, I'm</span>
            </div>
            <h1>
                <span class="hero-title-text">Strophie Mae Dinulan</span> <br>
                <span class="script-subtitle">General Virtual Assistant</span>
            </h1>
            
            <p>I help business owners run their daily operations and build their online presence. Whether you need help managing your daily tasks, creating logos, designing graphics, or building a website, I’ve got you covered. I handle the work behind the scenes so you can focus on growing your business.</p>
            
            <div class="hero-action">
                <a href="#contact" class="btn-get-started">Let's Connect</a>
            </div>
        </div>
        
        <!-- Right Image Area with Glow Light Effect -->
        <div class="hero-image-wrapper">
            <div class="hero-glow-effect">
                <img src="images/profile3.png" alt="Strophie Mae Dinulan" onerror="this.src='https://via.placeholder.com/500x600/121824/3b82f6?text=Profile+Image'">
            </div>
        </div>

    </div>

    <!-- Thicker Bottom Orange Accent Shape -->
    <div class="hero-bottom-shape"></div>
</section>

<!-- ================= 2. ABOUT & EXPERIENCE SECTION ================= -->
<section id="about" class="about-container">
    <!-- Section Title -->
    <div class="section-title">
        <hr class="title-line">
        <h2>ABOUT <span>ME</span></h2>
        <hr class="title-line">
    </div>
    <p class="section-subtitle">Hi! I’m Strophie, a Virtual Assistant and Digital Specialist.</p>

    <!-- Top Profile Section -->
    <div class="about-main">
        <div class="polaroid-wrapper">
            <span class="handwriting-arrow">That's me &rarr;</span>
            <div class="polaroid-card">
                <div class="polaroid-img-box">
                    <img src="images/strophie.jpg" alt="Strophie Dinulan">
                </div>
                <div class="polaroid-caption"></div>
            </div>
        </div>

        <div class="about-text">
            <p>I help business owners, entrepreneurs, and busy professionals <strong>save time, get organized, and build a strong online presence.</strong> Whether you need help with daily office work or custom digital design, I handle the work behind the scenes so you can focus on growing your business.</p>
            
            <p>Instead of hiring multiple people, <strong>you get a single dependable partner who can manage both administrative tasks and creative tech projects.</strong> On the administrative side, I keep your daily operations running smoothly by taking care of inbox management, calendar scheduling, data organization, and routine tasks. On the digital side, I design unique logos and brand identities, create eye-catching graphics for social media and marketing, and build clean, easy-to-use websites and web applications tailored to your business needs.</p>
            
            <blockquote class="personal-quote">
                Working with me means clear communication, quick updates, and high attention to detail across every project. From organizing your backend office operations to designing your front-end digital footprint, I deliver reliable all-in-one support to make your work life easier. Let’s connect today and discuss how we can streamline your workload and elevate your business!
            </blockquote>

            <div class="about-actions">
                <a href="#contact" class="btn-primary"><i class="fas fa-paper-plane"></i> Get In Touch</a>
                <a href="https://drive.google.com/file/d/1oTSIq7Vr8AI9M0g1OS1V7XT_eniqCjdj/view?usp=sharing" class="btn-outline" download><i class="fas fa-file-download"></i> Download Resume</a>
            </div>
        </div>
    </div>

    <hr class="divider">

  <!-- ================= ABOUT SECTION ================= -->
    <div class="container">
        <!-- Things I Love Section -->
        <div class="about-category">
            <h3 class="category-heading">Things I Love</h3>
             <p class="category-subtext">Behind every successful project is a real passion for the work. Here are a things that keep me motivated and inspired every day.</p>
            <div class="love-card-wrapper">
                <div class="info-card intro-card">
                    <p>I love the balance of creative design and organized problem-solving. Whether I’m coding a clean website, sketching out a fresh logo, building a thriving online community, or streamlining a messy daily inbox, I genuinely enjoy making things run smoothly and look amazing. For me, it’s all about helping businesses grow, connecting with audiences, and turning big ideas into digital reality.</p>
                </div>
            </div>
        </div>

        
        <!-- What Can I Do Section -->
        <div class="about-category">
            <h3 class="category-heading">What Can I Do</h3>
            <p class="category-subtext">I offer a wide range of administrative, digital marketing, and creative services tailored to your business needs.</p>
            
            <div class="cards-grid">
                
                <!-- Card 1 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/digital-assistant.png" alt="Virtual Assistant Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=VA'">
                    </div>
                    <h4>Software as a Service VA</h4>
                    <p>Handling your day-to-day operations, organizing schedules, managing files, and managing specialized niche processes.</p>
                </div>

                <!-- Card 2 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/blogger.png" alt="Admin Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Admin'">
                    </div>
                    <h4>Administrative VA with SMM Skills</h4>
                    <p>Managing inboxes, data entry, and routine administrative duties while keeping your social media channels active and organized.</p>
                </div>

                <!-- Card 3 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/social-media.png" alt="SMM Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=SMM'">
                    </div>
                    <h4>Social Media Manager & Remote SMM Support</h4>
                    <p>Planning content calendars, scheduling posts, tracking analytics, and maintaining a strong social presence.</p>
                </div>

                <!-- Card 4 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/content-strategy.png" alt="Content Creator Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Content'">
                    </div>
                    <h4>Content Creator</h4>
                    <p>Designing eye-catching social media graphics, writing engaging captions, and crafting promotional materials.</p>
                </div>

                <!-- Card 5 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/creative.png" alt="Marketing Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Mktg'">
                    </div>
                    <h4>Digital Marketing VA & Marketing Assistant</h4>
                    <p>Assisting with campaign launches, email marketing setup, market research, and overall brand strategies.</p>
                </div>

                <!-- Card 6 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/team.png" alt="Community Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Comm'">
                    </div>
                    <h4>Community Manager</h4>
                    <p>Engaging with your target audience, replying to comments and direct messages, and building a loyal online community.</p>
                </div>

                <!-- Card 7 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/search.png" alt="Lead Gen Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Lead'">
                    </div>
                    <h4>Lead Generation VA</h4>
                    <p>Researching potential clients, gathering quality prospects, and supporting your sales outreach efforts.</p>
                </div>

                <!-- Card 8 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/app-development.png" alt="Developer Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Code'">
                    </div>
                    <h4>Website & Web App Developer</h4>
                    <p>Building and updating clean, responsive websites and web applications tailored to your business.</p>
                </div>

                <!-- Card 9 -->
                <div class="info-card">
                    <div class="card-icon-img">
                        <img src="images/services/design.png" alt="Design Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Art'">
                    </div>
                    <h4>Logo & Brand Designer</h4>
                    <p>Crafting unique logos, brand colors, and visual assets to help your business stand out.</p>
                </div>

            </div>
        </div>

    </div>
   

    <!-- Experience Section -->
    <div class="experience-left-section">
        <h3>EXPERIENCE</h3>

        <p class="category-subtext">Over the years, I’ve worked with business owners to manage daily operations. Combining administrative reliability with hands-on technical and design expertise, I bring a flexible, problem-solving mindset to every tasks.</p>
        <div class="experience-grid">

            <div class="timeline-item">
                <span class="timeline-date">March 2026 – June 2026</span>
                <h4>On-the-Job Training</h4>
                <p class="company">First Bukidnon Electric Cooperative (FIBECO) | Maramag, Bukidnon</p>
                <ul>
                    <li>Configured and troubleshoot network devices, including MikroTik and Cisco routers, switches, and wireless access points across sub-offices.</li>
                    <li>Implemented network cable rehabilitation and cable management across sub-offices.</li>
                    <li>Diagnosed and repaired hardware and software issues across departments.</li>
                    <li>Logged new user accounts and tracking data for operational records.</li>
                    <li>Developed the <strong>Document Communication Exchange Hub</strong>.</li>
                </ul>
            </div>

            <div class="timeline-item">
                <span class="timeline-date">June 2022 – March 2026</span>
                <h4>Liaison Officer</h4>
                <p class="company">BGE Consultancy and Technical Services | Iligan City</p>
                <ul>
                    <li>Organized and filed technical documentation and official permit applications.</li>
                    <li>Confirmed completed tasks with target offices by securing supervisor sign-offs for project deliverables.</li>
                </ul>
            </div>

            <div class="timeline-item">
                <span class="timeline-date">2020 – 2021</span>
                <h4>Administrative Support Staff</h4>
                <p class="company">GIP - PESO Office | LGU Kalilangan & Kalilangan Central School</p>
                <ul>
                    <li>Supported daily administrative operations and assisted public visitors.</li>
                </ul>
            </div>

        </div>
    </div>


    <!-- Education Section -->
    <div class="education-section">
        <h3>EDUCATION</h3>
         <p class="category-subtext">My academic foundation is backed by continuous training in the latest digital tools, web development, and visual design trends.</p>
        <div class="education-grid">
            <div class="timeline-item">
                <span class="timeline-date">2022 – 2026</span>
                <h4>Tertiary Level</h4>
                <p>Bachelor of Science in Information Technology</p>
                <p class="company">Central Mindanao University</p>
            </div>

            <div class="timeline-item">
                <span class="timeline-date">2013 – 2019</span>
                <h4>Secondary Level</h4>
                <p class="company">Kalilangan National High School</p>
            </div>

            <div class="timeline-item">
                <span class="timeline-date">2007 – 2013</span>
                <h4>Primary Level</h4>
                <p class="company">Kalilangan Central School</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= 3. SERVICES SECTION ================= -->
<section id="services" class="services-container">
    <div class="section-title">
        <hr class="title-line">
        <h2>MY <span>SERVICES</span></h2>
        <hr class="title-line">
    </div>
    <p class="section-subtitle">WHAT I CAN DO FOR YOU</p>

    <!-- Services Grid -->
    <div class="services-grid">

        <!-- Web Application Development -->
        <div class="service-card">
            <div class="service-icon-img">
                <img src="images/services/blogger.png" alt="Web Development Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Code'">
            </div>
            <h3>Administrative & Operations Support</h3>
            <p>I simplify daily business operations by managing schedules, email inboxes, data entry, and digital filing systems. I also perform targeted lead generation to research prospective clients and support your sales outreach.</p>
        </div>

        <!-- Network Configuration -->
        <div class="service-card">
            <div class="service-icon-img">
                <img src="images/services/social-media.png" alt="Network Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Net'">
            </div>
            <h3>Social Media & Community Management</h3>
            <p>I build and maintain your online presence by creating engaging graphics, writing captivating captions, and scheduling posts across platforms. I also interact directly with your audience through DMs and comments to build a loyal community.</p>
        </div>

        <!-- IT Support & Maintenance -->
        <div class="service-card">
            <div class="service-icon-img">
                <img src="images/services/creative.png" alt="IT Support Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=IT'">
            </div>
            <h3>Digital Marketing & Growth Support</h3>
            <p>I assist with campaign launches, email marketing setups, and market research to expand your business reach. I help execute targeted promotional strategies that turn casual viewers into paying clients.</p>
        </div>

        <!-- Database Management -->
        <div class="service-card">
            <div class="service-icon-img">
                <img src="images/services/database-file.png" alt="Database Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=DB'">
            </div>
            <h3>Database Management</h3>
            <p>I organize, structure, and maintain secure relational databases (MySQL/SQL) for web applications. I ensure your platform safely logs user activity, handles data entry efficiently, and keeps operational records organized.</p>
        </div>

        <!-- Cable Rehabilitation -->
        <div class="service-card">
            <div class="service-icon-img">
                <img src="images/services/app-development.png" alt="Cable Rehab Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=Cable'">
            </div>
            <h3>Web Development & Creative Design</h3>
            <p>I build custom, responsive websites and web applications tailored to your operational needs. Additionally, I design memorable logos, color schemes, and visual brand assets that give your business a polished, professional look.</p>
        </div>

        

    </div>
</section>
<!-- ================= 4. PROJECTS SECTION ================= -->
<section id="projects" class="projects-container">
    <!-- Section Title -->
    <div class="section-title">
        <hr class="title-line">
        <h2>MY <span>PROJECTS</span></h2>
        <hr class="title-line">
    </div>
    <p class="section-subtitle">EXPLORE MY WORK & TECHNICAL CREATIONS</p>

    <!-- Category Filter Tabs -->
    <div class="project-filter-tabs">
        <button class="filter-btn active" onclick="filterProjects('all')">All</button>
        <button class="filter-btn" onclick="filterProjects('websites')"><i class="fa-solid fa-network-wired"></i> Websites</button>
        <button class="filter-btn" onclick="filterProjects('web-apps')"><i class="fa-solid fa-laptop-code"></i> Web Applications</button>
        <button class="filter-btn" onclick="filterProjects('graphics')"><i class="fa-solid fa-object-group"></i> Branding & Graphic Design</button>
        <button class="filter-btn" onclick="filterProjects('digital')"><i class="fa-solid fa-palette"></i> Operations and Social Media Management</button>
        <button class="filter-btn" onclick="filterProjects('systems')"><i class="fa-solid fa-box-open"></i> System & Tools</button>
    </div>

   <!-- Projects Grid Gallery -->
<div class="projects-grid">
 
<!-- NOTE: IF ADDING A NEW GRID, MAKE SURE THAT THE filterProjects() and class=project-card are the same -->

    <!-- Project 1: Portfolio Website -->
    <div class="project-card websites" onclick="window.location.href='project-detail.php?id=portfolio'">
        <div class="project-img-wrapper">
            <img src="images/icons/websites.png" alt="Customized Websites">
            <div class="project-overlay">
                <span class="view-btn"><i class="fa-solid fa-eye"></i> View Details</span>
            </div>
        </div>
        <div class="project-info">
            <span class="project-cat">Websites</span>
            <h3>Customized Websites</h3>
            <p>Customizing websites for personal use/business operations and promotions</p>
        </div>
    </div>

    <!-- Project 2: Appointment Scheduling System -->
    <div class="project-card web-apps" onclick="window.location.href='project-detail.php?id=scheduling'">
        <div class="project-img-wrapper">
            <img src="images/icons/web-apps.png" alt="Web Applications">
            <div class="project-overlay">
                <span class="view-btn"><i class="fa-solid fa-eye"></i> View Details</span>
            </div>
        </div>
        <div class="project-info">
            <span class="project-cat">Web Application</span>
            <h3>Appointment Scheduling System</h3>
            <p>Developed and deployed appointment scheduling system</p>
        </div>
    </div>

    <!-- Project 3: Branding & Promotional Graphics -->
    <div class="project-card graphics" onclick="window.location.href='project-detail.php?id=graphics'">
        <div class="project-img-wrapper">
            <img src="images/icons/graphic-designer.png" alt="Graphic Design Assets">
            <div class="project-overlay">
                <span class="view-btn"><i class="fa-solid fa-eye"></i> View Details</span>
            </div>
        </div>
        <div class="project-info">
            <span class="project-cat">Branding & Graphic Design</span>
            <h3>Promotional Graphics</h3>
            <p>Custom visual layouts and graphic assets created for digital promotion.</p>
        </div>
    </div>

    <!-- Project 4: Social Media Contents/SMM -->
    <div class="project-card digital" onclick="window.location.href='project-detail.php?id=digital'">
        <div class="project-img-wrapper">
            <img src="images/services/social-media.png" alt="Digital Product Sample">
            <div class="project-overlay">
                <span class="view-btn"><i class="fa-solid fa-eye"></i> View Details</span>
            </div>
        </div>
        <div class="project-info">
            <span class="project-cat">Operations & Social Media Management</span>
            <h3>Social Media Contents/SMM</h3>
            <p>Simplified workflows, organized calendars, and managed campaigns.</p>
        </div>
    </div>

    <!-- Project 5: System & Tools -->
    <div class="project-card systems" onclick="window.location.href='project-detail.php?id=systems'">
        <div class="project-img-wrapper">
            <img src="images/icons/systems.png" alt="System & Tools">
            <div class="project-overlay">
                <span class="view-btn"><i class="fa-solid fa-eye"></i> View Details</span>
            </div>
        </div>
        <div class="project-info">
            <span class="project-cat">System & Tools</span>
            <h3>System & Tools I Know How to Use</h3>
            <p>Covers all desktop applications, web portals, and software.</p>
        </div>
    </div>

</div>



<!-- ================= 5. CERTIFICATIONS SECTION ================= -->
<section id="certifications" class="certifications-container">
    <!-- Section Title -->
    <div class="section-title">
        <hr class="title-line">
        <h2>MY <span>CERTIFICATIONS</span></h2>
        <hr class="title-line">
    </div>
    <p class="section-subtitle">ACCREDITATIONS & TECHNICAL CREDENTIALS</p>

    <!-- Certifications Grid -->
    <div class="certifications-grid">

        <!-- TESDA NC II Certification -->
        <div class="cert-card">
            
            <div class="cert-content">
                <span class="cert-badge">Verified Credential</span>
                <h3>NC II Computer System Servicing</h3>
                <p class="cert-issuer"><i class="fa-solid fa-building-columns"></i> TESDA (Technical Education and Skills Development Authority)</p>
                <p class="cert-description">
                    Demonstrates practical expertise in hardware troubleshooting, software installation, network cable rehabilitation, and router/switch configuration.
                </p>
                <!-- View Certificate Button -->
                <div class="cert-actions">
                    <a href="#cert-tesda" class="btn-cert"><i class="fa-solid fa-eye"></i> View Certificate</a>
                </div>
            </div>
        </div>

        <div class="cert-card">
            
            <div class="cert-content">
                <span class="cert-badge">Verified Credential</span>
                <h3>General Virtual Assistant</h3>
                <p class="cert-issuer"><i class="fa-solid fa-building-columns"></i> Department of Information and Communication Technology (DICT- SPARK)</p>
                <p class="cert-description">
                    Demonstrates practical expertise essential and useful for GVA.
                <!-- View Certificate Button -->
                <div class="cert-actions">
                    <a href="#" class="btn-cert"><i class="fa-solid fa-eye"></i> View Certificate</a>
                </div>
            </div>
        </div>

      

    </section>

    <!-- Certificate Image Modals (Popups) -->
    <div id="cert-tesda" class="cert-modal">
        <a href="#certifications" class="cert-modal-overlay"></a>
        <div class="cert-modal-content">
            <a href="#certifications" class="cert-modal-close">&times;</a>
            <img src="images/Tesdacert.png" alt="TESDA NC II Certificate">
        </div>
    </div>

    <div id="cert-fullstack" class="cert-modal">
        <a href="#certifications" class="cert-modal-overlay"></a>
        <div class="cert-modal-content">
            <a href="#certifications" class="cert-modal-close">&times;</a>
            <img src="images/certificates/fullstack-cert.jpg" alt="Full Stack Development Certificate">
        </div>
    </div>

</section>


<!-- ================= 6. CONTACT SECTION ================= -->
<section id="contact" class="contact-container">
    <div class="section-title">
        <hr class="title-line">
        <h2>CONTACT <span>ME</span></h2>
        <hr class="title-line">
    </div>
    <p class="section-subtitle">LET'S GET IN TOUCH AND WORK TOGETHER</p>

    <div class="contact-grid">
        <div class="contact-info">
            
            <!-- Mobile Number Card -->
            <a href="tel:09704008428" class="contact-card">
                <div class="contact-icon-img">
                    <img src="images/contactIcon/mobile.png" alt="Phone Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=📞'">
                </div>
                <div class="contact-details">
                    <h4>WhatsApp</h4>
                    <p>09704008428</p>
                </div>
            </a>

            <!-- Email Card -->
            <a href="mailto:dinulanstrophie@gmail.com" class="contact-card">
                <div class="contact-icon-img">
                    <img src="images/contactIcon/mail.png" alt="Email Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=✉️'">
                </div>
                <div class="contact-details">
                    <h4>Email</h4>
                    <p>strphdinulan@gmail.com</p>
                </div>
            </a>

            <a href="mailto:dinulanstrophie@gmail.com" class="contact-card">
                <div class="contact-icon-img">
                    <img src="images/contactIcon/linkedin.png" alt="Email Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=✉️'">
                </div>
                <div class="contact-details">
                    <h4>LinkedIn</h4>
                    <p>Strph Maie</p>
                </div>
            </a>

            <a href="mailto:dinulanstrophie@gmail.com" class="contact-card">
                <div class="contact-icon-img">
                    <img src="images/contactIcon/communication.png" alt="Email Icon" onerror="this.src='https://via.placeholder.com/50/f97316/ffffff?text=✉️'">
                </div>
                <div class="contact-details">
                    <h4>Facebook</h4>
                    <p>Strph Maie</p>
                </div>
            </a>

        </div>

        <div class="contact-form-wrapper">
            <h3>Send Me a Message</h3>
            <form action="send-message.php" method="POST" class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn-primary">
                    <i class="fa-solid fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>


    
</section>

<!-- Include Modals & Scripts -->
<script>
    // Keep your filtering and modal JavaScript functions here
</script>

<?php include 'includes/footer.php'; ?>