@extends('layouts.main')
@section('title', 'Students')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      @if (Session::has('status'))
        <div class="mb-8 shadow-lg alert alert-success">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 stroke-current" fill="none"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ Session::get('message') }}</span>
          </div>
        </div>
      @endif
      <div class="flex flex-col justify-between mt-12 sm:flex-row">
        <div class="flex items-center py-8">
          <span class="inline-block text-2xl font-bold md:text-2xl text-base-content">Student
            List</span>
        </div>
        <div class="flex flex-row justify-between w-full gap-2 sm:w-fit sm:justify-start sm:flex-col">
          <a href="/students-deleted" class="btn btn-sm sm:btn-md btn-outline">Show deleted data</a>
          <a href="student-add" class="btn btn-sm sm:btn-md ">Add data</a>
        </div>
      </div>

      {{-- search start --}}
      <form action="/students">
        <div class="mt-6 form-control">
          <div class="input-group">
            <input type="text" placeholder="Search…" class="w-full input input-bordered" name="keyword"
              value="{{ request('keyword') }}" />
            <button class="btn btn-square" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </button>
          </div>
        </div>
      </form>
      {{-- search end --}}

    </article>

    {{-- table --}}
    <div class="mt-8 overflow-x-auto rounded-lg shadow-lg">
      <table class="table w-full">
        <!-- head -->
        <thead>
          <tr>
            <th class="text-center w-14">#</th>
            <th class="text-center">Name</th>
            <th class="text-center">Gender</th>
            <th class="text-center">NIS</th>
            <th class="text-center">Class</th>
            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
            @else
              <th class="text-center">Action</th>
            @endif

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
              <td class="text-center">{{ $data->class->name }}</td>

              @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
              @else
                <td>
                  <a href="student/{{ $data->id }}" class="mx-1 btn btn-xs btn-outline">Detail</a>
                  <a href="student-edit/{{ $data->id }}" class="mx-1 btn btn-xs btn-outline">Edit</a>
              @endif
              @if (Auth::user()->role_id == 1)
                <form action="student-destroy/{{ $data->id }}" method="post" class="inline-block">
                  @method('delete')
                  @csrf
                  <button class="mx-1 btn btn-xs btn-outline" type="submit"
                    onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              @endif

              </td>
            </tr>
          @endforeach



        </tbody>
      </table>
    </div>
    <!-- ... -->

    <div class="flex justify-center my-8">
      {{ $studentList->links() }}
    </div>
  </div>
@endsection
