var card = new Card({
    form: document.querySelector('.hvcc-form'),
    container: '.card-wrapper',

    formSelectors: {
        numberInput: 'input[name="C_Number"]',
        nameInput: 'input[name="C_Name"]',
        expiryInput: 'input[name="C_Date"]',
        cvcInput: 'input[name="C_Cvv"]',
    },

    formatting: true,

    placeholders: {
        number: '•••• •••• •••• ••••',
        name: 'Full Name',
        expiry: '••/••',
        cvc: '•••'
    },

    masks: {
        cardNumber: '•'
    },

    messages: {
        validDate: 'expire\ndate',
        monthYear: 'mm/yy'
    },

    debug: true

});

function cardFormValidate(e) {
    var cardValid = 0;
    var cardDate = 0;

    $('#c-number').validateCreditCard(function(result) {
        if (result.valid) {
            $("#c-number").removeClass('required');
            cardValid = 1;
        } else {
            $("#c-number").addClass('required');
            cardValid = 0;
        }
    });

    var cNumber = $('#c-number').val();
    var cName = $('#c-name').val() || null;
    var cDate = $('#c-date').val();
    var cCvv = $('#c-cvv').val();

    var rName = /^[a-zA-Z0-9-,]+$/i;
    var rDate = /^(?:0?[1-9]|1[0-2]) *\/ *[1-9][0-9]$/;
    var rCvv = /^[0-9]{3,3}$/;

    var cDateBol = cDate.split('/') || null;
    var cDateKntr = cDateBol[1] || null;

    var start_year = new Date().getFullYear().toString().substr(-2);
    var end_year = new Date(new Date().setFullYear(new Date().getFullYear() + 20)).getFullYear().toString().substr(-2);

    if (cDateKntr) {
        if (cDateKntr >= Number(start_year) && cDateKntr <= Number(end_year)) {
            cardDate = 1;
        } else {
            cardDate = 0;
        }
    }

    if (cardValid == 0) {
        // CNumber
        $("#c-number").addClass('required');
        $('#c-number').parent().addClass('has-danger');
        $("#c-number").focus();
        return false;
    } else if (!rDate.test(cDate) || cardDate == 0) {
        // CN
        $('#c-number').removeClass('required');
        $('#c-number').parent().removeClass('has-danger');
        $('#c-number').parent().addClass('has-success');
        // CD
        $('#c-date').addClass('required');
        $('#c-date').parent().addClass('has-danger');
        $('#c-date').focus();
        return false;
    } else if (!rCvv.test(cCvv)) {
        // CN
        $('#c-number').removeClass('required');
        $('#c-number').parent().removeClass('has-danger');
        $('#c-number').parent().addClass('has-success');
        // CD
        $('#c-date').removeClass('required');
        $('#c-date').parent().removeClass('has-danger');
        $('#c-date').parent().addClass('has-success');
        // CV
        $('#c-cvv').addClass('required');
        $('#c-cvv').parent().addClass('has-danger');
        $('#c-cvv').focus();
        return false;
    } else if (!cName) {
        // CN
        $('#c-number').removeClass('required');
        $('#c-number').parent().removeClass('has-danger');
        $('#c-number').parent().addClass('has-success');
        // CD
        $('#c-date').removeClass('required');
        $('#c-date').parent().removeClass('has-danger');
        $('#c-date').parent().addClass('has-success');
        // CV
        $('#c-cvv').removeClass('required');
        $('#c-cvv').parent().removeClass('has-danger');
        $('#c-cvv').parent().addClass('has-success');
        // CN
        $('#c-name').addClass('required');
        $('#c-name').parent().addClass('has-danger');
        $('#c-name').focus();
        return false;
    } else {
        // CN
        $("#c-number").removeClass('required');
        $('#c-number').parent().removeClass('has-danger');
        $('#c-number').parent().addClass('has-success');
        // CD
        $("#c-date").removeClass('required');
        $('#c-date').parent().removeClass('has-danger');
        $('#c-date').parent().addClass('has-success');
        // CV
        $("#c-cvv").removeClass('required');
        $('#c-cvv').parent().removeClass('has-danger');
        $('#c-cvv').parent().addClass('has-success');
        // CN
        $('#c-name').removeClass('required');
        $('#c-name').parent().removeClass('has-danger');
        $('#c-name').parent().addClass('has-success');
        return true;
    }
}

function ValidRequired(d) {
    d = new String(d);
    var reg = new RegExp("^[a-z ,.'-]+$");
    return reg.test(d);
}

function ValidDate(d) {
    d = new String(d);
    console.log(d);
    var reg = new RegExp("^(?:0?[1-9]|1[0-2]) *\/ *[1-9][0-9]$");
    return reg.test(d);
}





$(document).ready(function() {
    $('#c-number').focus();
    $('.hvcc-form input').on('keyup', function(e) {
        cardFormValidate(e);
    });

    $('.hvcc-form').on('submit', function() {
        if (!cardFormValidate()) {
            return false;
        }
    })
});