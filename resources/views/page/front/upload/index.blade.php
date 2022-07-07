@extends('layouts.front')


@section('content')

<div>
    <div>
        <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css"> <div class="w-full my-3 text-center md:w-1/2 mx-auto text-lg"><button class="btn btn-primary">Login Google</button> <div class="text-md p-3">
          หากไม่ Login จะไม่สามารถแก้ไขภาพด้วยตัวท่านเองได้
        </div></div> <div class="alert alert-info"><div class="mx-auto text-center mt-2 mb-2"><input type="checkbox" checked="checked" id="policy" class="checkbox checkbox-primary checkbox-sm mr-1"> <label for="policy">
            อนุญาตให้ใช้ภาพในการสร้างสถิติ และยอมรับ<a href="/privacy" class="text-blue-600">นโยบายความเป็นส่วนตัว</a></label></div></div> <div class="text-md text-center p-2 w-full md:w-1/2 mx-auto"><div class="
            text-blue-600
            btn btn-secondary btn-outline
            text-xl
            font-bold
            text-center
            cursor-pointer
            mx-auto
          "><img src="/images/rules.png" class="w-7 h-7 mr-2 inline-block">
          อ่านกติกา
        </div> <!----> <div class="text-gray-800 my-1 cursor-pointer text-center"><!----></div> <div class="text-gray-800 my-1 cursor-pointer text-center"><!----></div></div> <div class="mx-auto text-center w-full md:w-1/2"><!----></div> <div class="mx-auto text-center w-full md:w-1/2"><!----></div> <div class="w-full p-4 text-gray-500 text-center"><h2 class="max-w-sm mx-auto text-blue-600 cursor-pointer">
          เลือกสายงาน (สำหรับท่านที่ทราบสังกัด *ไม่เลือกก็ได้)
        </h2> <div class="max-w-xs mx-auto text-center"><label class="text-sm"></label> <div class="w-full border text-center"><div class="text-center"><select class="select block w-full select-primary"><option selected="selected" value="">เลือกสายงาน</option> <option value="ชพส.">
                  ชพส.
                </option><option value="ต่างประเทศ">
                  ต่างประเทศ
                </option><option value="นครหลวง">
                  นครหลวง / แก้วภูธร
                </option><option value="ภูมิภาค">
                  ภูมิภาค / ต่างจังหวัด
                </option><option value="สำนัก,อื่นๆ">
                  สำนัก
                </option></select> <!----></div></div></div></div> <div class="text-center text-blue-600 px-4"><span class="cursor-pointer">
          เพิ่มคำอธิบาย
        </span> <!----></div>
        <div class="mx-auto text-center mt-2 mb-2">
            <label class="cursor-pointer">
                <input type="checkbox" id="allowOnlyWeb" checked="checked" class="checkbox checkbox-secondary rounded-full self-end"> <span class="ml-3 text-left text-lg text-blue-600">ฉันไม่ต้องการแสดงภาพในหน้า Gallery</span></label>
            </div>
                 <div class="w-full lg:w-1/3 mx-auto p-5">
                    <form action="https://api.meditationphoto.com/api/upload" method="post" id="form-dropzone" enctype="multipart/form-data" class="dropzone dz-clickable w-full rounded-xl">
                        <div class="previews"></div>
                        <div data-dz-message class="dz-message"><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-6 w-6 mr-2 inline-block"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>Upload ภาพนั่งสมาธิ<br>(แตะเลือกภาพ หรือ ลากวาง)</span></div></form> <input type="file" multiple="multiple" tabindex="-1" class="dz-hidden-input hidden" style="\n        visibility: hidden;\n        position: absolute;\n        top: 0px;\n        left: 0px;\n        height: 0px;\n        width: 0px;\n      "></div> <div class="mx-auto mb-2 rounded-xl bg-white w-full md:w-2/3 lg:w-5/12"><!---->

          <div class="w-full p-4 text-gray-500 text-center">
            <div class="w-1/2 md:w-1/2 lg:w-1/2 mx-auto text-center"><button class="
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
            </div>


</div>

@endsection


