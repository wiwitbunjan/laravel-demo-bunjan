<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
     @if (session('confirm'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: "Successfully Login!",
                text: "Welcome admin",
                icon: "success"
            });
        });
    </script>
@endif
</body>
<h1>This is Dashboard</h1>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html> 