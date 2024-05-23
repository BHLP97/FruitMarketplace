<?php 
    use App\Models\Category;
    use App\Models\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/882fzy4zjz7pxaud125bwhf8khbm3h69j5o6lajya1z7l5yi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#reviewContent',
            width: 600,
            height: 300,
            plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
            'media', 'table', 'emoticons', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
            menu: {
            favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: false,
            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight
        
                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Laravel File manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, { text: message.text })
                    }
                })
            }
        });
        tinymce.init({
            selector: '#userComment',
            width: 600,
            height: 300,
            plugins: [
                'help'
            ],
            toolbar: 'undo redo | help',
            menubar: 'help',
            content_css: false,
            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight
        
                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Laravel File manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, { text: message.text })
                    }
                })
            }
        });
    </script>
    
    <title>Book4Review</title>
</head>
<body>
    <style>
        .comment {
            margin-left: 30px;
        }
        .rating-checked {
            color: orange;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .rate {

        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;    
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;  
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>
    <div class="PageContent main-content container">
        <div>
            @if(Auth::check())
                You are logged in as {{Auth::user()->name}}    
            @else
                You are not logged in    
            @endif
        </div>
        <div class="one-col-crsl-header mb-s">
            <h2 class="float-left">{{$book->book_title}}</h2>
            <div class="clear"></div>
        </div>
        <div id="thePerfectBook" class="homepage-module-container">
            <div class="book-details-wrapper">
                <div class="pb-content" style="display:flex; flex-direction:row">
                    <div class="prd-img-cont col-6">
                        <div class="pb-image-cont">
                            <a class="image-container" title="view details" >
                                <img src="{{$book->book_cover}}" class="lp-lazy ResolveComplete col-6" style="width:300px" data-resolvechain="product=path[/pimages/9780063335776_p0_v6]&amp;call=url[file:common/decodeProduct.chain]" alt="Title: Nineteen Steps, Author: Millie Bobby Brown" data-bottom-align="" id="resolve_9">
                            </a>
                        </div>
                    </div>
                    <div class="book-summary col-6">
                        Author: {{$book->book_author}}
                        <br>
                        Category: {{Category::find($book->book_category_id)->name}}
                    </div>
                </div>
                <div class="reviews">
                    @foreach ($ratings as $rating)
                    <div class="review" id="{{$rating->id}}" style="margin-bottom:40px">
                        <h3>" {{$rating->name}} "</h3> <i>{{User::find($rating->user_id)->name}}</i>
                        <?php
                            $rating = (int)$rating->rating;
                        ?>
                        @for($i= 0; $i <5; $i++)
                            <span class="fa fa-star {{($rating<=0 ? '' : 'rating-checked')}}"></span>
                            <?php
                                $rating = $rating - 1;
                            ?>
                        @endfor
                        <br>
                        {{$rating->description}}
                        <br>
                        {{$rating->content}}
                        <br>
                        <h4>Comments</h4>
                        @foreach ($comments as $comment)
                            {{-- @if($comment->review_id == $review->id)
                               <div class="comment">
                                    <img src="{{User::find($comment->user_id)->avatar}}" alt="" style="width:100px">
                                    {{$comment->content}}
                                </div> 
                            @endif --}}
                        @endforeach
                        <div class="myComment">
                            Leave a comment
                            
                            <textarea class="tinyMce" id="userComment" name="content"></textarea>
                            <button onclick="submitComment()" class="btn btn-primary">Post</button>
                            <br>
                        </div>
                    </div> 
                    @endforeach    
                </div>
                <form method="post">
                    @csrf
                    <div class="d-flex flex-row">
                        <h3>Publish a review</h3>
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <div class="form-group">
                            <label for="reviewTitle">Review title</label>
                            <input type="text" class="form-control" id="reviewTitle" name="name" placeholder="Enter the title of the review...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reviewDescription">Review description</label>
                        <input type="text" class="form-control" id="reviewDescription" name="description" placeholder="Enter the description of the review...">
                    </div>
                    <div class="form-group">
                        <label for="reviewContent">Review content</label>
                        <textarea class="tinyMce" id="reviewContent" name="content"></textarea>
                    </div>
                    <input type="text" class="form-control" id="bookId" name="book_id" style="display:none" value="{{$book->id}}">
                    {{-- <div class="input-group">
                        <input type="text" id="image_label" class="form-control" name="image"
                                aria-label="Image" aria-describedby="button-image">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                        </div>
                    </div> --}}
                    <button onclick="submitReview()" type="button" class="btn btn-primary">Submit</button>
                </form>
                <div id="fm" style="height: 400px;"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

    <script>
        var url = "{{route('frontend.publish.review')}}";
        function submitReview(){
            var fd = new FormData();
            fd.append('name', $('#reviewTitle').val())
            fd.append('description', $('#reviewDescription').val())
            fd.append('content', tinymce.get("reviewContent").getContent())
            fd.append('rating', $('input[name="rate"]:checked').val())
            fd.append('book_id', $('#bookId').val())
            $.ajax({
                type: 'post',
                url: url,
                contentType: false,
                data: fd,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                traditional: true,
                success: function (data) {
                    console.log(data)
                }
            });
        }
    </script>
</body>
</html>