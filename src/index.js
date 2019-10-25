import "bootstrap";
import { init_loader } from "./js/loader";
import { init_menu } from "./js/menu";
import { init_carrousel } from "./js/components/carousel";

function init() {
  init_loader();
  init_menu();
  init_carrousel();
}

init();
