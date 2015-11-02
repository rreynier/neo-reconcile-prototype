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
</head>
<body>

<div class="ui container">
    <div class="ui basic segment">
        <div class="ui two ordered steps">
            <div class="active step">
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
                <table class="ui definition compact table">
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
                <table class="ui definition compact table">
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

    <div class="ui basic segment">
        <h3 class="ui horizontal divider header">Ordered Items</h3>
        <p>Please confirm the items that were ordered as part of this result set.  If the item is not listed please add it.</p>
        <table class="ui celled table">
            <thead>
            <tr>
                <th>Item</th>
                <th class="right aligned">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>723 Heartworm Antigen by ELISA-Canine</td>
                <td class="right aligned">
                    <button class="ui right floated tiny negative labeled icon button">
                        <i class="remove icon"></i> remove
                    </button>
                </td>
            </tr>
            <tr>
                <td>1449 Liver Chemistries</td>
                <td class="right aligned">
                    <button class="ui right floated tiny negative labeled icon button">
                        <i class="remove icon"></i> remove
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui fluid icon input">
                        <input type="text" placeholder="Search to add a missing product...">
                        <i class="search icon"></i>
                    </div>
                </td>
                <td class="right aligned">

                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="ui basic segment">
        <a href="reflab-matched-closed-consult-2.php" class="ui right floated labeled positive icon button">
            <i class="right check circle icon"></i>
            Accept Changes
        </a>
    </div>

</div>
</body>