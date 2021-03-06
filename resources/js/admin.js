require('./bootstrap');
require('alpinejs');





// //////////////
// TABLE!
// //////////////
$('#myTable thead tr').clone(true).appendTo('#myTable thead');
$('#myTable thead tr:eq(1) th').removeClass();
$('#myTable thead tr:eq(1) th').each(function (i) {
    var title = $.trim($(this).text());
    $(this).html(
        '<input class="block w-full shadow-sm border-gray-300 focus:ring focus:ring-red-400 focus:ring-4" type="text" placeholder="' +
        title + '" />'
    );
    $('input', this).on('keyup change', function () {
        if (table.column(i).search() !== this
            .value) {
            table
                .column(i)
                .search(this.value)
                .draw();
        }
    });
});
var table = $('#myTable').DataTable({
    language: {
        "emptyTable": "Empty :("
    },
    orderCellsTop: true,
    fixedHeader: true,
    paging: false,
    info: false,
    autoWidth: false
});
$('#myTable_filter').remove();
$('#myInputTextField').on('keyup change', function () {
    $('#myTable').DataTable().search($(this).val()).draw();
});
$('#clearer').on('click', function () {
    $('input').val(null).trigger('change');
});
// //////////////
// TABLE!
// //////////////





// //////////////
// Counters!
// //////////////
$('#rowCounter').text("Found " + $('#tableBody tr').length + " matches");

let ticketCounter = 0;
$('.tickets').each(function () {
    ticketCounter += parseFloat(this.innerText);
});
$('#ticketCounter').text("Tickets: " + ticketCounter);

$('input').on('keyup change', function () {
    $('#rowCounter').text("Found " + $('#tableBody tr').length + " matches");
    let ticketCounter = 0;
    $('.tickets').each(function () {
        ticketCounter += parseFloat(this.innerText);
    });
    $('#ticketCounter').text("Tickets: " + ticketCounter);
});
// //////////////
// Counters!
// //////////////





// //////////////
// Modals!
// //////////////
$('.deleteButton').on('click', function (e) {
    deletingid = e.currentTarget.id;
    $.get(
        'modal/delete/' + deletingid,
        function (data) {
            $('body').append(data);
        }
    );
});
$('.recoverButton').on('click', function (e) {
    recoverid = e.currentTarget.id;
    $.get(
        'modal/recover/' + recoverid,
        function (data) {
            $('body').append(data);
        }
    );
});
// //////////////
// Modals!
// //////////////