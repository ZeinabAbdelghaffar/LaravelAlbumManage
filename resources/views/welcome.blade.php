<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Album Manager</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }
        .container {
            margin-top: 50px;
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            color: #343a40;
            margin-bottom: 30px;
        }
        h3{
            color: #343a40;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .btn-primary {
            margin-top: 30px;
            padding: 12px 40px;
            font-size: 1.2rem;
            border-radius: 25px;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        ul{
            text-align: center;
        }
        .info {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 40px;
            text-align: left;
        }
        .info ul {
            list-style-type: none;
            padding: 0;
            margin-left: 0;
        }
        .info ul li::before {
            content: "\2022";
            color: #007bff;
            font-weight: bold;
            display: inline-block; 
            width: 1em;
            margin-left: -1em;
        }
        .feature-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        .powered-by {
            margin-top: 50px;
            font-size: 1rem;
            color: #6c757d;
        }
        .powered-by ul {
            list-style-type: none;
            padding: 0;
            margin-left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .powered-by ul li {
            margin-right: 20px;
        }
        .powered-by ul li:last-child {
            margin-right: 0;
        }
        .powered-by ul li a {
            color: #343a40;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .powered-by ul li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="jumbotron jumbotron-fluid bg-light">
           <div class="container text-center">
               <h1 class="display-4">Welcome to Album Manager</h1>
               <p class="lead">Organize and manage your photo albums with ease!</p>
               <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Get Started</a>
            </div>
        </div>
        <br>
        <br>
        <div class="info">
           <h3>Key Features:</h3>
           <ul>
                <li>Users can create, edit, and delete albums.</li>
                <li>Each album includes a name and one or more pictures.</li>
                <li>For non-empty albums slated for deletion, users have the option to either delete all pictures or transfer them to another album.</li>
           </ul>
       </div>
       <br>
        <div class="powered-by">
            <h3>Powered By:</h3>
            <ul>
                <li>Laravel</li>
                <li>jQuery</li>
                <li>Dropzone.js</li>
                <li>Filepond.js</li>
                <li>Laravel Media Library</li>
            </ul>
        </div>
    </div>
</body>
</html>
