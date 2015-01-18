@extends("layouts.master")
@section("content")
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            PAK Summit <small>forma za unos podataka postojećih članova</small>
                        </h1>
                    <div class="populate-form">
                        {{Form::open(["url"=>"populate","method"=>"post","role"=>"form"])}}
                        <div class="form-group">
                            {{ Form::label("ime")}}
                            {{ Form::text("first_name","",["class"=>"form-control","placeholder"=>"ime"])}}
                        </div>
                        @if($errors->any())
                            <span class="error">{{$errors->first("first_name")}}</span>
                        @endif
                        <div class="form-group">

                            {{ Form::label("prezime")}}
                            {{ Form::text("last_name","",["class"=>"form-control","placeholder"=>"prezime"])}}
                        </div>
                        @if($errors->any())
                            <span class="error">{{$errors->first("last_name")}}</span>
                        @endif
                        <div class="form-group">

                            <h4 class="form-group-label">Datum rođenja:</h4>
                            {{ Form::label("dan")}}
                            {{ Form::selectRange("day_of_birth",1,31,["class"=>"form-control"])}}
                            &nbsp;
                        @if($errors->any())
                            <span class="error">{{$errors->first("day_of_birth")}}</span>
                        @endif

                            {{ Form::label("mjesec")}}
                            {{ Form::selectRange("month_of_birth",1,12,["class"=>"form-control"])}}
                            &nbsp;
                        @if($errors->any())
                            <span class="error">{{$errors->first("month_of_birth")}}</span>
                        @endif

                            {{ Form::label("godina")}}
                            {{ Form::selectYear("year_of_birth",1950,2010)}}
                            </div>
                        @if($errors->any())
                            <span class="error">{{$errors->first("year_of_birth")}}</span>
                        @endif

                        <div class="form-group">
                            {{ Form::label("mjesto rođenja")}}
                            {{ Form::text("place of birth","",["class"=>"form-control","placeholder"=>"mjesto rođenja"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("place_of_birth")}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            {{ Form::label("nacionalnost")}}
                            {{ Form::text("nationality","",["class"=>"form-control","placeholder"=>"nacionalnost"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("nationality")}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            {{ Form::label("zanimanje")}}
                            {{ Form::text("occupation","",["class"=>"form-control","placeholder"=>"zanimanje"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("occupation")}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            {{ Form::label("državljanstvo")}}
                            {{ Form::text("citizenship","",["class"=>"form-control","placeholder"=>"državljanstvo"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("citizenship")}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            {{ Form::label("JMBG")}}
                            {{ Form::text("identity_card_id","",["class"=>"form-control","placeholder"=>"JMBG"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("identity_card_id")}}</span>
                        @endif

                        </div>
                            <h4 class="form-group-label">Adresa:</h4>
                        <div class="form-group">
                            {{ Form::label("država")}}
                            {{ Form::text("country","",["class"=>"form-control","placeholder"=>"država"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("country")}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            {{ Form::label("grad")}}
                            {{ Form::text("city","",["class"=>"form-control","placeholder"=>"grad"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("city")}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                        <span class="form-inline">
                            {{ Form::label("ulica")}}
                            {{ Form::text("street_name","",["class"=>"form-control","placeholder"=>"ulica"])}}
                        </span>&nbsp;
                        @if($errors->any())
                            <span class="error">{{$errors->first("street_name")}}</span>
                        @endif
                        <span class ="form-inline">
                            {{ Form::label("broj")}}
                            {{ Form::text("street_no","",["class"=>"form-control","size"=>"3","placeholder"=>"broj"])}}
                        </span>
                        @if($errors->any())
                            <span class="error">{{$errors->first("street_no")}}</span>
                        @endif
                        </div>
                        <hr>


                        <div class="form-group">
                            <h4 class="form-group-label">Mobilni telefon:</h4>
                        <span class ="form-inline">
                            {{ Form::label("broj države: + ")}}
                            {{ Form::text("mobile_country_code","",["class"=>"form-control","size"=>"4"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("mobile_country_code")}}</span>
                        @endif
                        </span>&nbsp;
                        <span class ="form-inline">
                            {{ Form::label("broj operatera:")}}
                            {{ Form::text("mobile_operator_no","",["class"=>"form-control","size"=>"4"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("mobile_operator_no")}}</span>
                        @endif
                        </span>&nbsp;
                        <span class ="form-inline">
                            {{ Form::label("broj telefona:")}}
                            {{ Form::text("mobile_no","",["class"=>"form-control","size"=>"10"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("mobile_no")}}</span>
                        @endif
                        </span>
                        </div>

                        <div class="form-group">
                            <h4 class="form-group-label">Fiksni telefon:</h4>
                        <span class ="form-inline">
                            {{ Form::label("broj države: + ")}}
                            {{ Form::text("landline_country_code","",["class"=>"form-control","size"=>"4"])}}
                        </span>&nbsp;
                        <span class ="form-inline">
                            {{ Form::label("broj mjesta:")}}
                            {{ Form::text("landline_city_no","",["class"=>"form-control","size"=>"4"])}}
                        </span>&nbsp;
                        <span class ="form-inline">
                            {{ Form::label("broj telefona:")}}
                            {{ Form::text("landline_no","",["class"=>"form-control","size"=>"10"])}}
                        </span>

                        </div>
                        <hr>
                        <div class="form-group">
                            {{ Form::label("email")}}
                            {{ Form::email("email","",["class"=>"form-control","placeholder"=>"email"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("email")}}</span>
@endif
                        </div>
                        <div class="form-group">
                            {{ Form::label("broj članske karte")}}
                            {{ Form::text("member_card_id","",["class"=>"form-control","placeholder"=>"broj članske karte"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("member_card_id")}}</span>
@endif
                        </div>
                        <hr>

                        <div class="form-group">

                            <h4 class="form-group-label">Datum pristupanja:</h4>
                            {{ Form::label("dan")}}
                            {{ Form::selectRange("join_day",1,31,["class"=>"form-control"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("join_day")}}</span>
@endif
                            &nbsp;

                            {{ Form::label("mjesec")}}
                            {{ Form::selectRange("join_month",1,12,["class"=>"form-control"])}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("join_month")}}</span>
@endif
                            &nbsp;

                            {{ Form::label("godina")}}
                            {{ Form::selectYear("join_year",2010,2020)}}
                        @if($errors->any())
                            <span class="error">{{$errors->first("join_year")}}</span>
@endif
                            </div>
                        </br>
                            {{ Form::label("napomena")}}
                            {{ Form::textarea("notes","",["class"=>"form-control","placeholder"=>"napomena"])}}


                        </br>
                            {{ Form::submit("Potvrdi",["class"=>"btn btn-primary pull-right"])}}
                        {{Form::close()}}
                    </div>
                        
                        <!--<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>-->
                    </div>
                </div>
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@stop
