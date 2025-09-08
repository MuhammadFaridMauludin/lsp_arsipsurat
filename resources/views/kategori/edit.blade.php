@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Edit Kategori</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" name="nama" class="form-control" value="{{ $kategori->nama_kategori }}" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
