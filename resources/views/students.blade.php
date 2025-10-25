<!DOCTYPE html>
<html>

<head>
  <title>Student-Course Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5">
    <h2 class="text-center mb-4">Student - Course Details</h2>

    <table class="table table-bordered table-striped shadow-sm">
      <thead class="table-dark text-center">
        <tr>
          <th>#</th>
          <th>Student Name</th>
          <th>Email</th>
          <th>Course</th>
          <th>Marks</th>
        </tr>
      </thead>
      <tbody>
        @forelse($students as $index => $student)
        <tr class="text-center">
          <td>{{ $index + 1 }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->course_name }}</td>
          <td>{{ $student->marks }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center text-muted">No student records found</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

</body>

</html>