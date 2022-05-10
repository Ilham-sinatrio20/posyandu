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
    <h2 class="section-title">Tambah Bayi</h2>
    <div class="card">
      <div class="card-header">
        <h4>Validasi Tambah Data</h4>
      </div>
      <div class="card-body">
        <form action="/baby/store" method="post" class="row">
        @csrf
        <div class="col-md-6">
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik"
              name="nik" placeholder="Enter nik">
            @error('nik')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
              name="nama_ibu" placeholder="Enter nama_ibu">
            @error('nama_ibu')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
            <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu"
              name="pekerjaan_ibu" placeholder="Enter pekerjaan_ibu">
            @error('pekerjaan_ibu')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
              name="nama_ayah" placeholder="Enter nama_ayah">
            @error('nama_ayah')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah"
              name="pekerjaan_ayah" placeholder="Enter pekerjaan_ayah">
            @error('pekerjaan_ayah')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
            @error('pekerjaan_ayah')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="nama">Nama Bayi</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
              name="nama" placeholder="Enter nama">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
              name="tempat_lahir" placeholder="Enter tempat_lahir">
            @error('tempat_lahir')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
              name="tanggal_lahir" placeholder="Enter tanggal_lahir">
            @error('tanggal_lahir')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="anak_ke">Anak ke-</label>
            <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" id="anak_ke"
              name="anak_ke" placeholder="Enter anak_ke">
            @error('anak_ke')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="">Null</option>
              </select>
              @error('jenis_kelamin')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="golongan_darah">Golongan Darah</label>
              <select name="golongan_darah" class="form-control" id="golongan_darah">
                <option value="null">Belum Tahu</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
              @error('golongan_darah')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="panjang_bayi">Panjang Bayi</label>
              <input type="number" class="form-control @error('panjang_bayi') is-invalid @enderror" id="panjang_bayi" name="panjang_bayi" placeholder="Enter panjang_bayi">
              @error('panjang_bayi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="berat_bayi">Berat Bayi</label>
              <input type="number" class="form-control @error('berat_bayi') is-invalid @enderror" id="berat_bayi" name="berat_bayi" placeholder="Enter berat_bayi">
              @error('golongan_darah')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

        </div>
      </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="/baby">Cancel</a>
      </div>
      </form>
    </div>
  </div>
</section>
@endsection