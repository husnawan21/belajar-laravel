@extends('layouts.main')
@section('title', 'Teacher Detail')

@section('content')
  <div class="max-w-xl px-4 mx-auto mt-56">
    <article class="px-4 prose">
      <h1 class="-my-2">Detail Teacher <span class="text-primary">{{ $teacher->name }}</span></h1>

      <div>
        <h3>Class:
          @if ($teacher->class)
            <span class="text-primary">{{ $teacher->class->name }}</span>
          @else
            -
          @endif
        </h3>

        <h3>Students:</h3>
        @if ($teacher->class)
          <ol>
            @foreach ($teacher->class->students as $item)
              <li>
                {{ $item->name }}
              </li>
            @endforeach

          </ol>
        @else
          -
        @endif
      </div>
      <a href="/teacher" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
