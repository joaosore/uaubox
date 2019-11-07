import ScrollReveal from "scrollreveal";

export function init_cards_posts() {
  btn_mais();
  get_api(0);
}

function get_api(offset) {
  var cards = "";
  $.get("./api-posts/?offset=" + offset, function(data) {
    data.map(function(valorAtual, index) {
      $(".noticias-box").append(create_html(valorAtual));
    });
    ScrollReveal().reveal(".noticias-box .noticia", {
      reset: false,
      duration: 250,
      opacity: 0,
      interval: 250,
      distance: "50px",
      origin: "bottom",
      easing: "ease-in-out"
    });
  });
}
function create_html(valor) {
  var html = '<div class="noticia">';
  html += '<div class="noticia-box-image">';
  html +=
    '<div class="box-img"><div class="content"><img src="' +
    valor.img +
    '" alt="noticia"></div></div>';
  html += '<div class="noticia-box">';
  html += "  <span>" + valor.category + "</span>";
  html += "  <h2>" + valor.title + "</h2>";
  html += "  <p>" + valor.description + "</p>";
  html += "  <a href='" + valor.link + "' target='_blank'>";
  html += "     <span>LEIA MAIS</span>";
  html += "  </a>";
  html += " </div>";
  html += "</div>";
  html += "</div>";
  return html;
}

function btn_mais() {
  var offset = 6;
  $(document).on("click", ".botao-conteudos", function(e) {
    e.preventDefault();
    var old_offset = $(this).data("offset");

    if (old_offset === undefined) {
      old_offset = 0;
    }
    var new_offset = old_offset + offset;
    $(this).data("offset", new_offset);
    get_api(new_offset);
  });
}
