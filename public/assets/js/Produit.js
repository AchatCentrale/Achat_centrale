let flecheGauche =  $('.fleche-gauche');
let flecheDroite =  $('.fleche-droite');

flecheGauche.on('click', function (e) {
    let cat = $(this).data('cat');
    let iteration = $(".item-categ-"+ cat+":not('.hide-vignette')").data("iteration");
    let nextIteration = iteration - 1;

    if (nextIteration === 0){
        nextIteration = iteration;
    }
    let visible = $(".item-categ-"+ cat+":not('.hide-vignette')");

    let invisible = $(".item-categ-"+ cat+"[data-iteration="+ nextIteration +"]");
    visible.addClass( "hide-vignette" );
    invisible.removeClass( "hide-vignette" );
});

flecheDroite.on('click', function (e) {
    let cat = $(this).data('cat');

    let items = $('.item-categ-'+ cat);

    let maxIteration = items.length / 4;

    let iteration = $(".item-categ-"+ cat+":not('.hide-vignette')").data("iteration");
    let nextIteration = iteration + 1;

    if (nextIteration > maxIteration){
        nextIteration = 1;
    }

    let visible = $(".item-categ-"+ cat+":not('.hide-vignette')");

    let invisible = $(".item-categ-"+ cat+"[data-iteration="+ nextIteration +"]");
    visible.addClass( "hide-vignette" );
    invisible.removeClass( "hide-vignette" ).fadeIn('slow');

});


let moins = $('.p-quantity-decrease');
let plus = $('.p-quantity-increase');

plus.on('click', function (e) {
    console.log("ok");


    let idElement = $(this).parent().attr('id');

    let qty = $(this).parent().data('qty');

    let value =  $('#'+idElement+' .p-quantity-input').val();

    let nextValue = parseInt(value) + parseInt(qty);

    $('#'+idElement+' .p-quantity-input').val(nextValue);


});


moins.on('click', function (e) {


    let idElement = $(this).parent().attr('id');

    let qty = $(this).parent().data('qty');

    let value =  $('#'+idElement+' .p-quantity-input').val();

    if (parseInt(value) ===  parseInt(qty)){
        return;
    }else {
        let nextValue = parseInt(value) - parseInt(qty);
        $('#'+idElement+' .p-quantity-input').val(nextValue);
    }





});
