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
            url: 'car',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_cabang', name:'id_cabang'},
            {data: 'nama', name:'nama'},
            {data: 'tgl_mobil_masuk', name:'tgl_mobil_masuk'},
            {data: 'status', name:'status'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
