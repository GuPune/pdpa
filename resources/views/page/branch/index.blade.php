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
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box primary">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>ตารางข้อมูล
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>รหัสสาขา</th>
                                        <th>ชื่อสาขา</th>
                                        <th>จัดการ</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>001</td>
                                        <td>Kelly</td>
                                     
                                        <td>
                                            <span class="label label-sm label-success">Approved</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>002</td>
                                        <td>Ramos</td>
                                    
                                        <td>
                                            <span class="label label-sm label-info">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>003</td>
                                        <td>Cox</td>
                                     
                                        <td>
                                            <span class="label label-sm label-warning">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>004</td>
                                        <td>Greer</td>
                                      
                                        <td>
                                            <span class="label label-sm label-danger">Blocked</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->
            </div>
        
        </div>
     
        
    </section>
</aside>
@endsection
