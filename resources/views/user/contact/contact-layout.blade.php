<!DOCTYPE html>
<html lang="en-US">
    @include('user.head')
<body>
<!-- site wrapper -->
<div class="site-wrapper">
	@include('user.header')
	<!-- section main content -->
	@yield('breadcrumb1')
	<section class="main-content">
		<div class="container-xl">
			<div class="row gy-4">
                @yield('content')
			</div>
		</div>
	</section>

	<!-- footer -->
	@include('user.footer')

</div><!-- end site wrapper -->
<!-- search popup area -->
@include('user.search')

<!-- JAVASCRIPTS -->
@include('user.script')

</body>
</html>