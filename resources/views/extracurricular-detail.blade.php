@extends('layouts.main')
@section('title', 'Extracurricular Detail')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="px-4 prose">
      <h1 class="-my-2">Detail Extracurricular <span class="text-primary">{{ $ekskul->name }}</span></h1>

      <div>
        <h3>Member:</h3>
        <ol class="mt-2">
          @foreach ($ekskul->students as $data)
            <li class="text-primary">
              {{ $data->name }} <br>
            </li>
          @endforeach
        </ol>

      </div>

      <a href="/extracurricular" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
