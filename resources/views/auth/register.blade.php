@extends('layouts.base')


@section('content')
    <section class="container flex justify-center items-center min-h-screen">
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Create new account</legend>

                <label class="label">Name</label>
                <input type="text" class="input @error("name") input-error @enderror" placeholder="John Smith" name="name" />
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror

                <label class="label">Email</label>
                <input type="email" class="input @error("email") input-error @enderror" placeholder="you@email.co" name="email" />
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror

                <label class="label">Password</label>
                <input type="password" class="input @error("password") input-error @enderror" name="password" placeholder="************" />
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror

                <label class="label">Repeat password</label>
                <input name="password_confirmation" type="password" class="input" placeholder="************" />

                <button class="btn btn-neutral mt-4">Register</button>
            </fieldset>
        </form>
    </section>
@endsection
