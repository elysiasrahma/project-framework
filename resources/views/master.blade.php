<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Pegawai')</title>
</head>
<body>
    <header>
    <h1>@yield('page-title', 'App Pegawai')</h1>
        <nav>
            <ul>
                <li><a href="{{ route('employees.index') }}">Employee</a></li>
                <li><a href="{{ route('departments.index') }}">Department</a></li>
                <li><a href="{{ route('attendances.index') }}">Attendance</a></li>
                <li><a href="{{ route('positions.index') }}">Positions</a></li>
                <li><a href="{{ route('salaries.index') }}">Salaries</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} App pegawai</p>
    </footer>
</body>
</html>