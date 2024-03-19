<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

    <form action="/register" method= "post">
        @csrf
        <h1>Register</h1>
        <div>
            <label for= "">Name </label>
            <input type="text" name="name">
        </div>
    <div>
        <label for= "">Email </label>
        <input type="text" name="email">
    </div>

    <div>
        <label for= "">Password </label>
        <input type="password" name= "password">
    </div>

    <div>
        <label for= "">Birthday </label>
        <input type="date" name= birthday>
    </div>
    <button type="submit">Send</button>

    </form>
</div>


