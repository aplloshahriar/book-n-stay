<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- add styles from admin/layout/styles --}}
    @include('admin.layout.styles')

    {{-- add scripts from admin/layout/scripts --}}
    @include('admin.layout.scripts')



</head>

<body>
    <div id="app">
        <div class="main-wrapper">


            {{-- add navBar from admin/layout/navBar --}}
            @include('admin.layout.navBar')

            {{-- add sidebar from admin/layout/sidebar --}}
            @include('admin.layout.sidebar')

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('heading')</h1>
                    </div>


                    @yield('main-content')



                </section>
            </div>

        </div>
    </div>
    
    @include('admin.layout.footer')

</body>

</html>
