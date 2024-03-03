import Alpine from 'alpinejs';

Alpine.start()

window.Alpine = Alpine;

let elem = document.querySelector('.grid');
let infScroll = new InfiniteScroll(elem, {
    // options
    path: '/actors/page/@{{#}}',
    append: '.actor',

});
