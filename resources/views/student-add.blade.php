@extends('layouts.main')
@section('title', 'Add New Student')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Add new student</h1>
      <form action="student" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col mb-4">
          <label for="name">Name</label>
          <input type="text" placeholder="Your name" name="name" id="name"
            class="w-full my-1 input input-bordered focus:border-primary form-control @error('name')
            input-error text-red-600 focus:border-error bg-error/20
            @enderror"
            value="{{ old('name') }}" required autofocus />
          @error('name')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span>
              {{ $message }}</p>
          @enderror
        </div>
        <div class="flex flex-col mb-4">
          <label for="gender">Gender</label>
          <select
            class="w-full my-1 select select-bordered focus:border-primary form-control @error('gender')
          text-red-600 focus:border-error bg-error/20
          @enderror"
            name="gender" id="gender" required>
            <option disabled selected>Select one</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
          @error('gender')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span>
              {{ $message }}</p>
          @enderror
        </div>
        <div class="flex flex-col mb-4">
          <label for="nis">NIS</label>
          <input type="text" placeholder="Your NIS" name="nis" id="nis"
            class="w-full my-1 input input-bordered focus:border-primary form-control @error('nis')
            input-error text-red-600 focus:border-error bg-error/20
            @enderror"
            value="{{ old('nis') }}" required autofocus />
        </div>
        @error('nis')
          <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span>
            {{ $message }}</p>
        @enderror
        <div class="flex flex-col mb-2">
          <label for="class">Class</label>
          <select
            class="w-full my-1 select select-bordered focus:border-primary form-control @error('name')
          text-red-600 focus:border-error bg-error/20
          @enderror"
            name="class_id" id="class" required>
            <option disabled selected>Select one</option>
            @foreach ($class as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
          @error('class_id')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span>
              {{ $message }}</p>
          @enderror
        </div>
        <div class="w-full mb-4 form-control">
          <label class="label" for="photo">
            <span class="text-base label-text">Profile picture</span>
          </label>
          <input type="file" class="w-full file-input file-input-bordered" id="photo" name="photo" />
        </div>
        <button class="my-3 btn btn-success btn-block" type="submit">Save</button>
      </form>

      <a href="/students" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
