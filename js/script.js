$(document).ready(function () {
    $("#runScript").on("click", function (e) {
        e.preventDefault();
        $("#JSONOutput").slideDown();
    });
});

// Back to top button js
//Get the button:
mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.classList.add("showTopBtn");
  } else {
    mybutton.classList.remove("showTopBtn");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
