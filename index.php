<?php
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];

$testo = "Nome: " . $nome . "\n"
       . "Email: " . $cognome . "\n";

mail('info@mistomame.zone', 'Prenotazione 6 aprile', $testo);
?>
<html lang="en">
    <head>
        <!-- Bottom menu -->
        <header align="center" >
            <ul class="nav">

                <li><a href="http://instagram.com/misto_mame_collective">insta</a></li>
                <li><a href="https://mistomame.bandcamp.com">sounds</a></li>
                <li><a href="mailto:mistomamecollective@gmail.com">contacts</a></li>  

                </header>
            <meta charset="utf-8">
            <title>400185</title>
            <meta charset="utf-8">
            <title>400185</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                body {
                    font-family: Lato, "Open Sans", sans-serif;
                    max-width: 900px;
                    margin: 0 auto;
                    margin-top: 80px;
                    background-color: yellow;
                    color: black;
                    background-image: bg/prim_notxt.jpg;
                    font-weight: bold;
                    font-size: 16px;
                }
                h1, h2, h3, h4, h5, h6 {
                    text-align: center;
                    text-transform: uppercase;
                }
                a {
                    color: black;
                    text-decoration: none;
                }
                .responsive {
                    width: 100%;
                    height: auto;
                }

                ul {
                    list-style-type: none;
                    padding: 0px;
                    margin: 0px;
                }
            </style>
            <link href="fakenews.css" rel="stylesheet">
            <link href=".css" rel="stylesheet">
            <style>
                #FlexGrid1
                {
                    background-color: yellow;
                    background-image: none;
                    border: 0px solid black;
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0px 0px 0px 0px;
                }
                #FlexGrid1-grid
                {
                    display: grid;
                    margin-right: auto;
                    margin-left: auto;
                    max-width: 1024px;
                    font-size: 0px;
                    grid-column-gap: 5px;
                    grid-row-gap: 5px;
                    grid-template-columns: 1fr 1fr 1fr 2fr;
                    grid-template-rows: auto auto auto auto auto auto auto 100px auto;
                    grid-template-areas:
                        "title title title title"
                        "main main main sidebar"
                        "main main main ad3"
                        "story1 story1 ad1 ad2"
                        "story2 story2 . ."
                        "story3 story3 . ."
                        "social social social social"
                }
                #FlexGrid1 .header
                {
                    display: flex;
                    grid-area: header;
                    background-color: #777777;
                    background-image: none;
                    padding: 10px 10px 10px 10px;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .title
                {
                    display: flex;
                    grid-area: title;
                    background-color: transparent;
                    background-image: none;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: space-around;
                    justify-content: space-around;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .main
                {
                    display: flex;
                    grid-area: main;
                    background-color: transparent;
                    background-image: none;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .sidebar
                {
                    display: flex;
                    grid-area: sidebar;
                    background-color: transparent;
                    background-image: none;
                    padding: 10px 10px 10px 10px;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .ad3
                {
                    display: flex;
                    grid-area: ad3;
                    background-color: transparent;
                    background-image: none;
                    padding: 10px 10px 10px 10px;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .story1
                {
                    display: flex;
                    grid-area: story1;
                    background-color: transparent;
                    background-image: none;
                    padding: 0px 0px 10px 0px;
                    -webkit-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: flex-start;
                    align-items: flex-start;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .ad1
                {
                    display: flex;
                    grid-area: ad1;
                    background-color: transparent;
                    background-image: none;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .ad2
                {
                    display: flex;
                    grid-area: ad2;
                    background-color: transparent;
                    background-image: none;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .story2
                {
                    display: flex;
                    grid-area: story2;
                    background-color: transparent;
                    background-image: none;
                    padding: 0px 0px 10px 0px;
                    -webkit-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: flex-start;
                    align-items: flex-start;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .story3
                {
                    display: flex;
                    grid-area: story3;
                    background-color: transparent;
                    background-image: none;
                    -webkit-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                    -webkit-align-items: flex-start;
                    align-items: flex-start;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .social
                {
                    display: flex;
                    grid-area: social;
                    background-color: transparent;
                    background-image: none;
                    -webkit-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: wrap;
                    flex-wrap: wrap;
                    -webkit-justify-content: space-around;
                    justify-content: space-around;
                    -webkit-align-items: center;
                    align-items: center;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #FlexGrid1 .footer
                {
                    display: flex;
                    grid-area: footer;
                    background-color: #777777;
                    background-image: none;
                    -webkit-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-justify-content: space-around;
                    justify-content: space-around;
                    -webkit-align-items: center;
                    align-items: center;
                    -webkit-align-content: flex-start;
                    align-content: flex-start;
                }
                #wb_Heading1
                {
                    background-color: transparent;
                    background-image: none;
                    border: 0px solid #000000;
                    margin: 0;
                    padding: 20px 0px 20px 0px;
                    -webkit-flex-grow: 0;
                    flex-grow: 0;
                    -webkit-flex-shrink: 0;
                    flex-shrink: 0;
                    -webkit-align-self: auto;
                    align-self: auto;
                }
                #Heading1
                {
                    color: black;
                    font-family: "Times New Roman";
                    font-weight: bold;
                    font-size: 25px;
                    margin: 0;
                    text-align: center;
                }
                #wb_Text1
                {
                    background-color: transparent;
                    background-image: none;
                    border: 0px solid #000000;
                    -webkit-flex-grow: 1;
                    flex-grow: 1;
                    -webkit-flex-shrink: 1;
                    flex-shrink: 1;
                    -webkit-align-self: auto;
                    align-self: auto;
                    padding: 10px 10px 10px 10px;
                    margin: 0;
                    text-align: left;
                }
                #wb_Text1
                {
                    font-family: Arial;
                    font-weight: normal;
                    font-size: 13px;
                    line-height: 15px;
                }
                #wb_Text1 div
                {
                    text-align: left;
                }
                #wb_Image1
                .responsive {
                    width: 100%;
                    height: auto;
                }
                {
                    margin: 0;
                    vertical-align: top;
                    -webkit-flex-grow: 0;
                    flex-grow: 0;
                    -webkit-flex-shrink: 0;
                    flex-shrink: 0;
                    -webkit-align-self: auto;
                    align-self: auto;
                }
                #Image1
                {
                    border: 0px solid #000000;
                    box-sizing: border-box;
                    padding: 0px 0px 0px 0px;
                    margin: 0;
                    display: inline-block;
                    width: 100%;
                    height: auto;
                }
                #wb_Text2
                {
                    background-color: transparent;
                    background-image: none;
                    border: 0px solid #000000;
                    -webkit-flex-grow: 1;
                    flex-grow: 1;
                    -webkit-flex-shrink: 1;
                    flex-shrink: 1;
                    -webkit-align-self: auto;
                    align-self: auto;
                    padding: 10px 10px 10px 10px;
                    margin: 0;
                    text-align: left;
                }
                #wb_Text2
                {
                    font-family: Arial;
                    font-weight: normal;
                    font-size: 11px;
                    line-height: 13px;
                }
                #wb_Text2 div
                {
                    text-align: left;
                }
                #wb_Heading3
                {
                    background-color: transparent;
                    background-image: none;
                    border: 0px solid #000000;
                    margin: 0;
                    padding: 0px 10px 10px 10px;
                    -webkit-flex-grow: 0;
                    flex-grow: 0;
                    -webkit-flex-shrink: 0;
                    flex-shrink: 0;
                    -webkit-align-self: auto;
                    align-self: auto;
                }
                #Heading3
                {
                    color: black;
                    font-family: "Times New Roman";
                    font-weight: bold;
                    font-size: 27px;
                    margin: 0;
                    text-align: left;
                }
                #wb_Heading6
                {
                    background-color: transparent;
                    background-image: none;
                    border: 0px solid #000000;
                    margin: 0;
                    padding: 0px 0px 0px 10px;
                    -webkit-flex-grow: 1;
                    flex-grow: 1;
                    -webkit-flex-shrink: 1;
                    flex-shrink: 1;
                    -webkit-flex-basis: 50%;
                    flex-basis: 50%;
                    -webkit-align-self: auto;
                    align-self: auto;
                }
                #Heading6
                {
                    color: black;
                    font-family: Arial;
                    font-weight: normal;
                    font-size: 10px;
                    margin: 0;
                    text-align: left;
                }
                /* Style inputs, select elements and textareas */
                input[type=text], select, textarea{
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    resize: vertical;
                }

                /* Style the label to display next to the inputs */
                label {
                    padding: 12px 12px 12px 0;
                    display: inline-block;
                }

                /* Style the submit button */
                input[type=submit] {
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    float: right;
                }

                /* Style the container */
                .container {
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;
                }

                /* Floating column for labels: 25% width */
                .col-25 {
                    float: left;
                    width: 25%;
                    margin-top: 6px;
                }

                /* Floating column for inputs: 75% width */
                .col-75 {
                    float: left;
                    width: 75%;
                    margin-top: 6px;
                }

                /* Clear floats after the columns */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
                @media screen and (max-width: 600px) {
                    .col-25, .col-75, input[type=submit] {
                        width: 100%;
                        margin-top: 0;
                    }
                } 
            </style>
            </head>
        <body>
            <p><br>
            <div style="text-align:center"> ~ PRIMAVERA 00185: i sabbath di aprile duemiladiciannove ~</div></ul>
        </p>   
    <div id="FlexGrid1">
        <div id="FlexGrid1-grid">
            <div class="header">
            </div>
            <div class="title">
                <div id="wb_Heading1" style="display:inline-block;text-align:center;z-index:0;">
                    <h1 id="Heading1">4 00185</h1>
                </div>
            </div>
            <div class="container">
                <form action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Nome</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="nome">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Cognome</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="cognome">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Invia">
                    </div>
                </form>
            </div> 
            <div class="sidebar">
                <div id="wb_Image1" style="display:inline-block;z-index:2;">
                    <img src="bg/P_LOC copy.jpg" id="Image1" alt="" title="1240×1754" class="responsive">
                </div>
            </div>
            <div class="ad3">
                <div id="wb_Heading3" style="display:inline-block;z-index:3;">


                    <!-- about -->

                    <h2 id="Heading3">ABOUT</h2>
                </div>
                <div id="wb_Text2">
                    <div style="color:black;">
                        <div><span style="color:black;">~~~~</span></div>
                        <div>&nbsp;</div>
                        <div><span style="color:black;">an apartment in Rome 00185 // creative crew // pasta performers // cradle of the New Weird Italia // mistomame.zone ______________</span></div>
                        <div>&nbsp;</div>
                        <div><span style="color:black;">Misto Mame &egrave; un quartiere di Tirana che prende nome dal partigiano Misto Mame ucciso dai fascisti italiani nella seconda guerra mondiale. in italia &egrave; un collettivo artistico che nasce in un appartamento di San Lorenzo. ad ora &egrave; quell'appartamento. tutti gli ospiti, temporanei e non, fanno esperienza della decostruzione di paradigmi imposti dalla societ&agrave; occidentale esprimendosi nell'arte e nella conversazione.</span></div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div><span style="color:black;">&copy; 2019 Misto Mame Collective, 00185 </span></div>
                    </div>
                </div>
            </div>
            <div class="story1">
            </div>
            <div class="ad1">
            </div>
            <div class="ad2">
            </div>
            <div class="story2">
                <div id="wb_Heading6" style="display:inline-block;z-index:5;">
                    <h2 id="Heading6" >a catturare i raggi, i pischelli tolti al sole (Dori)</h2>
                </div>
            </div>
            <div class="story3">
            </div>
            <div class="social">
            </div>
            <div class="footer">
            </div>
        </div>
    </div>
    </a>
</html>
