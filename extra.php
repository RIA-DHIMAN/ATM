<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page with Fade Out</title>
    <style>
        /* Set up the page styling */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            background-color: white;
            transition: opacity 2s; /* Set the transition for fade-out */
            opacity: 1; /* Start fully visible */
        }

        .fade-out {
            opacity: 0; /* End state for fade-out */
        }
    </style>
    <script>
        window.onload = function() {
            setTimeout(function() {
                document.body.classList.add('fade-out'); // Add the fade-out class
            }, 60000); // 60,000 ms = 60 seconds
        };
    </script>
</head>
<body>
    <h1>Welcome to the Fade Out Page</h1>
    <p>This page will fade out after 1 minute.</p>
    <p>Enjoy your visit!</p>
</body>
</html>