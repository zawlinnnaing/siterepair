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

/************************** Quill editor *************************/
/************************** For announcement *************************/
var quill = new Quill('#editor', {
    theme: 'snow'
});
editorContent = document.querySelector('input[name=content]');
quill.on('text-change', function (delta, oldDelta, source) {
    if (source === 'user') {
        console.log(quill.root.innerHTML);
        editorContent.value = quill.root.innerHTML;
    }
});



console.log('from admin.js');