var faq = document.getElementsByClassName("faq-page");
var i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Переключение между добавлением и удалением активного класса,
        чтобы выделить кнопку, управляющую панелью */
        this.classList.toggle("active");
        /* Переключение между скрытием и отображением активной панели */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}