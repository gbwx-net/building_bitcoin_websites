<!DOCTYPE html>
<html>
    <head>
        <title>₿itcoin Widget</title>
        <style>
            #container
            {
                width: 275px;
                height: 90px;
                overflow: hidden;
                background-color: #2f2f2f;
                border: 1px solid #000;
                border-radius: 5px;
                color: #fefdfb;
            }
            #lastPrice
            {
                font-size: 24px;
                font-weight: bold;
            }
            #dateTime
            {
                font-size: 9px;
                color: #999;
            }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    </head>
    <body>
        <div id="container">
            <!-- jQuery output -->
        </div>

        <script>
            $(document).ready(function(){
                refreshData();
            });

            function refreshData(){
                $('#container').load('data.php', function(){
                    setTimeout(refreshData, 15000);
                });
            }
        </script>
    </body>
</html>