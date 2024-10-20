<!-- BEGIN: Vendor JS-->
<script src="{{ asset("assets/admin//app-assets/vendors/js/vendors.min.js")}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset("assets/admin/app-assets/vendors/js/charts/chart.min.js") }}"></script>
<!-- END: Page JS-->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js" ></script>
<script src="{{ asset("assets/admin/app-assets/js/core/app-menu.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/core/app.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/jquery.dataTables.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/datatables.bootstrap4.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/dataTables.responsive.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/responsive.bootstrap4.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/datatables.checkboxes.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/datatables.buttons.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/jszip.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/pdfmake.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/vfs_fonts.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/buttons.html5.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/buttons.print.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/tables/datatable/dataTables.rowGroup.min.js")}}"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js" ></script>
{{-- <script src="{{ asset("assets/admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js")}}"></script> --}}
<script src="{{ asset("assets/admin/app-assets/js/scripts/charts/chart-chartjs.min.js")}}"></script>
<script src="{{ asset("assets/admin/app-assets/js/scripts/tables/table-template.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

    </script>

    <!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
@if(Session::has('message'))
<script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.success("{{ session('message') }}");
</script>
@endif

@if(Session::has('warning'))
<script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.warning("{{ session('warning') }}");
</script>
@endif

@if(Session::has('error'))
<script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.warning("{{ session('error') }}");
</script>
@endif

<script>
    $(window).on('load',  function(){
        if (feather) {
        feather.replace({ width: 14, height: 14 });
        }
    })
</script>
