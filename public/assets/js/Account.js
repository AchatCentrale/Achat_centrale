(async function(document) {

    document.getElementById('header-account').addEventListener('mouseleave', function () {
        $('.header-account-menu').hide();
        $(".mask-menu").hide();

    });

    document.getElementById('header-account').addEventListener('mouseenter', function () {
        $('.header-account-menu').show();
        $(".mask-menu").show();
    });


})(document);