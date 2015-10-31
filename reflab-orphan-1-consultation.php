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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/semantic/dist/semantic.min.js"></script>

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
        <h3 class="ui horizontal divider header">Find matching consultation</h3>
        <p>The contents of this page will be a simple search patient -> search consultation wizard.</p>

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