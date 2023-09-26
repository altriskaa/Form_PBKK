<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@1,500&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">    
    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>RtoV in Surabaya 2033</title>
</head>
<body>
    <div class="signup-container">
        <div class="right-container">
            @foreach($results as $key => $result)
            @if ($loop->last)
            <img src="{{ asset('images/' . $results['image']) }}" style="height: 250px;width:250px;">
            @endif
            <div class="p-1">
                <a>
                    {{ $key }} = {{ $result }}
                </a>
            </div>
            @endforeach
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>

</body>
</html>
