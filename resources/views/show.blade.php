<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .user-details {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .user-details h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .user-details ul {
            list-style: none;
            padding: 0;
        }
        .user-details li {
            margin-bottom: 10px;
        }
        .user-details li p {
            margin: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="user-details">
        <h1>User Details</h1>
        <ul>
            <li><p>Your Id => {{ $user->id }}</p></li>
            <li><p>Your First Name => {{ $user->first_name }}</p></li>
            <li><p>Your Last Name => {{ $user->last_name }}</p></li>
            <li><p>Your Email Id => {{ $user->email }}</p></li>
            <li><p>Your Gender => {{ $user->gender }}</p></li>
            <li><p>Your Mobile No => {{ $user->mobile_no }}</p></li>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
