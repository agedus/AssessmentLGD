<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add registration</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="container m-5">

    @foreach($registrations as $registration)
        <div class="card">
            <div class="card-body">


                <div class="row">
                    <label class="col" for="first_name">First name:</label>
                    <span class="col" id="first_name">{{ $registration->first_name }}</span>
                </div>

                <div class="row">
                    <label class="col" for="last_name">Surname:</label>
                    <span class="col" id="last_name">{{ $registration->last_name }}</span>
                </div>

                <div class="row">
                    <label class="col" for="initials">Initials:</label>
                    <span class="col" id="initials">{{ $registration->initials }}</span>
                </div>

                <div class="row">
                    <label class="col" for="postal_code">Postal code:</label>
                    <span class="col" id="postal_code">{{ $registration->postal_code }}</span>
                </div>

                <div class="row">
                    <label class="col" for="house_number">House number:</label>
                    <span class="col" id="house_number">{{ $registration->house_number }}</span>
                </div>

                <div class="row">
                    <label class="col" for="house_number_extension">House number extension:</label>
                    <span class="col" id="house_number_extension">{{ $registration->house_number_extension }}</span>
                </div>

                <div class="row">
                    <label class="col" for="street_name">Street:</label>
                    <span class="col" id="street_name">{{ $registration->street_name }}</span>
                </div>

                <div class="row">
                    <label class="col" for="city">City:</label>
                    <span class="col" id="city">{{ $registration->city }}</span>
                </div>

                <div class="row">
                    <label class="col" for="province">Province:</label>
                    <span class="col" id="province">{{ $registration->province }}</span>
                </div>

                <div class="row">
                    <label class="col" for="email_address">Email address:</label>
                    <span class="col" id="email_address">{{ $registration->email_address }}</span>
                </div>

                <div class="row">
                    <label class="col" for="phone_number">Phone number:</label>
                    <span class="col" id="phone_number">{{ $registration->phone_number }}</span>
                </div>

            </div>
        </div>
    @endforeach

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
