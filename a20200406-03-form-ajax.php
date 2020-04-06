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
            $.post('a20200406-03-form-ajax-api.php', {a:10, b:20}, function(data){
            console.log(data);
            }, 'json');
            return false;
        }
    </script>
</body>
</html>