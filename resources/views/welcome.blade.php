<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotardo - Laravel Exam Output</title>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans&display=swap" rel="stylesheet"> 
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Google Sans', Arial, sans-serif;
        background-color: #4caf50;
    }

    .welcome {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: rgba(255, 255, 255, 0.5); 
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    h1 {
        margin-bottom: 20px;
    }

    .check-output {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .check-output:hover {
        background-color: #45a049;
    }
</style>
<body>
    <div class="welcome">
        <h1>
            Welcome to Gotardo - Laravel Exam Output
        </h1>
        <button class="check-output">Check Output</button>
    </div>
</body>
</html>