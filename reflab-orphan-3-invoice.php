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
            <div class="completed step">
                <div class="content">
                    <div class="title">Result</div>
                    <div class="description">Reconcile ordered items</div>
                </div>
            </div>
            <div class="active step">
                <div class="content">
                    <div class="title">Invoice</div>
                    <div class="description">Reconcile invoice</div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui basic segment">
        <h3 class="ui horizontal divider header">Ordered Items</h3>
        <p>These are the items that were ordered as part of this result set. If these items are incorrect please return to the previous step.</p>
        <table class="ui celled table">
            <thead>
            <tr>
                <th>Item</th>
                <th class="right aligned">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="positive">
                <td>723 Heartworm Antigen by ELISA-Canine</td>
                <td class="right aligned">
                    Matched
                </td>
            </tr>
            <tr class="positive">
                <td>1449 Liver Chemistries</td>
                <td class="right aligned">
                    Added to invoice
                </td>
            </tr>
            <tr>
                <td>CBC</td>
                <td class="right aligned">
                    <button class="ui right floated tiny blue labeled icon button">
                        <i class="plus icon"></i> add to invoice
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="ui basic segment">
        <h3 class="ui horizontal divider header">Consultation Invoice</h3>
        <p>This is the current invoice / consultation this result is matched to.</p>
        <table class="ui celled table">
            <thead>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th class="right aligned">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="disabled">
                <td>
                    Rabies Shot
                </td>
                <td>1</td>
                <td>$49.00</td>
                <td class="right aligned">
                    n/a
                </td>
            </tr>
            <tr class="disabled">
                <td>
                    Doctors visit
                </td>
                <td>1</td>
                <td>$30.00</td>
                <td class="right aligned">
                    n/a
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui ribbon label">Matched</div>
                    723 Heartworm Antigen by ELISA-Canine
                </td>
                <td>1</td>
                <td>$99.00</td>
                <td class="right aligned">
                    n/a
                </td>
            </tr>
            <tr class="disabled">
                <td>
                    Nail Trim
                </td>
                <td>1</td>
                <td>$15.00</td>
                <td class="right aligned">
                    n/a
                </td>
            </tr>
            <tr class="disabled">
                <td>
                    Medicine
                </td>
                <td>5</td>
                <td>$20.00</td>
                <td class="right aligned">
                    n/a
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui ribbon green label">New</div>
                    1449 Liver Chemistries
                </td>
                <td>1</td>
                <td>$99.00</td>
                <td class="right aligned">
                    <button class="ui right floated tiny negative labeled icon button">
                        <i class="remove icon"></i> remove
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="ui basic segment clearing">
        <a href="reflab-orphan-2-result.php" class="ui left floated labeled icon button">
            <i class="arrow circle left icon"></i> Back
        </a>
        <div class="ui right floated small positive labeled icon button">
            <i class="right check circle icon"></i> Accept Changes
        </div>
    </div>

</div>
</body>