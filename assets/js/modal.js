function openModal(cert) {
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modalImage");

  if (cert === "dmcp") {
    modalImage.src = "assets/images/dmcp.jpg";
  } else if (cert === "php") {
    modalImage.src = "assets/images/php.jpg";
  }

  modal.style.display = "block";
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
}
