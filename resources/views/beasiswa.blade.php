@extends('layouts')

@section('form')
<div class="row justify-content-center">
  <div class="col-lg-6 col-md-8 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h1 class="h4 fw-bold py-2 mb-0">Pilihan Beasiswa</h1>
      </div>
      <div class="card-body">
        <div class="vstack gap-3">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Beasiswa Akademik</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-0">
                <li>
                  <strong>Kriteria Akademik:</strong>
                  <ul>
                    <li>Memiliki rata-rata nilai minimal 3.0 pada skala 4.0.</li>
                    <li>Melampirkan transkrip nilai terbaru dari institusi pendidikan.</li>
                  </ul>
                </li>
                <li>
                  <strong>Pengalaman Organisasi:</strong>
                  <ul>
                    <li>Terlibat aktif dalam kegiatan organisasi di kampus atau komunitas.</li>
                    <li>Melampirkan surat rekomendasi dari dosen atau pembina organisasi.</li>
                  </ul>
                </li>
                <li>
                  <strong>Esai Pribadi:</strong>
                  <ul>
                    <li>Menyusun esai maksimal 500 kata yang menjelaskan tujuan pendidikan dan rencana masa depan.</li>
                  </ul>
                </li>
                <li>
                  <strong>Wawancara:</strong>
                  <ul>
                    <li>Bersedia mengikuti wawancara dengan panel seleksi beasiswa.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5>Beasiswa Non-Akademik</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li>
                  <strong>Kriteria Keterampilan:</strong>
                  <ul>
                    <li>Memiliki keterampilan khusus (misalnya, seni, olahraga, atau teknologi) yang telah terbukti dengan prestasi atau sertifikat.</li>
                  </ul>
                </li>
                <li>
                  <strong>Pengalaman Sosial:</strong>
                  <ul>
                    <li>Terlibat dalam kegiatan pengabdian masyarakat atau proyek sosial minimal selama 6 bulan terakhir.</li>
                    <li>Menyertakan dokumentasi kegiatan tersebut.</li>
                  </ul>
                </li>
                <li>
                  <strong>Rekomendasi:</strong>
                  <ul>
                    <li>Melampirkan dua surat rekomendasi dari pihak yang relevan (misalnya, pembimbing, pelatih, atau koordinator kegiatan).</li>
                  </ul>
                </li>
                <li>
                  <strong>Wawancara:</strong>
                  <ul>
                    <li>Siap untuk mengikuti wawancara yang fokus pada motivasi dan kontribusi dalam bidang non-akademik.</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <a class="btn btn-primary mt-4" href="{{ route('beasiswa.create') }}">Daftar</a>
      </div>
    </div>
  </div>
</div>
@endsection
