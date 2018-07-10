@extends('layouts.user') @section('content')   
    <div class="col-lg-12">
            <section class="card">
                <div class="card-body text-secondary">
                        @if(Auth::user()->role->name == 'user')
                        <div class="col-md-12">
                            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-primary">Success</span>
                                        Anda tidak mempunyai toko <button type="button" class="btn btn-link btn-sm">Buat Toko</button>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        @endif
                </div>
            </section>
    </div>
@endsection
