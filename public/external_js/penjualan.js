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
            url: 'sales',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'tgl_penjualan', name:'tgl_penjualan'},
            {data: 'invoice', name:'invoice'},
            {data: 'total_pembayaran', name:'total_pembayaran'},
            {data: 'status', name:'status'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
