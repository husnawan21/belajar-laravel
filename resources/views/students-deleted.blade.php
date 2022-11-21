@extends('layouts.main')
@section('title', 'Deleted Students')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      <div class="flex items-center justify-between">
        <span class="font-bold text-2xl md:text-2xl text-base-content inline-block">Deleted Student List</span>
      </div>
      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table w-full rounded-lg shadow-lg">
          <!-- head -->
          <thead>
            <tr>
              <th class="text-center w-14">#</th>
              <th class="text-center">Name</th>
              <th class="text-center">Gender</th>
              <th class="text-center">NIS</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($student as $data)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td class="capitalize">{{ $data->name }}</td>
                <td class="text-center">{{ $data->gender }}</td>
                <td class="text-center">{{ $data->nis }}</td>
                <td class="text-center">
                  <a href="/student/{{ $data->id }}/restore" class="mx-1 btn btn-xs btn-outline"
                    onclick="return confirm('Are you sure?')">Restore</a>
                </td>
              </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <!-- ... -->

      <a href="/students" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
