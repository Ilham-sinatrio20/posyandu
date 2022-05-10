@extends('layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Table</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Components</a></div>
      <div class="breadcrumb-item">Table</div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Tambah Role</h2>
    <div class="card">
      <div class="card-header">
        <h4>Validasi Tambah Data</h4>
      </div>
      <div class="card-body">
        <form action="/role/store" method="post">
          @csrf
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control @error('role') is-invalid @enderror" id="role"
              name="role" placeholder="Enter User role">
            @error('role')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
      </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="/role">Cancel</a>
      </div>
      </form>
    </div>
  </div>
</section>
@endsection