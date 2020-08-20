$(document).ready(function() {
    $("#fetchval").on('change', function() {
        var keyword = $(this).val();
        $.ajax({
            url: 'control/sort.php',
            type: 'POST',
            data: 'request=' + keyword,

            beforeSend: function() {
                $("#table-container").html('Working...');

            },
            success: function(data) {
                $("#table-container").html(data);
            },
        });
    });
});