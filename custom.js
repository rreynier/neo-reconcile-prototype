$(document).ready( function() {
    $('.popup').popup();

    var content = [
        { title: 'John' },
        { title: 'Bob' },
        { title: 'Bruce' }
    ]
    $('.ui.search').search({
        apiSettings: {
            url: "/ajax.php"
        }
    });

    $('.select-patient').click(function(e) {
        e.preventDefault();

        $('.find-matching-consultation').show();
        $('.find-patient-matched').show();
        $('.find-patient').hide();
    });

    $('.add-to-invoice').click( function() {
        $('.added-item').show();
        $(this).hide();
        $(this).after('Added to invoice');
        $(this).parent().parent().addClass('positive');
        $('.reconciliation-invoice').show();
    });

    $('.add-to-invoice-2').click( function() {
        $('.added-item-2').show();
        $(this).hide();
        $(this).after('Added to invoice');
        $(this).parent().parent().addClass('positive');
    });
});

