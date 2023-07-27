$(function (e) {
    "use strict";
    $(".date-inputmask").inputmask("dd/mm/yyyy"),
        $(".phone-inputmask").inputmask("(999) 999-9999"),
        $(".international-inputmask").inputmask("+9(999)999-9999"),
        $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
        $(".purchase-inputmask").inputmask("aaaa 9999-****"),
        $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
        $(".ssn-inputmask").inputmask("999-99-9999"),
        $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
        $(".currency-inputmask").inputmask("$9999"),
        $(".percentage-inputmask").inputmask("99%"),
        $(".optional-inputmask").inputmask("(99) 9999[9]-9999"),
        // $('.money').inputmask('000.000.000.000.000,00', {reverse: true}),
        $('.money2').inputmask("#.##0,00", {reverse: true}),
        $(".money").inputmask( 'currency',{"autoUnmask": true,
            radixPoint:",",
            groupSeparator: ".",
            allowMinus: false,
            prefix: '',
            digits: 2,
            digitsOptional: false,
            rightAlign: false,
            unmaskAsNumber: true
        }),
        $('.cpf').inputmask('000.000.000-00', {reverse: true}),
        $('.cnpj').inputmask('00.000.000/0000-00', {reverse: true}),
        $('.cep').inputmask('00000-000'),
        $('.phone').inputmask('0000-0000'),
        $('.phone_with_ddd').inputmask('(00) 0000-0000'),
        $('.phone_us').inputmask('(000) 000-0000'),
        $(".decimal-inputmask").inputmask({
            alias: "decimal"
            , radixPoint: "."
        }),

        $(".email-inputmask").inputmask({
            mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]"
            , greedy: !1
            , onBeforePaste: function (n, a) {
                return (e = e.toLowerCase()).replace("mailto:", "")
            }
            , definitions: {
                "*": {
                    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]"
                    , cardinality: 1
                    , casing: "lower"
                }
            }
        }),
        $("#num-letter").inputmask("999-AAA"),
        $("#date-time-once").inputmask()

});
