@extends('layouts.user') 
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Pembuatan Cafe Baru</strong>
        </div>
        <div class="card-body card-block">
        <form action="{{route('store.store')}}" method="post" enctype="multipart/form-data" id="create-store" class="form-horizontal">
            {{csrf_field()}}
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama Cafe</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Motto</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
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
                        <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
                @include('components.timeWorks')
                <div class="col-12">
                    @include('components.maps');
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" onclick="event.preventDefault();
            document.getElementById('create-store').submit()";>
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </div>
</div>
@endsection
