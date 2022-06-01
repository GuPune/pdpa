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
                           เพิ่มแบบฟอร์ม
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ route('branch.store') }}" method="POST">
                            @csrf
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">สาขา</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="roles" id="roles">
                                            @foreach($branch as $branchs)
                                                <option value="{{$branchs->id}}"  > {{$branchs->name}} </option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">รหัสแบบฟอร์ม</label>
                                    <div class="col-md-10">
                                        <input id="code" name="code" type="text" placeholder="รหัสแบบฟอร์ม" class="form-control" required></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">หมายเหตุ</label>
                                    <div class="col-md-10">
                                        <input id="code" name="code" type="text" placeholder="หมายเหตุ" class="form-control" required></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">Line แจ้งเตือน</label>
                                    <div class="col-md-10">
                                        <input id="name" name="name" type="text" placeholder="Line แจ้งเตือน" class="form-control" required></div>
                                </div>

                               

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">ข้อความ Consent *</label>
                                    <div class="col-md-10">
                                        <textarea name="details"  id="details"></textarea>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">ข้อความยินยอม</label>
                                    <div class="col-md-10">
                                        <input id="name" name="name" type="text" placeholder="ข้อความยินยอม" class="form-control" required></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email"> <button type="submit" class="btn btn-responsive btn-primary btn-lg">บันทึก</button></label>
                                   
                                </div>
                           
                    
                            </fieldset>
                        </form>
                    </div>
                </div>    
            </div>
            </div>
    </section>
   
</aside>
<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details', {
        filebrowserUploadUrl: "{{route('uploadx', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',

    });
</script>
@endsection
