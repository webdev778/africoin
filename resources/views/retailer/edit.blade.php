@extends('layouts.dashlayout')

@section('content')
<h2>Retailer Details</h2>
<br />
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">				
            <div class="panel-heading">
                <div class="panel-title">
                    Please type information about retailer.
                </div>
                
                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                </div>
            </div>
            
            <div class="panel-body">
                
                <form role="form" class="form-horizontal validate" action="{{ $action }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if(isset($method))
                        {{ $method }}
                    @endif
                    <div class="form-group">
                        <label for="company-name" class="col-sm-3 control-label">Company Name</label>
                        
                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="company-name" placeholder="ex: Sasol" name="company-name" data-validate="required" value="{{ old('company-name', $retailer->name) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Company Logo</label>
                        
                        <div class="col-sm-5">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                    <img src="{{ old('name', $retailer->name) == '' ? "http://placehold.it/200x150" : asset('storage/'.$retailer->logo_file)}}"  alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="company-logo" accept="image/*">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street-address" class="col-sm-3 control-label">Street Address</label>
                        
                        <div class="col-sm-5">                             
                            <textarea class="form-control autogrow" rows="5" id="street-address" placeholder="" name="street-address" data-validate="required">{{ old('street-address', $retailer->street_address)}}</textarea>
                        </div>           
                    </div>
                    
                    <div class="form-group">
                        <label for="street-code" class="col-sm-3 control-label">Street Code</label>
                        
                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="street-code" placeholder="eg: 2196" name="street-code" data-validate="required,number,minlength[4]" value="{{old('street-code', $retailer->street_code)}}" >
                        </div>                        
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Province</label>
                        
                        <div class="col-sm-5">
                            <select class="form-control" name="province">
                                <option value></option>
                                @foreach ($provinces as $province)
                                    <option {{ $province == $retailer->province ? 'selected' : '' }}>{{ $province }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="postal-address" class="col-sm-3 control-label">Postal Address</label>
                        
                        <div class="col-sm-5">                            
                            <textarea class="form-control autogrow" rows="4" id="postal-address" placeholder="Postal Address" name="postal-address" data-validate="required">{{ old('postal-address', $retailer->postal_address) }}</textarea>
                        </div>                        
                    </div>
                    
                    <div class="form-group">
                        <label for="postal-code" class="col-sm-3 control-label">Postal Code</label>
                        
                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="postal-code" placeholder="eg: 2000" name="postal-code" data-validate="required,number,minlength[4]" value="{{ old('postal-code', $retailer->postal_code)}}">
                        </div>                        
                    </div>
                    

                    <div class="form-group">
                        <label for="contact-details" class="col-sm-3 control-label">Email</label>
                        
                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="contact-details" name="email" data-validate="required,email" placeholder="sasol.man@gmail.com" value="{{ old('email', $retailer->email) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Tel</label>
                        
                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="phone" placeholder="+27 10 344 5000" name="phone" data-validate="required,number,minlength[10]"  data-message-number="Please enter a valid phone number" value="{{ old('phone', $retailer->phone )}}">
                        </div>                        
                    </div>

                    <div class="form-group">
                        <label for="registration-no" class="col-sm-3 control-label">Company Registration No</label>
                        
                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="registration-no" placeholder="Registration Number" name="company-registration-no" data-validate="required" value="{{ old('company-registration-no', $retailer->company_registration_no)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Map Location</label>

                        <div class="col-sm-8">
                            <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyA9MXUxxh78IFm2Ok2PmoVTe-I0LEjG2Zk&v=3.exp&libraries=geometry,drawing,places"></script>
                            <script type="text/javascript">
                        
                            function initialize() {
                                var mapDiv = document.getElementById('normal');
                                var map = new google.maps.Map(mapDiv, {
                                center: new google.maps.LatLng(-33.918861, 18.423300),
                                zoom: 12,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                });
                            }
                            
                        
                            google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                            <div id="normal" style="height: 350px; width: 100%"></div>
                        </div>
					</div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Save</button>                            
                        <a href="{{ route('Retailers.index') }}" type="reset" class="btn btn-lg btn-default btn-block">Cancel</a>
                        </div>                        
                    </div>
                </form>
                
            </div>
        
        </div>
    
    </div>
</div>
	
@endsection
