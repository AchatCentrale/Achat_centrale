let flecheGauche =  $('.fleche-gauche');
let flecheDroite =  $('.fleche-droite');

let start = 0;
let end = 4;


flecheGauche.on('click', function (e) {
    console.log(e)
});

flecheDroite.on('click', function (e) {

    let cat = $(this).data('cat');



    let items = $('.item-categ-'+ cat);



    let to_hide = items.slice( start , end );
    let to_show = items.slice( end , end + 4 );


    hide(to_hide);
    show(to_show);




});




function hide(arrayElem) {
    arrayElem.each(function ( index, elem) {
        elem.classList.add("hide-vignette");
    })
}

function show(arrayElem) {
    arrayElem.each(function ( index, elem) {
        elem.classList.remove("hide-vignette");
    })
}