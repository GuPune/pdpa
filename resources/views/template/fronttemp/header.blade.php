<nav class="w-full border-b">
    <div class="
py-5
md:py-0
container
mx-auto
px-6
flex
items-center
justify-between
">
<div aria-label="Home. logo" role="img"><a href="/" aria-current="page" class="router-link-exact-active router-link-active">
    <img src="https://cmsecom2.idtest.work/storage/thumbnails/browser.png" alt="logo" class="w-20 h-20">



</a>
</div>
 <div>
    <button onclick="toggleMenu(true)" class="
    sm:block
    md:hidden
    text-gray-500
    hover:text-gray-700
    focus:text-gray-700
    focus:outline-none
    focus:ring-2
    focus:ring-gray-500
  "><svg aria-haspopup="true" aria-label="open Main Menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" class="md:hidden icon icon-tabler icon-tabler-menu"><path stroke="none" d="M0 0h24v24H0z"></path> <line x1="4" y1="8" x2="20" y2="8"></line> <line x1="4" y1="16" x2="20" y2="16"></line></svg></button> <div id="menu" class="md:block lg:block hidden"><button onclick="toggleMenu(false)" class="
      block
      md:hidden
      lg:hidden
      text-gray-500
      hover:text-gray-700
      focus:text-gray-700
      fixed
      focus:outline-none focus:ring-2 focus:ring-gray-500
      z-30
      top-0
      mt-6
    "><svg aria-label="close main menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path> <line x1="18" y1="6" x2="6" y2="18"></line> <line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <ul class="
      flex
      text-3xl
      md:text-base
      items-center
      py-10
      md:flex
      flex-col
      md:flex-row
      justify-center
      fixed
      md:relative
      top-0
      bottom-0
      left-0
      right-0
      bg-white
      md:bg-transparent
      z-20
    "><li class="
        text-gray-700
        hover:text-gray-900
        cursor-pointer
        text-base
        lg:text-lg
        pt-10
        md:pt-0
      "><a href="/gallery" class="text-gray-700">Gallery</a></li>

<li class="
        text-gray-700
        hover:text-gray-900
        cursor-pointer
        text-base
        lg:text-lg
        pt-10
        md:pt-0 md:ml-5
        lg:ml-10
      "><a href="/contact">ติดต่อ





    </a></li></ul></div></div>
      <a href="/upload">
       <button class="
  focus:outline-none
  lg:text-lg lg:font-bold
  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700
  hidden
  md:block
  bg-transparent
  transition
  duration-150
  ease-in-out
  hover:bg-gray-200
  rounded
  border border-indigo-700
  text-indigo-700
  px-4
  sm:px-8
  py-1
  sm:py-3
  text-sm
" >
Upload ภาพกิจกรรม
</button>
</a>
 <div class="dropdown dropdown-end">
    <a tabindex="0" href="#">

    @auth
    <img src="{{ Auth::user()->avatar }}" alt class="mask mask-circle w-12 h-12">
     @else
     <img src="https://www.meditationphoto.com/images/user.png" alt class="mask mask-circle w-12 h-12">
     @endauth


    </a>
    <ul tabindex="0" class="
    p-2
    shadow
    menu
    dropdown-content
    bg-base-100
    rounded-box
    w-52
  "><li><!---->

    @auth
    <a  href="{{ route('logout') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
    <div class="cursor-pointer my-2">
        <img src="https://www.meditationphoto.com/images/logout.png" class="w-5 h-5 mr-2 inline-block"> Logout
    </div>
    </a>
@else
<div class="cursor-pointer my-2" id="myBtn">
    <img src="https://www.meditationphoto.com/images/user.png" class="w-5 h-5 mr-2 inline-block"> Login
</div>

    {{-- @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif --}}
@endauth


</li> <!---->
</ul>
</div>
</div>


</nav>
