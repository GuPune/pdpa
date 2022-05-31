@extends('layouts.pdpa')

@section('content')
<aside class="right-side">


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
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Users List
                    </h4>

                </div>
                <br />
                <div class="col-md-offset-0 col-md-12">
                    <button type="submit" class="btn btn-primary">เพิ่มสาขา</button>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">


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
                    targets: 3,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
console.log('row');
                        var btnEdit = '<a   href="/archives/1/edit" data-id="1"  class="btn btn-outline-dark btn-sm"><i class="fa fa-edit"></i> แก้ไข</a>';
                         return btnEdit;
                    }
                },
        ]



});



   </script>
@endsection


