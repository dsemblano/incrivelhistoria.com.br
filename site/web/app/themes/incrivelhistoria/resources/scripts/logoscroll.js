document.addEventListener("DOMContentLoaded", function() {
    //hide or show the "back to top" link
    window.onscroll = function() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("banner-nav").classList.add('shrink', 'h-16');
            document.getElementById("menu-pages").classList.remove('hidden', 'xl:block');
            document.getElementById("menu-pages").classList.add('hidden');
            document.getElementById("Layer_1").classList.add('w-24');
            
        } else {
            document.getElementById("banner-nav").classList.remove('shrink', 'h-auto');
            document.getElementById("menu-pages").classList.remove('hidden');
            document.getElementById("menu-pages").classList.add('hidden', 'xl:block');
            document.getElementById("Layer_1").classList.remove('w-24');
        }
    };
});