<!doctype html>

<html>
@include ('partials.head')
<body>



@include ('partials.header')


@include('partials.content')


@php do_action('get_footer') @endphp
@include('partials.footer')
@php wp_footer() @endphp
</body>

</html>
