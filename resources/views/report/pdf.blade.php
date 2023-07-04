
{{-- <img src="{{ asset('assets/images/logo-utm.png') }}" /> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template-Tesis-UTM-V7</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- <link href="@Url.Content("~/assets/css/bootstrap4.3.1.min.css")" rel="stylesheet" type="text/css">
    <script src="@Url.Content("~/assets/js/main/jquery.min.js")"></script>
    <script src="@Url.Content("~/assets/js/main/bootstrap.bundle.min.js")"></script> --}}
</head>
<body>
    <p class="text-center text-uppercase">{{ $title }}</p>
    <p>{{ $name }}</p>
    <p>Supervisor: <br />{{ $supervisor_name }}</p>
    <p>Faculty of Mechanical Engineering</p>
    <p style="page-break-after: always;">2023</p>

    <p class="text-center text-uppercase">{{ $title }}</p>
    <p class="text-center text-uppercase">{{ $name }}</p>
    <p class="text-center text-uppercase" style="page-break-after: always;">UNIVERSITI TEKNOLOGI MALAYSIA</p>
    <p class="text-center text-uppercase">VALIDATION OF FINAL YEAR PROJECT E-REPORT PREPARATION</p>
    <p>Title of the report: {{ $title }}</p>
    <p>Degree: {{ $degree_name }}</p>
    <p>Faculty: Faculty of Mechanical Engineering, Universiti Teknologi Malaysia.</p>
    <p>Year: 2023</p>
    <p>I , {{ $name }}<br />
        declare and verify that the electronic copy of report submitted is in accordance to the<br />
        Electronic Thesis and Dissertation’s manual, Faculty of Mechanical Engineering,<br />
        Universiti Teknologi Malaysia.
    </p>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
