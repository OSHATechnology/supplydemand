@extends('layouts.index')
@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="row">
            <!-- Small table -->
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="float-left">Table Cabang</h3>
                        <button class="btn btn-primary btn-add float-right" type="button" title="Add New"><i class="bi bi-plus"></i> Add New</button>
                        <table class="table datatables" id="myTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>Toyota</td>
                                    <td>Cimahi</td>
                                    <td>Jl. kerkof</td>
                                    <td>(022) 76876976</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="" class="btn-view" title="View"><i class="bi bi-arrows-fullscreen"></i></a>
                                        <a href="" class="btn-edit" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                        <a href="" class="btn-delete" title="Delete"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
    </div> <!-- .col-12 -->
</div>

@endsection