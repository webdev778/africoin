@extends('layouts.dashboard')
@section('title', 'Retailers')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-9 col-sm-7">
                <h2>Retailers</h2>
            </div>
            
            <div class="col-md-3 col-sm-5">
                
                <form method="get" role="form" class="search-form-full">
                
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" id="search-input" placeholder="Search..." />
                        <i class="entypo-search"></i>
                    </div>
                    
                </form>
                
            </div>
        </div>

        <!-- Member Entries -->

        @foreach ($retailers as $retailer)
        <!-- Single Member -->
        <div class="member-entry">
                
            <a href="extra-timeline.html" class="member-img">
                <img src="{{ asset('storage/'.$retailer->logo_file) }}" class="img-rounded" />
                <i class="entypo-forward"></i>
            </a>
            
            <div class="member-details">
                <h4>
                    <a href="{{ route('Retailers.edit', [$retailer])}}">{{$retailer->name}}</a>
                </h4>
                
                <!-- Details with Icons -->
                <div class="row info-list">
                    
                    <div class="col-sm-6">
                        <i class="entypo-briefcase"></i>
                        {{$retailer->company_registration_no}}
                    </div>
                    
                    <div class="col-sm-6">
                        <i class="entypo-phone"></i>
                        <a href="#">{{ $retailer->phone }}</a>
                    </div>
                                       
                    <div class="clear"></div>
                    
                    <div class="col-sm-6">
                        <i class="entypo-location"></i>
                        <a href="#">{{$retailer->street_address.' '.$retailer->street_code}}</a>
                    </div>
                    
                    <div class="col-sm-6">
                        <i class="entypo-mail"></i>
                        <a href="#">{{ $retailer->email}}</a>
                    </div>
                                        
                </div>
            </div>
            
        </div>
        @endforeach

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <a href="{{ route('Retailers.create') }}" class="btn btn-primary btn-block">Regist New Company</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('styles')	
@endsection
@section('scripts')
@endsection