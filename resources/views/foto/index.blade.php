@extends('layouts.desain')
@section('media', 'active')
@section('foto', 'active')

@section('title', 'Foto')

@section('head')
<link rel="stylesheet" href="css/media.css">
@endsection

@section('content')
<!-- awal jumbotron -->
<div class="container">
    <div class="div-title mt-3">
        <div class="header-symbol animate__animated animate__flash animate__delay-3s animate__faster"></div>
        <h1 class="home-title header-text px-2">
            <span>Foto</span>
        </h1>
    </div>
</div>
<!-- akhir jumbotrom -->

{{-- Search Bar --}}
<div class="container">
    <form action="searchfoto">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="searchfoto"
                value="{{ request('searchfoto') }}">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search link-light"></i>
            </button>
        </div>
    </form>
</div>

<!-- Awal feed foto -->
<div>
    <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 px-5 m-5 centerItms feedFoto">
        {{-- Card foto --}}
        @forelse ($fotos as $foto)
        <div class=" card noBorder cardAudio mx-1" style="width: 18rem; cursor: pointer;">
            <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#foto{{ $foto->id }}">
                <img src="{{ asset('fotoProd/' . $foto->foto_konten) }}" style="object-fit: cover;"
                    class="card-img-top d-flex justify-content mx-auto" alt="video-prodamas">
                <div class="card-body">
                    <h5 class="card-title">
                        <p class=" tittleAudio" href="">
                            {{ $foto->judul }}
                        </p>
                    </h5>
                </div>
            </div>
        </div>
        <!-- <div class="col p-2">
            <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#foto{{ $foto->id }}"
                style="cursor: pointer">
                <img src="{{ asset('fotoProd/' . $foto->konten) }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{ $foto->judul }}</h5>
                </div>
            </div>
        </div> -->

        @foreach ($fotos as $foto)
        {{-- Card Modal --}}
        <div class="modal fade" id="foto{{ $foto->id }}" tabindex="-1" aria-labelledby="fotoLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="fotoLabel">{{ $foto->judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 videoPlayerBox centerItms">
                            <div class="col-6" style="width: 25rem;
                                                    border: none;
                                                    margin: 0;
                                                    margin-top: 30px;
                                                    ">
                                <img class="max-width: 500px" src="{{ asset('fotoProd/' . $foto->foto_konten) }}"
                                    width="520" height="340" controls>
                            </div>
                            <div class="card" style="
                                                    width: 25rem;
                                                    border: none;
                                                    ">
                                <h3>{{ $foto->judul }}</h3>
                                <p>{!! $foto->caption !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir Card foto --}}
        @endforeach
        @empty
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-end w-100  my-3">
        {{ $fotos->links() }}
    </div>
</div>
<!-- akhir feed foto -->
@endsection