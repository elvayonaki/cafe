@extends('layouts.user') @section('content')
<div class="col-lg-12">
        <section class="card">
        <div class="card-body text-secondary">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                </div>
                <div class="table-data__tool-right">
                <a href="{{route('user.products.add')}}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add Produk
                    </button>
                </a>   
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Harga&nbsp;&nbsp;/Jam</th>
                            <th>Tersewa</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->name}}</td>
                            <td></ts>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
</div>
</section>
</div>
@endsection
