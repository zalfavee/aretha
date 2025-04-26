<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Membership</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
        .btn-generate {
            background-color: black;
            color: white;
        }
        .btn-done {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center">Daftar Membership</h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="/membership" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">No WhatsApp</label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
        </div>
        <div class="mb-3">
            <label for="member_code" class="form-label">Kode Member</label>
            <input type="text" class="form-control" id="member_code" name="member_code">
            <button type="button" class="btn btn-generate" onclick="generateCode()">Generate Kode</button>
        </div>
        <button type="submit" class="btn btn-dark btn-done">Done</button>
    </form>
</div>

<script>
    function generateCode() {
        document.getElementById('member_code').value = Math.random().toString(36).substr(2, 8).toUpperCase();
    }
</script>
