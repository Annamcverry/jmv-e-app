import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function(){
    setTimeout(function () {
            $(".flashmessage").slideUp('slow');
        }, 3000);
    });
    