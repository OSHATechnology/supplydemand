$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: 'barang',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_cabang', name:'id_cabang'},
            {data: 'nama', name:'nama'},
            {data: 'id_jenis_barang', name:'id_jenis_barang'},
            {data: 'tgl_barang_masuk', name:'tgl_barang_masuk'},
            {data: 'harga', name:'harga'},
            {data: 'stock', name:'stock'},
            {data: 'status', name:'status'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
