@extends('master')

@section('content')
<div id="optionHead">
    <div onclick="window.history.back()" class="blockMenu">
        <i class="bi bi-chevron-compact-left"></i>
    </div>                                                                                                                                                                                                         
    <div class="blockMenu" style="width:90%">Menambah Barang</div>
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('item_Post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="column_Container">
                    <label for="item_Name">Nama Barang<span style="color:red;">*</span></label>
                    <input type="text" name="item_Name" id="item_Name" class="column_basic @error ('erHandling') is-invalid @enderror">
                </div>

                <div class="column_Container">
                    <label for="acq_From">Asal Toko<span style="color:red;">*</span></label>
                    <select name="acq_From" id="acq_From">
                        <option value="">==Pilih Toko==</option>
                        @foreach($store as $sto)
                            <option value="{{$sto->id}}">{{$sto->store_Name}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div class="column_Container">
                    <label for="acquired_Price">Harga Asal<span style="color:red;">*</span></label>
                    <input type="num" name="acquired_Price" id="acquired_Price" class="column_basic @error ('erHandling') is-invalid @enderror">
                </div>

                <div class="column_Container">
                    <label for="selling_Price">Harga Jual<span style="color:red;">*</span></label>
                    <input type="num" name="selling_Price" id="selling_Price" class="column_basic @error ('erHandling') is-invalid @enderror">
                </div>

                <div class="column_Container">
                    <label for="stock">Stok tersedia<span style="color:red;">*</span></label>
                    <input type="num" name="stock" id="stock" class="column_basic @error ('erHandling') is-invalid @enderror">
                </div>

                <div class="column_Container">
                    <label for="documentation">Dokumentasi<span style="color:red;">*</span></label>
                    <input type="file" name="documentation[]" id="documentation" multiple="true" class="column_basic @error ('erHandling') is-invalid @enderror">
                </div>
    
                @error ('erHandling')
                <div class="invalid_feedback">
                    {{$message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection