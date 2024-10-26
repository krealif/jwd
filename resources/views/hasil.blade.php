@extends('layouts')

@section('form')
<div class="row justify-content-center">
  <div class="col-lg-6 col-md-8 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h1 class="h4 fw-bold py-2 mb-0">Hasil</h1>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h6 class="mb-1">Nama</h6>
          <span>{{ $beasiswa->nama }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Email</h6>
          <span>{{ $beasiswa->email }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Nomor HP</h6>
          <span>{{ $beasiswa->no_telepon }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Semester Saat Ini</h6>
          <span>{{ $beasiswa->semester }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">IPK Terakhir</h6>
          <span>{{ $beasiswa->ipk }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Pilihan Beasiswa</h6>
          <span>{{ $beasiswa->pilihan }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Status Ajuan</h6>
          <span class="badge rounded-pill text-bg-warning">{{ $beasiswa->status_ajuan }}</span>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Berkas Syarat</h6>
          <a href="{{ Storage::disk('public')->url($beasiswa->berkas); }}">Unduh Berkas</a>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
