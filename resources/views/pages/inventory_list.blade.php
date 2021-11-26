@extends('layout.app')
@section('content')

<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Value</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($inventoryList as $list)
                <tr>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->description }}</td>
                    <td>{{ $list->value }}</td>
                    <td>{{ $list->status }}</td>

                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection