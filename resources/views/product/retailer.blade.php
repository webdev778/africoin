@extends('layouts.dashboard')
@section('title', 'Product Summary')
@section('content')
<h1 class="hidden-print">Product Summary</h1>
<hr class="hidden-print"/>

<h3>Product Information</h3>
<br />
<div class="gallery-env">
		
        <div class="row">
        
            @foreach ($products as $product)
            <div class="col-sm-4">
                
                <article class="album">
                    
                    <header>
                        <a href="javascript:void(0)">
                            <div style="display:flex; align-items:center; justify-content: center;">
                                <img src="{{ asset('/storage/'. $product->pic_path)}}" style="width:100px !important;" />
                            </div>
                        </a>
                        
                    </header>
                    
                    <section class="album-info">
                        <h3><a href="javascript:void(0)">{{$product->name}}</a></h3>
                        
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
                    </section>
                    
                    <footer>
                        
                        <div class="album-images-count" style="font-size:2rem">
                            <i class="entypo-picture"></i>
                            {{$product->quantity}}
                        </div>
                        
                        <div class="album-options"  style="font-size:2rem">
                            <a href="javascript:void">
                                <i class="entypo-cog"></i>
                                {{$product->discount}}
                            </a>
                        </div>
                        
                    </footer>
                    
                </article>
                
            </div>
            @endforeach
        
        </div>

    </div>
@endsection
@section('styles')
    
@endsection
@section('scripts')
    <script type="text/javascript">

    </script>
@endsection