@extends('backend/layouts.template')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon-document_alt"></i> Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('dahsboard') }}">Home</a></li>
                    <li><i class="icon-document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Pengalaman Kerja</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ isset($admin_lecture) ? 'Mengubah' : 'Menambahkan' }} Pengalaman Kerja
                    </header>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        <div class="panel-body">
            <div class="from">
                <form class="form-validate form-horizontal" id="pengalaman_kerja_form" method="POST"
                action="{{ route('pengalaman_kerja.store') }}">
                {{ csrf_field() !! }}
                <div class="form-group">
                    <label for="cname" class="control-label col-lg-2">Nama Perusahan <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="nama" name="nama" minlength="5"
                        required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="cname" class="control-label col-lg-2">Jabatan <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" 
                        required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="curl" class="control-label col-lg-2">Tahun Masuk <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" 
                        required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="curl" class="control-label col-lg-2">Tahun Selesai <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="tahun_keluar" name="tahun_keluar" 
                        required >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="{{ route('pengalaman_kerja.index') }}"><button class="btn btn-default" type="button">Batal</button></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
                </section>
            </div>
        </div>
    {{-- page end --}}
    </section>
</section>
@endsection
@push('content-css')
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datepicker.css') }}">
@endpush
@push('content-js')
<script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
    $('#tahun_masuk').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });$('tahun_keluar').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
@endpush