@extends('superClasses.mainPage')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header" style="background-color:rgba(201,0,251,0.03);">
                <h4 class="text-center mb-0">Posts By :&nbsp;<span>Text</span></h4>
            </div>
            <div class="card-body">
                <div class="card" style="margin-bottom:3%;">
                    <div class="card-body" style="background-color:rgb(225,175,234);">
                        <h4>Heading.</h4>
                        <h6 class="text-muted card-subtitle mb-2"><span id="Author">Text</span><span id="Date" style="padding-left:4%;">Text</span></h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <div style="text-align:center;">
                            <div class="btn-group btn-group-lg" role="group"><button class="btn btn-success" type="button"><i class="fa fa-edit"></i>Edit.</button><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i>Delete</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection