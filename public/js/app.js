app = {};

app.maskFields = () => {
    $('.phone').inputmask("99-99999-9999");
    $('.cpf').inputmask("999.999.999-99");

    $(".money").maskMoney({
        prefix: "R$:",
        decimal: ".",
        thousands: ""
    });

    $('.cep').inputmask("999999-99");
}

$( document ).ready(function() {
    app.maskFields()
});