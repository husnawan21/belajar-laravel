@extends('layouts.main')
@section('title', 'Student Detail')

@section('content')
  <div class="max-w-xl mx-auto mt-56">
    <article class="px-4 prose">
      <div class="flex justify-center mb-12">
        @if ($student->image != '')
          <img src="{{ asset('storage/photo/' . $student->image) }}" alt="{{ $student->name }}"
            class="w-48 overflow-hidden rounded-full ring-primary ring-offset-base-100 ring-offset-8 ring-8" />
        @else
          <img src="{{ asset('images/default.png') }}" alt="{{ $student->name }}"
            class="w-48 overflow-hidden rounded-full ring-primary ring-offset-base-100 ring-offset-8 ring-8" />
        @endif
      </div>

      <h1 class="-my-2">Detail siswa <span class="text-primary">{{ $student->name }}</span></h1>

      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table w-full rounded-lg shadow-lg">
          <!-- head -->
          <thead>
            <tr>
              <th>Name</th>
              <th>NIS</th>
              <th>Gender</th>
              <th>Class</th>
              <th>Homeroom Teacher</th>
              <th>Extracurricular</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            <tr>
              <td>
                <img src="{{ asset('storage/photo/' . $student->image) }}" alt="{{ $student->name }}"
                  class="w-16 overflow-hidden rounded-full ring ring-primary ring-offset-base-100 ring-offset-2" />
              </td>
              <td class="font-semibold capitalize">{{ $student->name }}</td>
              <td>{{ $student->nis }}</td>
              <td>
                @if ($student->gender == 'P')
                  Perempuan
                @else
                  Laki-laki
                @endif
              </td>
              <td>{{ $student->class->name }}</td>
              <td>{{ $student->class->homeroomTeacher->name }}</td>
              <td>
                @foreach ($student->extracurriculars as $item)
                  {{ $item->name }} <br>
                @endforeach
              </td>
            </tr>



          </tbody>
        </table>
      </div>
      <!-- ... -->
      <a href="/students" class="my-6 btn btn-outline">Back</a>
    </article>
  </div>
@endsection
