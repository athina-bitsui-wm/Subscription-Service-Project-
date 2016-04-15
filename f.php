<!DOCTYPEhtml>
<html>
<head>
    <title>
        ~ book review ~
    </title>
    <link rel="stylesheet" type="text/css" href="f.css"
</head>

<body>
<header>
    <h1>~ book review ~</h1>
</header>
<div id="container">
    <?php
    $book_name = $_POST['bookname'];
    $ratting = $_POST['ratting'];
    $comment = $_POST['comment'];
    $choices = $_POST['choices'];

    $to = 'athina.bitaui@west-mec.org';
    $subject = 'book review';
    $msg = "the books name is $book_name.\n".
        "how good is the book?  $ratting.\n".
        "$comment \n".
        "$choices, i would rocomed this family or firend.";
    mail($to, $subject, $msg, 'from:'. $email);

    echo 'book name: '. $book_name .'<br />';
    echo 'how good is the book? '. $ratting .'<br />';
    echo 'write a summry: '. $comment .'<br />';
    echo 'would you like to recomed this to a friend or family member? '. $choices;
    ?>
</div>
</body>
</html>
