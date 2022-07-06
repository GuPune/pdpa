@extends('layouts.pdpa')

@section('content')
<aside class="right-side">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissable margin5">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success:</strong> {{ $message }}
    </div>
    @endif
    <section class="content-header">
        <!--section starts-->
        <h1>ข้อมูลสาขา</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> ข้อมูลสาขา
                </a>
            </li>
            <li>
                <a href="#">ตารางข้อมูล</a>
            </li>

        </ol>
    </section>
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> ตารางข้อมูล
                    </h4>

                </div>
                <br />
                <div class="col-md-offset-0 col-md-12">
                    <div class="card-header py-3"  style="text-align:right; margin: 0 0 2% 0;">
                        <a href="/cms/branch/create" class="btn btn-success">
                            เพิ่มสาขา
                        </a>
                    </div>
                </div>
                <br />
                <div class="panel-body">




                    <table class="table table-bordered " id="datatables-example">
                        <thead>
                            <tr class="filters">
                                <th>ลำดับ</th>
                                <th>รหัสสาขา</th>
                                <th>
                                    ชื่อสาขา
                                </th>
                                <th>จัดการ</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                                        </tr>
                            </tbody>

                    </table>
                    <!-- Modal for showing delete confirmation -->
                    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="user_delete_confirm_title">
                                        Delete User
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this user? This operation is irreversible.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a href="deleted_users.html" class="btn btn-danger">Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row-->
    </section>
</aside>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function RefreshTable(data) {




data._token = "{{ csrf_token() }}";
return data;

}

var searchData = {};

var table = $('#datatables-example').DataTable({
    processing: true,
    serverSide: true,

    ajax: {
        url:  "{!! route('branch.data') !!}",
        method: 'POST',
        data: RefreshTable,
    },
    columns: [
        {data: 'id'},
        {data: 'code'},
        {data: 'name'},
        {data: 'action', name: 'action', orderable:false, serachable:false},

    ],catch (Error) {
                if (typeof console != "undefined") {
                    console.log(Error);
                }
    },
    columnDefs: [{
                targets: [0,3],
                orderable: false,
                searchable: false
            },
            {
                    targets: 0,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {


return row.ids;


                    }
                },

            {
                    targets: 3,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {

                        var btnEdit = '<a   href="/backend/branch/'+ row.id +'/edit" data-id="1"  class="btn btn-outline-dark btn-sm"><i class="fa fa-edit"></i> แก้ไข</a>';
                        var btnDel = '<a   href="#" data-id="'+ row.id +'"  class="btn btn-outline-dark btn-sm btn-delete"><i class="fa fa-trash"></i> ลบ</a>';

                         return btnEdit + btnDel;
                    }
                },
        ]



});


$('body').on('click', '.btn-delete', function (e) {

var id = $(this).attr('data-id');

deleteConf(id)

});

function deleteConf(id) {
            swal({
                title: "คุณต้องการลบจริงหรือไม่?",
                text: "ข้อมูลไม่สามารถกู้คืนได้!",
                icon: "warning",
                buttons: [
                    'ยกเลิกลบรายการ',
                    'ลบรายการ'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'ลบรายการ!',
                        text: 'ลบรายการเรียบร้อย',
                        icon: 'success'
                    }).then(function() {
                        $.ajaxSetup({
                             headers: {
                                   'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                 }
                                });
                        $.ajax({
                            dataType: 'json',
                            type:'DELETE',
                            data: {
                                '_token': "{{ csrf_token() }}",
                                id: id
                            },
                            url: '/cms/branch/' + id,
                            success: function(datas){

                            location.reload();
                            }

                        })
                    });
                } else {
                    swal("ยกเลิก", "ยกเลิกรายการ", "error");
                }
            });
        } // error form show text



   </script>
@endsection


