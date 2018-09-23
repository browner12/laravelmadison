<!DOCTYPE html>
<html lang="en">
<head>

@include('includes/title')
@include('includes/meta')
@include('includes/css')
@include('includes/icons')

</head>
<body onload="{{ $_onload ?? null }}">


<div id="content" class="container">
    <div class="row">

        <div class="col-12 py-3">
            @yield('content')
        </div>

    </div>
</div>

<!--extras-->
@include('includes/javascript')

</body>
</html>
