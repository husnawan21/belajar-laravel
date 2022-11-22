@extends('layouts.main')
@section('title', 'Login')

@section('content')
  <section class="max-w-full md:max-w-md px-5 mx-auto mt-[60%] md:mt-[30%]">
    <div class="prose">
      <h1>Login</h1>
      <form action="login" method="post">
        @csrf
        <div class="flex flex-col mb-4">
          <label for="email">Email</label>
          <input type="text" placeholder="Your email" name="email" id="email"
            class="w-full my-1 input input-bordered focus:border-primary form-control @error('email')
              input-error text-red-600 focus:border-error bg-error/20
              @enderror"
            value="{{ old('email') }}" required autofocus />
          @error('email')
            <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span>
              {{ $message }}</p>
          @enderror
        </div>
        <div class="flex flex-col mb-4">
          <label for="password">Password</label>
          <input type="password" placeholder="Input password" name="password" id="password"
            class="w-full my-1 input input-bordered focus:border-primary form-control @error('password')
              input-error text-red-600 focus:border-error bg-error/20
              @enderror"
            value="{{ old('password') }}" required autofocus />
        </div>
        @error('password')
          <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span>
            {{ $message }}</p>
        @enderror

        <button class="my-3 btn btn-primary btn-block" type="submit">login</button>
      </form>

      <a href="/students" class="my-6 btn btn-outline">Back</a>
      <div class="max-w-2xl mt-24">


      </div>
    </div>
  </section>
@endsection
