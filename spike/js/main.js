
$(document).ready(function(e){

    $("#form-spike").on('submit', function(e){
        e.preventDefault();
        var urlApi = baseUrl+"/app/api/spike/send.php";
        $.ajax({
            type: 'POST',
            url: urlApi,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) {
                if(data.status == 'success'){
                    showMessage('Success', 'Email sent', false);
                } else {
                    showMessage('Error', 'Internal error.', true);
                }
            }
        });
    });

});