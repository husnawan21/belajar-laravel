@extends('layouts.main')
@section('title', 'Class')

@section('content')
  <div class="max-w-3xl px-4 mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      <p>For years parents have espoused the health benefits of eating garlic bread with cheese to their children, with
        the food earning such an iconic status in our culture that kids will often dress up as warm, cheesy loaf for
        Halloween.</p>
      <h2 class="-my-2">Student List</h2>
      {{-- table --}}
      <div class="overflow-x-auto">
        <table class="table w-full rounded-lg shadow-md shadow-primary/20">
          <!-- head -->
          <thead>
            <tr>
              <th class="text-center w-14">#</th>
              <th>Nama</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($classList as $data)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td class="capitalize">{{ $data->name }}</td>
            @endforeach


          </tbody>
        </table>
      </div>
      <!-- ... -->
    </article>
  </div>
@endsection
