    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">PIXINVENT </a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="feather icon-heart pink"></i></span></p>
    </footer>
    <!-- END: Footer-->




    <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


     <!-- BEGIN: Theme JS-->
     <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/page-users.js')}}"></script>
    <!-- END: Page JS-->

     <!-- BEGIN: Page Vendor JS-->
     <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-styling.js')}}"></script>
    <!-- END: Page JS-->

   

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->

    <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}"></script>

    <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/forms/select/form-select2.js')}}"></script>

    @if(session('success')=='add_success')
    <script>
    // $('#type-success').on('click',function(){
		toastr.success('It was added successfully.', 'Create Success');
	// });
    </script>
    @endif

    @if(session('success')=='update_success')
    <script>
    // $('#type-success').on('click',function(){
		toastr.success('It was updated successfully.', 'Update Success');
	// });
    </script>
    @endif

    @if(session('success')=='delete_success')
    <script>
    // $('#type-success').on('click',function(){
		toastr.success('It was deleted successfully.', 'Delete Success');
	// });
    </script>
    @endif