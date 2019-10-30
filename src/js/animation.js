import ScrollReveal from "scrollreveal";

export function init_animation() {
  ScrollReveal().reveal(".logo", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal(".home", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal(".conteudos", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal(".mais-lidas", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
  ScrollReveal().reveal(".fale-conosco", {
    delay: 375,
    duration: 500,
    opacity: 0
  });
}