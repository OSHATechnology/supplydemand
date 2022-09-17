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
            url: 'salesdetail',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_penjualan', name:'id_penjualan'},
            {data: 'id_barang', name:'id_barang'},
            {data: 'qty', name:'qty'},
            {data: 'harga_jual', name:'harga_jual'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
