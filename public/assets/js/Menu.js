$( document ).ready(function() {
    $( ".menu_item" ).mouseenter( openMenu ).mouseleave( closeMenu );



    function openMenu() {
        let key = $(this).data("key");
        $("#"+key).show();
        $('.site-content').toggleClass('mask-drop-down-menu');
        $('li[data-key="'+ key +'"] ').css("background-color", "#e54b0d");

    }


    function closeMenu() {
        let key = $(this).data("key");
        $("#" + key).hide();
        $('.site-content').toggleClass('mask-drop-down-menu');

        $('li[data-key="'+ key +'"] ').css("background-color", "unset");

    }
});

