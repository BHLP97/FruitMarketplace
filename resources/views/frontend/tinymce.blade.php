<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laracoding.com TinyMCE Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <h2>Laracoding.com - TinyMCE Example</h2>
        <form action="" method="get">
            <div class="mb-3">
                <label for="pwd">TinyMCE input:</label>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
</html>