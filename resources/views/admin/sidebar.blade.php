<!-- sidebar start -->
<!-- ================ -->
<aside class="col-md-4 col-lg-3 col-lg-offset-1">
	<div class="sidebar">								
		<div class="block clearfix">
			<h3 class="title"><i class="fa fa-list-alt" style="font-size: 20px;"></i> Admin Menu</h3>
			<div class="separator-2"></div>
			<nav>
				<ul class="nav nav-pills nav-stacked">
					<li @if(\Request::path() == 'admin') class="active" @endif><a href="/admin" class="pjax"><i class="fa fa-home"></i> Home</a></li>
					<li @if(\Request::path() == 'admin/clients') class="active" @endif><a href="/admin/clients"><i class="fa fa-user"></i> Clients</a></li>
					<li @if(\Request::path() == 'admin/invoices') class="active" @endif><a href="/admin/invoices"><i class="fa fa-qrcode"></i> Invoices</a></li>

					<li @if(\Request::path() == 'admin/payments') class="active" @endif><a href="/admin/payments"><i class="fa fa-dollar"></i> Payments</a></li>

					<li @if(\Request::path() == 'admin/timesheets') class="active" @endif><a href="/admin/timesheets"><i class="fa fa-clock-o"></i> Time & Effort</a></li>
					<li @if(strstr(\Request::path(),'admin/blog')) class="active" @endif><a href="/admin/blog"><i class="fa fa-book"></i> CMS / Blog</a></li>
				</ul>
			</nav>
		</div>						
	</div>
</aside>
<!-- sidebar end -->