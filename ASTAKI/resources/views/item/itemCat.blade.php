@extends('master')

@section('content')
<div id="optionHead">
    <div onclick="window.history.back()" class="blockMenu">
        <i class="bi bi-chevron-compact-left"></i>
    </div>
    <a class="blockMenu" href="{{route('item_Reg')}}" style="width:10%">
        <i class="bi bi-plus-circle-fill"></i>
    </a>                                                                                                                                                                                                          
    <div class="blockMenu" style="width:80%">Katalog Barang</div>
</div>

<div class="container" style="margin-top:20px;">
<form action="/item?" method="GET">
    <div class="col-3 m-3" style="float:left;">
        <label for="namaBarang" style="margin: top 1px;">Nama Barang : </label>
        <input type="text" name="search" placeholder="Nama Item..." value="{{old('search')}}">
    </div>

    <div class="col-3 m-3" style="float:left;">
        <label for="store" style="margin-top:1 rem;">Toko : </label>
        <select  id="store" class="form-control" name="storeChoose">
            <option value="">Pilih Toko</option>
            @foreach ($store as $sto)
                <option value="{{$sto->id}}">{{$sto->store_Name}}</option>
            @endforeach
        </select>
    </div>
    <button type="search" class="bi bi-search m-3 border-none" style="font-size:20px;"></button>
</form>

    <div class="card" >
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Item</th>
                    <th scope="col">Harga Kulak</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Asal Toko</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $no=1;
                @endphp
                @foreach($item as $index=>$row)
                <tr>
                    <th scope="row">{{$index + $item -> firstItem()}}</th>
                    <td>{{$row->item_Name}}</td>
                    <td>{{$row->acquired_Price}}</td>
                    <td>{{$row->selling_Price}}</td>
                    <td>{{$row->acq_From}}</td>
                    <td>
                        <a href="/item/view?{{$row->id}}" class="btn btn-danger">Show</a>
                        <a href="#" class="btn btn-warning deletedata" data-id="{{$row->id}}" data-nama="{{$row->item_Name}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$item->links()}}
        <button onclick="window.history.back()" class="btn btn-info text-right">Back</button>
    </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        //Sapaan
        toastr.success("{{Session::get('success')}}"); 

        //Fungsi hover searchbar
        $("#hoverBlock").hover(
            function(){
                $("#hoverMenu").slideToggle();
            }
        );
        
        $("#hoverMenu").hover(
            function(){
                $("#hoverMenu").fadeToggle();
            }     
        );
    });
</script>
<script>            
$('.deletedata').click(function(){
    var usr_id = $(this).attr('data-id');
    var usr_name = $(this).attr('data-nama');
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover "+usr_name+" data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location = "/item/delete/"+usr_id+""
            swal("Poof! Your data has been deleted!", {
                    icon: "success",
            });
        } 
        else {
            swal("Your Project is safe!");
        }
    });
})
</script>
<script>
    @if (Session::has('success'))
        toastr.success("{{Session::get('success')}}");
    @endif
</script>
@endsection

