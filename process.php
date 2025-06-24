<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Process</title>
        <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
            --error-color: #f72585;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .result {
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 5px;
            background-color: var(--light-color);
        }

        .success {
            color: var(--success-color);
            font-weight: 600;
        }

        .error {
            color: var(--error-color);
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background-color: var(--secondary-color);
        }

        .text-center {
            text-align: center;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                margin: 1rem;
                padding: 1.5rem;
            }
        }   

        @media (max-width: 480px) {
            .container {
                margin: 0.5rem;
                padding: 1rem;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Form Submission Result</h1>
        <div class="result">
            <?php
            if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['favorite_color'])) {
                echo '<p class="error">All fields are required.</p>';
            } else {
                
                $name = htmlspecialchars($_POST['name']);
                $age = intval($_POST['age']);
                $favorite_color = htmlspecialchars($_POST['favorite_color']);
                  
                echo '<p class="success">Hello ' . $name . ', you are ' . $age . ' years old, and your favorite color is ' . $favorite_color . '.</p>';

            //     $to = "thomasopeyemi1@gmail.com"; 
            //     $subject = "New Form Submission";
            //     $message = "A new user has submitted the form:\n\n"
            //     . "Name: $name\n"
            //     . "Age: $age\n"
            //     . "Favorite Color: $favorite_color\n";
            //     $headers = "From: thomasopeyemi2@gmail.com";

            
            // if (mail($to, $subject, $message, $headers)) {
            //     echo '<p class="success">Hello ' . $name . ', you are ' . $age . ' years old, and your favorite color is ' . $favorite_color . '.<br>A confirmation email has been sent to the admin.</p>';
            // } else {
            //     echo '<p class="error">Form submitted, but email could not be sent.</p>';
            // }
        }
            ?>

        </div>
        <div class="text-center">
            <a href="form.html" class="btn">Go back to the form</a>
        </div>
    </div>
</body>
</html>