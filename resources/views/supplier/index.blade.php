@extends('layouts.dashboard')
@section('title', 'Suppliers')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-9 col-sm-7">
                <h2>Suppliers</h2>
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

        @foreach ($suppliers as $supplier)
        <!-- Single Member -->
        <div class="member-entry">
                
            <a href="extra-timeline.html" class="member-img">
                <img src="{{ $supplier->logo_file ? asset('storage/'.$supplier->logo_file) : "http://placehold.it/200x150" }}" class="img-rounded" />
                <i class="entypo-forward"></i>
            </a>
            
            <div class="member-details">
                <h4>
                    <a href="{{ route('Suppliers.edit', [$supplier])}}">{{$supplier->name}}</a>
                </h4>
                
                <!-- Details with Icons -->
                <div class="row info-list">
                    
                    <div class="col-sm-6">
                        <i class="entypo-briefcase"></i>
                        {{$supplier->company_registration_no}}
                    </div>
                    
                    <div class="col-sm-6">
                        <i class="entypo-phone"></i>
                        <a href="#">{{ $supplier->phone }}</a>
                    </div>
                                       
                    <div class="clear"></div>
                    
                    <div class="col-sm-6">
                        <i class="entypo-location"></i>
                        <a href="#">{{$supplier->street_address.' '.$supplier->street_code}}</a>
                    </div>
                    
                    <div class="col-sm-6">
                        <i class="entypo-mail"></i>
                        <a href="#">{{ $supplier->email}}</a>
                    </div>
                                        
                </div>
            </div>
            
        </div>
        @endforeach

    </div>
</div>

@endsection
@section('styles')	
@endsection
@section('scripts')
@endsection