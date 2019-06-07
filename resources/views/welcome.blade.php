@extends('superClasses.mainPage')
@section('content')
<div class="article-list" style="background-color:rgb(235,233,233);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Tech News.</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="/singleBlog"><img class="img-fluid" src="assets/img/android.jpeg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/singleBlog" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="/singleBlog"><img class="img-fluid" src="assets/img/code3.png"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/singleBlog" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="/singleBlog"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/singleBlog" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                class="col-sm-6 col-md-4 item"><a href="/singleBlog"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/singleBlog" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>
    </div>
@endsection