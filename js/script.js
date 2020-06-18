var mySwiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    autoplay: {
        delay: 5000,
    },
})


$(document).ready(function () {
    $("form").submit(function () {
        return (
            $.ajax({ type: "POST", url: "contact.php", data: $(this).serialize() }).done(function () {
                alert("Спасибо за сообщение! Ответ придет на указанный e-mail.");
            }),
            !1
        );
    });
});