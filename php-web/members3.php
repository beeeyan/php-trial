<?php
$members = [
    ["Oishi", 22, "Java", "img/image1.png"],
    ["Sano", 22, "Ruby", "img/image2.png"],
    ["Kawano", 21, "Python", "img/image3.png"],
    ["Saito", 22, "PHP", "img/image4.png"],
    ["Saito", 23, "Perl", "img/image5.png"],
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT CARET</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Fav</th>
            <th>Image</th>
        </tr>
        <?php for($i = 0; $i < count($members); $i++) { ?>
            <tr>
                <?php if($members[$i][1] === 22) {?>
                    <td><?php echo $members[$i][0] ?></td>
                    <td><?php echo $members[$i][1] ?></td>
                    <td><?php echo $members[$i][2] ?></td>
                    <td><img src=<?php echo $members[$i][3] ?> alt="language"></td>
                <?php }?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>