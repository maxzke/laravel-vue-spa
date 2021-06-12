<html lang="en">
	<!--begin::Head-->
	@include('sections.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" 
    class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"
    style="height: 100%;">
		<!--begin::Div#app-->
        <div id="app" class="d-flex flex-column flex-root">
            <!-- props: ruta -->
            {{-- {{ route('basepath') }}  //Funcion blade que devulve la ruta base del proyecto definida por el Alias BASEPATH
            en el archivo routes/web.php --}}
            <App ruta="{{ route('basepath') }}"></App>
            {{-- <Auth ruta="{{ route('basepath') }}"></Auth> --}}
        </div>
        <!--end::Div#app-->
		<!--begin::scripts -->
        @include('sections.scripts')
        <!--end::scripts -->        
	</body>
	<!--end::Body-->
</html>