@extends('layouts.app')
@section('content')
    <h3 class="page-title">Dashboard</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="panel" style="background-color:Azure">
                <div class="panel-heading">
                    <h3 class="panel-title" tyle="color:blue;">Total Collectable</h3>
                    <h4>{{$data["total_amount"]}} TK</h4>
                </div>
                <div class="panel-body">
                    <div id="demo-line-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel" style="background-color:Azure">
                <div class="panel-heading">
                    <h3 class="panel-title">Total Due</h3>
                    <h4>{{$data["total_due"]}} Tk</h4>
                </div>
                <div class="panel-body">
                    <div id="demo-bar-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">New Admission</h3>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>baby Name</th>
                                <th>parents Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>evan</td>
                                <td>shaikh</td>
                                <td>shaikh@gmail.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ritu</td>
                                <td>lotif Mondol</td>
                                <td>lotif@gmail.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sonali</td>
                                <td>Aynal haque</td>
                                <td>aynal@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC TABLE -->
        </div>
        <div class="col-md-6">
            <!-- TABLE NO PADDING -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Assigned Teacher</h3>
                </div>
                <div class="panel-body no-padding">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>Baby Name</th>
                                <th>Parent Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Arabindu Mondol</td>
                                <td>Akramul Haque</td>
                                <td>Anamul Haque</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Afroja Begom</td>
                                <td>Arin haque</td>
                                <td>Anamul Haque</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Alom Mondol</td>
                                <td>Jui</td>
                                <td>Abdur rajjak</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE NO PADDING -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- TABLE STRIPED -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">table</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name</th>
                                <th>UserName</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE STRIPED -->
        </div>
        <div class="col-md-6">
            <!-- TABLE HOVER -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Table</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name</th>
                                <th>User Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE HOVER -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BORDERED TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Bordered Table</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BORDERED TABLE -->
        </div>
        <div class="col-md-6">
            <!-- CONDENSED TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Table</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Name</td>
                                <td>Name</td>
                                <td>@Name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END CONDENSED TABLE -->
        </div>
        <!-- END MAIN CONTENT -->
    @endsection
