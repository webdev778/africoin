@extends('layouts.dashboard')
@section('title', 'Purchase History')
@section('content')
<h1 class="hidden-print">Approve Order</h1>
<hr class="hidden-print"/>

<h3>Administrator can approve transactions here. </h3>
<br />

<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
    var $table4 = jQuery( "#table-4" );
    
    $table4.DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );		
</script>

<table class="table table-bordered datatable" id="table-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Supplier</th>
            <th>Logo</th>
            <th>Retailer</th>
            <th>Item Count</th>
            <th>Total AFT</th>
            <th>Billed</th>
            <th>Approve</th>
            <th>Order Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr class="odd gradeX">
            <td class="order_id">{{$order->id}}</td>
            <td>{{$order->supplier->name}}</td>
            <td><img style="width:50px" src="{{ asset('/storage') .'/'. $order->retailer->logo_file}}"/></td>
            <td>{{$order->retailer->name}}</td>
            <td><a href="#">{{$order->items_count}}</a></td>
            <td class="center">{{$order->buy_token}}</td>
            <td class="center">{{$order->billedTotal}}</td>
            <td class="center approve">
                @if ($order->txHash != null) 
                    <span style="color:grey"><b>Approved</b></span>
                @else 
            <a class='btn btn-success' href='javascript:void(0)' onclick='approve({{$order->id}}, this)' >Approve</a>
                @endif
            </td>
            <td class="center">{{$order->created_at}}</td>
        </tr>     
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Supplier</th>
            <th>Logo</th>
            <th>Retailer</th>
            <th>Item Count</th>
            <th>Total AFT</th>
            <th>Billed</th>
            <th>Approve</th>
            <th>Order Date</th>
        </tr>
    </tfoot>
</table>

<br />

@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}">	
@endsection
@section('scripts')
    <script src="{{ asset('js/datatables/datatables.js') }}"></script>
    <script src="{{ asset('js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    <script src="{{ asset('js/neon-chat.js') }}"></script>

    <script>
        function approve(order_id, el){

            //alert(temp);
            
            // return;

            $.post("{{route('PurchaseCoin.approve')}}",
                {'purchase_coin_id' : order_id},
                function(res) {
                    console.log(res);

                    var opts = {
                        "closeButton": true,
                        "debug": false,
                        "positionClass": "toast-top-right",
                        "toastClass": "black",
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
    
                    toastr.success("This transfer will be reflected retailer's balance within 10 minutes ", "Transfer Approved", opts);

                    var $this = $(el);
                    $this.parents('tr').find('td.approve').html('<span style="color:grey"><b>Approved</b></span>');
                    
                    return;
                },
                'json'
            ).fail(function(res){
                console.log(res);
                const warning_opts = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-bottom-right",
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr.warning("Failed to approved", null, warning_opts);
            });          
        }
    </script>


	
	
@endsection