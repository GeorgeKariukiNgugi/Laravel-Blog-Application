@extends('superClasses.mainPage')
@section('content')
<div style="background-color:rgb(184,235,195);padding-top:5%;padding-bottom:5%">
        <div class="container">
            <h3 style = "text-align: center">All Users.</h3>
            <div class="table-responsive">
                
                        @if (count($users)<1)
                            <h3>There are No Users Registered.</h3>
                        @else
                        <table class="table table-striped table-bordered table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>UersName</th>
                                        <th>Email</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($users as $user)
                                     <tr>
                                            <td>{{$id++}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            
                                        </tr>
                                     @endforeach                                             
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td><strong>id</strong><br></td>
                                                <td><strong>UersName</strong><br></td>
                                                <td><strong>Email</strong><br></td>
                                                <td><strong>Date Created</strong><br></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                        @endif
                      
            </div>
        </div>    
    </div>
@endsection