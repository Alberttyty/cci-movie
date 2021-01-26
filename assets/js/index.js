const domElement = document.getElementById('carousel'); // équivalent JQuery $('#carousel')
const configuration = {
  interval : 1000 // en miliseconde
  //effect : 'slide',  // @TODO
};

// Instanciation de Carousel => Nouvelle copie de la Class Carousel
let carousel = new Carousel(domElement, configuration);
carousel.next();
//let ajaxSearch = new AjaxSearch('#movies-categories');
