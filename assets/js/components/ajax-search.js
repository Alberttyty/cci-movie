export default class AjaxSearch {
    constructor(selectProductFilter) {
        this.selectCategory = selectProductFilter;
        this.selectProducts = $(selectProductFilter).attr('data-select-products');
        this.apiUrl = $(this.selectCategory).parents('form').attr('action');
        this.modal = `
        <div id="modal-movie" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-image-title" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="absolute close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        `;

        this.init();
        this.search();
    }

    init() {
        $.ajax({
            data: {
                request : 'categories'
            },
            method : 'get',
            url : this.apiUrl

        }).fail(() => {
            console.log('AJAX REQUEST FAIL !');

        }).done((categories) => {
            //console.log(categories);
            $(this.selectCategory).html('<option value="">Select a movie category</option>');
            categories.forEach((category) => {
                $(this.selectCategory).append(`<option value="${category.id}">${category.title}</option>`);
            });
            /* JQuery
            const selectCategory = this.selectCategory;
            $.each(categories, (i, category) => {
                $(this.selectCategory)
                    .append(`<option value="${category.id}">${category.title}</option>`)
                ;
            });
            */
        });
    }

    search() {
        this.peuplerFilmSelect($(this.selectCategory).val());
        this.createFilmCards($(this.selectCategory).val());
        $(this.selectCategory).change((e) => {
            this.peuplerFilmSelect(e.currentTarget.value);
            this.createFilmCards(e.currentTarget.value);
        });
    }

    peuplerFilmSelect(categoryId) {
        if (categoryId != "") {
            $.ajax({
                data : {
                    request : 'by_category',
                    category_id : categoryId
                },
                method : 'get',
                url : this.apiUrl,

            }).fail(() => {
                console.log('AJAX REQUEST FAIL !');

            }).done((movies) => {
                //console.log(movies);
                $(this.selectProducts).html('<option value="">Select a movie</option>');
                movies.forEach((movie) => {
                    $(this.selectProducts).append(`<option value="${movie.id}">${movie.title}</option>`);
                });

                $(this.selectProducts).change((e) => {
                    if (e.currentTarget.value != "") this.showMovieOnModal(e.currentTarget.value);
                });
                /* JQuery
                const selectProducts = this.selectProducts;
                $.each(movies, (i, movie) => {
                    $(this.selectProducts)
                        .append(`<option value="${movie.id}">${movie.title}</option>`)
                    ;
                });
                */
            });
        }
        else $(this.selectProducts).html('<option value="">Select a movie</option>');
    }

    createFilmCards(categoryId) {
        if (categoryId != "") {
            $.ajax({
                data : {
                    request : 'by_category',
                    category_id : categoryId
                },
                method : 'get',
                url : this.apiUrl,

            }).fail(() => {
                console.log('AJAX REQUEST FAIL !');

            }).done((movies) => {
                //console.log(movies);
                const pageCart = $('#products-container').data('pagecart');
                $('#products-container').html('<div class="row"></div>');

                for (let i = 0 ; i < movies.length ; i++) {
                    $('#products-container .row').append(
                        `<div class="col-lg-3 col-md-6">
                            <article class="card my-3">
                                <img src="assets/img/movies/${movies[i].image}" alt="${movies[i].title}" />
                                <div class="card-body">
                                    <h3 class="card-title">${movies[i].title}</h3>
                                    <p class="card-text">${movies[i].description}</p>
                                </div>
                                <form action="${pageCart}" method="post" class="list-group list-group-flush">
                                    <input type="hidden" name="product_id" value="${movies[i].id}" />
                                    <input type="number" name="quantity" value="" min="0" />
                                    <input type="submit" />
                                </form>
                            </article>
                        </div>
                        `)
                    ;
                }

                $('#products-container form').submit((e) => {
                    e.preventDefault();
                    const form = e.currentTarget;

                    // product image
                    const zoomRatio = 50; // in pixel
                    let productThumb = $(e.currentTarget).parent('article').children('img');
                    //console.log(productThumb);
                    $(productThumb).animate({
                        top : $(productThumb).offset().top - zoomRatio/2  +'px',
                        left: $(productThumb).offset().left - zoomRatio/2 +'px',
                        width: $(productThumb).width() + zoomRatio + 'px',
                        height: $(productThumb).height() + zoomRatio + 'px',
                    }, 400);

                    $.ajax({
                        data: $(form).serialize(),
                        method : $(form).attr('method'),
                        url : $(form).attr('action'),
                        //dataType: "html"

                    }).fail(() => {
                        console.log('AJAX REQUEST FAIL !');

                    }).done((htmlCart) => {
                        //console.log(htmlCart);
                        $(this.modal)
                            .appendTo('body')
                            .find('.modal-body')
                            .append($(htmlCart).find('#cart-container').html())
                            .modal()
                        ;
                    });
                });
            });
        }
        else $(this.selectProducts).html('<option value="">Select a movie</option>');
    }

    showMovieOnModal(movie_id) {
        $.ajax({
            data : {
                request : 'movie',
                movie_id
            },
            method : 'get',
            url : this.apiUrl,

        }).fail(() => {
            console.log('AJAX REQUEST FAIL !');

        }).done((movie) => {
            //console.log(movie);
            $(this.modal)
                .appendTo('body')
                .find('.modal-body')
                .append(`
                    <article class="card">
                        <img src="assets/img/movies/${movie.image}" alt="${movie.title}" />
                        <div class="card-body">
                            <h3 class="card-title">${movie.title}</h3>
                            <p class="card-text">${movie.description}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Movie id</strong> : ${movie.id}</li>
                        </ul>
                    </article>
                `)
                .modal()
            ;
        });
    }
}
