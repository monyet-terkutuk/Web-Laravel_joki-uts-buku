@extends('layout/main')

@section('content')
<a href="/buku" class="btn btn-secondary"><i class="bi bi-backspace"></i></a>

<div class="d-flex justify-content-center my-5">
    <div class="card" style="width: 50rem">
        <div class="card-body">
            @include('notifikasi.pesan')
            <h5 class="mb-3">Edit Buku</h5>
            <hr class="border-2 text-primary">
            <form method="post" action="/buku/{{ $data->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="judul" class="form-label"><i class="bi bi-vinyl-fill"></i> Judul Buku</label>
                    <input type="text" class="form-control" name="judul" value="{{ $data->judul }}" id="judul" value="{{ Session::get('judul') }}">
                </div>

                <div class="mb-3">
                    <label for="pengarang" class="form-label"><i class="bi bi-mic"></i> Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" id="pengarang" value="{{ $data->pengarang }}" value="{{ Session::get('pengarang') }}">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label"><i class="bi bi-music-note-list"></i> Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" value="{{ $data->genre }}" value="{{ Session::get('genre') }}" placeholder="Bandung 10 -04 -2023">
                </div>

                <div class="mb-3">
                    <label for="penerbit" class="form-label"><i class="bi bi-boombox-fill"></i> Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit" value="{{ $data->penerbit }}" value="{{ Session::get('penerbit') }}" placeholder="Bandung, Jl.kacapiring no.3, kab.Bandung Barat ">
                </div>

                <div class="mb-3">
                    <label for="tgl_terbit" class="form-label"><i class="bi bi-calendar-date-fill"></i> Tanggal Terbit</label>
                    <input type="text" class="form-control" name="tgl_terbit" id="tgl_terbit" value="{{ $data->tgl_terbit }}" value="{{ Session::get('tgl_terbit') }}" placeholder="Garut">
                </div>


                <button type="submit" class="btn btn-warning">Edit Buku</button>
              </form>
        </div>
      </div>
</div>

@endsection
