@extends('layouts.main')
@section('title', 'Edit Student')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Add new student</h1>
      <form action="/student/{{ $student->id }}" method="post">
        @method('PUT')
        @csrf
        <div class="flex flex-col mb-4">
          <label for="name">Name</label>
          <input type="text" placeholder="Type here" name="name" id="name"
            class="w-full my-1 input input-bordered focus:border-primary form-control" value="{{ $student->name }}"
            required autofocus />
        </div>
        <div class="flex flex-col mb-4">
          <label for="gender">Gender</label>
          <select class="w-full my-1 select select-bordered focus:border-primary form-control" name="gender"
            id="gender" required>
            <option value="{{ $student->gender }}" selected>
              @if ($student->gender == 'L')
                Laki-laki
              @else
                Perempuan
              @endif
            </option>
            @if ($student->gender == 'L')
              <option value="P">Perempuan</option>
            @else
              <option value="L">Laki-laki</option>
            @endif
          </select>
        </div>
        <div class="flex flex-col mb-4">
          <label for="nis">NIS</label>
          <input type="text" placeholder="Your NIS" name="nis" id="nis"
            class="w-full my-1 input input-bordered focus:border-primary form-control" value="{{ $student->nis }}"
            required autofocus />
        </div>
        <div class="flex flex-col mb-4">
          <label for="class">Class</label>
          <select class="w-full my-1 select select-bordered focus:border-primary form-control" name="class_id"
            id="class" required>
            <option value="{{ $student->class->id }}" disabled selected>{{ $student->class->name }}</option>
            @foreach ($class as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>
        <button class="my-3 btn btn-success btn-block" type="submit">Update</button>
      </form>

      <a href="/students" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
