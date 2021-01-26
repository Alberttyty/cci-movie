/*
let carousel = {
    domElement,
    image,
    interval,
    activeImage
}*/

// console.log(carousel.domElement);
// console.log(carousel.getImage());

/*
configuration = {
  interval : 1000, // en miliseconde
  effect : 'slide',  // @TODO
}
*/

const tableauImages = [
    {
	     alt : 'Image1',
	     src : 'assets/img/image1.jpg',
    },
    {
	     alt : 'Image2',
	     src : 'assets/img/image2.jpg',
    },
    {
	     alt : 'Image3',
	     src : 'assets/img/image3.jpg',
    },
];

/*
const tableauImages = [];
let objetImage = {
    alt : 'Image 1',
    src : 'lien/de/mon/image.jpeg'
}
tableauImages.push(objetImage); // tableauImages[0] = objetImage;
*/

//$('#carousel').next(); => Retourne l'élement adjacent suivant $('#carousel2');

const DIRECTION_NEXT     = 'next';
const DIRECTION_PREV     = 'prev';

class Carousel {
    constructor(domElement, configuration) {
        this.domElement = domElement;
        this.imageElement = null;
        this.interval = configuration.interval;
        this.activeImageIndex = null;

        /*JQUERY
        console.dir($(domElement).children());
        $(domElement)
            .css({ position: 'relative'})
            .children().each((i, img) => {
                $(img).css({
                    float: 'left',
                    marginRight: '-100%'
                });

                if (i > 0) {
                    $(img).css({ display: 'none' });
                } else {
                    $(img).css({ display: 'block' });
                    this.activeImage = i;
                    this.image = img;
                }
            })
        ;*/
        //ECMASCRIPT (Vanilla JS)
        //console.dir(domElement.children);
        domElement.style.position = "relative";
        Array.from(domElement.children)
            .forEach((img, i) => {
                img.style.float = "left";
                img.style.marginRight = "-100%";
                //img.style = 'float:left; margin-right: -100%';

                if (i == 0) {
                    img.style.display = "block";
                    this.activeImageIndex = i;
                    this.imageElement = img;

                } else img.style.display = "none";
            })
        ;
        //@TODO : Create navigation element with onclick.
        //$(domElement).prepend(newChildElement);
        //$(newChildElement).prependTo(domElement);
        const prevNavigationElement = `<a class="prev" href="${domElement.id}">Précédent</a>`;
        //$(newChildElement).appendTo(domElement);
        $(domElement)
            .append(prevNavigationElement)
            .children('.prev')
            .click((e) => {
                e.preventDefault();
                this.prev();
            })
        ;
        /*
        $(domElement).children('.prev').click((e) => {
            e.preventDEfault();
            this.prev();
        });
        */
        const nextNavigationElement = `<a class="next" href="${domElement.id}">Suivant</a>`;
        $(domElement)
            .append(nextNavigationElement)
            .children('.next')
            .click((e) => {
                e.preventDefault();
                this.next();
            })
        ;
    }

    // Make thie class iterable to use for...off
    *[Symbol.iterator]() {
        yield this.domElement;
        yield this.imageElement;
        yield this.interval;
        yield this.activeImageIndex;
    }

    next() {
        // instructions de la fonction
        this.slide(DIRECTION_NEXT); // this.slide('next');
        const carouselImages = $(this.domElement).children('img');
        //console.log(carouselImages);
        //console.log(this.activeImageIndex);
        $(this.imageElement).hide();
        if (this.activeImageIndex == carouselImages.length-1) this.activeImageIndex = 0;
        else this.activeImageIndex += 1;

        this.imageElement = $(carouselImages).eq(this.activeImageIndex);
        $(this.imageElement).show();
    }

    prev() {
        // instructions de la fonction
        this.slide(DIRECTION_PREV); // this.slide('prev');
    }

    slide(direction) {
        // instructions de la fonction
        console.log(direction);
    }
}

// let domElement = document.getElementById('carousel');
// let carousel = Carousel(domElement);
