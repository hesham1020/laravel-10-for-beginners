<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 3px solid balck;">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <input name = 'name' type="text" placeholder="name">
            <input name = 'email' type="text" placeholder="email">
            <input name = 'password' type="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
    </div>

    <div style="border: 3px solid balck;">
        <h1>Register</h1>
        <form action="/login-rout" method="POST">
            @csrf
            <input name = 'name' type="text" placeholder="name">
            <input name = 'email' type="text" placeholder="email">
            <input name = 'password' type="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>