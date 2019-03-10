$('.delete-btn').on("click", function (e) {
    e.preventDefault();
    var targetUrl = $(this).attr('href');
    if (confirm("Are you sure ?")) {
        window.location.href = targetUrl;
    }
});

$('.delete-btn-ajax').on('click', function (e) {
    e.preventDefault();
    var targetUrl = $(this).attr('href');
    if (confirm("Are you sure ?")) {
        $.ajax({
            url: targetUrl,
            type: 'DELETE',
            success: function (result) {
                alert(result.data.msg);
                location.reload();
            }
        });
    }
});

