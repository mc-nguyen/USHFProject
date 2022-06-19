<?php

    $head_html = "<div class='grid-container'>
        <div class='grid-item'>
            <img src='USHL logo.png' height='150px'/>
        </div>
        <div align='center' class='info-section'>
            <h4>US HEALTH LABORATORIES</h4>
            <h5>6850 SEPULVEDA BOULEVARD</h5>
            <h5>UNIT 220</h5>
            <h5>VAN NUYS, CA 91405</h5>
            <h5>PH: 805-625-9245</h5>
        </div>
        <div align='right' class='info-section'>
            <h5>LABORATORY DIRECTOR</h5>
            <h5>LINDSAY DELLAMAGGIORA MD</h5>
            <h5>US HEALTH LABORATORIES</h5>
            <h5>CLIA NUMBER: 05D2232232</h5>
            <h5>STATE ID: CLF-90004810</h5>
        </div>
    </div>";
    $head_style = "<style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
        .info-section {
            margin: auto 0;
        }
        .info-section > h4 {
            margin: 0;
            padding-bottom: 4px;
        }
        .info-section > h5 {
            margin: 0;
            padding-bottom: 2px;
            font-weight: normal;
        }
    </style>";

    return $head_html. $head_style;