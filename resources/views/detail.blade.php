@extends('layouts.user')

@section('content')
    

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<div class="blog">
						<div class="panel-title pull-right">
							<br>
							<br>

				      <img class="img-rounded" src="{{asset('/img/'.$rumah->foto)}}" height="500" width="500" >

						
				      <table class="table table-hover">
				      	<tr>
				      		<td>Nama Perumahan </td>
				      		<td>{{$rumah->jenis->jenis}}</td>
				      	</tr>
				      	<tr>
				      		<td>Lokasi</td>
				      		<td>{{$rumah->alamat}}</td>
				      	</tr>
				      	<tr>
				      		<td>Tipe Rumah </td>
				      		<td>{{$rumah->tipe_rumah}}</td>
				      	</tr>
				      	<tr>
				      		<td>Harga Rumah </td>
				      		<td>{{$rumah->harga_rumah}}</td>
				      	</tr>
				      	<tr>
				      		<td>Luas Tanah </td>
				      		<td>{{$rumah->luas_tanah}}<sup>2</sup></td>
				      	</tr>
				      	<tr>
				      		<td>Jumlah Lantai </td>
				      		<td>{{$rumah->jumlah_lantai}}</td>
				      	</tr>
				      	<tr>
				      		<td>Kamar Tidur </td>
				      		<td>{{$rumah->kamar_tidur}}</td>
				      	</tr>
				      	<tr>
				      		<td>Kamar Mandi </td>
				      		<td>{{$rumah->kamar_mandi}}</td>
				      	</tr>
				      	<tr>
				      		<td>Nama Agen </td>
				      		<td>{{$rumah->agens->nama}}</td>
				      	</tr>
				      	<tr>
				      		<td>Foto Agen </td>
				      		<td><img class="img-rounded" src="{{asset('/img/'.$rumah->agens->fotoagen)}}" height="100" width="100" ></td>
				      	</tr>
				      	<tr>
				      		<td>Hubungi </td>
				      		<td>{{$rumah->agens->no_hp}}</td>
				      	</tr>
				      </table>						
						

						</div>
					</div>
				</div>	
				
			</div>
		</div>
	</div>
	
@endsection
