window.addEventListener("scroll", ()=>{
    if (window.scrollY >= 300) {
                header.classList.add("scrolled");
                console.log("Scrolled");
            } else {
                header.classList.remove("scrolled");
                console.log("No scrolled")
            }
});