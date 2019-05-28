document.addEventListener("DOMContentLoaded", function () {
    let elem = document.querySelectorAll(".menu_item");

    elem.forEach(function (e) {
        e.addEventListener('mouseover', function (e) {


            let elemToShow = document.querySelector("#"+this.id+" .commercial-tree-content");
            console.log(this);
            console.log(elemToShow);
            elemToShow.style.display = "block";
            document.querySelector(".mask-menu").style.display = "block";
        });


        e.addEventListener('mouseleave', function () {
            let elemToShow = document.querySelector("#"+this.id+" .commercial-tree-content");
            elemToShow.style.display = "none";
            document.querySelector(".mask-menu").style.display = 'none';
        });




    });
});