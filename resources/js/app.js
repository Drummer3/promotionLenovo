require('./bootstrap');
require('alpinejs');

var x = document.getElementById("type");

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


x.onchange = function()
{
    switch(x.value) {
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