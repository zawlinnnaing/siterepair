/************************** For post *************************/

var toolbarOptions = [['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],

    [{'header': 1}, {'header': 2}],               // custom button values
    [{'list': 'ordered'}, {'list': 'bullet'}],
    [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
    [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
    [{'direction': 'rtl'}],                         // text direction

    [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
    [{'header': [1, 2, 3, 4, 5, 6, false]}],

    [{'color': []}, {'background': []}],          // dropdown with defaults from theme
    [{'font': []}],
    [{'align': []}],
    ['image'],
    ['clean']];

const IMAGE_API_URL = 'http://mtu-edu.local/api/post_image';

var postQuill = new Quill('#post-editor', {
    modules: {
        toolbar: {
            container: toolbarOptions
        }
    },
    theme: 'snow',
});

let imageHandler = function (image) {
    if (image) {
        let fileInput = document.getElementById('post-image');
        fileInput.click();
    }

};


postQuill.getModule('toolbar').addHandler('image', imageHandler);


function uploadImage(event) {
    console.log('from uploadImage');
    let file = event.target.files[0];
    let reader = new FileReader();
    reader.onload = async function () {
        let image = reader.result;
        try {
            const response = await axios.post(IMAGE_API_URL, {
                image: image
            });
            let imageUrl = response.data.imgUrl;
            if (imageUrl != null && imageUrl.length > 0) {
                let value = imageUrl;
                let addImgRange = postQuill.getSelection();
                value = value.indexOf('http') !== -1 ? value : 'http:' + value;
                postQuill.insertEmbed(addImgRange != null ? addImgRange.index : 0, 'image', value, Quill.sources.USER)
            }
        } catch (e) {
            console.log(e);
        }
    }
    reader.readAsDataURL(file);

}

editorContent = document.querySelector('input[name=content]');
postQuill.on('text-change', function (delta, oldDelta, source) {
    if (source === 'user') {
        console.log(postQuill.root.innerHTML);
        editorContent.value = postQuill.root.innerHTML;
    }
});