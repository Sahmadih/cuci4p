@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA BIAYA
                    <a href="{{ route('biaya') }}" class="btn btn-md btn-primary float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpan.biaya') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="jenis" class="form-label">Jenis Biaya</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Motor">
                            </div>
                            <div class="col">
                                <label for="biaya" class="form-label">Biaya</label>
                                <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Rp. 15000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success full-width">SIMPAN</button>
                                <a href="{{ route('biaya') }}" class="btn btn-danger">BATAL</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
