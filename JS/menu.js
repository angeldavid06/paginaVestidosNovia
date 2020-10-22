$(".mostrar").click(function () {
    $(".menu").toggleClass("visible");
});

//      INICIO
$(".item-ini").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    localStorage.setItem('pagina', "ini");
});

if (localStorage.getItem('pagina') == "ini") {
    $(".item-ini").addClass("active").siblings().removeClass("active");
} else if (localStorage.getItem('pagina') == "no-ini") {
    $(".item-ini").removeClass("active");
}

//      CATÁLOGO
$(".item-cat").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    localStorage.setItem('pagina', "cat");
});

if (localStorage.getItem('pagina') == "cat") {
    $(".item-cat").addClass("active").siblings().removeClass("active");
} else if (localStorage.getItem('pagina') == "no-cat") {
    $(".item-cat").removeClass("active");
}

//      SERVICIOS
$(".item-ser").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    localStorage.setItem('pagina', "ser");
});

if (localStorage.getItem('pagina') == "ser") {
    $(".item-ser").addClass("active").siblings().removeClass("active");
} else if (localStorage.getItem('pagina') == "no-ser") {
    $(".item-ser").removeClass("active");
}

//      CONTACTO
$(".item-con").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    localStorage.setItem('pagina', "con");
});

if (localStorage.getItem('pagina') == "con") {
    $(".item-con").addClass("active").siblings().removeClass("active");
} else if (localStorage.getItem('pagina') == "no-con") {
    $(".item-con").removeClass("active");
}