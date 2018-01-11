@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1>Data Rumah</h1></center>
          <div class="panel ">
                <div class="panel-heading bg-yellow">Data Rumah
                <div class="panel-title pull-right"><a href="{{ route('rumah.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                <table class="table" col >
                <thead>
                	<tr>
                        <th>Foto Agen</th>
                		<th>Nama Agen</th>
                        <th>No Hp</th>
                        <th>Tipe Rumah</th>
                        <th>Harga Rumah</th>
                        <th>Luas Tanah</th>
                        <th>Jumlah Lantai</th>
                        <th>Kamar Tidur</th>
                        <th>Kamar Mandi</th>
                		<th>Foto Rumah</th>
                        <th>Alamat</th>
                	
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($rumah as $data)
                		<tr>
                            <td><img class="img-rounded" src="{{asset('/img/'.$data->fotoagen)}}" height="100" width="100" ></td>
                            <td>{{$data->agen->fotoagen}}</td>
                            <td>{{$data->agen->nama}}</td>
                            <td>{{$data->agen->no_hp}}</td>
                            <td>{{$data->tipe_rumah}}</td>
                            <td>{{$data->harga_rumah}}</td>
                            <td>{{$data->luas_tanah}}</td>
                            <td>{{$data->jumlah_lantai}}</td>
                            <td>{{$data->kamar_tidur}}</td>
                            <td>{{$data->kamar_mandi}}</td>
                            <td>{{$data->alamat}}</td>
                            <td><img class="img-rounded" src="{{asset('/img/'.$data->foto)}}" height="100" width="100" ></td>
                       
                                
                		
                				<form action="{{route('rumah.destroy',$data->id)}}" method="post">

                				<input name="_method" type="hidden" value="DELETE">
                				<input name="_token" type="hidden">
                				        
                            <td>
                                <a class="btn btn-warning" href="{{ route('rumah.edit',$data->id)}}"><i class="fa fa-edit"> Edit</i></a>
                                <input class="btn btn-danger" type="submit" value="Delete">
                                {{csrf_field()}}
                                    </td>
                                </form>
                				
                				@endforeach
                			</td>
                		</tr>
                	</tbody>
                </table>
                	
                </div>

             
                
                </div>
            </div>
            </div>
        </div>
    
@endsection