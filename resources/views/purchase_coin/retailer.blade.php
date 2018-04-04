@extends('layouts.dashboard')
@section('title', 'Purchase History')
@section('content')
<h1 class="hidden-print">Purchase History</h1>
<hr class="hidden-print"/>

<h3>We can check history here and export in any file formats. </h3>
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
            <th>Logo</th>
            <th>Supplier</th>
            <th>Item Count</th>
            <th>Total AFT</th>
            <th>Billed</th>
            <th>Approve</th>
            <th>Order Date</th>
            <th>Recived Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr class="odd gradeX">
            <td>{{$order->id}}</td>
            <td><img style="width:50px" src="{{ asset('/storage') .'/'. $order->supplier->logo_file}}"/></td>
            <td>{{$order->supplier->name}}</td>
            <td><a href="#">{{$order->items_count}}</a></td>
            <td class="center">{{$order->buy_token}}</td>
            <td class="center">{{$order->billedTotal}}</td>
            <td class="center">
                @if ($order->txHash != null) 
                    <a href='#'>Approved</a>
                @else 
                    <span style='color:red'><b>Pending</b></span>
                @endif
            </td>
            <td class="center">{{$order->created_at}}</td>
            <td class="center">{{$order->updated_at}}</td>
        </tr>     
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Logo</th>
            <th>Supplier</th>
            <th>Item Count</th>
            <th>Total AFT</th>
            <th>Billed</th>
            <th>Approve</th>
            <th>Order Date</th>
            <th>Recived Date</th>
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
    <script src="{{ asset('js/neon-chat.js') }}"></script>

	<script></script>


	
	
@endsection