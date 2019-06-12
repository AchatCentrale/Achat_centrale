(async function (document) {

    let nombre_article_panier = $('#qty-panier-header');
    let valeur_totale_cart = $('#total_price_cart');


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
        let quantity = $(anchor + " .p-quantity-input").val();


        $(this).children('p').hide();
        $(this).children(':last').show();


        let url = "http://localhost:8000/cart/new";

        postRequest(url, {prid: produit_id, qty: quantity, prix: price})
            .then(data => {
                console.log(data);
                $(this).children(':last').hide();
                $(this).children('p').show();

                console.log(parseFloat(valeur_totale_cart.text()));
                console.log(price);

                let new_value_amount = parseFloat(valeur_totale_cart.text()) + parseFloat(price);

                console.log(new_value_amount);

                nombre_article_panier.html(parseInt(nombre_article_panier.text()) + 1);
                valeur_totale_cart.html(new_value_amount)



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

        postRequest(url, {ptid: ptID})
            .then(data => {

                const valeur_totale_cart_val = parseFloat(valeur_totale_cart.text());

                const nombre_article_panier_val = parseFloat(nombre_article_panier.text());

                const price = $(e.currentTarget).data('price');

                const new_valeur = valeur_totale_cart_val - price;

                const new_nombre_article_panier = nombre_article_panier_val - 1;


                //Modif nombre article
                const pastille_qty_cart_header = $('#qty-panier-header').html(new_nombre_article_panier);
                const qty_cart_header_popup = $('#qty-panier-header-popup').html(new_nombre_article_panier);

                //Modif valeur panier
                const total_valeur_cart_header = valeur_totale_cart.html(new_valeur.toFixed(2));
                const total_valeur_cart_popup = $('#total_price_cart_popup').html(new_valeur.toFixed(2));


                console.log(price);
                console.log(valeur_totale_cart_val);

                console.log(data);
                $('li#pt-' + ptID).remove();

            }) // Result from the `response.json()` call
            .catch(error => console.error(error));


        console.log(e)
    })


})(document);