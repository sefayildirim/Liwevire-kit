@extends('layouts.app')


@section('css')
@endsection()

@section('content')
    <div class="container">
        <form>
            <div class="mb-3">
                <label class="form-label text-dark">Sayfa Başlığı</label>
                <input type="text" class="form-control">
                <div class="form-text">Sayfa başlığı ekleyin</div>
            </div>
            <div class="mb-3">
                <label class="form-label text-dark">Link</label>
                <input type="text" class="form-control">
                <div  class="form-text">Yaptığınız örneğin linkini ekleyin</div>
            </div>
        </form>
    </div>
    <div class="container mt-5">
        <h2 class="text-primary">Sayfa İçeriği</h2>
            <div class="row">
                <div class="col-md-2 mt-4">
                    <div class="list-group position-fixed ">
                            <button class="btn-primary btn-sm ">Başlık Ekle</button>
                        <br>
                        <button class="btn-success btn-sm">Kod Ekle</button>
                    </div>
                </div>
                <div class="col-md-10">
                    <form>
                        <div class="mb-3">
                            <label for="title" class="form-label text-dark">Başlık</label>
                            <div class="d-flex justify-content-start">
                                <input type="text" class="form-control" id="title">
                                <button class="btn btn-danger btn-sm">Sil</button>
                            </div>
                            <div class="form-text">Alt içerik başlığı ekleyin</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Kod</label>
                            <div class="d-flex justify-content-start">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <button class="btn btn-danger btn-sm">Sil</button>
                            </div>
                            <div class="form-text">Kodunuzu Girin</div>
                        </div>

                    </form>
                </div>
            </div>
    </div>
@endsection


@section('js')
@endsection
