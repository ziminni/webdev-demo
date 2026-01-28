<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - My Portfolio</title>
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
            margin-top: 2.8rem;
        }

        .right-side p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 3.5rem; /* increased spacing */
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Back Button -->
        <a href="javascript:history.back()" class="back-btn">← Back</a>

        <!-- Text Content Only -->
        <div class="right-side">
            <h1>About Me</h1>
            <p>
                Hi! I'm Thommy Pork Jr., a passionate web developer. I love building web applications and learning new
                technologies. I'm dedicated to improving my skills and creating amazing digital solutions. My goal is to
                become a full-stack developer and make a positive impact through my work.
            </p>
        </div>

    </div>
</body>

</html>
