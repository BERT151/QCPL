<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quezon City Public Library Queue</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/qcplLogo.png" type="image/x-icon">
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    
</head>
<body>

    <section id="swup" class="transtion-fade">
    <div class="logo">
            <img src="./images/qclogo.jpg" alt="">
            <div class="title">
            <p>Quezon City Public Library</p>
            <p>Quezon City Government</p>
            </div>
            <img src="./images/qcplLogo.png" alt="">
        </div>

        <!-- start of feedback form -->

        
    </section>


      <script>
         $(function() {

            var dialog1 = $("#dialog1");
            var checkbox1 = $("#checkbox1");

            dialog1.dialog({
               autoOpen: false,
               modal: true,
               buttons: {
                  Save: function() {$(this).dialog("close");}
               },
               title: "Type below...",
               close : function() {checkbox1.prop('checked', false);}

            });

            checkbox1.click(function() {
               if (checkbox1.prop("checked")) {
                   dialog1.dialog("open");
               }
            });

         });
      </script>
   </head>


    
    <script src="https://unpkg.com/swup@4"></script>
    <script src="script.js"></script>
</body>
</html>