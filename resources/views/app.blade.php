<html lang="en">
	<!--begin::Head-->
	@include('sections.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Div#app-->
        <div id="app">
            <App></App>        		
        </div>
        <!--end::Div#app-->
		<!--begin::scripts -->
        @include('sections.scripts')
        <!--end::scripts -->        
	</body>
	<!--end::Body-->
</html>