@extends('layouts.app')

@section('css')
@endsection()

@section('content')
    <div class="container">
        <a href="{{ route('page.create') }}"><button class="btn btn-success btn-sm mb-3">Sayfa Ekle</button></a>
        <table class="table">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Başlık</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <th scope="row">{{ $page->title }}</th>
                    <td><a href="#"><button class="btn btn-success btn-sm">Düzenle</button></a></td>
                    <td><a href="#"><button class="btn btn-danger btn-sm">Sil</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('js')
@endsection
