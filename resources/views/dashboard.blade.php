@extends('layouts.admin')
@section('render')

    <style>
        h1{
            font-size: 50pt!important;
        }
        a{
            text-decoration: none;
        }
    </style>
    <div class="container py-5">
        @include('common.alert')
        <div class="row  mt-5" ></div>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-primary">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                        Electoral Areas
                            </div>
                            <div class="row justify-content-center py-1">
                             ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                 @include('admin.data.ea.form')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 " style="background-color: yellow">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                        Polling Stations
                            </div>
                            <div class="row justify-content-center py-1">
                                ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                      @include('admin.data.ps.form')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-success">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                        Daily Registration Data Sheet
                            </div>
                            <div class="row justify-content-center py-1">
                             ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                   @include('admin.data.ea_list')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 " style="background-color: rgb(50, 8, 141)">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                                General Daily Data Colleciton
                            </div>
                            <div class="row justify-content-center py-1">
                                ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                    <a href="/view-collection">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-light">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                      General EA List
                            </div>
                            <div class="row justify-content-center py-1">
                             ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                    <a href="/general-ea-list">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
