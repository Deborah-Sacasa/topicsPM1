<div>
   <h1 class="font-serif">Register</h1>

    <form action="/register" method= "post">
        @csrf
        <h1>Register</h1>
        <div>
            <label for= ""class=font-serif>Name </label>
            <input type="text" nombre="nombre">
            @error('nombre')
            @enderror
                <p> {{$message}} </p>
        </div>

    <div>
        <label for= "" class=font-serif>Email </label>
        <input type="text" nombre="email">
        @error('email')
            <p> {{$message}} </p>
            @enderror
    </div>

    <div>
        <label for= "">Password </label>
        <input type="password" nombre= "password">
        @error('password')
            <p> {{$message}} </p>
            @enderror
    </div>

    <div>
        <label for= "">Birthday </label>
        <input type="date" nombre= birthday>
        @error('birthday')
            <p> {{$message}} </p>
            @enderror
    </div>
    <button type="submit">Send</button>

    </form>
</div>


