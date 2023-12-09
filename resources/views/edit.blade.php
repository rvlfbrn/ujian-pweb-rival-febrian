<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Ujian PWEB</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class='container my-3'>
        <div class="mb-3">
            <a href="{{ route('students.index') }}" class='text-dark'><- Back</a>
        </div>
        <form method="POST" action="{{ route('students.update', ['student' => $student['id']]) }}">
            @csrf
            @method('PUT')
            <div class='mb-3'>
                <label for='name' class='form-label'>Name</label>
                <input type='text' name="name" class='form-control' id='name' placeholder='Gojo Satoru'
                    value="{{ $student['name'] }}" required>
            </div>
            <div class='mb-3'>
                <label for='email' class='form-label'>Email address</label>
                <input type='email' name="email" class='form-control' id='email' placeholder='tanjiro@kny.com'
                    value="{{ $student['email'] }}" required>
            </div>
            <div class='mb-3'>
                <label for='place_of_birth' class='form-label'>Place of Birth</label>
                <input type='text' name="place_of_birth" class='form-control' id='place_of_birth'
                    placeholder='Skypiea' value="{{ $student['place_of_birth'] }}" required>
            </div>
            <div class='mb-3'>
                <label for='date_of_birth' class='form-label'>Date of Birth</label>
                <input type='date' name="date_of_birth" class='form-control' id='date_of_birth'
                    value="{{ $student['date_of_birth'] }}" required>
            </div>
            <div class="mb-3">
                <label for='gender' class='form-label'>Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                        {{ $student['gender'] === 'Male' ? ' checked' : '' }} required>
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
                        {{ $student['gender'] === 'Female' ? ' checked' : '' }} required>
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </div>
            <div class='mb-3'>
                <label for='address' class='form-label'>Address</label>
                <textarea name="address" class='form-control' id='address' rows='3' placeholder="Konoha" required>{{ $student['address'] }}</textarea>
            </div>
            <div class='mb-3'>
                <label for='phone' class='form-label'>Phone Number</label>
                <input type='text' name="phone" class='form-control' id='phone' placeholder='081112223334'
                    value="{{ $student['phone'] }}" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Update</button>
            </div>
        </form>
    </div>
</body>

</html>
