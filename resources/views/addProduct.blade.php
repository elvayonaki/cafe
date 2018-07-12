@extends('layouts.user') 
@section('content')
<div class="col-lg-12">
    <section class="card">
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('store.store')}}" method="post" enctype="multipart/form-data" id="create-store" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Nama Product</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="name" placeholder="Nama Product" class="form-control">
                                <small class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Deskripsi Product</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="descrip" id="textarea-input" rows="4" placeholder="Content..." class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Biaya Per Jam</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="pph" placeholder="Nama Product" class="form-control">
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            @include('components.gallery')
                </form>
            </div>
        </div>
</div>
</section>
</div>
@endsection
