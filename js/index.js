/*var stickyOffset = $('.sticky').offset().top;*/

$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= stickyOffset) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});

function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    //document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    //document.getElementById("myOverlay").style.display = "none";
}

function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function showEditPromo1() {
    var promo1 = document.getElementById("edit-promo-1");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }
    //document.getElementById("edit-promo1").style.display="block";
}

function showEditPromo2() {
    var promo1 = document.getElementById("edit-promo-2");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }
    //document.getElementById("edit-promo1").style.display="block";
}

function showEditPromo3() {
    var promo1 = document.getElementById("edit-promo-3");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }
    //document.getElementById("edit-promo1").style.display="block";
}

function showAnotherPromo1(){
    var promo1 = document.getElementById("edit-another-1");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }   
}

function showAnotherPromo2(){
    var promo1 = document.getElementById("edit-another-2");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }   
}

function showEditPromo4(){
    var promo1 = document.getElementById("edit-promo-4");
    if (promo1.className.indexOf("w3-show") == -1) {
        promo1.className += " w3-show";
    } else {
        promo1.className = promo1.className.replace(" w3-show", "");
    }
}