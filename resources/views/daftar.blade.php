@extends('layouts.member')
@section('content')
<br><br><br>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <form action="daftar/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nama Lengkap</label>
                      <input type="text" name="nama" placeholder="nama" class="form-control  @error('nama') is-invalid @enderror">
                      @error('nama')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control  @error('tgl_lahir') is-invalid @enderror">
                @error('tgl_lahir')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Pendidikan</label>
                <select name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
                  <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="Kuliah">Kuliah</option>
              </select>
                @error('pendidikan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" id="" placeholder="email" class="form-control @error('email') is-invalid @enderror">
          @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">No Hp</label>
                <input type="number" name="no_hp" id="" placeholder="no hp" class="form-control @error('no_hp') is-invalid @enderror">
                @error('no_hp')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat</label>
          <input type="text" name="alamat" id="" placeholder="alamat" class="form-control @error('alamat') is-invalid @enderror">
          @error('alamat')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Nick Name Game</label>
          <input type="text" name="nick_name" placeholder="nickname" class="form-control @error('nick_name') is-invalid @enderror">
          @error('nick_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">ID Game</label>
          <input type="number" name="ID_game" placeholder="id game" class="form-control @error('ID_game') is-invalid @enderror">
          @error('ID_game')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="mb-3">
                <label class="form-label">Lowongan</label>
          <select name="id_loker" id="" class="form-control @error('ID_game') is-invalid @enderror">
            @foreach ($loker as $item)
                <option value="{{ $item->id }}">{{ $item->nama_game }}</option>
            @endforeach
          </select>
          @error('ID_game')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
          </div>
        </div>
        <div class="mb-3">
            <div class="d-grid gap-2">
              <button  class="btn btn-primary" type="submit">Simpan</button>
           </div>
        </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection