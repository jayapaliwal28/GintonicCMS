define(['jquery'], function ($) {
    return function(id, path){
        $('#upload-alert').html('<div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><span>Upload successful</span></div>');
        $.get( "gintonic_c_m_s/files/getRow/"+id, function(data){
            $('#all-files tr:last').after(data);
        });
    };
   
});
