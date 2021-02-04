import AjaxSearch from './components/ajax-search.js';
import Printer from './components/printer.js';

let ajaxSearch = new AjaxSearch('#movies-categories');

$(document).ajaxSuccess(() => {
    $('.card img').on('click', (e) => {
        let productPrinter = new Printer('#form-cart', e.currentTarget);
    });
});
