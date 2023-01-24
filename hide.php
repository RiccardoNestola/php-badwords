<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hide</title>
</head>
<body>

        <main>
            <div>
                <pre>
                    Il testo che hai scritto:
                    <?php
                    $userText = $_POST['text'];
                    echo $userText;
                    ?>
                </pre>
                <pre>
                    Numero lettere:
                    <?php
                    echo strlen($userText);
                    ?>
                </pre>
                <pre> 
                    Testo con censura:
                    <?php
                    $censored = $_POST['hide'];
                    $newPhrase = str_replace(strtolower($censored), '***', ($userText));
                    echo $newPhrase;
                    ?>
                </pre>
            </div>
        </main>
</body>
</html>