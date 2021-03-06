@extends('layouts.master')
@section('styletambahan')
<style type="text/css">
    body {
        margin-top: 20px;
        background-color: #f2f6fc;
        color: #69707a;
    }

    .img-account-profile {
        height: 10rem;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
        font-weight: 500;
    }

    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }

    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }
</style>
@section('content')
<div class="container-fluid py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <hr class="mt-0 mb-4">
            <form method="POST" action="{{ route('pasien.updatedata') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @include('sweetalert::alert')
                <div class="row">
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Update Data Diri Pasien</div>
                            <div class="card-body">

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nik">Nomor Induk Kependudukan</label>
                                            <input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" type="text" placeholder="NIK" value="{{ $users->nik }}">
                                            @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="small mb-1" for="kelas">Kelas</label>
                                            <select id="kelas" name="kelas" class="form-select @error('kelas') is-invalid @enderror" required>
                                                <option value="regular" @if($users->kelas == 'regular') selected @endif>Regular</option>
                                                <option value="bpjs" @if($users->kelas == 'bpjs') selected @endif>BPJS</option>
                                            </select>
                                            @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="nama_lengkap">Nama lengkap</label>
                                    <input class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" type="text" placeholder="Nama Lengkap" value="{{ $users->nama_lengkap }}">
                                    @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="alamat">Alamat</label>
                                    <input class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat Anda" value="{{ $users->alamat }}">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jenis_kelamin">Jenis Kelamin</label>
                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                            <option value="Laki-Laki" @if($users->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($users->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="no_hp">Nomor HP</label>
                                        <input class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" type="text" placeholder="Masukkan nomor HP" @if($users->no_hp!=null) value="{{ $users->no_hp }}" @endif>
                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="tempat_lahir">Tempat Lahir</label>
                                        <input class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" @if($users->tempat_lahir!=null) value="{{ $users->tempat_lahir }}" @endif>
                                        @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="Tanggal Lahir. Contoh: 2000-10-15" @if($users->tgl_lahir!=null) value="{{ $users->tgl_lahir }}" @endif>
                                        @error('tgl_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a class="btn btn-secondary" href="{{route('pasien.viewprofil')}}">Batal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row mb-5 Regular" id="bpjs" style="display: none;">
                            <div>
                                <div class="card mb-3">
                                    <div class="card-header">Data BPJS Kesehatan</div>
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nomor_bpjs">Nomor Kartu BPJS</label>
                                            <input class="form-control @error('nomor_bpjs') is-invalid @enderror" id="nomor_bpjs" name="nomor_bpjs" type="text" value="{{ $users->nomor_bpjs }}">
                                            @error('nomor_bpjs')
                                            <span class=" invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="tingkat_faskes">Tingkat Faskes</label>
                                            <select id="tingkat_faskes" name="tingkat_faskes" class="form-select @error('tingkat_faskes') is-invalid @enderror" required>
                                                <option value="null">Pilih Tingkat Faskes</option>
                                                <option value="I" @if($users->tingkat_faskes == 'I') selected @endif>I</option>
                                                <option value="II" @if($users->tingkat_faskes == 'II') selected @endif>II</option>
                                                <option value="III" @if($users->tingkat_faskes == 'III') selected @endif>III</option>
                                                <option value="IV" @if($users->tingkat_faskes == 'IV') selected @endif>IV</option>
                                                <option value="V" @if($users->tingkat_faskes == 'V') selected @endif>V</option>
                                                <option value="VI" @if($users->tingkat_faskes == 'VI') selected @endif>VI</option>
                                                <option value="VII" @if($users->tingkat_faskes == 'VII') selected @endif>VII</option>
                                                <option value="VIP" @if($users->tingkat_faskes == 'VIP') selected @endif>VIP</option>
                                            </select>
                                            @error('tingkat_faskes')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Upload Scan Kartu BPJS</div>
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <div class="image-area mt-4">
                                                <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4">Pilih gambar</label>
                                            <input name="gambar" id="upload" type="file" onchange="readURL(this);" style="display: none;" class="form-control border-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripttambahan')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function() {
        $('#upload').on('change', function() {
            readURL(input);
        });
    });
    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById('upload');
    var infoArea = document.getElementById('upload-label');
    input.addEventListener('change', showFileName);

    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
    $(document).ready(function() {
        $('#kelas').on('change', function() {
            var value = $(this).val();
            $(".regular").hide();
            $("#" + value).show();
        });
    });
</script>
@endsection