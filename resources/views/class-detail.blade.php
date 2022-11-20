@extends('layouts.main')
@section('title', 'Class Detail')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="px-4 prose">
      <h1 class="-my-2">Detail Class <span class="text-primary">{{ $class->name }}</span></h1>

      <div>
        <h3>Homeroom Teacher: <span class="text-primary">{{ $class->homeroomTeacher->name }}</span></h3>
        <h3>Students:</h3>
        <ol class="mt-2">
          @foreach ($class->students as $data)
            <li class="text-primary">
              {{ $data->name }} <br>
            </li>
          @endforeach
        </ol>
      </div>

      <a href="/students" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
