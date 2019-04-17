(async function(document) {




    function postRequest(url, data) {
        return fetch(url, {
            credentials: 'same-origin', // 'include', default: 'omit'
            method: 'POST', // 'GET', 'PUT', 'DELETE', etc.
            body: JSON.stringify(data), // Coordinate the body type with 'Content-Type'
            headers: new Headers({
                'Content-Type': 'application/json'
            }),
        })
            .then(response => response.json())
    }


    let btn_add = $('.btn_add_to_cart');


    btn_add.on('click', function (e) {



        let price = $(this).data('price');
        let anchor = $(this).data('anchor');
        let produit_id = $(this).data('prid');
        let quantity = $(anchor+" .p-quantity-input").val();

        console.log(price);
        console.log(anchor);
        console.log(produit_id);
        console.log(quantity);
        $(this).children('p').hide();
        $(this).children(':last').show();


        let url = "http://dev.achatcentrale.fr/cart/new";

        postRequest(url, {prid: produit_id, qty: quantity, prix: price})
            .then(data =>{
                console.log(data);
                $(this).children(':last').hide();
                $(this).children('p').show();


            }) // Result from the `response.json()` call
            .catch(error => console.error(error))

    });



    document.getElementById('header-cart').addEventListener('mouseleave', function () {
        $('.header-cart-menu').hide();
    });

    document.getElementById('header-cart').addEventListener('mouseenter', function () {
        $('.header-cart-menu').show();
    });
    

})(document);