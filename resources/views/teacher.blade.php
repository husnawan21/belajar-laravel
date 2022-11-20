@extends('layouts.main')
@section('title', 'Teachers')

@section('content')
  <div class="max-w-xl mx-auto mt-56">
    <article class="prose">
      <h1>Garlic bread with cheese: What the science tells us</h1>
      <p>For years parents have espoused the health benefits of eating garlic bread with cheese to their children, with
        the food earning such an iconic status in our culture that kids will often dress up as warm, cheesy loaf for
        Halloween.</p>
      <p>But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases springing up
        around the country.</p>
      <h2>Teacher List</h2>
      {{-- table --}}
      <div class="-my-8 overflow-x-auto">
        <table class="table w-full rounded-lg shadow-md shadow-primary/20">
          <!-- head -->
          <thead>
            <tr>
              <th class="text-center w-14">#</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($teacherList as $teacher)
              <tr>
                <th class="text-center w-14">{{ $loop->iteration }}</th>
                <td class="capitalize">{{ $teacher->name }}</td>
            @endforeach


          </tbody>
        </table>
      </div>
      <!-- ... -->
    </article>
  </div>
@endsection
