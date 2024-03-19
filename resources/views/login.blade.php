<x-layout>
    <h1 class="text-xl font-bold font-serif">Log in</h1>

    <form action="/login" method="POST" class=font-serif>
        @csrf
    <div>
        <x-input title="Email" type="text" nombre="email">
         @error('email')
            <p> {{$message}} </p>
            @enderror
    </div>
    <div>
        <x-input title="Password" type="password" nombre="password">
            @error('password')
                <p>{{$message}} </p>
                @enderror
    </div>












</x-layout>


