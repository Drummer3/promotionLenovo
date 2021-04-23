require('./bootstrap');
require('alpinejs');
require('tablesorter/dist/js/jquery.tablesorter');

function notebook()
{
    $('.notebook').show();
    $('.tablet').hide();
    $('.service').hide();
};


function tablet()
{
    $('.notebook').hide();
    $('.tablet').show();
    $('.service').hide();
};

function service()
{
    $('.notebook').hide();
    $('.tablet').hide();
    $('.service').show();
}

if ($('#type').length )
{
    var x = document.getElementById('type');
    x.onchange = function()
    {
        switch(x.value) 
        {
            case 'notebook':
                notebook();
                break;
            case 'tablet':
                tablet();
                break;
            case 'warranty':
                service();
                break;
            default:
                    // code block
        } 
    };
}

$(function() {
    $("#myTable").tablesorter();
});