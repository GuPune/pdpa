@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" autocomplete="off" id="registerForm"  onsubmit=" return validateForm();">
                        @csrf
                        <input id="avatar" type="hidden" class="form-control" name="avatar" value="{{$avatar}}" required autocomplete="avatar" >
                        <input id="id" type="hidden" class="form-control" name="id" value="{{$id}}" required autocomplete="id" >
                        <input id="service" type="hidden" class="form-control" name="service" value="{{$service}}" required autocomplete="service" >

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">

                           @if(!empty($name))

                           <input id="name" type="text" class="form-control" name="name" value="{{$name}}" required autofocus>

                       @else

                           <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                       @endif

                       @if ($errors->has('name'))

                       <span class="help-block">

                           <strong>{{ $errors->first('name') }}</strong>

                       </span>

                   @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <input id="checkmail" type="hidden" class="form-control" name="checkmail" value="N" required>

                            <div class="col-md-6">
                                @if(!empty($email))

                                <input id="email" type="email" class="form-control" name="email" value="{{$email}}" onkeyup="myFunction()" required>

                                @else

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required onkeyup="myFunction()">

                                @endif


                               @if ($errors->has('email'))

                               <span class="help-block">

                                   <strong>{{ $errors->first('email') }}</strong>

                               </span>

                           @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>
                            <div class="col-md-6">
                                <div class="help-block-pass help-block">รหัสผ่านไม่ตรงกัน</div>
                                <div class="help-block-email help-block">อีเมลนี้มีคนใช้งาน</div>
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .help-block-bd,.help-block-pass,.help-block-name,.help-block-surname,.help-block-email{
        display: none;
        color: red;
    }
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
<script>
    $('.help-block-confirm').hide();

    $( "#gender-male" ).change(function() {
        var male = $('#gender-male:checkbox:checked').length;
        if(male == 1){
            $( "#gender-female" ).prop( "checked", false );
        }
    });
    $( "#gender-female" ).change(function() {
        var female = $('#gender-female:checkbox:checked').length;
        if(female == 1){
            $( "#gender-male" ).prop( "checked", false );
        }
    });

    function myFunction() {

        var email = $("#email").val();
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

      $.ajax({
          dataType: 'json',
          type:'POST',
          data: {'_token': "{{ csrf_token() }}",
          email:email
                            },
          url: '/checkemail',
          success: function(datas){

            console.log(datas.data);
            if(datas.data == false){
                $('.help-block-email').show();
                var checkmail = $("#checkmail").val('N');
                return false;
            }else {
                var checkmail = $("#checkmail").val('Y');
                $('.help-block-email').hide();
            }


          }
      })


    }

    function validateForm(){
            var password = $("#password").val();
            var confirmPassword = $("#password-confirm").val();
            var checkmail = $("#checkmail").val();
            var email = $("#email").val();
            if (password != confirmPassword) {
                $('.help-block-pass').show();
                return false;
            }






      if(checkmail == 'N'){
        return false;
      }else {

        return true;
      }

    }


</script>
@endsection
