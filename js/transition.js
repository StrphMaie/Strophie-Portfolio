document.addEventListener("DOMContentLoaded", () => {
   
    document.body.classList.add("page-loaded");


    const links = document.querySelectorAll("a[href]");

    links.forEach(link => {
        link.addEventListener("click", (e) => {
            const href = link.getAttribute("href");

          
            if (
                !href ||
                href.startsWith("#") ||
                href.startsWith("javascript:") ||
                link.getAttribute("target") === "_blank" ||
                href.startsWith("http")
            ) {
                return;
            }

            e.preventDefault(); 

       
            document.body.classList.remove("page-loaded");
            document.body.classList.add("page-exiting");

      
            setTimeout(() => {
                window.location.href = href;
            }, 400);
        });
    });
});
