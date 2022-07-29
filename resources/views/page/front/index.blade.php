@extends('layouts.front')

@section('title','ศูนย์รวมภาพกิจกรรม')
@section('description','เว็ปไซต์ศูนย์รวมภาพกิจกรรม')
@section('keywords','ภาพกิจกรรม,photo')
@section('content')

@section('image','https://cmsecom2.idtest.work')
@section('imageurl','https://www.iddriver.com/wp-content/uploads/2021/01/IDdriver_NoBG-150x88.png')

<div>
    <div>
        <div class="bg-gray-100">
            <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">

  <div class="
    w-11/12
    sm:w-2/3
    lg:flex
    justify-center
    items-center
    flex-col
    mb-5
    sm:mb-10
  "><h1 class="
      text-2xl
      sm:text-3xl
      md:text-4xl
      lg:text-5xl
      xl:text-6xl
      text-center text-gray-800
      font-black
      leading-7
      md:leading-10
    ">
    Meditation Photosปปปปปปปปปป
    <br>
    <span class="text-indigo-700"><span class="text-indigo-700">ศูนย์รวม</span>   ภาพนั่งกิจกรรม</span></h1>
    <div class="flex pt-10 space-x-5 mx-auto justify-center">
        <img src="https://www.meditationphoto.com/images/medlogo2.png" alt="logo" class="w-24 h-24 inline-block"> <img src="https://www.meditationphoto.com/images/guinesslogo.jpeg" class="w-24 h-24"></div> <span class="mx-auto w-full text-center"><p
      class="
        mt-5
        sm:mt-10
        text-gray-400
        font-normal
        text-center text-lg
        sm:text-lg
      "
    >
      เรากำลังรวบรวมภาพนั่งสมาธิ เพื่อสร้างสถิติโลก กับ Guiness World
      Record <br />ในหัวข้อ
      "ศูนย์รวมภาพนั่งสมาธิที่มีจำนวนภาพมากที่สุดในโลก" <br />เป้าหมาย
      1,000,000 ภาพนั่งสมาธิ
    </p></span>
</div>
     <div class="flex justify-center items-center">
        <button class="
      focus:outline-none
      focus:ring-2
      focus:ring-offset-2
      focus:ring-indigo-700
      bg-indigo-700
      transition
      duration-150
      ease-in-out
      hover:bg-indigo-600
      lg:text-xl lg:font-bold
      rounded
      text-white
      px-4
      sm:px-10
      border border-indigo-700
      py-2
      sm:py-4
      text-lg
    ">
    Upload ภาพกิจกรรม
  </button>
   <a href="/view" class="
      ml-4
      focus:outline-none
      focus:ring-2
      focus:ring-offset-2
      focus:ring-indigo-700
      bg-transparent
      transition
      duration-150
      ease-in-out
      hover:border-indigo-600
      lg:text-xl lg:font-bold
      hover:text-indigo-600
      rounded
      border border-indigo-700
      text-indigo-700
      px-4
      sm:px-10
      py-2
      sm:py-4
      text-sm
    ">
    รับชมภาพ
  </a>
</div>
   <a href="/viewlove" class="
    my-4
    focus:outline-none
    focus:ring-2
    focus:ring-offset-2
    focus:ring-indigo-700
    bg-transparent
    transition
    duration-150
    ease-in-out
    hover:border-indigo-600
    lg:text-xl lg:font-bold
    hover:text-indigo-600
    rounded
    border border-indigo-700
    text-indigo-700
    px-4
    sm:px-10
    py-2
    sm:py-4
    text-sm
  "><img src="https://www.meditationphoto.com/images/love.png" class="w-7 h-7 inline-block">
  Editors' Picks'
</a>
<div class="w-full text-center p-5 text-blue-600">
    <a href="/statuser">
        <img src="https://www.meditationphoto.com/images/medal1.png" class="w-7 h-7 inline-block"> User  ที่มีการ Upload สูงสุด
</a>
<br>
<a href="/stat">
<img src="https://www.meditationphoto.com/images/photo.png" class="w-7 h-7 inline-block">
แสดงภาพตามหน่วยงาน</a> <br>
<a href="/certcard">
<img src="https://www.meditationphoto.com/images/cer1.jpg" class="w-6 h-6 inline-block">
ออกใบประกาศเกียรติคุณ</a> <br>
</div>
</div>
</div>
</div>
</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

@endsection


