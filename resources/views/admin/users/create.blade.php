<form method="POST" action="/users">
    {!!csrf_field()!!}
    <p>Name:</p>
    <input type='text'name="name">
    <p>email:</p>
    <input type='email'name="email">
    <p>DOB:</p>
    <input type="date" name='DOB'>
    <p>Password:</p>
    <input type='password'name="password">
    <br>
    <br>
    <input type='submit'value="create">
</form>