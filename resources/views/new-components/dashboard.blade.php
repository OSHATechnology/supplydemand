<!DOCTYPE html>
<html lang="en">

@extends('new-layout.index')
@section('content')
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <div id="chart1" class="text-dark"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column justify-content-between">
                {{--  --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">This is some text within a card body (90 Days Out)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="d-flex gap-1">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="text-center large">100</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="text-center large">100</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="text-center large">100</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="text-center large">100%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--  --}}
                <div class="row">
                    <div class="col-12 my-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">This is some text within a card body (Last 90 Days)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-1">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <div id="chart2" class="text-dark"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <div id="chart3" class="text-dark"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <div id="chart4" class="text-dark"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--  --}}
        <div class="row my-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This is some text within a card body.</h5>
                        <div id="chart5" class="text-dark"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This is some text within a card body.</h5>
                        <div id="chart6" class="text-dark"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This is some text within a card body.</h5>
                        <div id="chart7" class="text-dark"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
