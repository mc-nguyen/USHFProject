<?php
    $neg_end_html = "
        <div>
            <div class='negative-title'>
                <h4>MOLECULAR TESTING NEGATIVE RESULTS</h4>
                <h4 align='right'>SARS-CoV-2/COVID-19</h4>
            </div>
            <div class='negative-info'>
                <i class='material-icons'>remove_circle_outline</i>
                <h3>A NEGATIVE RESULT MEANS THAT THE VIRUS WAS NOT DETECTED IN THE SAMPLE YOU PROVIDED. THE RESULTS SUGGEST YOU WERE NEGATIVE AT THE TIME OF TESTING.</h3>
            </div>
            <p align='justify'>A negative test result for this test means that 
            SARSCoV-2 RNA was not present in the specimen above the limit of detection. 
            For a sample to be considered positive for SARS-CoV-2, the patient sample 
            must return target Ct values of ≤35. However, a negative result does not 
            rule out COVID-19 and should not be used as the sole basis for treatment 
            or patient management decisions. Negative results must be combined with 
            clinical observations, patient history, and epidemiological information. 
            All laboratory tests have limitations. Negative results do not 
            preclude infection with SARS-CoV-2 virus.</p>
            <p align='justify'>Molecular Testing performed via Thermo Fisher Quant 
            Studio PCR utilizing PheonixDX SARS-CoV-2 test assay. The PheonixDX 
            SARS-C0V-2 assay is an Emergency Use Authorization (EUA) test authorized 
            by the U.S. FDA for use by authorized laboratories, using real-time (RT) 
            polymerase chain reaction (PCR) technology for the qualitative detection 
            of nucleic acids from the SARS-CoV-2 virus and diagnosis of SARS-CoV-2 
            virus infection from individuals meeting CDC clinical and/or 
            epidemiological testing criteria. Testing is limited to laboratories 
            certified under the Clinical Laboratory Improvement Amendments of 1988 
            (CLIA), 42 U.S.C. §263a, that meet requirements to perform high complexity 
            tests. The test detects all current variants of concern as defined by 
            the Center for Disease Control (CDC), including:</p>
            <b align='justify'>B.1.1.7 (Alpha), B.1.351 (Beta), P.1 (Gamma), 
            B.1.617.2 (Delta), B.1.1.529 (Omicron)</b>
            <p class='end-report'>[END OF REPORT]</p>
        </div>
    ";
    $neg_end_style = "<style>        
        .negative-title {
            display: grid;
            grid-template-columns: auto auto;
            background: green;
            color: white;
            padding: 0 20px;
            margin-top: 20px;
        }
        .negative-title > h4 {
            margin: 5px;
        }
        .negative-info {
            display: grid;
            grid-template-columns: auto auto;
            padding-bottom: 20px; 
        }
        .negative-info > i {
            font-size: 60px;
            margin: 5px 20px;
            color: limegreen;
        }
        .negative-info > h3 {
            margin: auto 0;
            padding-right: 20px;
            color: limegreen;
        }
        .end-report {
            position: absolute;
            bottom: 0%;
        }
    </style>";

    return $neg_end_html . $neg_end_style;