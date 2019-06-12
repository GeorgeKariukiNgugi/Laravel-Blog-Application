 @extends('superClasses.mainPage')
@section('content')
<div style="background-color:#d3e4f8;">
 <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="margin-top:0px;font-family:'Gentium Book Basic', serif;">CEO Dashboard.</h2>
            </div>
        </div>
        <ol class="breadcrumb" style="background-color:#f1655c;margin-top:10px;">
            <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="login.html"><span>LogIn&nbsp;</span></a></li>
            <li class="breadcrumb-item"><a href="nivice.html"><span>CEO Panel.</span></a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card" style="background-color:#b7e5eb;">
                    <div class="card-header" style="background-color:rgba(181,24,109,0.59);">
                        <h5 class="mb-0">Navigation&nbsp;</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-group-item-info active"><span><strong>Home</strong></span></a><a class="list-group-item list-group-item-action"><span data-toggle="modal" data-target="#ceomodal"><strong>Message CEO.</strong></span></a>
                            <a
                                class="list-group-item list-group-item-action" href="login.html"><span><strong>Edit Details.</strong></span></a><a class="list-group-item list-group-item-action" href="login.html"><span><strong>Doctor Table</strong></span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div>
                    <div class="card">
                        <div class="card-header" style="background-color:#b5186d;">
                            <h5 class="mb-0">Major Operations ....</h5>
                        </div>
                        <div class="card-body" style="background-color:#b7e5eb;">
                            <div class="row">
                                <div class="col">
                                    <div class="card" data-bs-hover-animate="jello" style="background:linear-gradient(90deg, #11998e 0%, #38ef7d 100%);" data-toggle="modal" data-target="#modal">
                                        <div class="card-body" style="color:rgb(254,255,255);">
                                            <p style="color:rgb(249,249,249);"><i class="fa fa-search" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp;search for&nbsp;</p>
                                            <p style="color:rgb(255,252,252);"><strong>Doctor</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card" style="background:linear-gradient(90deg , #45b649 0%, #dce35b 100%);color:rgb(255,255,255);">
                                        <div class="card-body" style="color:rgb(255,255,255);">
                                            <p style="color:rgb(255,255,255);"><i class="fa fa-book" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; view&nbsp;</p>
                                            <p style="color:rgb(255,255,255);"><strong>Appointments.</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><a href = "comments.html">
                                    <div class="card" style="background:linear-gradient(90deg,#3f5efb 0%, #fc466b 100%);">
                                        <div class="card-body">
                                            <p style="color:rgb(255,255,255);"><i class="fa fa-comments" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Message</p>
                                            <p style="color:rgb(255,255,255);"><strong>Board.</strong></p>
                                        </div>
                                    </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color:rgba(181,24,109,0.59);">
                <h5 class="mb-0">Appointments made&nbsp;</h5>
            </div>
            <div class="card-body" style="background-color:#b7e5eb;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-dark table-sm">
                        <caption>This table is all &nbsp;about the doctors appointments.</caption>
                        <thead>
                            <tr>
                                <th class="th" style="color:rgb(255,255,255);">Doctor Name</th>
                                <th style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;color:rgb(255,255,255);">Patient Name</th>
                                <th class="th" style="color:rgb(255,253,253);">Time&nbsp;</th>
                                <th class="th" style="color:rgb(254,254,254);">Patient Id&nbsp;</th>
                                <th style="color:rgb(255,246,246);">Appointmant Date</th>
                                <th style="color:rgb(255,246,246);">Appointmant Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>George Kariuki</td>
                                <td style="padding-top:0px;padding-right:0px;padding-bottom:0px;">Prestige Loamni</td>
                                <td>12:00 pm</td>
                                <td>PT/00145/016</td>
                                <td>12-01-2014</td>
                                <td><a class="btn btn-success" role="button" href="index,html" style="background-color:#87cb16;color:#ffffff; border-radius:50%;" title="view patient." data-toggle="tooltip"><i class="fa fa-eye" style="font-size:20px;color:rgb(0,0,0);"></i></a>
                                    <a
                                        class="btn btn-secondary" role="button" href="index,html" style="background-color:#34e8e8;color:#ffffff;border-radius:50%;margin-right:10px;margin-left:10px;" title="delete appointment" data-toggle="tooltip"><i class="fa fa-trash-o" style="font-size:20px;color:rgb(0,0,0);"></i></a><a class="btn btn-success" role="button" href="index,html" style="background-color:#e8449d;color:#ffffff;border-radius:50%;" title="search ."
                                            data-toggle="tooltip"><i class="fa fa-search" style="font-size:20px;color:rgb(0,0,0);"></i></a></td>
                            </tr>
                            <tr>
                                <td>George Kariuki<br></td>
                                <td>Prestige Loamni<br></td>
                                <td>12:00 pm<br></td>
                                <td>PT/00145/016<br></td>
                                <td>12-01-2014<br></td>
                                <td><button class="btn btn-success" type="button" style="background-color:#87cb16;color:#ffffff; border-radius:50%;" title="View History." data-toggle="tooltip"><i class="fa fa-eye" style="font-size:20px;color:rgb(0,0,0);"></i></button>
                                    <a
                                        class="btn btn-success" role="button" href="index,html" style="background-color:#34e8e8;color:#ffffff;border-radius:50%;margin-right:10px;margin-left:10px;" title="delete appointment" data-toggle="tooltip"><i class="fa fa-trash" style="font-size:20px;color:rgb(0,0,0);"></i></a><a class="btn btn-success" role="button" href="index,html" style="background-color:#e8449d;color:#ffffff;border-radius:50%;margin-right:10px;margin-left:0px;"
                                            title="search ." data-toggle="tooltip"><i class="fa fa-search" style="font-size:20px;color:rgb(0,0,0);"></i></a></td>
                            </tr>
                            <tr>
                                <td>George Kariuki<br></td>
                                <td>Prestige Loamni<br></td>
                                <td>12:00 pm<br></td>
                                <td>PT/00145/016<br></td>
                                <td>12-01-2014<br></td>
                                <td><button class="btn btn-success" type="button" style="background-color:#87cb16;color:#ffffff; border-radius:50%;" title="View History." data-toggle="tooltip"><i class="fa fa-eye" style="font-size:20px;color:rgb(0,0,0);"></i></button>
                                    <a
                                        class="btn btn-success" role="button" href="index,html" style="background-color:#34e8e8;color:#ffffff;border-radius:50%;margin-right:10px;margin-left:10px;" title="delete appointment" data-toggle="tooltip"><i class="fa fa-trash" style="font-size:20px;color:rgb(0,0,0);"></i></a><a class="btn btn-success" role="button" href="index,html" style="background-color:#e8449d;color:#ffffff;border-radius:50%;margin-right:10px;margin-left:0px;"
                                            title="search ." data-toggle="tooltip"><i class="fa fa-search" style="font-size:20px;color:rgb(0,0,0);"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><em>FIRST NAME .</em><br></td>
                                <td><em>SECOND NAME.</em><br></td>
                                <td><em>TIME</em>&nbsp;<br></td>
                                <td><em>PATIENT ID&nbsp;</em><br></td>
                                <td>Appoinment date</td>
                                <td><em>ACTIONS .</em><br></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection