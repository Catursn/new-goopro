@extends('back.includes.master')

@section('title')
  EDIT {{$properti->judul}}  | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit {{$properti->judul}} </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Properti</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$properti->judul}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('properti.update',$properti->id_properti)}}" enctype="multipart/form-data" >
            {{ csrf_field() }} {{ method_field('PATCH') }}
            <h5 class="card-header">Edit {{$properti->judul}}</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Judul </label>
                    <input id="inputText3" type="text" class="form-control" name="judul" value="{{$properti->judul}}"  >
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Hunian </label>
                        <select name="hunian" class="form-control"  >
                            <option value="">--Pilih Kategori--</option  >
                            @foreach($hunian as $data)
                                <option value='{{$data->hunian}}' {{(($properti->hunian==$data->hunian)? 'selected' : '')}}>{{$data->hunian}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Properti </label>
                        <select name="kategori" class="form-control"  >
                            <option value="">--Pilih Kategori--</option  >
                            @foreach($kategori as $data)
                                <option value='{{$data->properti}}' {{(($properti->kategori==$data->properti)? 'selected' : '')}}>{{$data->properti}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat </label>
                        <input id="inputText3" type="text" class="form-control" name="tempat" value="{{$properti->tempat}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Kota </label>
                        <select name="kota" class="form-control"  >
                            <option value="">--Pilih Kategori--</option  >
                            @foreach($kota as $data)
                                <option value='{{$data->kota}}' {{(($properti->kota==$data->kota)? 'selected' : '')}}>{{$data->kota}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat Tidur </label>
                        <input id="inputText3" type="number" class="form-control" name="tidur" value="{{$properti->tidur}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Kamar Mandi </label>
                        <input id="inputText3" type="number" class="form-control" name="mandi" value="{{$properti->mandi}}"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Informasi </label>
                    <input id="inputText3" type="text" class="form-control" name="informasi" value="{{$properti->informasi}}"  >
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Pengembang </label>
                    <input id="inputText3" type="text" class="form-control" name="pengembang" value="{{$properti->pengembang}}"  >
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Harga </label>
                        <input onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="text" class="form-control" name="harga" value="{{$properti->harga}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Harga Per M </label>
                        <input onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="text" class="form-control" name="perm" value="{{$properti->perm}}"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Luas Bangunan </label>
                        <input id="inputText3" type="number" class="form-control" name="bangunan" value="{{$properti->bangunan}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Luas Tanah </label>
                        <input id="inputText3" type="number" class="form-control" name="tanah" value="{{$properti->tanah}}"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Interior </label>
                        <input id="inputText3" type="text" class="form-control" name="interior" value="{{$properti->interior}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Eksterior </label>
                        <input id="inputText3" type="text" class="form-control" name="eksterior" value="{{$properti->eksterior}}"  >
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Jumlah Lantai </label>
                        <input id="inputText3" type="number" class="form-control" name="lantai" value="{{$properti->lantai}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Sertifikat </label>
                        <input id="inputText3" type="text" class="form-control" name="sertifikat" value="{{$properti->sertifikat}}"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tahun Dibuat </label>
                        <input id="inputText3" type="number" class="form-control" name="dibuat" value="{{$properti->dibuat}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Id Listing </label>
                        <input id="inputText3" type="text" class="form-control" name="listing" value="{{$properti->listing}}"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Listrik </label>
                        <input id="inputText3" type="number" class="form-control" name="listrik" value="{{$properti->listrik}}"  >
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat Parkir </label>
                        <input id="inputText3" type="text" class="form-control" name="parkir" value="{{$properti->parkir}}"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sarana Prasarana</label>
                    <textarea id="summernote" name="sarpras"  >{{$properti->sarpras}}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Video </label>
                    <input id="inputText3" type="text" class="form-control" name="video" value="{{$properti->video}}"  >
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Latitude </label>
                    <input id="inputText3" type="text" class="form-control" name="latitude" value="{{$properti->latitude}}"  >
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Longitude </label>
                    <input id="inputText3" type="text" class="form-control" name="longitude" value="{{$properti->longitude}}"  >
                </div>
                <div class="form-group">
                    <label class="col-form-label">Foto 1</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto1">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto1}}" alt="">
                </div>    
                <div class="form-group">
                    <label class="col-form-label">Foto 2</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto2">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto2}}" alt="">
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 3</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto3">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto3}}" alt=""> 
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 4</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto4">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto4}}" alt="">
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 5</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto5">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto5}}" alt="">
                </div>   
                <div class="form-group">
                    <label for="status">Status </label>
                    <select name="status" class="form-control"  >
                        <option value="">--Pilih Status--</option  >
                            <option value="aktif" {{(($properti->status=='aktif')? 'selected' : '')}}>Aktif</option>
                            <option value="nonaktif" {{(($properti->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
                    </select>
                </div>
                <div style="float:right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>  
            </form>        
        </div>
    </div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="/backend/css/summernote.min.css">
<link rel="stylesheet" type="text/css" href="/backend/css/summernote-lite.min.css">
@endpush
@push('scripts')
<script src="/backend/js/moment.min.js"></script>
<script src="/backend/js/summernote.min.js"></script>
<script src="/backend/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="/backend/js/summernote-lite.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    placeholder: 'Type here.....',
    tabsize: 2,
    height: 200,
  });
});
</script>
<script>
    
    $(".tm").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

</script>
<script type="text/javascript" src="my.js"></script>
<script>
    function tandaPemisahTitik(b){
        var _minus = false;
        if (b<0) _minus = true;
        b = b.toString();
        b=b.replace(".","");
        b=b.replace("-","");
        c = "";
        panjang = b.length;
        j = 0;
        for (i = panjang; i > 0; i--){
        j = j + 1;
        if (((j % 3) == 1) && (j != 1)){
        c = b.substr(i-1,1) + "." + c;
        } else {
        c = b.substr(i-1,1) + c;
        }
        }
        if (_minus) c = "-" + c ;
        return c;
    }

    function numbersonly(ini, e){
        if (e.keyCode>=49){
            if(e.keyCode<=57){
            a = ini.value.toString().replace(".","");
            b = a.replace(/[^\d]/g,"");
            b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
            ini.value = tandaPemisahTitik(b);
            return false;
            }
            else if(e.keyCode<=105){
                if(e.keyCode>=96){
                //e.keycode = e.keycode - 47;
                a = ini.value.toString().replace(".","");
                b = a.replace(/[^\d]/g,"");
                b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
                ini.value = tandaPemisahTitik(b);
                //alert(e.keycode);
                return false;
                }
                else {return false;}
            }
            else {
            return false; }
        }else if (e.keyCode==48){
            a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
            b = a.replace(/[^\d]/g,"");
            if (parseFloat(b)!=0){
            ini.value = tandaPemisahTitik(b);
            return false;
            } else {
            return false;
            }
        }else if (e.keyCode==95){
            a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
            b = a.replace(/[^\d]/g,"");
            if (parseFloat(b)!=0){
            ini.value = tandaPemisahTitik(b);
            return false;
            } else {
            return false;
            }
        }else if (e.keyCode==8 || e.keycode==46){
            a = ini.value.replace(".","");
            b = a.replace(/[^\d]/g,"");
            b = b.substr(0,b.length -1);
            if (tandaPemisahTitik(b)!=""){
            ini.value = tandaPemisahTitik(b);
            } else {
            ini.value = "";
            }

        return false;
        } else if (e.keyCode==9){
        return true;
        } else if (e.keyCode==17){
        return true;
        } else {
        //alert (e.keyCode);
        return false;
        }

    }
</script>
@endpush