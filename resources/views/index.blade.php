<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ujian PWEB</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class='container my-3'>
        <div class="mb-3">
            <a href="{{ route('students.create') }}" class='btn btn-dark'>Add</a>
        </div>
        <table class="table table-stripped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Place of Birth</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['email'] }}</td>
                        <td>{{ $student['place_of_birth'] }}</td>
                        <td>{{ $student['date_of_birth'] }}</td>
                        <td>{{ $student['gender'] }}</td>
                        <td>{{ $student['address'] }}</td>
                        <td>{{ $student['phone'] }}</td>
                        <td>
                            <a href="{{ route('students.edit', ['student' => $student['id']]) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ route('students.destroy', ['student' => $student['id']]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
