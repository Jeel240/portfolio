const text = "I build modern web experiences using HTML, CSS, JS & PHP";
let index = 0;
const typingEl = document.querySelector('.typing-text');

function type() {
  if (index < text.length) {
    typingEl.textContent += text.charAt(index);
    index++;
    setTimeout(type, 40);
  }
}

typingEl.textContent = "";
type();
