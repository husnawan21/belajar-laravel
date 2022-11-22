@extends('layouts.main')
@section('title', 'About')

@section('content')
  <section class="min-h-screen hero bg-base-200">
    <div class="text-center hero-content">

      <div class="max-w-2xl mt-24">
        <div class="mb-8 avatar">
          <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="images/default.png" />
          </div>
        </div>
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

      </div>
    </div>
  </section>
@endsection
