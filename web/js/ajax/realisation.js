$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: ""

    });
    $('#rea-modal')
        .on('hidden.bs.modal', function() {
    console.log('FUUUUUUUUUUUUUCK');
            $('body').remove();
        });
});