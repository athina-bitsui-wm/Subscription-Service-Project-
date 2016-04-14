<!DOCTYPEhtml>
<html>
<head>
    <title>
        ~ book review ~
    </title>
</head>

<body>
<?php
$ratting = $_POST['ratting'];
$comment = $_POST['comment'];
$choices = $_POST['choices'];

echo 'how good is the book'. $ratting .'<br />';
echo 'write a summry'. $comment .'<br />';
echo 'would you like to recomed this to a friend or family member?'. $choices . '<br />';
?>
</body>
</html>
