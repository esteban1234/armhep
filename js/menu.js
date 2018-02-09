$(document).ready(main);

var contador = 1;
menu = $('.nav');

function main() {
    $('.op-menu').click(function() {
        if (contador == 1) {
            menu.slideDown(1000);
            $('.op-menu').animate({
                left: '55%'
            });
            contador = 0;
        } else {
            
            menu.slideUp(1000);
            $('.op-menu').animate({
                left: '30px'
            });
            contador = 1;
            
        }
    });

  
}
