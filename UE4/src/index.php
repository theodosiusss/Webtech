<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Generator</title>
    <style>
        body {
            font-family: "Comic Sans MS", sans-serif;
            background-color: #fce4ec; /* Light pink background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Damit die Elemente untereinander angeordnet werden */
        }

        form {
            font-family: "Comic Sans MS", sans-serif;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-bottom: 20px; /* Abstand nach unten, um das Iframe zu trennen */
        }

        h1 {
            font-family: "Comic Sans MS", sans-serif;
            color: #d81b60; /* Deep pink header */
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-family: "Comic Sans MS", sans-serif;
            font-size: 16px;
            color: #d81b60;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            font-family: "Comic Sans MS", sans-serif;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 20px;
            border: 1px solid #d81b60;
            border-radius: 8px;
            font-size: 16px;
            color: #555;
        }

        input[type="submit"] {
            font-family: "Comic Sans MS", sans-serif;
            background-color: #d81b60;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            font-family: "Algerian", sans-serif;
            background-color: hotpink; /* Slightly darker pink for hover */
        }

        iframe {
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            width: 320px;
            height: 320px;
        }


    </style>
</head>
<body>

<form action="generate.php" method="post" target="qrcode">
    <h1>QR Code Generator</h1>
    <label for="phoneNumber">Enter your Phone Number:</label>
    <input type="text" name="phoneNumber" id="phoneNumber" required>
    <input id="submitButton" type="submit" >
</form>

<iframe name="qrcode"></iframe>

</body>
</html>
