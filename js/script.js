let navbar = document.querySelector('.header .navbar');
let searchForm = document.querySelector('.header .search-form');
let loginForm = document.querySelector('.header .login-form');
let contactInfo = document.querySelector('.contact-info');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
};

document.querySelector('#search-btn').onclick = () =>{
   searchForm.classList.toggle('active');
   navbar.classList.remove('active');
   loginForm.classList.remove('active');
};

document.querySelector('#login-btn').onclick = () =>{
   loginForm.classList.toggle('active');
   navbar.classList.remove('active');
   searchForm.classList.remove('active'); 
};

document.querySelector('#info-btn').onclick = () =>{
   contactInfo.classList.add('active');
}

document.querySelector('#close-contact-info').onclick = () =>{
   contactInfo.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
   contactInfo.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
   spaceBetween: 20,
   breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".blogs-slider", {
   loop:true,
   grabCursor:true,
   spaceBetween: 20,
   breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".logo-slider", {
   loop:true,
   grabCursor:true,
   spaceBetween: 20,
   breakpoints: {
      450: {
         slidesPerView: 2,
       },
      640: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1000: {
        slidesPerView: 5,
      },
   },
});


function validate() {
   var isValid = true;

   var nom = $("#nom").val();
   var entreprise = $("#entreprise").val();
   var email = $("#email").val();
   var tel = $("#tel").val();
   var message = $("#message").val();

   if (nom == "") {
       $("#nom").css('border', '#ff751a 1px solid');
       isValid = false;
   }

   if (entreprise == "") {
       $("#entreprise").css('border', '#ff751a 1px solid');
       isValid = false;
   }

   if (email == "") {
       $("#email").css('border', '#ff751a 1px solid');
       isValid = false;
   }
   if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
       $("#info").html("(Adresse email non valide)");
       $("#email").css('border', '#ff751a 1px solid');
       isValid = false;
   }
   if (tel == "") {
       $("#tel").css('border', '#ff751a 1px solid');
       isValid = false;
   }
   if (message == "") {
       $("#message").css('border', '#ff751a 1px solid');
       isValid = false;
   }
   return isValid;
}

// Fonction pour afficher l'image en taille réelle dans la fenêtre modale
function showImage(img) {
   var modal = document.getElementById("modal");
   var modalImage = document.getElementById("modal-image");
   modal.style.display = "block";
   modalImage.src = img.src;
}

// Fonction pour cacher la fenêtre modale
function hideImage() {
   var modal = document.getElementById("modal");
   modal.style.display = "none";
}


