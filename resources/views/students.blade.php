@extends('layouts.main')
@section('title', 'Students')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      @if (Session::has('status'))
        <div class="alert alert-success shadow-lg mb-8">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ Session::get('message') }}</span>
          </div>
        </div>
      @endif
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <span class="font-bold text-2xl md:text-2xl text-base-content inline-block">Student List</span>
        </div>
        <div class="flex flex-col sm:flex-row gap-2">
          <a href="/students-deleted" class="btn btn-sm sm:btn-md btn-outline mr-2">Show deleted data</a><a
            href="student-add" class="btn btn-sm sm:btn-md">Add data</a>
        </div>
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
            @foreach ($studentList as $data)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td class="capitalize">{{ $data->name }}</td>
                <td class="text-center">{{ $data->gender }}</td>
                <td class="text-center">{{ $data->nis }}</td>
                <td>
                  <a href="student/{{ $data->id }}" class="mx-1 btn btn-xs btn-outline">Detail</a>
                  <a href="student-edit/{{ $data->id }}" class="mx-1 btn btn-xs btn-outline">Edit</a>
                  <form action="student-destroy/{{ $data->id }}" method="post" class="inline-block">
                    @method('delete')
                    @csrf
                    <button class="mx-1 btn btn-xs btn-outline" type="submit"
                      onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <!-- ... -->
    </article>
  </div>
@endsection
