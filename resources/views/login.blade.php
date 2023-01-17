
<html>
    <body>
        Login
        <br>

        <form method="post" action="/login">
            @csrf
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" />
            <input type="submit" name="submit" value="Login"/>
        </form>
    </body>
</html>