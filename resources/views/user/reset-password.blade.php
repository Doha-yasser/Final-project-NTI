<form action="{{ route('rest') }}" method="post">
    @csrf

    <!-- hidden email -->
    <!-- <input type="hidden" name="email" value="{{ $email }}"> -->


    <div>
        <input type="password" placeholder="Password" name="password"><br><br>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <input type="password" name="password_confirmation" placeholder="Confirm Password"><br><br>
        @error('password_confirmation')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" value="Reset" class="btn">
</form>