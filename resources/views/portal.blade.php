
<html>
    <body>
        portal
        <form method="post" action="/logout">
        @csrf
        <input type="submit" name="logout" value="logout"/>
        </form>
    </body>
</html>