<body>
    <form action="" method="get">
        <div class="mb-3">
            <label for="pwd">{{$title}}</label>
            <textarea class="tinyMce" id="myTextarea" name="user-bio"></textarea>
        </div>
        <div class="input-group">
            <input type="text" id="image_label" class="form-control" name="image"
                    aria-label="Image" aria-describedby="button-image">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="fm" style="height: 600px;"></div>
</body>
<script src="https://cdn.tiny.cloud/1/s1goiqhyomqxsw9ryehiy6d4vuxwo21uul586792ll5npv5g/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        tinymce.init({
            selector: '#myTextarea',
        });
        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();
        window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });

    // set file link
    function fmSetLink($url) {
    // cấu hình link
    document.getElementById('image_label').value = $url;
    }
</script>