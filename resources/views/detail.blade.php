@extends('layouts.user')

@section('content')
    

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<div class="blog">
				      <img class="img-rounded" src="{{asset('/img/'.$rumah->foto)}}" height="500" width="500" >

						

							<p>
							Lokasi         : {{$rumah->alamat}}<br>
							Tipe Rumah     : {{$rumah->tipe_rumah}}<br> 
							Harga Rumah    : {{$rumah->harga_rumah}} <br>
							Luas Tanah     : {{$rumah->luas_tanah}} <sup>2</sup> <br>
							Jumlah Lantai  : {{$rumah->jumlah_lantai}}<br> 
							Kamar Tidur    : {{$rumah->kamar_tidur}}<br>
							Kamar Mandi    : {{$rumah->kamar_mandi}}<br>
							Nama Agen      : {{$rumah->agens->nama}}<br>
							Foto Agen      : <img class="img-rounded" src="{{asset('/img/'.$rumah->agens->fotoagen)}}" height="100" width="100" ><br>
							Hubungi        : {{$rumah->agens->no_hp}}</p>
						
						

						</div>
					</div>
				</div>	
				
			</div>
		</div>
	</div>
	
@endsection
