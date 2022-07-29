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
        <h1>ข้อมูลรายการ</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> ข้อมูลรายการ
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

                <div class="panel-body">




                    <table class="table table-bordered " id="datatables-example">
                        <thead>
                            <tr class="filters">
                                <th>ID</th>
                                <th>URL</th>
                                <th>
                                    Status
                                </th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($item as $k => $rs)

                                <tr>
                                    <td class="text-center">{{ ++$k }}</td>
                                    <td class="text-center" >

                                        <a href="{{ route('postrequest.edit',$rs->id) }}">
                                              {{ $rs->url}}</a>
                                        </a>
                                       </td>
                                    <td class="text-center">


                                        @if($rs->status == 'Y')

                                        <button class="btn btn-success" data-popup="tooltip" title="ลบ" data-placement="bottom">
                                            แสดง
                                       </button>


                                        @else

                                        <button class="btn btn-warning" data-popup="tooltip" title="ลบ" data-placement="bottom">
                                            ไม่แสดง
                                       </button>
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        <a  class="btn btn-outline-dark btn-sm"  href="{{ route('postrequest.edit',$rs->id) }}" data-popup="tooltip" title="แก้ไข" data-placement="bottom">
                                            <i class="fa fa-edit"></i> แก้ไข</a>
                                        </a>
                                        <button class="btn btn-outline-dark btn-sm" data-id="{{ $rs->id}}" data-popup="tooltip" title="ลบ" data-placement="bottom">
                                            <i class="fa fa-trash"></i> ลบ</a>
                                        </button>
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



$(document).ready(function() {
    $('#datatables-example').DataTable( {
        "paging":   true,
        "ordering": false,
        "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty":      "Showing 0 to 0 of 0 entries",
        "searching": true,
        "oLanguage": {
            "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ เรดคอร์ด",
        "sLengthMenu": "แสดง _MENU_ เรดคอร์ด",
      "sSearch": "ค้นหา :",
      "sEmptyTable": "ไม่มีข้อมูลในตาราง",
      "sLoadingRecords": "Please wait - loading...",
      "oPaginate": {
        "sNext": "ถัดไป",
        "sPrevious": "ก่อนหน้า"
      }
    },
    } );

} );



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


