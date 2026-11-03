<footer>
        <p>&copy; <?php echo date("Y"); ?> SMD. All rights reserved.</p>
    </footer>
    
    <script src="js/transition.js"></script>
    <!-- FULLSCREEN LIGHTBOX VIEWER -->
<script src="js/transition.js"></script>

<!-- FULLSCREEN LIGHTBOX VIEWER -->
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

<!-- LIGHTBOX JAVASCRIPT ONLY -->
<script>
// Keep your lightbox functions here if needed, or leave them in project-detail.php
</script>

<script>
function filterProjects(category) {
    // 1. Get all project cards and filter buttons
    const cards = document.querySelectorAll('.projects-grid .project-card');
    const buttons = document.querySelectorAll('.project-filter-tabs .filter-btn');

    // 2. Update active class on buttons
    buttons.forEach(btn => {
        btn.classList.remove('active');
        if (btn.getAttribute('onclick').includes(`'${category}'`)) {
            btn.classList.add('active');
        }
    });

    // 3. Show or hide matching project cards
    cards.forEach(card => {
        if (category === 'all' || card.classList.contains(category)) {
            card.style.display = 'block'; // Or 'flex' depending on your grid styling
        } else {
            card.style.display = 'none';
        }
    });
}
</script>

</body>
</html>