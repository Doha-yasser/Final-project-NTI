<?php

?>

<form action={{ route('doLogin') }} method="post">
    @csrf
    <div>
        <input type="email" placeholder="Email" name="email"><br><br>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <input type="password" placeholder="Password" name="password"><br><br>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" value="submit" class="btn">
    <a href="{{ route('checkMail') }}">Forget password</a>

</form>