@extends('index')
@section('content')

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Kode Item</th>
                <th class="text-center">Nama Item</th>
                <th class="text-center">Kode Lokasi</th>
                <th class="text-center">Nama Lokasi</th>
                <th class="text-center">Qty Actual</th>
                <th class="text-center">Created By</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_data as $value)
            <tr>
                <th class="text-center">{{$loop->iteration}}</th>
                <td class="text-center">{{$value->tr_tgl}}</td>
                <td>{{$value->tr_kode}}</td>
                <td>{{$value->it_nama}}</td>
                <td>{{$value->lok_kode}}</td>
                <td>{{$value->lok_nama}}</td>
                <td class="text-end">{{$value->plan_qty}}</td>
                <td class="text-end">{{$value->log_by}}</td>
                <td class="text-center">
                    <a class="btn btn-warning" href="#signupModal{{$value->id}}" data-toggle="modal">Update</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <!-- MODAL -->
            <div class="modal fade" id="signupModal{{$value->id}}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- Modal root -->
                        <div class="modal-header">
                            <h2 class="modal-title">Update Data {{$value->tr_kode}}</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="post" action="{{route('update.transaksi')}}" action="patchlink">
                            @method('patch')
                            <div class="modal-body">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __("Tanggal") }}</label>
                                    <div class="col-md-6">
                                        <input value="{{$value->tr_tgl}}" id="rm" name="rm" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="kode_item">{{ __("Kode Item") }}</label>
                                    <div class="col-md-6">
                                        <select id="kode_item" name="kode_item" class="form-control">
                                            <option value="{{$value->tr_kode}}"></option>
                                            @foreach($item as $value)
                                            <option value="{{$value->kode}}">
                                                {{$value->kode}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="kode_lokasi">{{ __("Kode Lokasi") }}</label>
                                    <div class="col-md-6">
                                        <select id="kode_lokasi" name="kode_lokasi" class="form-control">
                                            <option value="{{$value->lok_kode}}"></option>
                                            @foreach($lokasi as $value)
                                            <option value="{{$value->kode}}">
                                                {{$value->kode}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("Update") }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection