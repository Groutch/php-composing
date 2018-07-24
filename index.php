<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--External Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
    <link rel="strylesheet" href="styles.css">
    <title>CSV LOL</title>


</head>

<body>
    <div class="ui container">
        <h1>Computer Science Figures</h1>
        <div class="ui three column grid">
        <?php
            $row = 0;
            if (($handle = fopen("cs_figures.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    if ($row>0){ ?>
                         <div class="column ui fluid card">
                            <div class="image">
                                <img src=<?php echo $data[5] ?>>
                            </div>
                            <div class="content">
                                <div class="header"><?php echo $data[0] ?></div>
                                <div class="meta"><?php echo $data[2] ?></div>
                                <div class="description"><?php echo $data[3] ?></div>
                            </div>
                            <div class="extra content">Born in <?php echo $data[1] ?></div>
                        </div>
                    <?php }
                    $row++;
                }
                fclose($handle);
            }
        ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>

    <!-- Internal Scripts -->
    <script type="text/javascript" src="">


    </script>
</body>

</html>
