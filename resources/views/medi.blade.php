<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medi Manager</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">{{ __('Schedule a Medicine') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="/medi">
                            @csrf
    
                            <div class="form-group row mb-1">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name of Medicine</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autocomplete="Medicine name">
                                </div>
                            </div>
    
                            <div class="form-group row mb-1">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Dose description</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" required autocomplete="Description of dose">
                            </div>
    
                            <div class="form-group row mb-1 mt-1">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date of dose</label>
    
                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date" required>
                                </div>
                            </div>

                            <div class="form-group row mb-1 mt-1">
                                <label for="time" class="col-md-4 col-form-label text-md-right">Time of dose</label>
    
                                <div class="col-md-6">
                                    <input id="time" type="time" class="form-control" name="time" required>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Schedule') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="{{ route('home') }}" class="btn btn-success">Home</a>
            </div>
        </div>
    </div>
</body>
</html>