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
                        <form class="form-horizontal" action="{{ route('postrequest.update',$items->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <!-- Name input-->

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">สถานะ</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="status" id="status">
                                                <option value="Y" @if($items->status == 'Y') {{'selected'}} @endif>แสดง </option>
                                                <option value="F" @if($items->status == 'F') {{'selected'}} @endif>ไม่แสดง </option>
                                        </select>
                                      </div>
                                </div>
                                <!-- Email input-->


                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <input id="id" name="id" type="hidden" value="{{$items->id}}" required>

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
