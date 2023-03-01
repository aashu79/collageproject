<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/book.css">
</head>

<body>

<form action="./booking.php" method="post">
    <div class="container">
        <div class="card center">
            <a class="login">Booking</a>
            
                <div class="inputBox">
                    <input type="text" required="required" name="from">
                    <span class="user">From</span>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="to">
                    <span>To</span>
                </div>

                <div class="inputBox">
                    <input type="date" name="date">
                    <span>Date</span>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="name">
                    <span>Full name</span>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="number">
                    <span>No of Passenger</span>
                </div>

                <button class="enter">Book</button>
                
            </div>
            
            
        </div>
    </form>

</body>

</html>