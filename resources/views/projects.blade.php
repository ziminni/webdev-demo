<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - My Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.7rem;
            max-width: 980px;
            background: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .back-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            padding: 0.5rem 1.2rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            color: white;
            background: #e67e22;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #d35400;
        }

        .right-side {
            width: 100%;
        }

        .right-side h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            margin-top:2.8rem;
        }

        .right-side p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Back Button -->
        <a href="javascript:history.back()" class="back-btn">← Back</a>

        <!-- Text Content Only -->
        <div class="right-side">
            <h1>My Projects</h1>
            <p>
                I'm working on exciting web development projects. Here you can explore the applications and websites
                I've created. Each project showcases my skills in building user-friendly and functional digital
                solutions. Feel free to check them out!
            </p>
        </div>

    </div>
</body>

</html>
