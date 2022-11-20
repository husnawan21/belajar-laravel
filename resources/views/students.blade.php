@extends('layouts.main')
@section('title', 'Students')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      <div class="flex items-center justify-between">
        <h2>Student List</h2><a href="student-add" class="btn btn-success">Add data</a>
      </div>
      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table w-full rounded-lg shadow-lg">
          <!-- head -->
          <thead>
            <tr>
              <th class="text-center w-14">#</th>
              <th>Name</th>
              <th>Gender</th>
              <th>NIS</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($studentList as $data)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td class="capitalize">{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td><a href="student/{{ $data->id }}" class="btn btn-xs btn-outline">Detail</a></td>
              </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <!-- ... -->
    </article>
  </div>
@endsection
