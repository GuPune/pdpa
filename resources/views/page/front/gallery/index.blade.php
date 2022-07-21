@extends('layouts.front')


@section('content')
<style>


</style>

<div>
    <div>
        <div>

            <div class="mx-auto text-center w-full p-4">
                <div id="samplePhoto" class="my-5">
                    <div class="
                    grid grid-cols-1 grid-flow-row-dense
                    md:grid-cols-2
                    lg:grid-cols-3
                    xl:grid-cols-5
                    2xl:grid-cols-5
                    gap-5
                  ">
                  <!--reta-->


                  @foreach ($item as $post)
                  <div class="relative">
                    <img src="{{$post->images}}" class="rounded-xl" style="
                    width: 100%;"> <!---->
                    <div class="absolute left-1 top-1 text-center flex">
                        <div class="text right border-0 text-white rounded-full mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-5 w-5 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                     <div>
                        <div class="absolute top-1 right-0 text-center">
                            <div class="text right border-0 text-white rounded-full mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                            </div>
                        </div>

</div>



<div class="w-full mx-auto absolute bottom-0 left-0" id="profileTop">
    <div class="
    h-full
    m-0
    p-2
    bg-gray-900
    opacity-70
    flex
    space-x-1
    items-start
    justify-start
    rounded-lg
    w-full
  ">
  <div class="flex-none opacity-100"><a href="/user2586" class="">
    <img alt="user" src="{{$post->profileuser->avatar}}" class="
          mx-auto
          w-10
          h-10
          lg:w-10 lg:h-10
          bg-gradient-to-tr
          from-yellow-600
          to-pink-600
          p-1
          object-cover object-center
          rounded-full
        ">
    </a>
</div>
 <div class="flex-none text-left">
    <div class="
        text-lg text-white
        font-medium
        mb-0
        text-left
        hover:font-bold hover:text-blue-600
      ">
      <a href="#" class="">{{$post->profileuser->name}}</a></div>
      <div class="text-white inline-block -mt-3 text-left">
        <a href="/photo/990458" class=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-5 w-5 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg></a> <a href="/stat?org1=%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81,%E0%B8%AD%E0%B8%B7%E0%B9%88%E0%B8%99%E0%B9%86&amp;org2=%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%B9%E0%B8%9B%E0%B8%81%E0%B8%B2%E0%B8%A3" class="hover:font-bold hover:text-blue-600">
          </a>
            <a href="/post/130998" class="hover:font-bold hover:text-blue-600">
                {{ $diff = Carbon\Carbon::parse($post->created_at)->diffForHumans(Carbon\Carbon::now()) }}</a>
        </div>
    </div>
</div>
</div>
</div>
<!--reta-->
@endforeach



 {{-- Pagination --}}


</div>
</div>






</div>
<div class="mx-auto text-center w-full p-4">
    {!! $item->links() !!}
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


