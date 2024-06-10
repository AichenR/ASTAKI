@extends('master')

@section('content')

<form action="store/add/post" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="column_Container">
        <label for="store_Name">Nama Toko<span style="color:red;">*</span></label>
        <input type="text" name="store_Name" id="store_Name" class="column_basic @error ('erHandling') is-invalid @enderror">
    </div>
    
    <div class="column_Container">
        <label for="addr">Alamat<span style="color:red;">*</span></label>
        <input type="num" name="addr" id="addr" class="column_basic @error ('erHandling') is-invalid @enderror">
    </div>

    <div class="column_Container">
        <label for="contact">Nomor Kontak<span style="color:red;">*</span></label>
        <input type="num" name="contact" id="contact" class="column_basic @error ('erHandling') is-invalid @enderror">
    </div>

    <div class="column_Container">
        <label for="acc_Num">Kode Panggil<span style="color:red;">*</span></label>
        <input type="num" name="acc_Num" id="acc_Num" class="column_basic @error ('erHandling') is-invalid @enderror">
    </div>
    
    @error ('erHandling')
        <div class="invalid_feedback">
            {{$message}}
        </div>
    @enderror
</form>


@endsection