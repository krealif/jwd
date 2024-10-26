@php
  $steps = [
    [
      'label' => '1. Pilihan Beasiswa',
      'url' => '/',
    ],
    [
      'label' => '2. Daftar',
      'url' => 'daftar',
    ],
    [
      'label' => '3. Hasil',
      'url' => 'hasil',
    ]
  ]
@endphp

<ul class="d-flex nav nav-pills border-bottom">
  @foreach ($steps as $step)
    <li class="nav-item flex-fill">
      <span class="nav-link py-3 fw-bold{{ request()->is($step['url']) ? ' active' : '' }}" href="#">{{ $step['label'] }}</span>
    </li>
  @endforeach
</ul>
