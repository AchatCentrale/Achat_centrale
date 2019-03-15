$( document ).ready(function() {
    $( ".menu_item" ).mouseenter( openMenu ).mouseleave( closeMenu );
    function openMenu() {
        $(this).toggleClass( "open" );

        $(this).find('.commercial-tree-content').show();
    }
    function closeMenu() {
        $(this).toggleClass( "open" );

        $(this).find('.commercial-tree-content').hide();
    }
});