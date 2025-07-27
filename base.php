<!-- base.php -->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice Webpage</title>
    <link rel="icon" href="https://images.seeklogo.com/logo-png/10/2/php-logo-png_seeklogo-108600.png" type="image/png">
    <style>
        /* Your full CSS here */
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to right, #e0f7fa, #e1f5fe);
            margin: 0;
            padding: 40px 20px;
            color: #2c3e50;
            background-attachment: fixed;
        }
        h1 {
            text-align: center;
            font-size: 3rem;
            color: #0d47a1;
            margin-bottom: 40px;
            text-shadow: 1px 1px 4px rgba(13, 71, 161, 0.1);
            letter-spacing: 1px;
        }
        h2 {
            font-size: 1.8rem;
            color: #1565c0;
            border-bottom: 2px solid #bbdefb;
            padding-bottom: 8px;
            margin-bottom: 25px;
            background: linear-gradient(to right, #2196f3, #64b5f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .section {
            margin-bottom: 45px;
            padding: 25px 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.75);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        .section:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }
        pre {
            background-color: #f4f6f8;
            padding: 16px;
            font-size: 0.95rem;
            line-height: 1.6;
            border-radius: 10px;
            overflow-x: auto;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.04);
        }
        .output {
            background-color: #f1f8e9;
            padding: 14px;
            border-left: 6px solid #81c784;
            border-radius: 8px;
            font-family: Consolas, monospace;
            margin-top: 15px;
            box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.05);
        }
        strong {
            color: #1a237e;
        }
        code {
            background: #e3f2fd;
            padding: 3px 6px;
            border-radius: 4px;
            color: #1565c0;
            font-family: monospace;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 2.3rem;
            }
            h2 {
                font-size: 1.5rem;
            }
            .section {
                padding: 20px;
            }
        }
        .navbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            background: #0d47a1;
            padding: 12px 0;
            border-radius: 8px;
            margin-bottom: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 6px;
            transition: background 0.3s;
            background: rgba(255, 255, 255, 0.1);
        }

        .navbar a:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        .navbar a.active {
            background: #64b5f6;
            color: #fff;
        } 
        .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.card {
    background: linear-gradient(135deg, #42a5f5, #478ed1);
    color: white;
    text-decoration: none;
    padding: 20px 30px;
    font-size: 1.2rem;
    font-weight: 600;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-width: 180px;
    text-align: center;
}

.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}
  
    </style>
</head>
<body>
    <h1>✨ My First PHP Page</h1>
<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="arithmetic.php">Arithmetic</a>
    <a href="boolean.php">Boolean</a>
    <a href="logical.php">Logical</a>
    <a href="assignment.php">Assignment</a>
    <a href="conditional.php">Conditionals</a>
    <a href="arrays.php">Arrays</a>
    <a href="functions.php">Functions</a>
    <a href="loops.php">Loops</a>
    <a href="switch.php">Switch Case</a>
</nav>