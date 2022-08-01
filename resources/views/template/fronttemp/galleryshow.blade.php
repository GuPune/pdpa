<div class="bg-gray-100 p-2 overflow-x-hidden">
    <a href="/#" class="text-3xl font-bold my-5">
        <img src="https://www.meditationphoto.com/images/love.png" alt="Editors' Picks" class="w-8 h-8 mr-2 inline-block">Editors' Picks
    </a>

    <div id="samplePhoto" class="my-5">
        <div class="
        grid grid-cols-1 grid-flow-row-dense
        md:grid-cols-2
        lg:grid-cols-3
        xl:grid-cols-5
        2xl:grid-cols-5
        gap-5
      ">
      @foreach (\App\Models\Images::where('status','S')->orderBy('updated_at', 'desc')->limit(10)->get() as $post)
      <div class="relative">
        <a class="cursor-pointer  modal-open text-center">
        <img src="{{$post->images}}" class="rounded-xl">
        <div>
            <div class="absolute left-6 top-1 text-center flex">
                <div class="text right border-0 text-red-600 rounded-full mx-auto">

                    </div>
                </div>
            </div>

            </a>
            <div>

</div>

</div>
@endforeach
    </div>
    </div>
     <div class="text-center w-full my-8"><a href="/viewlove" class="
        ml-4
        my-4
        mx-auto
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
      View More
    </a>
</div>

</div>
