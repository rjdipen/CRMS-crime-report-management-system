<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | CRMS</title>

    <!-- Animation stylesheets -->
    <link href="{{asset('public/assets/css/extras/animate.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Animation stylesheets -->
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <!--Phone Number-->
    <link href="{{asset('public/assets/dial_code_flag/css/intlTelInput.css')}}" rel="stylesheet" type="text/css">
    <!--Phone Number-->
    <link href="{{asset('public/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link href="{{asset('public/custom.css')}}" rel="stylesheet" type="text/css">
    @yield('style')
</head>

<body>
<!-- Main navbar -->
@include('shared.userHeader')
<!-- /Main navbar -->

<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content" style="padding: 0 20px 0px 20px">

            @yield('content')

            <!-- Basic modal -->
            @yield('box')
            <!-- /basic modal -->


            </div>
            <!-- /Content area -->

            <!-- Footer -->
        @include('shared.userFooter')
        <!-- /footer -->

        </div>
        <!-- /Main content -->
    </div>
    <!-- /Page content -->
</div>
<!-- /Page container -->


<!-- Core JS files -->
<script type="text/javascript" src="{{asset('public/assets/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/loaders/blockui.min.js')}}"></script>
<!-- /core JS files -->

{{--wizard js--}}



{{--validate js for validation--}}
<script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/validation/validate.min.js')}}"></script>

<!-- For Fixed Layout JS files -->
<script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/notifications/jgrowl.min.js')}}"></script>

<!--Phone Number-->
<script type="text/javascript" src="{{asset('public/assets/dial_code_flag/js/intlTelInput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/dial_code_flag/js/defaultCountryIp.js')}}"></script>
<!--Phone Number-->
<script type="text/javascript" src="{{asset('public/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/pages/layout_fixed_custom.js')}}"></script>
<!-- /For Fixed Layout JS files -->
<script type="text/javascript" src="{{asset('public/custom.js')}}"></script>

<script type="text/javascript">

    $(function () {
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
            },
            drawCallback: function () {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            },
            preDrawCallback: function() {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
            }
        });


                @if(Session::has('message'))
        var type = "{{ Session::get('alert-type') }}";
        switch(type){
            case 'info':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Info',
                    theme: 'bg-info',
                    life: 800,
                    position: 'top-center'
                });
                break;

            case 'warning':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Warning',
                    theme: 'bg-warning',
                    life: 800,
                    position: 'top-center'
                });
                break;

            case 'success':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Success',
                    theme: 'bg-success',
                    life: 800,
                    position: 'top-center'
                });
                break;

            case 'error':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Error',
                    theme: 'bg-danger',
                    life: 800,
                    position: 'top-center'
                });
                break;
        }
        @endif

    });


    function imgPrev(input, outPut) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(outPut).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    // This is for fixed navber
    $(function() {


        // Affix sidebar
        // ------------------------------

        // When affixed
        $('#main-navbar').on('affixed.bs.affix', function() {
            $(this).next().css('margin-top', $(this).outerHeight());
            $('body').addClass('navbar-affixed-top');
        });

        // When on top
        $('#main-navbar').on('affixed-top.bs.affix', function() {
            $(this).next().css('margin-top', '');
            $('body').removeClass('navbar-affixed-top');
        });

        // Init
        $('#main-navbar').affix({
            offset: {
                top: $('#main-navbar').offset().top
            }
        });

    });
    // This is for fixed navber end


    //for file input
    $(function() {

        // Default file input style
        $(".file-styled").uniform({
            fileButtonClass: 'action btn bg-slate'
        });


        // Primary file input
        $(".file-styled-primary").uniform({
            fileButtonClass: 'action btn bg-blue'
        });

    });

</script>
@yield('script')
</body>
</html>