@if($errors->any())
<ul>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
</ul>
@endif
<body bgcolor="yellow">
    <center>
        <h1><b><i>Login Page</i></b></h1><br>
<form  method="POST"action="authenticate">
    <label for="">Email <input type="text" name="email"></label><br><br>
    <label for="">Password <input type="password" name="password"></label><br><br>
    <input type="submit" value="Login">
    @csrf
</form>
</center>
</body>