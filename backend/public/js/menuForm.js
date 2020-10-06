$(document).ready(function (){
    console.log('test');
    // Load de la page
    if ($('#discount').val() == "0") {
        $("#unit").hide();
        $("#discountPrice").hide();
    }
    // Event
    $("#discount").change(function() {
        if ($(this).val() == "1") {
            $("#unit").show();
            $("#discountPrice").show();
        }else{
            $("#unit").hide();
            $("#discountPrice").hide();
        }
    });
});
