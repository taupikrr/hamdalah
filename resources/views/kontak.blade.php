@extends('layouts.user')

@section('content')
<div class="container" style="padding-top: 50px">
            <div class="center">        
                <h2>Hubungi kami</h2>
                <p>Karena dengan memberi kepastian ,membuat kami senang.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form action="{{route('kontak.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Seluler</label>
                            <input type="number" name="seluler" class="form-control">
                        </div>
                                
                        {{-- <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div> --}}                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Simpan</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div>
@endsection
