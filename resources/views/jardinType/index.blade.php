@extends('_layouts.app')

@section('content')
  <h3>Jardin types</h3>

  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Label</th>
      </tr>
    </thead>


    <tbody>

      @foreach($jardinTypes as $jardinType)
        <tr>
            <td>{{ $jardinType["id"] }} </td>
            <td>{{ $jardinType["label"] }}</td>
        </tr>
      @endforeach
        
    </tbody>
      
  </table>

@endsection