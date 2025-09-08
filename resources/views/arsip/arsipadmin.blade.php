@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <div class="page-pretitle">Overview</div>
                <h2 class="page-title">Arsip</h2>
              </div>
             
            </div>
          </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
    <form action="{{ route('arsipadmin') }}" method="GET" class="row mb-3">
      <div class="col-md-6">
        <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan judul surat..."
               value="{{ request('search') }}">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Cari</button>
      </div>
    </form>
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Waktu Pengarsipan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($arsip as $index => $item)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $item->judul }}</td>
              <td>{{ $item->kategori->nama }}</td>
              <td>{{ $item->created_at->format('d-m-Y') }}</td>
              <td>
                <a href="{{ route('arsip.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('arsip.download', $item->id) }}" class="btn btn-secondary btn-sm">Unduh</a>
                <a href="{{ route('arsip.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm btn-hapus" data-id="{{ $item->id }}">Hapus</button>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center">Tidak ada arsip surat</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <div class="mb-3 mt-3">
      <a href="{{ route('arsip.create') }}" class="btn btn-success">Arsipkan Surat</a>
    </div>
  </div>
</div>

<div class="modal fade" id="modalHapus" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h4>Yakin ingin menghapus data ini?</h4>
        <div class="mt-3">
          <button type="button" class="btn btn-danger" id="btnYa">Ya!</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
  let idHapus = null;
  document.querySelectorAll('.btn-hapus').forEach(btn => {
    btn.addEventListener('click', function () {
      idHapus = this.dataset.id;
      new bootstrap.Modal(document.getElementById('modalHapus')).show();
    });
  });

  document.getElementById('btnYa').addEventListener('click', function () {
    if (idHapus) {
      fetch(`/arsip/${idHapus}`, {
        method: 'DELETE',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Accept': 'application/json'
        }
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Gagal hapus: ' + response.status);
        }
        return response.json();
      })
      .then(data => {
        if (data.success) {
          location.reload();
        }
      })
      .catch(err => {
        alert(err.message);
      });
    }
  });
</script>

@endpush