@extends('layouts.app')

@section('css')
@endsection()

@section('content')

    <div class="container">
        <div class="container mb-5">
            <a href="{{ $page_detail->link }}"><button class="btn btn-dark">Uygulama örneği</button></a>
        </div>

        {!! $page_detail->description !!}
    </div>

@endsection

@section('js')
@endsection
