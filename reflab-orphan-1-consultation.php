<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>Responsive Elements - Semantic</title>
    <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/semantic/dist/semantic.min.js"></script>
    <script src="/custom.js"></script>

    <style>
        .title {
            line-height: 35px;
        }
    </style>
</head>
<body>

<div class="ui container">
    <div class="ui basic segment">
        <div class="ui three ordered steps">
            <div class="active step">
                <div class="content">
                    <div class="title">Consultation</div>
                    <div class="description">Find matching consultation</div>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="title">Result</div>
                    <div class="description">Reconcile ordered items</div>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="title">Invoice</div>
                    <div class="description">Reconcile invoice</div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui basic segment">
        <h3 class="ui horizontal divider header">Result Details</h3>
        <div class="ui two column very relaxed grid">
            <div class="column">
                <table class="ui definition table">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>Bruce</td>
                    </tr>
                    <tr>
                        <td>Client</td>
                        <td>Roeland Reyniers</td>
                    </tr>
                    <tr>
                        <td>Breed</td>
                        <td>Maltese X</td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>Female</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="column">
                <table class="ui definition table">
                    <tbody>
                    <tr>
                        <td>Assays</td>
                        <td>
                            <a class="popup">14 assays</a>
                            <div class="ui popup">
                                <p><strong>Hematology (6):</strong><br />
                                    RBC, Hematocrit, Hemoglobin, MCV, MCH, RDW
                                </p>
                                <p>
                                    <strong>Chemistry (8):</strong><br />
                                    Glucose, BUN, Creatine, SDMA, Total Protein, Albumin, Globulin, ALT, ALP
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Requisition Id</td>
                        <td>408144</td>
                    </tr>
                    <tr>
                        <td>Accession Ids</td>
                        <td>I92838, I182378</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="ui basic segment find-patient">
        <h3 class="ui horizontal divider header">1. Find matching patient</h3>
        <div class="ui search">
            <div class="ui fluid icon input">
                <input class="prompt" type="text" placeholder="Search for patient..." value="Bruce">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>

        <table class="ui celled compact table">
            <thead>
            <tr>
                <th>Client</th>
                <th>Patient</th>
                <th>Last Visit</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John Smith</td>
                <td>Bruce</td>
                <td>28 April, 2015</td>
                <td>
                    <a href="#" class="ui right floated small positive labeled icon button select-patient">
                        <i class="right check circle icon"></i> Select
                    </a>
                </td>
            </tr>
            <tr>
                <td>Brucel Smith</td>
                <td>Fluffy</td>
                <td>15 January, 2015</td>
                <td>
                    <a href="#" class="ui right floated small positive labeled icon button select-patient">
                        <i class="right check circle icon"></i> Select
                    </a>
                </td>
            </tr>
            <tr>
                <td>John Bruce</td>
                <td>Bobbie</td>
                <td>1 December, 2015</td>
                <td>
                    <a href="#" class="ui right floated small positive labeled icon button select-patient">
                        <i class="right check circle icon"></i> Select
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="ui basic segment find-patient-matched">
        <h3 class="ui horizontal divider header">1. Find matching patient</h3>
        <p style="text-align:center;"><strong>Bruce / Roeland Reyniers</strong> selected.  <a href="#">Search again?</a></p>
    </div>

    <div class="ui basic segment find-matching-consultation">
        <h3 class="ui horizontal divider header">2. Find matching consultation</h3>
        <div class="ui styled fluid accordion">
            <div class="title">
                <i class="dropdown icon"></i>
                #942891 - 28 April, 2015 at 3:16PM - $205.89
                <a href="reflab-orphan-2-result.php" class="ui right floated small positive labeled icon button">
                    <i class="right check circle icon"></i> Select
                </a>
            </div>
            <div class="content">
                <div class="transition hidden">
                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                Rabies Shot
                            </td>
                            <td>1</td>
                            <td>$49.00</td>
                        </tr>
                        <tr>
                            <td>
                                Doctors visit
                            </td>
                            <td>1</td>
                            <td>$30.00</td>
                        </tr>
                        <tr>
                            <td>
                                723 Heartworm Antigen by ELISA-Canine
                            </td>
                            <td>1</td>
                            <td>$99.00</td>
                        </tr>
                        <tr>
                            <td>
                                Nail Trim
                            </td>
                            <td>1</td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td>
                                Medicine
                            </td>
                            <td>5</td>
                            <td>$20.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="title">
                <i class="dropdown icon"></i>
                #921331 - 24 April, 2015 at 3:16PM - $165.89
                <a href="reflab-orphan-2-result.php" class="ui right floated small positive labeled icon button">
                    <i class="right check circle icon"></i> Select
                </a>
            </div>
            <div class="content">
                <p class="transition hidden">Details of the consultation</p>
            </div>

            <div class="title">
                <i class="dropdown icon"></i>
                #193782 - 22 April, 2014 at 1:16PM - $10.66
                <div class="ui right floated small positive labeled icon button">
                    <i class="right check circle icon"></i> Select
                </div>
            </div>
            <div class="content">
                <p class="transition hidden">Details of the consultation</p>
            </div>

            <div class="title">
                <i class="dropdown icon"></i>
                #942891 - 15April, 2015 at 3:16PM - $52.23
                <div class="ui right floated small positive labeled icon button">
                    <i class="right check circle icon"></i> Select
                </div>
            </div>
            <div class="content">
                <p class="transition hidden">Details of the consultation</p>
            </div>

            <div class="title">
                <i class="dropdown icon"></i>
                #942891 - 10 April, 2015 at 6:16PM - $205.89
                <div class="ui right floated small positive labeled icon button">
                    <i class="right check circle icon"></i> Select
                </div>
            </div>
            <div class="content">
                <p class="transition hidden">Details of the consultation</p>
            </div>

            <div class="title">
                <i class="dropdown icon"></i>
                #942891 - 2 April, 2015 at 4:16PM - $205.89
                <div class="ui right floated small positive labeled icon button">
                    <i class="right check circle icon"></i> Select
                </div>
            </div>
            <div class="content">
                <p class="transition hidden">Details of the consultation</p>
            </div>
        </div>
    </div>
</div>
<script>
    $('.ui.accordion').accordion();
</script>
</body>