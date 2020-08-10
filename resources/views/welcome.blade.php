<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <label for="countries" class="w-100 p-5">
                    <select class="js-single form-control" name="country" id="countries">
                        <option value="" disabled selected>Select one</option>
                    </select>
                </label>
                <div>
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Country Name</th>
                            <th scope="col">Capital</th>
                            <th scope="col">Region</th>
                            <th scope="col">Population</th>
                        </tr>
                        </thead>
                        <tbody class="allCountries">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
