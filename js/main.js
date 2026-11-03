document.addEventListener('DOMContentLoaded', () => {
    const greetBtn = document.getElementById('greetBtn');
    
    if (greetBtn) {
        greetBtn.addEventListener('click', () => {
            alert('Hello! Thanks for clicking the interactive button.');
        });
    }

    

    
});

