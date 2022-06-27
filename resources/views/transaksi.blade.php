@extends('index')
@section('content')
<a class="btn btn-success" style="margin-bottom: 1%;" href="#signupModal" data-toggle="modal">Create</a>
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
                <td class="text-center">{{$value->tanggal_transaksi}}</td>
                <td>{{$value->item->kode_item}}</td>
                <td>{{$value->item->nama_item}}</td>
                <td>{{$value->lokasi->kode_lokasi}}</td>
                <td>{{$value->lokasi->nama_lokasi}}</td>
                <td class="text-end">{{$value->planning->qty_target}}</td>
                <td class="text-end">{{$value->npk_karyawan}}</td>
                <td class="text-center">
                    <a class="btn btn-warning" href="#signupModal{{$value->id}}" data-toggle="modal">Update</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{ route('delete.transaksi', ['id' => $value->id]) }}">Delete</a>
                </td>
            </tr>
            <!-- MODAL -->
            <div class="modal fade" id="signupModal{{$value->id}}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- Modal root -->
                        <div class="modal-header bg-warning">
                            <h2 class="modal-title">Update Transaksi</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="post" action="{{route('update.transaksi')}}">
                            @csrf
                            <div class="modal-body">
                                <input id="id_kt" name="id_kt" value="{{$value->id}}" hidden>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-3 col-form-label text-md-end">{{ __("Tanggal") }}</label>
                                    <div class="col">
                                        <input value="{{\Carbon\Carbon::now()}}" type="datetime-local" id="date_time" name="date_time" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label text-md-end" for="cd_item">{{ __("Kode Item") }}</label>
                                    <div class="col">
                                        <select id="cd_item" name="cd_item" class="form-control">
                                            <option value="">*wajib di isi</option>
                                            @foreach($item as $value)
                                            <option value="{{$value->kode_item}}">
                                                {{$value->kode_item}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label text-md-end" for="cd_lokasi">{{ __("Kode Lokasi") }}</label>
                                    <div class="col">
                                        <select id="cd_lokasi" name="cd_lokasi" class="form-control">
                                            <option value="">*wajib di isi</option>
                                            @foreach($lokasi as $value)
                                            <option value="{{$value->kode_lokasi}}">
                                                {{$value->kode_lokasi}}
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
    <!-- MODAL CREATE -->
    <div class="modal fade" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal root -->
                <div class="modal-header bg-success">
                    <h2 class="modal-title text-light">Create Transaksi</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post" action="{{route('create.transaksi')}}">
                    @csrf
                    <div class="modal-body">
                        <input id="id_kt" name="id_kt" value="{{$value->id}}" hidden>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end">{{ __("Tanggal") }}</label>
                            <div class="col">
                                <input value="{{\Carbon\Carbon::now()}}" type="datetime-local" id="date_time" name="date_time" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end" for="cd_item">{{ __("Kode Item") }}</label>
                            <div class="col">
                                <select id="cd_item" name="cd_item" class="form-control">
                                    <option value="">*wajib di isi</option>
                                    @foreach($item as $value)
                                    <option value="{{$value->kode_item}}">
                                        {{$value->kode_item}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end" for="cd_lokasi">{{ __("Kode Lokasi") }}</label>
                            <div class="col">
                                <select id="cd_lokasi" name="cd_lokasi" class="form-control">
                                    <option value="">*wajib di isi</option>
                                    @foreach($lokasi as $value)
                                    <option value="{{$value->kode_lokasi}}">
                                        {{$value->kode_lokasi}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            {{ __("Create") }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection