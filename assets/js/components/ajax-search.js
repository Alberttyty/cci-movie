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
        $(this.selectCategory).change((e) => {
            this.peuplerFilmSelect(e.currentTarget.value);
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
