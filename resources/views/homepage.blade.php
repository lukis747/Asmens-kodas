@extends('base')

@section('content')
    <div class="content mt-3">
        @include('sections.form')
    </div>
@endsection

@section('scripts')
    <script src="{{ asset("js/script.js") }}"></script>
@endsection
