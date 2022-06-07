<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>


            body {
                font-family: "THSarabunNew"!important;

            }
            .center{
            text-align: center;
             }
             .detail{
            font-size: 21px!important;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center center">
                    <img src="http://cmsecom2.idtest.work/img/1.png" alt="logo" width="100" height="100">
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-6">
                        <div class="p-6">
                            <div class="flex items-center justify-center center detail">
                                <div class="ml-4 text-lg leading-7">สาขา : {{$branch}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-6">
                        <div>
                            <div class="flex items-center justify-center center detail">
                                <div class="ml-4 leading-7">หมายเหตุ : {{$note}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-12">
                        <div class="p-6">

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {!! $des !!}
                                </div>
                            </div>

                        </div>

                </div>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-6">
                    <div class="p-6">
                        <div class="flex items-center justify-center center detail">
                            <div class="ml-4 text-lg leading-7">{{$agree}}</div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6">
                    <div>
                        <div class="flex items-center justify-center center detail">
                            <div class="ml-4 leading-7">IP :{{$ip}} - Telephone: {{$number}} {{$created_at}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
<style type="text/css">
    .help-block-code,.help-block-note,.help-block-linenoti,.help-block-agree,.help-block-number{
        display: none;
        color: red;
        text-align: center;
    }
    </style>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
