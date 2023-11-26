<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klo-Watch!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="klo-watch.css" rel="stylesheet">
</head>
<body>
    <h1>Klo-Watch!</h1>

    <article contentEditable>
        <div class="container-fluid">
            <div class="row inputfield">
                <div class="col"> 
                    <div class="col eingabe">
                        <div class="input-group eingabe">
                            <div class="input-group-append" style="margin: 0 auto;">
                                <button class="btn btn-outline-secondary" type="button" style="background-color: orange; color: black; font-weight:bolder ; height: 75px;" onclick="zahlschreiben()">Ich muss mal!</button>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </article>

    <br>
    <br>
    <h2>Seit Start dieser Seite sind
        <br>
        <b id="zahl">0</b>
        <br>
    Personen aufs Klo gegangen :D</h2>
    
    
</body>

<script>

        var count = (function(){
            var counter = 0;
            return function () {return counter += 1;}
        })();

        function zahlschreiben(){
            document.getElementById("zahl").innerHTML = count();
            fetch('dateischreiben.php')
                .then(response => response.text())
                .then(data => {
                // Bearbeite die Antwort des PHP-Skripts
                });
        }

    </script>

    
</html>