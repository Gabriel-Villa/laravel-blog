<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/layouts/head')
</head>

<body>
    <div class="wrapper">
        @include('admin/layouts/header')
        @include('admin/layouts/aside')
        
        @section('main-content')
            @show

        @include('admin/layouts/footer')
        @include('admin/layouts/scripts-footer')
    </div>

</body>

</html>