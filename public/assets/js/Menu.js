document.addEventListener("DOMContentLoaded", function() {
    let elem = document.querySelectorAll(".menu_item");

    elem.forEach(function (e) {
        e.addEventListener('mouseover', function () {
            let key = e.dataset.key;

            document.getElementById(key).style.display = "block";
            document.querySelector(".mask-menu").style.display = "block";
            document.querySelector('li[data-key="' + key + '"] ').style.backgroundColor = "#e54b0d";

        });

        e.addEventListener('mouseleave', function () {
            let key = e.dataset.key;

            document.getElementById(key).style.display = 'none';
            document.querySelector(".mask-menu").style.display = 'none';
            document.querySelector('li[data-key="' + key + '"] ').style.backgroundColor = "unset";

        });
    });
});





