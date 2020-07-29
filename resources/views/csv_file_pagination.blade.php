

@extends('csv_file')

@section('csv_data')

<table class="table table-bordered table-striped">
 <thead>
  <tr>
   <th>Product Name</th>
   <th>Detail</th>
  </tr>
 </thead>
 <tbody>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->name }}</td>
   <td>{{ $row->detail }}</td>
  </tr>
 @endforeach
 </tbody>
</table>

{!! $data->links() !!}

@endsection
@extends('layouts.app')