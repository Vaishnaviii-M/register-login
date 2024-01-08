@if($errors->any())
<ul>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
</ul>
@endif
<body bgcolor="orange">
 <center>
    <h1><b><i>Register Page</i></b></h1><br>
<form  method="POST" action="/store">
    <label for="">Name <input type="text" name="name"></label><br><br>
    <label for="">Email<input type="text" name="email"></label><br><br>
    <label for="">Password <input type="password" name="password"></label><br><br>
    <label for="">Confirm Password <input type="password" name="password_confirmation"></label><br><br>
    <input type="submit" value="Register">
  @csrf
</form>
</center>
</body
>
