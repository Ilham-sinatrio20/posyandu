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
    <h2 class="section-title">Edit Imunization</h2>
    <div class="card">
      <div class="card-header">
        <h4>Validasi Edit Data</h4>
      </div>
      <div class="card-body">
        <form action="/imunization/store" method="post">
          @csrf
          <div class="form-group">
            <label for="id_baby">ID Bayi</label>
            <input type="text" class="form-control @error('id_baby') is-invalid @enderror" id="id_baby"
              name="id_baby" placeholder="Enter id_baby">
            @error('id_baby')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="id_vaccine">Jenis Vaksin</label>
            <select name="id_vaccine" id="id_vaccine" class="form-control">
                <option value="">Null</option>
            </select>
            @error('id_vaccine')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="bulan">Bulan</label>
            <input type="number" class="form-control @error('bulan') is-invalid @enderror" id="bulan"
              name="bulan" placeholder="Enter bulan">
            @error('bulan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="number" class="form-control @error('date') is-invalid @enderror" id="date"
              name="date" placeholder="Enter date">
            @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="/imunization">Cancel</a>
      </div>
      </form>
    </div>
  </div>
</section>
@endsection