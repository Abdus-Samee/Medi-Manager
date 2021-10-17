<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medi Manager</title>

     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <div class="row justify-content-center mt-5 mb-2">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header bg-dark text-white">Time to take your medicine!!!</div>

                <div class="card-body bg-info">
                    <h2><b>Medicine name: </b>{{ $details['name'] }}</h2>
                    <h3><b>Dose description: </b>{{ $details['description'] }}</h3>

                    <p>Thank you, <br /> Medi Manager Team</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>