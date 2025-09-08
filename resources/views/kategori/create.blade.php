@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Tambah Kategori</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <form action="{{ route('kategori.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
