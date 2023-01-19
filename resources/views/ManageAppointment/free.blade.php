<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <style>
        .m_square {
            border: 1px solid;
            height: 50px;
            width: 50px;
            line-height: 20px;
            border-radius: 50%;
            background-color: yellow
        }
    </style>
</head>

<body class="vsc-initialized"><u></u>
    <style>
        p.dashed {
            border-style: dashed;

        }

        input {
            border: none;
            border-color: transparent;
        }

        .button2 {
            background-color: #964B00;
            border: none;
        }

        .button3 {
            background-color: #964B00;
            border: none;
        }

        .button1,
        input[type="reset"] {
            font: inherit;

        }
    </style>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function increment() {

            var x = document.getElementById("demoInput").value;
            document.getElementById("demoInput").innerHTML = x;
            if (x !== "15") {
                document.getElementById('demoInput').stepUp();
            } else
            if (x === "15") {
                alert("Max is 15");
            }
        }

        function decrement() {
            document.getElementById('demoInput').stepDown();
        }

        function myFunction1() {
            document.getElementById("demo").style.font = "revert";
        }
    </script>

    <div id="demo" style="font-family:Arial;">
        <h2>Style the UI below using CSS &amp; use JavaScript to modify UI if possible</h2>


        <p style="text-align:center" class="dashed">1. Add border with dashes on me &amp; make me center</p>


        <p>2. Change below into circle</p>
        <div id="myDIV" class="m_square"></div>

        <p>3. Change above to yellow color</p>

        <p>4. Click button to hide above shape</p>
        <button id="m_hide-shape" onclick="myFunction()" type="button">Hide Shape</button>

        <p>5. Change all font style on the current screen</p>
        <button type="button" onclick="myFunction1()">Change Font</button>

        <p>6. Revert changes of font style on the current screen using above button</p>

        <p>7. Increase / decrease number by using below button. Min 1 Max 15</p>
        <button id="m_btn-minus"onclick="decrement()" class="button button2" type="button"
            style="margin-right:20px;color:white;">-</button> <input id=demoInput style type=number min=1 max=15><button
            id="m_btn-plus"onclick="increment();doSomethingElse();" class="button button3"
            type="button"style="margin-left:20px;color:white;">+</button>

        <p>8. Increase spacing between button and number as above</p>
        <p>9. Change button above borderless with Brown color</p>
        <p>10. Change font color of above button to white</p>
        <p>11. Alert user if number is reaching 15</p>

    </div>

</body>

</html>
