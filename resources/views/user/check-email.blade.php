<form  action="{{ route('checkMail') }}" method="post">
    @csrf
    <div>
        <input type="email" placeholder="Email" name="email"><br><br>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" value="submit" class="btn">
</form>