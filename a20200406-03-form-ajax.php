<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="form1" onsubmit="return mySubmit()">
    <input type="number" id="a"> + <input type="number" id="b"> <button>=</button> 
    <input type="text" id="c" disabled="disabled">
    </form>
    <script src="../js/jquery-3.4.1.js"></script>
    <script>
        function mySubmit() {
            return false;
        }
    </script>
</body>
</html>