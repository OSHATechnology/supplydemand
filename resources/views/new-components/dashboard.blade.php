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
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                {{--  --}}
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">This is some text within a card body.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="d-flex gap-1">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    100
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    100
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    100
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    100
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
                                <h5 class="card-title">This is some text within a card body.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-1">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    This is some text within a card body.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    This is some text within a card body.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    This is some text within a card body.
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
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This is some text within a card body.</h5>
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This is some text within a card body.</h5>
                        This is some text within a card body.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
