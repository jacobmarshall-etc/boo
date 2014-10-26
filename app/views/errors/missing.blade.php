@extends('layouts.error')

@section('title', 'Not Found')

@section('details')
    <p>
        Sorry, the page you requested was not found.
    </p>
    <p>
        Boo literally searched everywhere for '{{ Request::path() }}', but found nothing that resembled it.
    </p>
    <br>
    <p>
        If you were looking for Boo's legitness, it's not here. It was too large to fit on this webserver, so we stored it somewhere safe. Actually... we stored it... IN a safe.
    </p>
@stop
