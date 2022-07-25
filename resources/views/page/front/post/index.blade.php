@extends('layouts.front')

@section('title','ศูนย์รวมภาพกิจกรรม')
@section('description','เว็ปไซต์ศูนย์รวมภาพกิจกรรม ที่ใหญ่ที่สุดในโลก เพื่อสร้างสถิติ Guiness World Record')
@section('keywords','นั่งสมาธิ,ภาพนั่งสมาธิ, ภาพวิธีการนั่งสมาธิ, ภาพการทำภาวนา, meditation, photo')

@foreach ($item['images'] as $key => $post)
@section('image',$post->images)
@endforeach
@section('imageurl',$item['url'])
{{-- @section('image','https://image.meditationphoto.com/uploads/large_S_1794431_c008bee93d.jpg')
@section('imageurl','https://www.meditationphoto.com/photo/8757') --}}
@section('content')




<div>
    <div>
        <div>
            <div class="mx-auto text-center w-full md:w-1/2">
                <div id="samplePhoto" class="my-5">
                    <div class="
                    grid grid-cols-1 grid-flow-row-dense
                    md:grid-cols-2
                    lg:grid-cols-3
                    xl:grid-cols-3
                    2xl:grid-cols-3
                    gap-5
                  ">
                  @foreach ($item['images'] as $post)
                  <div class="relative row-span-2 cursor-pointer  modal-open text-center">
                      <div class="relative">
                          <div class="absolute left-1 top-1 text-center flex">
                          <div class="text right border-0 text-white rounded-full mx-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-5 w-5 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </div> <!---->
                    <img src="{{$post->images}}" class="rounded-xl" style="
                    width: 100%;">

@if ($post->status == 'Y')
<img src="https://cmsecom2.idtest.work/storage/thumbnails/pending.png" class="absolute bottom-4 right-4 w-10 h-10" >
@elseif ($post->status == 'N')
<img src="https://cmsecom2.idtest.work/storage/thumbnails/stop.png" class="absolute bottom-4 right-4 w-10 h-10" >
@else
<img src="https://cmsecom2.idtest.work/storage/thumbnails/approve.png" class="absolute bottom-4 right-4 w-10 h-10" >
@endif

                    </div>
                    <div class="text-center">
                        <a href="/photo/971744" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-5 w-5 inline-block mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            {{ $post->id }} </a>
                        {{-- <a href="/cardpeace/971744" class="badge badge-secondary">ทำกรอบรูป</a> --}}
                    </div>
                    <span>
                        @if ($post->status == 'Y')
                        รออนุมัติ
                       @elseif ($post->status == 'N')
                       ไม่อนุมัติ
                       @else
                       อนุมัติ
                        @endif
                   </span>

                </div>
                @endforeach
                </div>

                </div>

                    {{-- <div class="mx-auto text-center font-bold flex justify-center" >
            <a href="/stat?org1=%E0%B8%A0%E0%B8%B9%E0%B8%A1%E0%B8%B4%E0%B8%A0%E0%B8%B2%E0%B8%84&amp;org2=%E0%B8%AA%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5" class="text-blue-600">ส่งในนาม : ภูมิภาค สระบุรี</a>
             <a href="/uploaddrop/%E0%B8%A0%E0%B8%B9%E0%B8%A1%E0%B8%B4%E0%B8%A0%E0%B8%B2%E0%B8%84/%E0%B8%AA%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5" data-tip="upload ในนาม ภูมิภาค สระบุรี" class="ml-2 tooltip tooltip-secondary cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg></a>
            </div>
              <div data-tip="แก้ไขส่งยอดในนาม" class="cursor-pointer tooltip tooltip-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div> <!----> --}}
             <div>
                {{-- <div class="w-1/2 md:w-1/3 lg:w-1/4 mx-auto text-center">
               <button class="btn btn-secondary rounded-full mx-auto m-5 w-full">
               <i class="fa fa-share mr-1 inline-block"></i>
               <span class="hidden lg:block"> Share
                   </span>
               </button>
           </div> --}}


           <div class="my-5"  data-toggle="modal" data-target='#practice_modal'>
               <button class="btn btn-secondary rounded-full mx-auto m-5 w-full">
                   <i class="fa fa-share mr-1 inline-block"></i>
                   <span class="hidden lg:block"> Share
                       </span>
                   </button>
           </div>
            <div  id="practice_modal" class="modal">
               <div class="modal-box" style="
               position: absolute;
               left: 50%;
               top: 50%;
               transform: translate(-50%, -50%);
           ">
                   <div id="withKey">
                       <p class="text-lg">แชร์ลิงค์หน้านี้</p>
                   <input id="textshare" value="{{$item['url']}}" class="w-full p-2 bg-base-200 border-base-100 rounded-xl">
                   <div class="w-full">
               <div class="text-right" onclick="myFunction()">
                           <a class="w-1/3 btn btn-outline border-0 p-1 left-3">
                               <i class="far fa-clone mr-2"></i> Copy
                 </a>
               </div>
           </div>
            <hr class="my-3">
           </div>
                 <div class="mt-2 mb-5 w-full flex flex-row text-center justify-center">
                   <div class="my-3 w-full text-white flex mx-2">
                       <a href="javascript:void(0)" class="rounded-xl p-1 w-full share-network-facebook" style="background-color:#1877f2;"><i class="fab fah fa-lg fa-facebook-f"></i> <span></span></a></div>
                       <div class="my-3 w-full text-white flex mx-2"><a href="javascript:void(0)" class="rounded-xl p-1 w-full share-network-line" style="background-color:#00c300;"><i class="fab fah fa-lg fa-line"></i> <span></span></a></div>
                       <div class="my-3 w-full text-white flex mx-2"><a href="javascript:void(0)" class="rounded-xl p-1 w-full share-network-twitter" style="background-color:#1da1f2;"><i class="fab fah fa-lg fa-twitter"></i> <span></span></a></div>


                   </div>
                       <div class="modal-action cursor-pointer"  data-dismiss="modal" onclick="myclose();">
                           <a class="btn">Close</a>
                       </div>
                   </div>
               </div>







           </div>
                       <div class="text-2xl text-center px-3">
           ได้รับภาพของท่านแล้ว และกำลังตรวจสอบ อาจใช้เวลา 30 นาทีหรือมากกว่านั้น ท่านสามารถกด Refresh เพื่อดูผลการอนุมัติได้ในหน้านี้
         </div>





</div>
</div>
</div>

<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin = "anonymous">
</script>

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

function myclose()
{
    var modal = document.getElementById("practice_modal");


    modal.style.display = "none";



}


function myFunction()
{
    var copyText = document.getElementById("textshare");

/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /* For mobile devices */

/* Copy the text inside the text field */
navigator.clipboard.writeText(copyText.value);

/* Alert the copied text */



}
        </script>

@endsection


