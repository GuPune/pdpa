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
        <h1>ข้อมูลแบบฟอร์ม</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> ข้อมูลแบบฟอร์ม
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
                        <a href="/cms/pdpa/create" class="btn btn-success">
                            เพิ่มแบบฟอร์ม
                        </a>
                    </div>
                </div>
                <br />
                <div class="panel-body">
                    <table class="table table-bordered " id="datatables-example">
                        <thead>
                            <tr class="filters">
                                <th>ลำดับ</th>
                                <th>รหัสแบบฟอร์ม</th>
                                <th>
                                    สาขา
                                </th>
                                <th>
                                    หมายเหตุ
                                </th>
                                <th>
                                    QR
                                </th>
                                <th>จัดการ</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($item as $k => $items)
                            <tr>

                                <td class="text-center">{{ ++$k }}</td>
                                <td class="text-center">{{ $items->code_form }}</td>
                                <td class="text-center">{{ $items->branchform->name }}</td>
                                <td class="text-center">{{ $items->note }}</td>
                                <td class="text-center">
                                    @php
                                    /////////////////
                                         $all = $items->token;
                                    $a = 'http://consent.iddriver.com/consent/';
                                    $b = "$a$all";



                                    @endphp
                                    {!! QrCode::size(250)->generate($b); !!}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-dark btn-sm" href="/cms/pdpa/{{ $items->id }}/edit" data-popup="tooltip" title="แก้ไข" data-placement="bottom">
                                        <i class="fa fa-edit">แก้ไข</i>
                                    </a>

                                    <a   href="#"  class="btn btn-outline-dark btn-sm btn-delete" data-id="{{$items->id}}"><i class="fa fa-trash"></i> ลบ</a>

                                </td>
                            </tr>
                        @endforeach
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
                            url: '/cms/pdpa/' + id,
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


