<div>
<form action="/users/login"method='POST'>
{{csrf_field()}}

<p>Email</p>
<input type="email" name='email'>


<p>PWD</p>
<input type="password"name='password'>
<input type="submit">
</form>


</div>