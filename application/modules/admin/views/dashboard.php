<!-- START CONTENT -->
<section id="main-content" class=" ">
<section class="wrapper main-wrapper row" style=''>
<div class='col-xs-12'>
		<div class="page-title">
			<div class="pull-left">
					<!-- PAGE HEADING TAG - START -->
				<h1 class="title">Dashboard</h1><!-- PAGE HEADING TAG - END -->
			</div>
		</div>
</div>
<div class="clearfix"></div>
<!-- MAIN CONTENT AREA STARTS -->
 <div class="col-xs-12 col-md-6">
	<div class="row">
		<div class="col-xs-12">
			<section class="box ">
				<header class="panel_header">
						<h2 class="title pull-left">New Orders</h2>
						<div class="actions panel_actions pull-right">
							<a class="box_toggle fa fa-chevron-down"></a>
								<a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
								<a class="box_close fa fa-times"></a>
						</div>
				</header>
				<div class="content-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Customer Name</th>
								<th>Date</th>
							</tr>
						</thead>
						<?php 


						foreach ($orders as $order) {  ?>
							
						<tbody>
							<tr>
								<td><?php echo $order['product_name']; ?></td>
								<td><?php echo $order['name']; ?></td>
								<td><?php echo $order['date']; ?></td>
							</tr>
							
						</tbody>

						<?php } ?>
					</table>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- MAIN CONTENT AREA ENDS -->
</section>
</section>
<!-- END CONTENT -->
