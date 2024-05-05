<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Preloader</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden; /* Prevents scrolling while preloader is visible */
    }

    .preloader {
      position: fixed; /* Stays in place while scrolling */
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.7); /* Dark background */
      z-index: 1000; /* Ensures it's on top */
    }

    .preloader .spinner {
      width: 40px;
      height: 40px;
      border: 4px solid transparent; /* Transparent border */
      border-top-color: #ffffff; /* White top border to create spinner effect */
      border-radius: 50%; /* Circle shape */
      animation: spin 1s linear infinite; /* Animation for spinning */
    }

    @keyframes spin {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg); /* Full rotation */
      }
    }

    /* Content that's hidden by the preloader */
    .content {
      display: none;
    }
  </style>
</head>
<body>
  <!-- Preloader div -->
  <div class="preloader">
    <div class="spinner"></div> <!-- Spinning animation -->
  </div>

  <!-- Main content -->
  <div class="content">
    <h1>Welcome to the Website!</h1>
    <p>This is the main content of the website.</p>
  </div>

  <script>
    // Simulate loading time with a timeout
    setTimeout(() => {
      document.querySelector('.preloader').style.display = 'none'; // Hide the preloader
      document.querySelector('.content').style.display = 'block'; // Show the content
    }, 3000); // Simulated loading time (3 seconds)
  </script>
</body>
</html>
