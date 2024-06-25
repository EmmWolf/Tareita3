let slideIndex = 0;
showSlides();

function showSlides() {
  const slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Cambia la imagen cada 2 segundos
}

document.getElementById("prevBtn").addEventListener("click", function() {
  slideIndex -= 2;
  if (slideIndex < 0) { slideIndex = slides.length - 1 }
  showSlides();
});

document.getElementById("nextBtn").addEventListener("click", function() {
  if (slideIndex >= slides.length) { slideIndex = 0 }
  showSlides();
});
