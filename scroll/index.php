<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    <link rel="stylesheet" href="style.css">
    <title>Scrolling</title>
</head>
<body>
    
    <input type="text" placeholder="City name...">
    <button>Get</button>
    <h1></h1>
    



    <script>
        $(document).ready(function() {

            $('button').click(function() {
                $.get(`http://api.openweathermap.org/data/2.5/weather?q=${$('input').val()}&appid=923401310fb8f2a8c1dcb3796e756328`, (data) => {
                    $('h1').text(data.main.temp - 275 + ' C')
                })
            })

        })
    </script>

</body>
</html>