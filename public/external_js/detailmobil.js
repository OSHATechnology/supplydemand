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
            url: 'cardetail',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_mobil', name:'id_mobil'},
            {data: 'nama_detail', name:'nama_detail'},
            {data: 'th_keluar', name:'th_keluar'},
            {data: 'transmisi', name:'transmisi'},
            {data: 'warna', name:'warna'},
            {data: 'status', name:'status'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
