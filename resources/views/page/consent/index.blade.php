<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDPA</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center">
                    <img src="http://consentservice.iddriver.com/img/1.png" alt="logo" width="100" height="100">
                </div>


                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-6">
                        <div class="p-6">
                            <div class="flex items-center justify-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">สาขา :   {{$item['branch']}}</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-6">
                        <div>
                            <div class="flex items-center justify-center">
                                <div class="ml-4 leading-7"><a href="#" class="underline text-gray-900 dark:text-white">หมายเหตุ : {{$item['note']}} </a></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-12">
                        <div class="p-6">

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {!! $item['des'] !!}

                                </div>

                                <div class="ml-12" id="more">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        {!! $item['des'] !!}
                                </div>
                                </div>
                            </div>
                        </div>
                        @if ($item['typeform'] == 2)
                        <div class="grid grid-cols-1 md:grid-cols-6">
                            <div class="p-6">
                                <div class="flex items-center justify-center">
                                    <button data-v-00d461e0="" type="button" onclick="myFunction()" class="btn" id="bt-more" style="background-color:{{$item['bt_color']}} ">   {{$item['bt_name']}}</button>
                                </div>
                            </div>
                        </div>
<div id='more-send'>
    <input id="token" name="token" type="hidden" placeholder="Line แจ้งเตือน" class="form-control" value="{{$item['token']}}">
    <input id="typeform" name="typeform" type="hidden" placeholder="typeform" class="form-control" value="{{$item['typeform']}}">
    <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="p-6">
            <div class="flex items-center justify-center">
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck" value="0">
                      <label class="form-check-label" for="gridCheck">
                       {{$item['agree']}}
                      </label>
                      <div class="help-block-agree">กรุณาติ๊กเครื่องหมายถูก</div>
                    </div>
                  </div>

            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="p-6">
            <div class="flex items-center justify-center">
                <button data-v-00d461e0="" type="button" class="btn btn-success btn btn-primary btn-save">ส่งข้อมูล</button>
            </div>
        </div>
    </div>

</div>

@else
<div>
    <input id="token" name="token" type="hidden" placeholder="Line แจ้งเตือน" class="form-control" value="{{$item['token']}}">
    <input id="typeform" name="typeform" type="hidden" placeholder="typeform" class="form-control" value="{{$item['typeform']}}">
    <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="p-6">
            <div class="flex items-center justify-center">
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck" value="0">
                      <label class="form-check-label" for="gridCheck">
                       {{$item['agree']}}
                      </label>
                      <div class="help-block-agree">กรุณาติ๊กเครื่องหมายถูก</div>
                    </div>
                  </div>

            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="p-6">
            <div class="flex items-center justify-center">
                <button data-v-00d461e0="" type="button" class="btn btn-success btn btn-primary btn-save">ส่งข้อมูล</button>
            </div>
        </div>
    </div>

</div>

@endif

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">

                                <div class="modal-body">
                                    <div class="form-group">
                                        <h5 style="
                                        text-align: center;
                                    ">เบอร์โทรศัพท์</h5>
                                      </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="message-text" onkeypress='validate(event)'  placeholder="เลือกตัวเลข 0-9">
                                        <div class="help-block-number">กรุณากรอกเบอร์โทรศัพท์</div>
                                      </div>


                                      <div class="row">

                                        <div class="col-md-12 text-center"><div id="modal_time"></div><div id="modal_day"></div></div>
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary save-consent text-center">ตกลง</button>
                                </div>
                              </div>
                            </div>
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

    #more {display: none;}
    #more-send {display: none;}


    </style>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">


function myFunction() {

  var moreText = document.getElementById("more");
  var moreTextsend = document.getElementById("more-send");
  var showbtmore = document.getElementById("bt-more");


  moreTextsend.style.display = 'inline';

  moreText.style.display = "inline";
  showbtmore.style.display = "none";

}


window.onload = () => {
 const myInput = document.getElementById('message-text');
 myInput.onpaste = e => e.preventDefault();
}

function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}


    $('body').on('click', '.save-consent', function (e) {
        var number = $('#message-text').val();
        var token = $('#token').val();
        var userAgent = navigator.userAgent;
        if(number == ''){
            $('.help-block-number').show();
            return false;
        }
       $.get("https://ipinfo.io", function(response) {
            console.log(response.ip);
        }, "json")




      $.ajax({
          dataType: 'json',
          type:'POST',
          data: {
              '_token': "{{ csrf_token() }}",
                 number:number,token:token,userAgent:userAgent },
          url: '/saveconsent',
          success: function(datas){
            swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");
             window.location.href = '/thanks'

          }
      })



    });


    $('body').on('click', '.btn-save', function (e) {


        const checkbox = document.getElementById('gridCheck').value


        if(checkbox == 1){
            $("#exampleModal").modal()

            var d = new Date();
var n = d.toLocaleTimeString();



var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy + '-' + n;

            $("#modal_day").html(today);

        }else {
            $("#exampleModal").modal('hide')

             $('.help-block-agree').show();

        }


    });

    const checkbox = document.getElementById('gridCheck')

checkbox.addEventListener('change', (event) => {
  if (event.currentTarget.checked) {
    document.getElementById("gridCheck").value = 1;
    $('.help-block-agree').hide();
  } else {
    document.getElementById("gridCheck").value = 0;

  }
})




       </script>
