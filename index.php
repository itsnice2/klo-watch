<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klo-Watch!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="klo-watch.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="klo-watch.ico">
</head>
<body>
    <h1>Klo-Watch!</h1>
    <h2><img src="klo-watch.png" style="height: 200px"></h2>
    <article contentEditable>
        <div class="container-fluid">
            <!-- <div class="row inputfield">
                <div class="col">
                </div>  
                <div class="col eingabe">
                    <div class="input-group eingabe">
                        <input type="text" class="form-control" placeholder="Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" style="background-color: orange; color: black; font-weight:bolder ;">+</button>
                        </div>
                    </div> 
                    <div class="input-group eingabe">
                        <div class="input-group-append" style="margin: 0 auto;">
                          <button class="btn btn-outline-secondary" type="button" style="background-color: orange; color: black; font-weight:bolder ; height: 75px;" onclick="zahlschreiben()">Ich muss mal!</button>
                        </div>
                    </div>
                </div>
                <div class="col ">              
                </div>

            </div>
            <div class="row "> --> 
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

    <footer>
        <h3>Version 0.1</h3>
    </footer>
    
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
            /*fetch('dateischreiben.php')
                .then(response => response.text())
                .then(data => {
                // Bearbeite die Antwort des PHP-Skripts
                });
            */
            <?php  
                //$myfile = fopen("count.txt", "r") or die("Unable to open file!");
                //$txt = fread($myfile,filesize("count.txt")) + 1;
                $filePath = 'count.txt';
                $fileContent = file_get_contents($filePath);
                $txt = $fileContent + 1;
                $myfile = fopen("count.txt", "w") or die("Unable to open file!");
                fwrite($myfile, $txt);
                fclose($myfile);
                //header("Location: http://192.168.5.111");
                header("Refresh");
            ?>
        }

    </script>   

</html>