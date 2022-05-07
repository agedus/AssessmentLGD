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

    <form action="{{ route('registration.create') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="first_name">First name:</label>
            <input type="text" class="form-control" id="first_name" value="{{ old('first_name') }}" aria-describedby="first_name" placeholder="First name"
                   name="first_name">
            @error('first_name')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Surname:</label>
            <input type="text" class="form-control" id="last_name" value="{{ old('last_name') }}" aria-describedby="last_name" placeholder="Surname"
                   name="last_name">
            @error('last_name')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="initials">Initials:</label>
            <input type="text" class="form-control" id="initials" value="{{ old('initials') }}" aria-describedby="initials" placeholder="initials"
                   name="initials">
            @error('initials')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="postal_code">Postal code:</label>
            <input type="text" class="form-control" id="postal_code" value="{{ old('postal_code') }}" aria-describedby="postal_code" placeholder="Postal code"
                   name="postal_code">
            @error('postal_code')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="house_number">House number:</label>
            <input type="number" class="form-control" id="house_number" value="{{ old('house_number') }}" aria-describedby="house_number" placeholder="House number"
                   name="house_number">
            @error('house_number')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="house_number_extension">House number extension:</label>
            <input type="text" class="form-control" id="house_number_extension" value="{{ old('house_number_extension') }}" aria-describedby="house_number_extension" placeholder="House number extension"
                   name="house_number_extension">
            @error('house_number_extension')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email_address">Email address:</label>
            <input type="email" class="form-control" id="email_address" value="{{ old('email_address') }}" aria-describedby="email_address" placeholder="henk@example.com"
                   name="email_address">
            @error('email_address')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number:</label>
            <input type="number" class="form-control" id="phone_number" value="{{ old('phone_number') }}" aria-describedby="phone_number" placeholder="Phone number"
                   name="phone_number">
            @error('phone_number')
            <small>Not a valid phone number in the Netherlands or Germany.</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" value="{{ old('password') }}" aria-describedby="password" placeholder="Password"
                   name="password">
            @error('password')
            <small>Password must be at least 9 characters long with a special character, uppercase letter, lowercase letter and a number</small>
            @enderror
        </div>

        <div class="col">
            @error('address_error')
            <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="col">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>

    </form>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
