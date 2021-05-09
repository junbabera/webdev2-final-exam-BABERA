<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thank You</title>

            <div>
                <h1>Thank you!</h1>
                <h2>Your request has been sent!</h2>
                <p>You will be contacted by one of our staff soon.<br>Always make your line available.</p>
            </div>
            <br>
            <br>

            <a href="/bible-study-requests">
            <button class="button">See Requests</button>
            </a>

            <a href="/bible-study-request-form">
            <button class="button">Make Another Request</button>
            </a>
            

<footer class=footerverse>
    "Cleave to what is good" - Romans 12:9
</footer>

</html>



<style>
* {
    font-style: sans-serif;
    width: 100%;
    background-color: #f6b93b;
    color: white;
    text-align: center;
    text-decoration: none;
    text-shadow: 1px 1px #57606f;
   }

.to {
    font-size: 40px;
}

p{
    font-size: 20px;
}
h1{
    font-size: 110px;
}

h2{
    font-size: 58px;
}

.button {
  background-color: #6e4c1eff;
  border: none;
  color: white;
  padding: 15px 32px;
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
</style>