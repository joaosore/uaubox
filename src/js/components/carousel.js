import "owl.carousel"

export function init_carrousel() {
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        items: 1,
        dots: true,
        nav: false,
    })
}
