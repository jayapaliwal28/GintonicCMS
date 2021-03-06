define(['jquery'], function($) {
    return function(id, path) {
        $.ajax({
            type: "POST",
            url: "gintonic_c_m_s/users/updateAvatar/",
            dataType: 'json',
            data: {
                id: $('#user-id').val(),
                file_id: id,
            },
            success: function(response, status) {
                $('#userphoto').attr('src', response.file);
                if (response.success) {
                    $('#contact-alert').html(
                            '<div class="alert alert-dismissable alert-success">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            '<strong>Success:</strong> ' + response.message +
                            '</div>'
                            );
                } else {
                    $('#contact-alert').html(
                            '<div class="alert alert-dismissable alert-danger">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            '<strong>Error:</strong> ' + response.message +
                            '</div>'
                            );
                }
            },
            error: function(response, status) {
                $('#contact-alert').html(
                        '<div class="alert alert-dismissable alert-danger">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                        '<strong>Error:</strong> unable to send message' +
                        '</div>'
                        );
            }
        });
    };

});