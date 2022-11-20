@extends('layouts.main')
@section('title', 'Home')

@section('content')
  <section class="min-h-screen hero bg-base-200">
    <div class="text-center hero-content">

      <div class="max-w-2xl mt-56">
        <h1 class="text-5xl font-bold">Hello, <span class="text-primary"> {{ $name }}</span><label
            class="mx-2 text-5xl swap swap-flip">

            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" />

            <div class="swap-on">😈</div>
            <div class="swap-off">😇</div>
          </label></h1>
        <p class="mt-6 text-3xl font-semibold">Kamu adalah seorang {{ $role }}, lho!</p>

        <p class="py-6 leading-loose">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
          exercitationem
          quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        @if ($role == 'admin')
          <a href="" class="btn btn-primary btn-outline">Ke halaman admin, yuk!</a>
        @elseif ($role = 'staff')
          <a href="" class="btn btn-primary btn-outline">Ke halaman gudang, yuk!</a>
        @else
          <a href="" class="btn btn-primary btn-outline">Intip profilmu, yuk!</a>
        @endif
        <ul class="mt-12">
          <p class="my-4 text-xl font-semibold">Nama buah-buahan:</p>
          @foreach ($buah as $data)
            <button class="gap-2 my-2 btn btn-block btn-outline">
              {{ $data }}
            </button>
            <br>
          @endforeach
        </ul>

        {{-- table --}}
        <div class="py-6 overflow-x-auto">
          <table class="table w-full rounded-lg shadow-md">
            <!-- head -->
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Buah</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              @foreach ($buah as $data)
                <tr>
                  <th>{{ $loop->iteration }}</th>
                  <td class="capitalize">{{ $data }}</td>
                  <td>Rp10.000</td>
                </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
@endsection
