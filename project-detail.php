<?php 
// Include your dedicated project header
include 'includes/project-header.php'; 

// Get the project ID from the URL parameter (e.g., project-detail.php?id=scheduling)
$projectId = isset($_GET['id']) ? $_GET['id'] : 'portfolio';
?>

<!-- ================= FULLSCREEN BACKGROUND VIDEO ================= -->
<div class="video-background-wrapper">
    <video autoplay muted loop playsinline id="bg-video">
        <source src="images/background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <!-- Dark tint overlay -->
    <div class="video-overlay"></div>
</div>

<!-- Link to stylesheet -->
<link rel="stylesheet" href="css/style.css">

<!-- ================= PROJECT DETAIL SECTION ================= -->
<section class="project-detail-container">
    <div class="container" style="max-width: 1000px; margin: 0 auto; position: relative; z-index: 2;">
        
        <!-- Back Button -->
        <a href="index.php#projects" class="project-back-btn">
            <i class="fa-solid fa-arrow-left"></i> Back to Projects
        </a>

        <!-- ================= PROJECT 1: PORTFOLIO ================= -->
        <?php if ($projectId === 'portfolio'): ?>
            <h1 class="project-detail-title">Develop my Personal Portfolio</h1>
            <p class="project-detail-category"><i class="fa-solid fa-laptop-code"></i> Websites </p>
            
            <p class="project-detail-description">
                A custom dark-themed portfolio featuring polaroid-style image cards, background video support, and fully responsive grid layouts.
            </p>

            <!-- Technologies Used -->
            <div class="detail-tech-wrapper">
                <span class="detail-tech-badge">PHP</span>
                <span class="detail-tech-badge">React</span>
                <span class="detail-tech-badge">JavaScript</span>
                <span class="detail-tech-badge">HTML/CSS</span>
            </div>

            <!-- Screenshot Gallery -->
            <h3 class="project-gallery-heading">Project Gallery & Documentation</h3>
            <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1rem;">Click on any image below to view it larger.</p>
            <div class="detail-gallery-grid">
                <div class="detail-gallery-item">
                    <img src="images/project-details/myportfoliio/p1.png" alt="Portfolio Screenshot 1" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/myportfoliio/p2.png" alt="Portfolio Screenshot 2" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/myportfoliio/p3.png" alt="Portfolio Screenshot 3" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/myportfoliio/p4.png" alt="Portfolio Screenshot 4" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/myportfoliio/p5.png" alt="Portfolio Screenshot 5" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/myportfoliio/p6.png" alt="Portfolio Screenshot 6" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
            </div>

            <!-- Live Link Button -->
            <div class="project-action-wrapper">
                <a href="https://your-portfolio-link.com" target="_blank" class="btn-live-project">
                    <i class="fa-solid fa-external-link-alt"></i> Visit Live Project / Repository
                </a>
            </div>

        <!-- ================= PROJECT 2:Web Application ================= -->
        <?php elseif ($projectId === 'scheduling'): ?>
            <h1 class="project-detail-title">Appointment Scheduling System</h1>
            <p class="project-detail-category"><i class="fa-solid fa-laptop-code"></i>Web Application</p>
            
            <p class="project-detail-description">
                Developed and deployed an appointment scheduling system for Maramag-BPH to streamline patient bookings and queue management.
            </p>

            <!-- Technologies Used -->
            <div class="detail-tech-wrapper">
                <span class="detail-tech-badge">TypeScript</span>
                <span class="detail-tech-badge">React</span>
                <span class="detail-tech-badge">Tailwind CSS</span>
                <span class="detail-tech-badge">Cloudflare</span>
                <span class="detail-tech-badge">Docker</span>
            </div>

            <!-- Screenshot Gallery -->
            <h3 class="project-gallery-heading">Project Gallery & Documentation</h3>
            <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1rem;">Click on any image below to view it larger.</p>
            <div class="detail-gallery-grid">
                <div class="detail-gallery-item">
                    <img src="images/webapplication/bukcare1.png" alt="Appointment System Screenshot 1" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/webapplication/bukcare2.png" alt="Appointment System Screenshot 2" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/webapplication/bukcare3.jpg" alt="Appointment System Screenshot 3" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
            </div>

            <!-- Live Link Button -->
            <div class="project-action-wrapper">
                <a href="https://bukcare.com" target="_blank" class="btn-live-project">
                    <i class="fa-solid fa-external-link-alt"></i> Visit Live Project / Repository
                </a>
            </div>

        <!-- ================= PROJECT 3: BRAND AND GRAPHIC DESIGN ================= -->
        <?php elseif ($projectId === 'graphics'): ?>
            <h1 class="project-detail-title">Branding & Promotional Graphics</h1>
            <p class="project-detail-category"><i class="fa-solid fa-palette"></i> Graphic Designs</p>
            
            <p class="project-detail-description">
                Custom visual layouts and graphic assets created for digital promotion and branding, giving your business a polished visual identity.
            </p>

            <!-- Technologies Used -->
            <div class="detail-tech-wrapper">
                <span class="detail-tech-badge">Canva</span>
                <span class="detail-tech-badge">Figma</span>
                <span class="detail-tech-badge">Graphic Design</span>
            </div>

            <!-- Screenshot Gallery -->
            <h3 class="project-gallery-heading">Project Gallery & Documentation</h3>
            <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1rem;">Click on any image below to view it larger.</p>
            <div class="detail-gallery-grid">
                <div class="detail-gallery-item">
                    <img src="images/project-details/squarepost/DINULAN_Strophie_SquarePost_01.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/squarepost/DINULAN_Strophie_SquarePost_02.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/squarepost/DINULAN_Strophie_SquarePost_03.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/squarepost/DINULAN_Strophie_SquarePost_04.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/squarepost/DINULAN_Strophie_SquarePost_05.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_01.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_02.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_03.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_04.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_05.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_06.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_07.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_08.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_09.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/10 post Bulk Create/DINULAN_Strophie_BulkPost_010.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/5Signs/Dinulan_Strophie_Carousels_01.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/5Signs/Dinulan_Strophie_Carousels_02.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/5Signs/Dinulan_Strophie_Carousels_03.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/5Signs/Dinulan_Strophie_Carousels_04.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/5Signs/Dinulan_Strophie_Carousels_05.png" alt="Graphic Design Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
            </div>

            

        <!-- ================= PROJECT 4: OPERATIONS & SOCIAL MEDIA MANAGEMENT ================= -->
        <?php elseif ($projectId === 'digital'): ?>
            <h1 class="project-detail-title">Social Media Management & Operations</h1>
            <p class="project-detail-category"><i class="fa-solid fa-box-open"></i> Operations & Social Media Management</p>
            
            <p class="project-detail-description">
                Simplified backend workflows, organized calendars, managed inbox systems, and ran end-to-end social media campaigns to keep daily operations running smoothly.
            </p>

            <!-- Technologies Used -->
            <div class="detail-tech-wrapper">
                <span class="detail-tech-badge">Microsoft 365</span>
                <span class="detail-tech-badge">Google Workspace</span>
                <span class="detail-tech-badge">Templates</span>
                <span class="detail-tech-badge">Trello</span>
                
            </div>

            <!-- Screenshot Gallery -->
            <h3 class="project-gallery-heading">Project Gallery & Documentation</h3>
            <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1rem;">Click on any image below to view it larger.</p>
            <div class="detail-gallery-grid">
                <div class="detail-gallery-item">
                    <img src="images/project-details/SMM/smm1.png" alt="SMM Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                <div class="detail-gallery-item">
                    <img src="images/project-details/SMM/smm2.png" alt="SMM Sample" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
                
            </div>

            <!-- Live Link Button -->
            <!-- <div class="project-action-wrapper">
                <a href="https://your-smm-link.com" target="_blank" class="btn-live-project">
                    <i class="fa-solid fa-external-link-alt"></i> Visit Live Project / Repository
                </a>
            </div> -->

        <!-- ================= PROJECT 5: SYSTEM AND TOOLS ================= -->
        <?php elseif ($projectId === 'systems'): ?>
            <h1 class="project-detail-title">System & Tools I Know How to Use</h1>
            <p class="project-detail-category"><i class="fa-solid fa-tools"></i> System & Tools</p>
            
            <p class="project-detail-description">
                Comprehensive handling of desktop applications, web portals, document management systems (DMS), and networking software.
            </p>

            <!-- Technologies Used -->
            <div class="detail-tech-wrapper">
                <span class="detail-tech-badge">Trello</span>
                <span class="detail-tech-badge">Google Workspace</span>
                
            </div>

            <!-- Screenshot Gallery -->
            <h3 class="project-gallery-heading">Project Gallery & Documentation</h3>
            <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 1rem;">Click on any image below to view it larger.</p>
            <div class="detail-gallery-grid">
                <div class="detail-gallery-item">
                    <img src="images/icons/systems.png" alt="Systems and Tools" onerror="this.src='https://via.placeholder.com/600x400/121824/3b82f6?text=Project+Preview'">
                </div>
            </div>

            <!-- Live Link Button -->
            <!-- <div class="project-action-wrapper">
                <a href="https://your-systems-link.com" target="_blank" class="btn-live-project">
                    <i class="fa-solid fa-external-link-alt"></i> Visit Live Project / Repository
                </a>
            </div> -->

        <?php endif; ?>

    </div>
</section>

<!-- ================= FULLSCREEN LIGHTBOX VIEWER ================= -->
<div id="image-lightbox" class="lightbox-modal">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <button class="lightbox-prev" onclick="changeLightboxImage(-1)">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    
    <div class="lightbox-content">
        <img id="lightbox-img" src="" alt="Enlarged View">
        <p id="lightbox-caption" class="lightbox-caption"></p>
    </div>
    
    <button class="lightbox-next" onclick="changeLightboxImage(1)">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>

<!-- ================= LIGHTBOX JAVASCRIPT ================= -->
<script>
let currentGalleryImages = [];
let currentImageIndex = 0;

document.addEventListener("DOMContentLoaded", () => {
    const galleryImages = document.querySelectorAll(".detail-gallery-item img");

    galleryImages.forEach((img) => {
        img.addEventListener("click", function () {
            currentGalleryImages = Array.from(galleryImages);
            currentImageIndex = currentGalleryImages.indexOf(this);
            openLightbox();
        });
    });
});

function openLightbox() {
    if (currentGalleryImages.length === 0) return;
    document.getElementById("image-lightbox").style.display = "flex";
    document.body.style.overflow = "hidden";
    updateLightboxImage();
}

function closeLightbox() {
    document.getElementById("image-lightbox").style.display = "none";
    document.body.style.overflow = "auto";
}

function changeLightboxImage(direction) {
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = currentGalleryImages.length - 1;
    } else if (currentImageIndex >= currentGalleryImages.length) {
        currentImageIndex = 0;
    }
    updateLightboxImage();
}

function updateLightboxImage() {
    const imgObj = currentGalleryImages[currentImageIndex];
    const lightboxImg = document.getElementById("lightbox-img");
    const lightboxCaption = document.getElementById("lightbox-caption");

    lightboxImg.src = imgObj.src;
    lightboxCaption.textContent = imgObj.alt || "Project Preview";
}

// Keyboard navigation (Arrow keys & Escape)
document.addEventListener("keydown", (e) => {
    const lightbox = document.getElementById("image-lightbox");
    if (lightbox && lightbox.style.display === "flex") {
        if (e.key === "ArrowLeft") changeLightboxImage(-1);
        if (e.key === "ArrowRight") changeLightboxImage(1);
        if (e.key === "Escape") closeLightbox();
    }
});
</script>

<?php include 'includes/footer.php'; ?>