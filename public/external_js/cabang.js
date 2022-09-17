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
            url: 'cabang',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama', name:'nama'},
            {data: 'alamat', name:'alamat'},
            {data: 'status', name:'status'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
