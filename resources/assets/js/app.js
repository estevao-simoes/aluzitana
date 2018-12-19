

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('slick-carousel');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(key.split('/').pop().split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

var $root = $('html, body');

function toggleNav() {
    return $('#navbarSupportedContent').collapse('hide');
}

// $('.btn').on('click', function (e) {
    
//     e.preventDefault();
    
//     var $this = $(this);
//     var loadingText = $this.data('loading-text');

//     if ($(this).html() !== loadingText) {
//         $this.data('original-text', $(this).html());
//         $this.html(loadingText);
//     }

//     // setTimeout(function () {
//     //     $this.html($this.data('original-text'));
//     // }, 2000);

// });

$(window).ready(function () {
    $('.banner-carousel').slick({
        dots: true,
        infinite: true,
        speed: 800,
        useTransform: false,
        easing: 'swing',
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        dots: false
    });
    $('.about-carousel').slick({
        dots: false,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
    });

});

$(document).ready(function () {
    $('a[href^="#"]').click(function () {
        var href = $.attr(this, 'href');
        var offset = $(href).offset().top - 102;
        toggleNav();
        $root.animate(
            {
                scrollTop: offset
            },
            500
        );
        return false;
    });
});
