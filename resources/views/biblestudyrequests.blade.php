<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

        <title>Bible Study Requests</title>
    </head>
    <body class="antialiased">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1>Bible Study Requests</h1>

<table id="biblestudyrequests" class="display">
    <thead>
        <tr>
            <th>ID </th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Birthdate</th>
            <th>Religious Affiliation</th>
            <th>Bible Study Date</th>
            <th>Bible Study Time</th>
            <th>Bible Study Location / Address</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($biblestudyrequests as $biblestudyrequests)
        <tr>
            <td>{{ $biblestudyrequests->ID }}</td>
            <td>{{ $biblestudyrequests->fullname }}</td>
            <td>{{ $biblestudyrequests->email }}</td>
            <td>{{ $biblestudyrequests->contact }}</td>
            <td>{{ $biblestudyrequests->birthdate }}</td>
            <td>{{ $biblestudyrequests->religion }}</td>
            <td>{{ $biblestudyrequests->date }}</td>
            <td>{{ $biblestudyrequests->time }}</td>
            <td>{{ $biblestudyrequests->location }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    <div>
        <a href="/">
        <button class="button">Home</button>
        </a>

        <a href="/bible-study-request-form">
        <button class="button">Make A Request</button>
        </a>
    </div>
                
            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#biblestudyrequests').DataTable();
        });
        </script>
        <hr>

                <footer class=footerverse>
                    "Cleave to what is good" - Romans 12:9
                </footer>

</html>

<style>
    *{
       text-align: center; 
    }

    
.footerverse {
    font-size: 40px;
    padding: 20px;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #ffa502;
    color: white;
    text-align: center;
}

.button {
  background-color: #6e4c1eff;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 20%;
}

.button:hover{
    background-color: #ddb65dff;
}
</style>
