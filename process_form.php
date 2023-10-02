<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSA Provision Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: red;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: white;
            text-shadow: 2px 2px 2px black;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
            font-weight: 700;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 20px 20px;
            border: none;
            border-radius: 5px;
            border: 2px solid black;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: red;
            border: 2px solid black;
        }

        .return-container {
            background-color: red;
            padding: 10px;
            border-radius: 10px;
        }

        .return-container a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $LSAUNAME = $_POST["LSAUNAME"];
    $LSAPASSW = $_POST["LSAPASSW"];

    // Create a configuration file with the MAC address as the filename
    $FILENAME = "$MACADDR.cfg";
    
    // Generate the content for the config file
}
?>
    <h2>The provisioning config for <?php echo $LSAUNAME; ?> was created successfully.</h2><br>
    <div class="return-container">
	<a href="https://www.zoiper.com/en/page/9d13dc9c93558575b0a282f5bd93a7f7?u=<?php echo $LSAUNAME; ?>&h=&p=<?php echo $LSAPASSW; ?>&o=&t=&a=&tr=">Configuration instructions for Android and iOS</a>
    </div><br>
	 <div class="return-container">
		<img src="https://oem.zoiper.com/qr.php?provider_id=f838028b024ff0b7f91336768d3834b9&u=<?php echo $LSAUNAME; ?>&h=&p=<?php echo $LSAPASSW; ?>&o=&t=&a=&tr=" alt="QR code"/>	
    </div><br>
    <div class="return-container">
        <a href="../index.html">Click here to return.</a>
    </div>
</body>

