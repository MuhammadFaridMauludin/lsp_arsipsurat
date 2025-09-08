@extends('layouts.admin.tabler')
@section('content')
  <div class="page-header d-print-none" aria-label="Page header">
      <div class="container-xl">
          <div class="row g-2 align-items-center">
              <div class="col">
                  <!-- Page pre-title -->
                  <div class="page-pretitle">Overview</div>
                  <h2 class="page-title">About</h2>
              </div>
          </div>
      </div>
  </div>

  <div class="page-body">
      <div class="container-xl">
          <div class="card">
              <div class="card-body text-center">
                  <!-- Foto -->
                    <img src="{{ asset('assets/img/20220820_102617.jpg') }}" alt="Foto Profil" class="avatar avatar-xl mb-3 rounded-circle">

                  <!-- Nama -->
                  <h3 class="mb-1">Muhammad Farid Mauludin</h3>

                  <!-- NIM -->
                  <p class="text-muted">NIM: 2231740009</p>

                  <!-- Tanggal Pembuatan -->
                  <p class="text-muted">
                      Tanggal Pembuatan Aplikasi: {{ date('d F Y') }}
                  </p>
              </div>
          </div>
      </div>
  </div>
@endsection
