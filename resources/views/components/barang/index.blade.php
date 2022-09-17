@extends('layouts.index')
@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="float-left">Table Barang</h3>
                        <button class="btn btn-primary btn-add float-right" type="button" title="Add New"><i class="bi bi-plus"></i> Add New</button>
                        <table class="table datatables" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Cabang</th>
                                    <th>Name</th>
                                    <th>Jenis</th>
                                    <th>Tanggal</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <a href="" class="btn-view" title="View"><i class="bi bi-arrows-fullscreen"></i></a>
                                        <a href="" class="btn-edit" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                        <a href="" class="btn-delete" title="Delete"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection