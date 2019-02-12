<aside class="main-sidebar elevation-4 barra-izquierda collapsado" id="barra" style="overflow-x: hidden;">
	<!-- Brand Logo -->
	<a href="{{ url('home') }}" class="brand-link">
		<img src="{{ asset('img/only-escudo-ver.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		style="opacity: .8">
		<span class="brand-text font-weight-light">FGE | Veracruz</span>
	</a>

	<!-- Sidebar -->
	<div  class="sidebar font-weight-light" >
		<!-- Sidebar user panel (optional) -->
		@auth
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<a href="#">
					<div class="image">
						@if (Auth::user()->foto!=null || Auth::user()->foto!="")
								<img id='perfilImg' src="{{ env('SSO_IP_UIPJ') }}storage/fotoFiscal/{{ Auth::user()->foto }}" class="img-circle elevation-2" alt="User Image">
							@else
								<img id='perfilImg' src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
						@endif
					</div>
				</a>	
			</div>
		@endauth

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">										
						<li class="nav-item has-treeview" data-widget="tree"><a href="#" class="{{ Request::is( 'cuentasContables') ? 'active' : '' }} nav-link"><i class="nav-icon fa fa-university"></i><p>Catálogos</p></a>
						</li>	
						
						<li class="nav-item has-treeview" data-widget="tree"><a href="#" class="{{ Request::is( 'estados-financieros') ? 'active' : '' }} nav-link"><i class="nav-icon fa fa-book"></i><p>Estados financieros</p></a>
				</li>
			</ul>
		</nav>
		
		<!-- /.sidebar-menu -->
	</div>
		<!-- /.sidebar -->
</aside>
