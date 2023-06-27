$(document).ready(function () {
        $('#submitButton').on('click',function(e) {
            e.preventDefault();
            
            const firstInt = $('#firstInt').val();
            const lastInt = $('#lastInt').val();
                 
            const data = {
                firstInt: firstInt,
                lastInt: lastInt
            };
            
            const body = JSON.stringify(data);

            $.ajax({
                method: 'POST',
                crossDomain: true,
                crossOrigin: true,
                async: true,
                url: 'http://localhost:8000/src/calculation.php',
                data: body,
                success: function (response) {
                    $('#message').html('');
                    const message = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">\
                                        <strong>Compilation Successful!</strong>\
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                                    </div>';
                    $('#message').append(message);
                    $('#output').html('');
                    $('#output').append(response);                   
                },
                error: function (request, status, error) {
                    // console.log(status + "There was an error: " + error, request.responseText);
                    console.log(error);
                }
            });

        }); 
});