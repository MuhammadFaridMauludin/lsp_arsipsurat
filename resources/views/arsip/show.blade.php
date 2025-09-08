@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Detail Surat</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="card-body">
        <h3>{{ $arsip->judul }}</h3>
        <p><strong>Kategori:</strong> {{ $arsip->kategori->nama }}</p>
        <p><strong>Tanggal:</strong> {{ $arsip->created_at->format('d-m-Y') }}</p>

        {{-- <embed src="{{ asset('storage/' . $arsip->file) }}" type="application/pdf" width="100%" height="600px"> --}}
        <embed src="{{ Storage::url($arsip->file) }}" type="application/pdf" width="100%" height="600px">

        <div class="mt-3">
          <a href="{{ route('arsipadmin') }}" class="btn btn-secondary">Kembali <<</a>
          <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-primary">Unduh</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
