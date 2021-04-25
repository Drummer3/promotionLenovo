require('./bootstrap');
require('alpinejs');


if ($('#category').length) {
    $('#category').on('change', function(e){
        $('#category').parent().parent().children().not(':first-child').remove();
        cat = e.target.value;
        $.get(
            'adaptive/'+cat,
            function(data){
                $('#form').append(data);
            }    
        );
    })
}
