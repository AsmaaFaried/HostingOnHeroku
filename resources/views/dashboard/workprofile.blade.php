@extends('home')

@section('content')
    <!-- @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif -->
  <div class="container">
  <div class="alert alert-success" id="success_msg" style="display: none;">
        Data added successfully
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Workspace Data</h3>
                <div class="card-body">
                   
                    <form id="form-data" method="POST" action="{{ route('workprofile') }}" enctype="multipart/form-data" > 
                    

                        @csrf
                       
                        <div class="form-group row">
                            <label for="profile_picture" class="col-md-4 col-form-label text-md-right">{{ __('Workspace profile picture :') }}</label>

                            <div class="col-md-6">
                            <input id="profile_picture" value="{{ old('profile_picture') }}" placeholder="Enter room image" type="file" accept="image/*" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture">
                            <!-- <label class="custom-file-label" for="profile_picture">Choose file...</label> -->
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                @error('profile_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                    

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location :') }}</label>

                            <div class="col-md-6">
                                <input id="location" value="{{ old('location') }}" placeholder="str,apartment,city" type="text" class="form-control @error('location') is-invalid @enderror" name="location" required >
                                <!-- <small id="location" class="form-text text-danger"></small> -->
                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
 
                        </div>

                        <div class="form-group row">
                            <label for="mobile_one" class="col-md-4 col-form-label text-md-right">{{ __('Mobile number 1 :') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_one" value="{{ old('mobile_one') }}" placeholder="Ex : 012-123-456-98" type="tel" class="form-control @error('mobile_one') is-invalid @enderror" name="mobile_one" required autocomplete="mobile_one">
                                
                                <!-- <small id="mobile_one" class="form-text text-danger"></small> -->
                                @error('mobile_one')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile_two" class="col-md-4 col-form-label text-md-right">{{ __('Mobile number 2 :') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_two"  placeholder="Ex : 012-123-456-98" type="tel" class="form-control @error('mobile_two') is-invalid @enderror" name="mobile_two" value="{{ old('mobile_two') }}" autocomplete="mobile_two">
                                
                                <!-- <small id="mobile_two" class="form-text text-danger"></small> -->
                                @error('mobile_two')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="open_time" class="col-md-4 col-form-label text-md-right">{{ __('Opening Time :') }}</label>

                            <div class="col-md-6">
                                <input id="open_time time_tag" type="time" class="form-control @error('open_time') is-invalid @enderror" value="{{old('open_time')}}" name="open_time" required />
                                <!-- <small id="open_time" class="form-text text-danger"></small> -->
                                @error('open_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="close_time" class="col-md-4 col-form-label text-md-right">{{ __('Closing Time :') }}</label>

                            <div class="col-md-6">
                                <input id="close_time time_tag" type="time" class="form-control @error('close_time') is-invalid @enderror" value="{{old('close_time')}}" name="close_time" required />
                                <!-- <small id="close_time" class="form-text text-danger"></small> -->
                                @error('close_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="serve_food" class="col-md-4 col-form-label text-md-right">{{ __('Serve Food :') }}</label>

                            <div class="col-md-6">
                                <select name="serve_food" id="serve_food"  class="form-control @error('serve_food') is-invalid @enderror" value="{{old('serve_food')}}" required >
                                    <option value="Not available">{{ __('Not available') }}</option>
                                    <option value="Available">{{ __('Available') }}</option>
                                           
                                </select>
                                <!-- <small id="serve_food" class="form-text text-danger"></small> -->
                                @error('serve_food')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>        
                        </div>

                        <div class="form-group row">
                            <label for="wifi" class="col-md-4 col-form-label text-md-right">{{ __('Wifi :') }}</label>

                            <div class="col-md-6">
                                <select name="wifi" id="wifi"  class="form-control @error('wifi') is-invalid @enderror" value="{{old('wifi')}}" required >
                                    <option value="Not available">{{ __('Not available') }}</option>
                                    <option value="Available">{{ __('Available') }}</option>
                                           
                                </select>
                                <!-- <small id="wifi" class="form-text text-danger"></small> -->
                                @error('wifi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    <a id="btn-save" href="{{route('register')}}" class="btn btn-outline-danger">
                                        {{ __('Back') }}
                                    </a>
                                <button id="btn-save" type="submit" class="btn btn-outline-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
      </div>
    </div>
    <!-- <script>
        var addressInput = 'address';
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(addressInput)), {
                types: ['geocode'],
                componentRestrictions: {
                country: "Egypt"
                
    }
            });
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var near_place = autocomplete.getPlace();
            
        });
    });
    </script> -->
@endsection
<!-- @section('scripts')
<script>
    $(document).on('click', '#btn-save', function (e) {
        e.preventDefault();
        $('#profile_picture').text('');
        $('#address').text('');
        $('#mobile_one').text('');
        $('#mobile_two').text('');
        $('#open_time').text('');
        $('#close_time').text('');
        $('#serve_food').text('');
        $('#wifi').text('');
        var formData = new FormData($('#form-data')[0]);

        $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('workprofile')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    if (data.status == true) {
                        $('#success_msg').show();
                    }
                }, error: function (reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
        });
    });
    
</script>
@endsection -->