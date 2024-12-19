<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Employee</h1>
    
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $employee->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $employee->email }}" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" id="position" value="{{ $employee->position }}" required>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" class="form-control" name="salary" id="salary" value="{{ $employee->salary }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
