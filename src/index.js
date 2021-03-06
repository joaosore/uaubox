import "bootstrap";
import { init_loader } from "./js/loader";
import { init_menu } from "./js/menu";
import { init_ancora } from "./js/ancora";
import { init_carrousel } from "./js/components/carousel";
import { init_animation } from "./js/animation";

import { init_cards_posts } from "./js/cards-posts";
function init() {
  init_loader();
  init_menu();
  init_ancora();
  init_carrousel();
  init_animation();

  init_cards_posts();
}

init();
