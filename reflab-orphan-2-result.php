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
    <script src="/semantic/dist/semantic.min.js"></script>
</head>
<body>

<div class="ui container">
    <div class="ui basic segment">
        <div class="ui three ordered steps">
            <div class="completed step">
                <div class="content">
                    <div class="title">Consultation</div>
                    <div class="description">Find matching consultation</div>
                </div>
            </div>
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
                        <td>Tests</td>
                        <td><a>27 tests</a></td>
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
        <a href="reflab-orphan-1-consultation.php" class="ui left floated labeled icon button">
            <i class="arrow circle left icon"></i> Back
        </a>
        <a href="reflab-orphan-3-invoice.php" class="ui right floated labeled positive icon button">
            <i class="right check circle icon"></i>
            Accept Changes
        </a>
    </div>

</div>
</body>