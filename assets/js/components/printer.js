export default class Printer {
    constructor(formCart, img) {
        this.form = formCart;
        this.img = img;

        this.width = 0;
        this.height = 0;

        this.product_id;
        this.combination;

        this.init();
    }

    init() {
        this.product_id = $(this.img)
            .parent('.card')
            .find('form input[name="product_id"]')
            .val()
        ;
        // console.log(this.product_id);

        $(this.form)
            .find('input[name="product_id"]')
            .val(this.product_id)
        ;
        // console.log($(this.form).find('input[name="product_id"]').val());
    }
}
