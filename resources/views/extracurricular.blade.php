@extends('layouts.main')
@section('title', 'Extracurricular')

@section('content')
  <div class="max-w-3xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      <p>For years parents have espoused the health benefits of eating garlic bread with cheese to their children, with
        the food earning such an iconic status in our culture that kids will often dress up as warm, cheesy loaf for
        Halloween.</p>
      <div class="flex items-center justify-between">
        <h2>Extracurricular List</h2><a href="" class="btn btn-success">Add data</a>
      </div>
      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table w-full rounded-lg shadow-lg">
          <!-- head -->
          <thead>
            <tr>
              <th class="text-center w-14">#</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($ekskulList as $data)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td>{{ $data->name }}</td>
                <td><a href="extracurricular-detail/{{ $data->id }}" class="btn btn-xs btn-outline">Detail</a></td>
                </td>
            @endforeach


          </tbody>
        </table>
      </div>
      <!-- ... -->
    </article>
  </div>
@endsection
