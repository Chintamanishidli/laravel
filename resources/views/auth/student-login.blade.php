<!DOCTYPE html>
<html>

<head>
  <title>Student Login</title>
</head>

<body>
  <h2>Student Login</h2>
  <form method="POST" action="{{ route('student.login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>

</html>