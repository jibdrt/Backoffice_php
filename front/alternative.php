<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alternative.css">
</head>
<body>
                <nav>
                    <a href="#" class="nav__link">
                        <span class="nav__link--text" data-splitting>PROJETS</span>
                        <span class="nav__link--text" data-splitting>PROJECTS</span>
                    </a>
                    <a href="#" class="nav__link">
                        <span class="nav__link--text" data-splitting>À PROPOS DE MOI</span>
                        <span class="nav__link--text" data-splitting>ABOUT</span>
                    </a>
                    <a href="#" id="ajaxcont" class="nav__link">
                        <span class="nav__link--text" data-splitting>ME CONTACTER</span>
                        <span class="nav__link--text" data-splitting>CONTACT ME</span>
                    </a>
                </nav>
                <div id="showcontact"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
        $(document).ready(function(){
        $("#ajaxcont").click(function(){
            $("#showcontact").load("contactform.php").show();
        });
        });
</script>

<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
<script src="alternative.js"></script>

</body>
</html>