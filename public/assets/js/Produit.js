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


    let visible = $(".item-categ-"+ cat+":not('.hide-vignette')");


    console.log(visible);


    let to_show = items.slice( end , end + 4 );


    hide(visible);
    show(to_show);




});




function hide(arrayElem) {

    arrayElem.each(function ( index, elem) {

        console.log(elem);
        elem.classList.add("hide-vignette");
    })
}

function show(arrayElem) {
    arrayElem.each(function ( index, elem) {
        elem.classList.remove("hide-vignette");
    })
}