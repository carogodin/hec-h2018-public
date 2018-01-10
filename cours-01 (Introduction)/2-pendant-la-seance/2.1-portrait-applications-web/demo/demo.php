<?php 

$texte = 'Le cours est bientôt fini.';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma première page Web</title>
    <style type="text/css">
        p {
            color: #00FF00;
        }
        
    </style>
</head>
<body>
    <p>
        Je suis dans la section visible.
        <br>
        echo $texte; 
    </p>
    <script type="text/javascript">
        console.log('Je suis en train de debugger');
    </script>
</body>
</html>