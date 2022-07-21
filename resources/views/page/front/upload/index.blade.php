@extends('layouts.front')


@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
.hidden-upload{

    display:none
}
    </style>
<div>
    <div>
        <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css"> <div class="w-full my-3 text-center md:w-1/2 mx-auto text-lg">

            @auth

             @else
             <div class="my-5"  data-toggle="modal" data-target='#practice_modal'>
                <div class="w-full text-center google">
                <div class="btn btn-primary btn-outline mx-auto google">
                Login
              </div>
            </div>
            </div>
            <div class="text-md p-3">
                หากไม่ Login จะไม่สามารถแก้ไขภาพด้วยตัวท่านเองได้
              </div>

             @endauth


    </div>
     <div class="alert alert-info">
        <div class="mx-auto text-center mt-2 mb-2">
            <input type="checkbox" checked="checked" id="policy" class="checkbox checkbox-primary checkbox-sm mr-1">
             <label for="policy">
            อนุญาตให้ใช้ภาพในการสร้างสถิติ และยอมรับ<a href="/privacy" class="text-blue-600">นโยบายความเป็นส่วนตัว</a></label>
        </div>
    </div>
    <div class="text-md text-center p-2 w-full md:w-1/2 mx-auto">
                <div class="
            text-blue-600
            btn btn-secondary btn-outline
            text-xl
            font-bold
            text-center
            cursor-pointer
            mx-auto
          "><img src="/images/rules.png" class="w-7 h-7 mr-2 inline-block">
          อ่านกติกา
        </div> <!---->

        <div class="text-gray-800 my-1 cursor-pointer text-center"><!----></div>
        <div class="text-gray-800 my-1 cursor-pointer text-center"><!----></div></div>
        <div class="mx-auto text-center w-full md:w-1/2"><!----></div>
        <div class="mx-auto text-center w-full md:w-1/2"><!----></div>

                <div class="text-center text-blue-600 px-4">
                    <span class="cursor-pointer">
          เพิ่มคำอธิบาย
        </span> <!---->
    </div>

    @auth
    <div class="w-full lg:w-1/3 mx-auto p-5">

        <form action="#" onsubmit=" return validateForm();" method="post" id="productForm" enctype="multipart/form-data" class="dropzone dz-clickable w-full rounded-xl">
            {!! csrf_field() !!}
            <div class="previews"></div>
            <input type="hidden" name="multifile" id="multifile" value="">
            <div  id="uploadDropzone">


            <div data-dz-message class="dz-message" id="uplo">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6 mr-2 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>Upload ภาพกิจกรรม<br>(แตะเลือกภาพ หรือ ลากวาง)</span></div></form> <input type="file" multiple="multiple" tabindex="-1" class="dz-hidden-input hidden" style="\n        visibility: hidden;\n        position: absolute;\n        top: 0px;\n        left: 0px;\n        height: 0px;\n        width: 0px;\n      ">
                   </div>

     @else

     <div class="w-full lg:w-1/3 mx-auto p-5">
        <div class="dropzone dz-clickable w-full rounded-xl" id="uu">
            <div class="previews"></div>
            <div  id="uploadDropzone">
            <div data-dz-message class="dz-message">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6 mr-2 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>Upload ภาพกิจกรรม<br>(แตะเลือกภาพ หรือ ลากวาง)</span>
            </div>
        </div>
            </div>



     @endauth

        {{-- <div class="mx-auto text-center mt-2 mb-2">
            <label class="cursor-pointer">
                <input type="checkbox" id="allowOnlyWeb" checked="checked" class="checkbox checkbox-secondary rounded-full self-end"> <span class="ml-3 text-left text-lg text-blue-600">ฉันไม่ต้องการแสดงภาพในหน้า Gallery</span></label>
            </div> --}}

                    </div>


    <div id="showOK" class="w-full p-4 text-gray-500 text-center" >
        <div class="alert alert-info text-center shadow-sm mx-5 mb-4">
            <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6 mr-3 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> <span>ได้รับภาพแล้ว อัพโหลดภาพเพิ่มเติมได้อีก เสร็จแล้วกดปุ่ม ok
                    </span>
                </div>
            </div>
             <button id="goPost"  type="submit" class="
                    btn btn-primary btn-xs
                    mx-auto
                    sm:btn-sm
                    md:btn-md
                    lg:btn-lg
                    px-4
                  "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6 mr-3 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>OK
                </button>
            </div>
           <div class="mx-auto mb-2 rounded-xl bg-white w-full md:w-2/3 lg:w-5/12"><!---->

          <div class="w-full p-4 text-gray-500 text-center">
            <div class="w-1/2 md:w-1/2 lg:w-1/2 mx-auto text-center">
                <button class="
                btn btn-secondary btn-outline
                rounded-full
                mx-auto
                m-5
                w-full
              "><i class="fa fa-share mr-1 inline-block"></i>
              <span class="hidden lg:block">Share หน้านี้</span></button>
            </div>
        </div>
    </div>

                    <div id="badphoto" class="top-0 left-0 w-screen h-screen fixed modal">
                        <div class="bg-black text-white bg-opacity-90 w-full h-full"><!---->
                            <div class="modal-action absolute bottom-4 right-6">
                                <a href="#" class="btn btn-primary p-3 m-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 inline-block"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>Close</a></div> <div class="absolute top-3 right-4"><a href="#" class="btn btn-outline text-white rounded-full p-3 m-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 inline-block"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a></div></div></div> <div id="shareLCS22" class="modal"><div class="modal-box"><p class="text-lg">แชร์การ Upload ภาพนั่งสมาธิ</p> <textarea id="textshare" rows="3" class="w-full p-2 bg-base-200 border-base-100 rounded-xl"></textarea>
                                    <div class="w-full">

            </div>

                    </div>
                </div>
            </form>
            </div>








</div>




<div id="practice_modal" class="modal fade">

    <!-- Modal content -->
    <div class="modal-box" style="
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
">
<div id="withKey">
<p class="text-lg">Login</p></div>
<div class="p-4 text-center">
    <input type="hidden"  id="c" class="checkbox checkbox-primary checkbox-sm" value="1">
    <input type="checkbox" checked="checked" id="policy" class="checkbox checkbox-primary checkbox-sm">
    <label for="policy">
    ยอมรับ<a href="/privacy" class="text-blue-600">นโยบายความเป็นส่วนตัว</a>
</label>
</div>
<div class="my-5"  value="google" id="google">
    <div class="w-full text-center google">
    <div class="btn btn-primary btn-outline mx-auto google">
    Login to Google
  </div>
</div>
</div>
<div class="my-5" value="facebook" id="facebook">
    <div class="w-full text-center face">
    <div class="btn btn-primary btn-outline mx-auto face">
    Login to Face
  </div>
</div>
</div>
<div class="my-5" value="line" id="line">
    <div class="w-full text-center">
    <div class="btn btn-primary btn-outline mx-auto line">
    Login to Line
  </div>
</div>
</div>


    </div>
  </div>





<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin = "anonymous">
</script>

<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity = "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin = "anonymous">
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>





<script>



        $( "#showOK" ).click(function() {
            var images_upload = $('#multifile').val();



$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    dataType: 'json',
    type:'POST',
    data:{images_upload:images_upload},
    url: '/post',
    success: function(datas){
        console.log(datas);
        window.location.href = '/post/' + datas
    }
})

});

function saveupload(){


      var images_upload = $('#multifile').val();



            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{images_upload:images_upload},
                url: '/post',
                success: function(datas){
                    console.log(datas);

                }
            })
}


var moreText = document.getElementById("showOK");

moreText.style.display = "none";
   moreText.style.display = "none";

$('input[type="checkbox"]').on('change', function(e){
    if(e.target.checked){
        document.getElementById('c').value = 1;
  }else {
    document.getElementById('c').value = 0;
  }
});


$('#google').on('click', function(e){
var checl = $('#c').val();
if(checl == '1'){
    window.location.href = '/login/google'
}else {


}
});
$('#facebook').on('click', function(e){


var checl = $('#c').val();
if(checl == '1'){
    window.location.href = '/login/facebook/'
}else {


}
});
$('#line').on('click', function(e){


var checl = $('#c').val();
if(checl == '1'){
    window.location.href = '/auth/login/'
}else {


}
});

$('#uu').on('click', function(e){
    swal("กรุณาเข้าสู่ระบบ!", "กรุณาเข้าสู่ระบบ!", "error");
});

function calc()
{

if (document.getElementById('policy').checked)
  {

    document.getElementById('c').value = 1;
  } else {

    document.getElementById('c').value = 0;
  }
}

function login(vale)
{
    var checl = $('#c').val();
    if(checl == '1'){
    if(vale == 'line'){
        window.location.href = '/auth/' + vale

    }else {
        window.location.href = '/login/' + vale
    }

    }else{
        alert('ไม่ok');

    }
}

    Dropzone.autoDiscover = false;
        if ($('#productForm').length) {




            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var arrImage = [];
            var deleteFileId = [];
            var deleteFileName = [];

            var arrImage2 = [];
            var deleteFileId2 = [];
            var deleteFileName2 = [];

            var arrImage3 = [];
            var deleteFileId3 = [];
            var deleteFileName3 = [];


            var myDropzone = new Dropzone("div#uploadDropzone", {
                paramName: 'file_upload',
                url: '{{route("dropzoneFileUpload")}}',
                acceptedFiles: '.jpeg,.jpg,.png,.gif',
                maxFiles: 12,
                maxFilesize: 50, // MB
                addRemoveLinks: false,
                dictRemoveFile: 'ลบรูปภาพ',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                init: function () {
                    this.on('success', function (file) {

                        console.log(file);
                        var filename = JSON.parse(file.xhr.response);
                        arrImage.push(filename.data);
                        $('input[name=multifile]').val(arrImage);
                        file.dataURL = filename.data;



                        var moreText = document.getElementById("showOK");
                        moreText.style.display = "block";

                        var uploadh = document.getElementById("uplo");
                        uploadh.style.display = 'none';

                    });

                    this.on('removedfile', function (file) {
                        // assign delete value
                        console.log('file.id',file.id);
                        deleteFileName.push(file.name);
                        if (!file.processing) {
                            deleteFileId.push(file.id);
                            $('input[name=deletefile_id]').val(deleteFileId);
                        }
                        $('input[name=deletefile_name]').val(deleteFileName);

                        // pop array on multifile
                        var index = arrImage.indexOf(file.dataURL);

                        if (index > -1) {
                            arrImage.splice(index, 1);
                            $('input[name=multifile]').val(arrImage);
                        }
                    });
                }
            });







        }


    // Get the modal
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


    </script>



@endsection


