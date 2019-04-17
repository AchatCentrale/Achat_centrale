(async function(document) {

    document.getElementById('header-account').addEventListener('mouseleave', function () {
        $('.header-account-menu').hide();
    });

    document.getElementById('header-account').addEventListener('mouseenter', function () {
        $('.header-account-menu').show();
    });


})(document);