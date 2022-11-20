@extends('layouts.main')
@section('title', 'Teachers')

@section('content')
  <div class="max-w-xl mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      <p>But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases springing up
        around the country.</p>
      <div class="flex items-center justify-between">
        <h2>Teacher List</h2><a href="" class="btn btn-success">Add data</a>
      </div>
      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table w-full rounded-lg shadow-lg">
          <!-- head -->
          <thead>
            <tr>
              <th class="text-center w-14">#</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($teacherList as $teacher)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td class="capitalize">{{ $teacher->name }}</td>
                <td><a href="/teacher-detail/{{ $teacher->id }}" class="btn btn-xs btn-outline">Detail</a></td>
                </td>
            @endforeach


          </tbody>
        </table>
      </div>
      <!-- ... -->
    </article>
  </div>
@endsection
