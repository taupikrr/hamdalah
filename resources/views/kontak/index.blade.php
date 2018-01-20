@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1>Kontak</h1></center>
          <div class="panel ">
                <div class="panel-heading bg-yellow">Kontak
                <div class="panel-title pull-right"><a href="{{ route('kontak.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                    <div class="table table-responsive">
                         <table class="table" col >
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Seluler</th>
                                        
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                     <tr>
                            <td>{{$data->email}}</td>
                            <td>{{$data->seluler}}</td>
                            
                                <form action="{{route('kontak.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                        
                            <td>
                                <a class="btn btn-warning" href="{{ route('kontak.edit',$data->id)}}"><i class="fa fa-edit"> Edit</i></a>
                                <input class="btn btn-danger" type="submit" value="Delete">
                                {{csrf_field()}}
                                    </td>
                                </form>
                            </td>
                        </tr>
                        
                    
                </table>
                    </div>
               
                	
                </div>

             
                
                </div>
            </div>
            </div>
        </div>
    
@endsection