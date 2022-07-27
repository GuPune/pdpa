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
                           แก้ไข
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <!-- Name input-->

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">รหัสสาขา</label>
                                    <div class="col-md-9">
                                        <input id="code" name="code" type="text" placeholder="รหัสสาขา" class="form-control" value="" required></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">ชื่อ</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="ชื่อสาขา" class="form-control"   value="" required></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <input id="id" name="id" type="hidden" value="" required>

                                        <button type="submit" class="btn btn-responsive btn-primary btn-sm">บันทึก</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </section>

</aside>
@endsection
