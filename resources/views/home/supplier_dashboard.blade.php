@extends('layouts.dashboard')
@section('title', 'Purchase Coin')
@section('content')
<hr />
		<h1> Supplier Dashboard </h1>
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Sample Toastr Notification
            
			setTimeout(function()
			{
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
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
		
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 3000);
            
		
		
			// Sparkline Charts
			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
			$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
			$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
			$('.linechart').sparkline();
			$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
			$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
		
		
			$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
				type: 'bar',
				barColor: '#485671',
				height: '80px',
				barWidth: 10,
				barSpacing: 2
			});
		
		
		});
		
		
		function getRandomInt(min, max)
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>
		
		
		<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="5576899" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Buy AFT</h3>
					<p>so far in our platform, and our website.</p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="150" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Retailers</h3>
					<p>Companies having get in touch with your dear company.</p>
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="3500" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Pending Amounts</h3>
					<p>our system automatically notify you 24/7 about the transactions. </p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-start="0" data-end="15328" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Registered Products</h3>
					<p>on our site you can register your own product.</p>
				</div>
		
			</div>
		</div>
		
		<br />
							
		<br />
		
		<div class="row">
		
			<div class="col-sm-4">
		
				<div class="panel panel-primary">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th class="padding-bottom-none text-center">
									<br />
									<br />
									<span class="monthly-sales"></span>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="panel-heading">
									<h4>Monthly Sales</h4>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		
			</div>
		
			<div class="col-sm-8">
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Latest Purchases</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Supplier</th>
								<th>AFT</th>
								<th>Activity</th>
							</tr>
						</thead>
		
						<tbody>
							<tr>
								<td>1</td>
								<td>Supplier1</td>
								<td>583,820</td>
								<td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>
							</tr>
		
							<tr>
								<td>2</td>
								<td>Supplier2</td>
								<td>20,550</td>
								<td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td>
							</tr>
		
							<tr>
								<td>3</td>
								<td>Supplier3</td>
								<td>56,120</td>
								<td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span></td>
							</tr>
		
						</tbody>
					</table>
				</div>
		
			</div>
		
		</div>
		
		<br />
		
		
		<script type="text/javascript">
			// Code used to add Todo 
			jQuery(document).ready(function($)
			{
				var $todo_tasks = $("#todo_tasks");
		
				$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
				{
					if(ev.keyCode == 13)
					{
						ev.preventDefault();
		
						if($.trim($(this).val()).length)
						{
							var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
							$(this).val('');
		
							$todo_entry.appendTo($todo_tasks.find('.todo-list'));
							$todo_entry.hide().slideDown('fast');
							replaceCheckboxes();
						}
					}
				});
			});
		</script>
		
		
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('js/rickshaw/rickshaw.min.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('js/rickshaw/vendor/d3.v3.js') }}"></script>
	<script src="{{ asset('js/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
	<script src="{{ asset('js/morris.min.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>
	<script src="{{ asset('js/neon-chat.js') }}"></script>	
@endsection