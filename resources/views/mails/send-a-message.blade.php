<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form submission from {{ $name }}</title>
</head>

<body>
    <table style="width: 100%;">
        <tr style="background-color: #fff; padding: 20px 0;">
            <td>
                <p><strong>Name:</strong> {{ $name }}</p>
                <p><strong>Email:</strong> {{ $email }}</p>
                @if (!empty($services))
                    <p><strong>Services:</strong></p>
                    <ul>
                        @foreach ($services as $service)
                            <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                @endif
                <p><strong>Message:</strong> {{ $messages }}</p>
            </td>
        </tr>
    </table>
</body>

</html>
