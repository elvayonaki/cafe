@extends('layouts.user') @section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Pembuatan Cafe Baru</strong>
        </div>
        <div class="card-body card-block">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('store.store')}}" method="post" enctype="multipart/form-data" id="create-store" class="form-horizontal">
                {{csrf_field()}}
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama Cafe</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Text" class="form-control">
                        <small class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Motto</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="motto" id="textarea-input" rows="4" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="alamat1" placeholder="Text" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Kota</label>
                        </div>
                        <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="alamat2" placeholder="Text" class="form-control">
                        </div>
                    </div> 
                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Provinsi</label>
                            </div>
                            <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="alamat3" placeholder="Text" class="form-control">
                            </div>
                        </div> 
                        <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Negara</label>
                                </div>
                                <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="alamat4" placeholder="Text" class="form-control">
                                </div>
                            </div>               
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">No Phone</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="phone" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Website</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="website" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Deskripsi Cafe</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="descrip" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
                @include('components.timeWorks')
                <div class="col-12">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Lokasi Peta</label>
                    </div>
                    @include('components.maps')
                </div>
                <div class="row form-group">
                    <div class="col col-md-6">
                        <input type="text" placeholder="Latitude" id="lat" class="form-control">
                    </div>
                    <div class="col col-md-6">
                        <input type="text" placeholder="Longitude" id="lng" class="form-control">
                    </div>
                </div>
                    <div class="col-12 checkbox">
                        <label for="checkbox1" class="form-check-label ">
                            <input type="checkbox" id="checkbox1" name="" value="true" class="form-check-input"> Saya setuju dengan segala ketentuan dan bertanggung jawab atas kebenaran semua informasi yang
                            telah saya isi.
                        </label>
                </div>
        </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" onclick="event.preventDefault();
            document.getElementById('create-store').submit()" ;>
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
</div>
@endsection
