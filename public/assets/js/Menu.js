$( document ).ready(function() {
    $( ".menu_item" ).mouseenter( openMenu ).mouseleave( closeMenu );



    function openMenu() {
        let key = $(this).data("key");
        $("#"+key).show();
        $(".mask-menu").show();
        $('li[data-key="'+ key +'"] ').css("background-color", "#e54b0d");

    }


    function closeMenu() {
        let key = $(this).data("key");
        $("#" + key).hide();
        $(".mask-menu").hide();

        $('li[data-key="'+ key +'"] ').css("background-color", "unset");

    }
});

