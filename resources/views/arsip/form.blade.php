@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">{{ isset($arsip) ? 'Edit Arsip Surat' : 'Tambah Arsip Surat' }}</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="card-body">
        <form action="{{ isset($arsip) ? route('arsip.update', $arsip->id) : route('arsip.store') }}" 
              method="POST" enctype="multipart/form-data">
          @csrf
          @if(isset($arsip))
            @method('PUT')
          @endif

          <div class="mb-3">
            <label class="form-label">Judul Surat</label>
            <input type="text" name="judul" class="form-control" 
                   value="{{ old('judul', $arsip->judul ?? '') }}" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori_id" class="form-select" required>
              <option value="">-- Pilih Kategori --</option>
              @foreach ($kategori as $k)
                <option value="{{ $k->id }}" 
                  {{ (old('kategori_id', $arsip->kategori_id ?? '') == $k->id) ? 'selected' : '' }}>
                  {{ $k->nama }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Upload File (PDF)</label>
            <input type="file" name="file" class="form-control" accept="application/pdf"
                   @if(!isset($arsip)) required @endif>
          </div>

          <div class="d-flex">
            <a href="{{ route('arsipadmin') }}" class="btn btn-secondary me-2">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
