<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Portfolio</title>
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

        .left-side {
            flex: 1;
            text-align: center;
            margin-right: -50px;
        }

        .profile-box {
            width: 300px;
            height: 400px;
            border-radius: 10px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .profile-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .profile-name {
            background: rgba(0, 0, 0, 0.3);
            width: 100%;
            padding: 1.5rem;
            text-align: center;
            border-radius: 0 0 10px 10px;
            position: relative;
            z-index: 10;
        }

        .profile-name h2 {
            color: white;
            margin: 0;
        }

        .right-side {
            flex: 1;
        }

        .right-side h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .right-side p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .buttons {
            display: flex;
            gap: 1rem;
        }

        .buttons a {
            padding: 0.75rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }

        .btn-about {
            background: #3498db;
        }

        .btn-about:hover {
            background: #2980b9;
        }

        .btn-projects {
            background: #2ecc71;
        }

        .btn-projects:hover {
            background: #27ae60;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left Side: Picture -->
        <div class="left-side">
            <div class="profile-box">
                <img src="/pig.jfif" alt="Thommy Pork Jr.">
                <div class="profile-name">
                    <h2>Thommy Pork Jr.</h2>
                </div>
            </div>
        </div>

        <!-- Right Side: Text Content -->
        <div class="right-side">
            <h1>Hi! I'm Thommy Pork Jr.</h1>
            <p>
                I'm a web developer who loves to build websites and apps. I enjoy learning new things and creating cool
                projects. If you want to know more about me or see what I've made, just click the buttons below!
            </p>

            <div class="buttons">
                <a href="/about" class="btn-about">About Me</a>
                <a href="/projects" class="btn-projects">My Projects</a>
            </div>
        </div>
    </div>
</body>

</html>
