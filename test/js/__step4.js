$(function () {


    $('#os4_offer').change(function (evt) {
        if (this.checked) {
            $('#pay-btn').attr('disabled', false);
        } else {
            $('#pay-btn').attr('disabled', true);
        }
    });

    $('#os4_offer').click(function (evt) {
        if (this.checked) {
            $('#pay-btn').attr('disabled', false);
        } else {
            $('#pay-btn').attr('disabled', true);
        }
    });

    $('#os3_offer_lab').click(function () {
        $('#os3_offer_text').modal({ opacity: 80, overlayCss: { backgroundColor: "#cccccc" }, overlayClose: true, closeClass: "os3_offer_close" });
        $('#os3_offer_yes').click(function () {
            // $('#os4_offer').attr('checked', true);
            if ($('#os4_offer').attr('checked') == false) {
                document.querySelector('#os4_offer').click();
            }
            $('#deliveryaddress').fadeOut();
            if ($('#os3_offer').attr('checked') == true) {
                $('#delivery').fadeIn();
            } else {
                $('#delivery').fadeOut();
                $('#completeorder').fadeOut();
                $('#os3_total').fadeOut();
                $('#deliveryfirm').fadeOut();
            }
        });
        $('#os3_offer_close').click(function () {
            $('#os3_offer').attr('checked', false);
            $('#deliveryaddress').fadeOut();
            if ($('#os3_offer').attr('checked') == true) {
                $('#delivery').fadeIn();
            } else {
                $('#delivery').fadeOut();
                $('#completeorder').fadeOut();
                $('#os3_total').fadeOut();
                $('#deliveryfirm').fadeOut();
            }
        });
    });




});


$(document).mousemove(function () {
    let btn = document.querySelector('.iframe-container iframe').contentDocument.querySelector('#spreadEven');
    if (btn == null) return;
    if (!btn.classList.contains('toggled') && !btn.classList.contains('moused')) {
        console.log('!CONTAINS');
        btn.click();
        btn.classList.add('moused');
    }

})

