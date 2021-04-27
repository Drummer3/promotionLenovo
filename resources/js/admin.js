require('./bootstrap');
require('alpinejs');

var deletingid = '';
// DASHBOARD TABLE
$('#myTable thead tr').clone(true).appendTo('#myTable thead');
$('#myTable thead tr:eq(1) th').removeClass();
$('#myTable thead tr:eq(1) th').each(function (i) {
    var title = $.trim($(this).text());
    $(this).html(
        '<input class="block w-full rounded-md shadow-sm border-gray-300 focus:ring focus:ring-red-400 focus:ring-4" type="text" placeholder="' +
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
    orderCellsTop: true,
    fixedHeader: true,
    paging: false,
    info: false,
    autoWidth: false
});
$('#myTable_filter').remove();
$('#myInputTextField').on('keyup change', function () {
    $('#myTable').DataTable().search($(this).val()).draw();
})
$('input').on('keyup change', function () {
    $('#rowCounter').text("Found " + $('#tableBody tr')
        .length + " matches");
});
$('#rowCounter').text("Found " + $('#tableBody tr').length +
    " matches");
$('#clearer').on('click', function () {
    $('input').val(null).trigger('change');
});

// RECOVER
$('.recoverButton').on('click', function(e) {
    location.href = '/recoveritem/' + e.currentTarget.id;
});

// DELETE
$('.deleteButton').on('click', function (e) {
    deletingid = e.currentTarget.id;
    $('#modal').show();
});
$('#modal-delete').on('click', function () {
    location.href = '/removeitem/' + deletingid;
});
$('#modal-cancel').on('click', function () {
    $('#modal').hide()
});