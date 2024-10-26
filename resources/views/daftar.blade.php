@php
  $ipk = round(1.0 + mt_rand() / mt_getrandmax() * (4.0 - 1.0), 2)
@endphp

@extends('layouts')

@section('form')
<div class="row justify-content-center">
  <div class="col-lg-6 col-md-8 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h1 class="h4 fw-bold py-2 mb-0">Daftar Beasiswa</h1>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('beasiswa.store') }}" enctype='multipart/form-data'>
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
            @error('nama')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
            @error('email')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-3">
            <label for="no-telepon" class="form-label">Nomor HP</label>
            <input class="form-control @error('no_telepon') is-invalid @enderror" type="number" name="no_telepon" id="no-telepon" autocomplete="off" required value="{{ old('no_telepon') }}">
            @error('no_telepon')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-3">
            <label for="semester" class="form-label">Semester Saat Ini</label>
            <select class="form-select @error('semester') is-invalid @enderror" id="semester" name="semester" required>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
            @error('semester')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-4">
            <label for="ipk" class="form-label">IPK Terakhir</label>
            <input type="number" class="form-control ipk-input @error('ipk') is-invalid @enderror" id="ipk" name="ipk" value="{{ old('ipk', $ipk) }}" tabindex="-1" readonly>
            @error('ipk')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-3">
            <label for="pilihan" class="form-label">Pilihan Beasiswa</label>
            <select class="form-select @error('pilihan') is-invalid @enderror" id="pilihan" name="pilihan" required>
              <option value="1">Akademik</option>
              <option value="2">Non Akademik</option>
            </select>
            @error('pilihan')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="mb-4">
            <label for="berkas" class="form-label">Upload Berkas Syarat</label>
            <input class="form-control @error('berkas') is-invalid @enderror" type="file" id="berkas" name="berkas" accept=".zip, .jpg, .jpeg, .pdf" required">
            @error('berkas')<div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>@enderror
          </div>
          <div class="hstack gap-2">
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a type="submit" class="btn btn-secondary" href="{{ route('beasiswa.index') }}">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
@endsection
