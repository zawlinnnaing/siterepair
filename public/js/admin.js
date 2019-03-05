$('.delete-btn').on("click", function (e) {
    e.preventDefault();
    var targetUrl = $(this).attr('href');
    if (confirm("Are you sure ?")) {
        window.location.href = targetUrl;
    }
});

