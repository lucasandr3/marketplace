$(function() {

    function checkall(clickchk, relChkbox) {

        var checker = $('#' + clickchk);
        var multichk = $('.' + relChkbox);


        checker.click(function () {
            multichk.prop('checked', $(this).prop('checked'));
        });
    }

    checkall('contact-check-all', 'contact-chkbox');
});

function calcTotalGanho(element, item) {
    let inpTotalGanho = $('#inp-total-ganho'+item);
    let textValueTotal = $('#ganho-v-total'+item);
    let quantity = parseInt($('#ganho-q'+item).text());
    let valueUnit = element.value !== '' ? parseFloat(element.value) : '0.00';

    if (valueUnit !== '0.00') {
        let totalGanho = valueUnit * quantity;
        inpTotalGanho.val(parseFloat(totalGanho));
        textValueTotal.text(totalGanho);
    }

    inpTotalGanho.val(parseFloat(valueUnit));
    textValueTotal.text(valueUnit);
}
