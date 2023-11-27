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
                </div>  
                <div class="col eingabe">
                    <!-- <div class="input-group eingabe">
                        <input type="text" class="form-control" placeholder="Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" style="background-color: orange; color: black; font-weight:bolder ;">+</button>
                        </div>
                    </div> -->
                    <div class="input-group eingabe">
                        <div class="input-group-append" style="margin: 0 auto;">
                          <button class="btn btn-outline-secondary" type="button" style="background-color: orange; color: black; font-weight:bolder ; height: 75px;" onclick="zahlschreiben()">Ich muss mal!</button>
                        </div>
                    </div>
                </div>
                <div class="col ">              
                </div>

            </div>
            <div class="row ">
                <div class="col">
                    
                </div>  
                <div class="col outputfield">
                    <h2>Seit Start dieser Seite sind <b id="zahl">
                        <?php
                            // Dateipfad zur zu lesenden Datei
                            $filePath = 'count.txt';
                            
                            // Den Inhalt der Datei lesen
                            $fileContent = file_get_contents($filePath);
                            
                            // Ausgabe des Dateiinhalts
                            echo $fileContent;
                        ?>
                    </b> Personen aufs Klo gegangen :D</h2>
                </div>
                <div class="col ">
                         
                </div>
            </div>
        </div>
    </article>
    
</body>

    <script>

        var count = (function(){
            var counter = <?php
            // Dateipfad zur zu lesenden Datei
            $filePath = 'count.txt';
                            
            // Den Inhalt der Datei lesen
            $fileContent = file_get_contents($filePath);
            
            // Ausgabe des Dateiinhalts
            echo $fileContent;
            ?>;
            return function () {return counter;} // += 1;}
        })();

        function zahlschreiben(){
            
            var zahl = count();
            zahl += 1;
            document.getElementById("zahl").innerHTML = zahl;
            fetch('dateischreiben.php')
                .then(response => response.text())
                .then(data => {
                // Bearbeite die Antwort des PHP-Skripts
                });
        }

    </script>   

</html>