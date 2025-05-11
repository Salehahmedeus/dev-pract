<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <Style>
        /* General styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Form container */
        form {
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        /* Form elements */
        form div {
            margin-bottom: 1.5rem;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #bbbbbb;
        }

        input[type="username"],
        input[type="name"],
        input[type="password"] {
            width: 100%;
            /* Match button width accounting for padding */
            padding: 0.75rem;
            margin-bottom: 0.75rem;
            background-color: #2d2d2d;
            border: 1px solid #444;
            border-radius: 4px;
            color: #e0e0e0;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="name"]:focus,
        input[type="username"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #646cff;
            box-shadow: 0 0 0 2px rgba(100, 108, 255, 0.2);
        }

        /* Button styling */
        button[type="submit"],
        a[name="Authenticate"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #646cff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hove,
        button[name="Authenticate"]r {
            background-color: #535bf2;
        }

        button[type="submit"]:active,
        a[name="Authenticate"] {
            background-color: #4348b8;
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            form {
                padding: 1.5rem;
                margin: 0;
            }

            input[type="name"],
            input[type="username"],
            input[type="password"] {
                width: calc(100% - 1.5rem);
                /* Maintain consistent width on mobile */
                padding: 0.65rem;
            }

            button[type="submit"],
            a[name="Authenticate"] {
                padding: 0.65rem;
            }
        }
    </Style>
</head>

<body>
    {{ $slot }}
</body>

</html>