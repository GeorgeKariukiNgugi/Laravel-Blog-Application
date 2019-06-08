@extends('superClasses.mainPage')
@section('content')
<div class="article-clean">
        <div class="container" style = "font-family:'Times New Roman', Times, serif ">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">{{$blogItem->title}}</h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">{{$user->name}}</a><span class="date" style="padding-left:2%">{{$blogItem->created_at}}</span></p><img class="img-fluid" src="{{asset('assets/img/desk.jpg')}}"></div>
                    <div class="text">
                       <p>{!!$blogItem->content!!}</p>                        
                            <figcaption>Caption</figcaption>
                        </figure>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit
                            pulvinar dictum vel in justo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection