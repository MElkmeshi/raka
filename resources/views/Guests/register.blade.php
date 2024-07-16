<!-- resources/views/guest/register.blade.php -->
<form method="POST" action="{{ route('guest.register') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="passport_number">Passport Number:</label>
        <input type="text" name="passport_number" id="passport_number" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>
    <div>
        <label for="birth_date">Birth Date:</label>
        <input type="date" name="birth_date" id="birth_date" required>
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div>
        <label for="image">Profile Image:</label>
        <input type="file" name="image" id="image">
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
