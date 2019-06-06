@extends('superClasses.mainPage')
@section('content')
<div style="background-color:rgb(184,235,195);">
        <div class="container">
            <div class="table-responsive">
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
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                            <td>Cell 4</td>
                            <td>Cell 4</td>
                        </tr>
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
            </div>
        </div>    
    </div>
@endsection