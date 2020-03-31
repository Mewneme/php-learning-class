<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <?php for($i = 1; $i <= 9 ; $i++ ): ?>
    <tr>
    <?php for($m = 1 ; $m <= 9 ; $m++ ){
    ?>
    <td><?= ($i*$m) ?></td>
    <?php }?>
    </tr>
    <?php endfor; ?>
    
</table>
    
</body>
</html>