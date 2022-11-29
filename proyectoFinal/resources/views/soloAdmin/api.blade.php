@extends('layouts.app')

@section('template_title')
Usuario
@endsection


@section('content')



<script>
    fetch("{{ url(/api/datosApi) }}")
</script>

@endsection