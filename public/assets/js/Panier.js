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
    let btn_remove_product = $('.remove-produit-panier');


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


        let url = "http://localhost:8000/cart/new";

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
        $(".mask-menu").hide();


    });

    document.getElementById('header-cart').addEventListener('mouseenter', function () {
        $('.header-cart-menu').show();
        $(".mask-menu").show();

    });



    //remove un article du panier
    btn_remove_product.on('click', (e) => {

        let url = "http://localhost:8000/cart/delete";

        const ptID = $(e.currentTarget).data('prid');

        postRequest(url, {ptid : ptID})
            .then(data => {
                let qty_panier = $('#qty-panier-header');

                const qty_panier_val = qty_panier.html();


                const price = parseInt($(e.currentTarget).data('price'));
                const total_price_cart = $('#total_price_cart');
                const total_price_cart_val = parseInt($('#total_price_cart').text());


                let result_remove_price = total_price_cart_val-price;
                let qty_remove_val = qty_panier_val - 1;

                qty_panier.html(qty_remove_val);
                total_price_cart.html(result_remove_price);



                console.log(data);
                $('li#pt-'+ptID).remove();

            }) // Result from the `response.json()` call
            .catch(error => console.error(error));


        console.log(e)
    })
    

})(document);