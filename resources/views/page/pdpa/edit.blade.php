@extends('layouts.pdpa')

@section('content')
<aside class="right-side">


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary" id="hidepanel1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                           แก้ไขแบบฟอร์ม
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="POST" onsubmit="return validateForm()">
                            @csrf
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">สาขา</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="branch_id" id="branch_id">
                                            @foreach($branch as $branchs)
                                                <option value="{{$branchs->id}}" @if($item->branch_id == $branchs->id) {{'selected'}} @endif>{{$branchs->name}} </option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                                <input id="id" name="id" type="hidden" placeholder="รหัสแบบฟอร์ม" class="form-control" value="{{$item->id}}" required>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">รหัสแบบฟอร์ม</label>
                                    <div class="col-md-10">
                                        <input id="code_form" name="code_form" type="text" placeholder="รหัสแบบฟอร์ม" class="form-control" value="{{$item->code_form}}" required>
                                        <div class="help-block-code">กรุณากรอกรหัสแบบฟอร์ม</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">หมายเหตุ</label>
                                    <div class="col-md-10">
                                        <input id="note" name="note" type="text" placeholder="หมายเหตุ" class="form-control"  value="{{$item->note}}" required>
                                        <div class="help-block-note">กรุณากรอกหมายเหตุ</div>
                                    </div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">Line แจ้งเตือน</label>
                                    <div class="col-md-10">
                                        <input id="linenoti" name="linenoti" type="text" placeholder="Line แจ้งเตือน" class="form-control"  value="{{$item->linenoti}}" required>
                                        <div class="help-block-linenoti">กรุณากรอกLine Notify</div>
                                    </div>
                                </div>

                                <input id="x" name="x" type="hidden" placeholder="Line แจ้งเตือน" class="form-control"  value="{{$item->typeform}}" required>
                                {{-- <div class="form-group">
                                    <label class="col-md-2 text-right" for="name">แสดงรายละเอียดมากขึ้น</label>
                                    <div class="col-md-10">
                                        <input type="radio" name="r2" class="line" value="1" onclick="handleClick(this);"  @if($item->typeform == 1) checked @endif/>
                                        <label>แสดงแบบที่ 1
                                        </label>
                                        <input type="radio" name="r2" class="line" value="2" onclick="handleClick(this);"  @if($item->typeform == 2) checked @endif/>
                                        <label>แสดงแบบที่ 2
                                        </label>
                                    </div>
                                </div>
 --}}



                                {{-- <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">สี Button</label>
                                    <div class="col-md-10">
                                        <input type="color" id="bt_color" name="bt_color"
                                            value="{{$item->bt_color}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">ชื่อปุ่ม</label>
                                    <div class="col-md-10">
                                        <input id="bt_name" name="bt_name" type="text" placeholder="ชื่อ ปุ่ม" class="form-control"  value="{{$item->bt_name}}" required>
                                        <div class="help-block-linenoti">กรุณากรอกชื่อปุ่ม</div>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">ข้อความ Consent *</label>
                                    <div class="col-md-10">
                                        <textarea name="details"  id="details"> {{$item->des}} </textarea>
                                        <div class="help-block-details">กรุณากรอกข้อความ</div>
                                </div>

                                {{-- <div class="form-group" id="con2" @if($item->typeform == 1) hidden @endif>
                                    <label class="col-md-2 control-label" for="email">ข้อความ Consent 2*</label>
                                    <div class="col-md-10">
                                        <textarea name="details2"  id="details2">{{$item->des2}}</textarea>
                                        <div class="help-block-details">กรุณากรอกข้อความ</div>
                                </div> --}}
                            </div>



                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">ข้อความยินยอม</label>
                                    <div class="col-md-10">
                                        <input id="agree" name="agree" type="text" placeholder="ข้อความยินยอม"  value="{{$item->agree}}" class="form-control" required>
                                        <div class="help-block-agree">กรุณากรอกข้อความ</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email"> <button type="button" class="btn btn-responsive btn-primary btn-lg btn-save">บันทึก</button></label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </section>

</aside>
<style type="text/css">
.help-block-code,.help-block-note,.help-block-linenoti,.help-block-agree,.help-block-details{
    display: none;
    color: red;
    text-align: center;
}

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details', {
        filebrowserUploadUrl: "{{route('uploadx', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',

    });

    //var linenoti = $('#linenoti').val();



//     var currentsame = document.getElementById("x");

//     function handleClick(myRadio) {

//     currentValue = myRadio.value;
//     var moreText = document.getElementById("con2")
//     var currentname = document.getElementById("x").value = myRadio.value;

//     if(currentValue == 2) {
//         moreText.style.display = 'inline'
//     }else {

//         moreText.style.display = 'none'
//     }
// }

    function validateForm(){

var code = $('#code_form').val();
var note = $('#note').val();
var linenoti = $('#linenoti').val();

var detail = CKEDITOR.instances.details.getData();
var agree = $('#agree').val();




if(code == ''){
    $('.help-block-code').show();
}
if(note == ''){
    $('.help-block-note').show();
}
if(linenoti == ''){
    $('.help-block-linenoti').show();
}
if(detail == ''){
    $('.help-block-details').show();
}
if(agree == ''){
    $('.help-block-agree').show();
}









if(code == ''){
    return false;
}else if(agree == ''){
    return false;
}else if(note == ''){
    return false;
}else{
    return true;
}

}



    $('body').on('click', '.btn-save', function () {

let valform = validateForm();
console.log(valform);
  if(valform === true){
    var id = $('#id').val();
var code = $('#code_form').val();
var note = $('#note').val();
var linenoti = $('#linenoti').val();
var agree = $('#agree').val();
var detail = CKEDITOR.instances.details.getData();
// var details2 = CKEDITOR.instances.details2.getData();
var branch_id = $('#branch_id').val();
// var bt_name = $('#bt_name').val();
// var bt_color = $('#bt_color').val();




      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });

      $.ajax({
          dataType: 'json',
          type:'PUT',
          data: {
                                '_token': "{{ csrf_token() }}",
                                code_form:code,note:note,linenoti:linenoti,agree:agree,detail:detail,branch_id:branch_id
                            },
          url: '/cms/pdpa/' + id,
          success: function(datas){
            swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");

//             setTimeout(function(){
//                 window.location.href = '/pdpa'
// }, 2000);
          }
      })


      }else {
       return false
  }
});

</script>


@endsection
