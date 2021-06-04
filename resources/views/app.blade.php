<html lang="en">
	<!--begin::Head-->
	@include('sections.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Div#app-->
        <div id="app">
            <!-- props: ruta -->
            {{-- {{ route('basepath') }}  //Funcion blade que devulve la ruta base del proyecto definida por el Alias BASEPATH
            en el archivo routes/web.php --}}
            <App ruta="{{ route('basepath') }}"></App>
        </div>
        <!--end::Div#app-->
		<!--begin::scripts -->
        @include('sections.scripts')
        <!--end::scripts -->        
	</body>
	<!--end::Body-->
</html>