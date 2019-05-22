@extends('_layouts.app')

@section('content')
  <form action="/jardinTypes" enctype="multipart/form-data" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <h4>Jardin type name:</h4>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
          <input type="text" class="form-control" name="label">
        </div>
     </div>

     <center>
        <button type="submit" class="btn btn-primary">OK</button>
        <button type="Reset" class="btn btn-danger">Nhập lại</button>
    </center>
  </form>
@endsection