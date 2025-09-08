@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Kategori Surat</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($kategori as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nama }}</td>
          <td>
            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus kategori ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
