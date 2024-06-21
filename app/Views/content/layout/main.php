<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomplishment Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table.greenTable {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #D4EED1;
        width: 100%;
        height: 200px;
        text-align: center;
        border-collapse: collapse;
        }
        table.greenTable td, table.greenTable th {
        padding: 5px 5px;
        }
        table.greenTable tbody td {
        font-size: 16px;
        }
        table.greenTable thead {
        background: #24943A;
        border-bottom: 3px solid #444444;
        }
        table.greenTable thead th {
        font-size: 20px;
        font-weight: bold;
        color: #F0F0F0;
        text-align: center;
        border-left: 2px solid #24943A;
        }
        table.greenTable thead th:first-child {
        border-left: none;
        }

        table.greenTable tfoot {
        font-size: 13px;
        font-weight: bold;
        color: #F0F0F0;
        background: #24943A;
        background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
        background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
        background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
        border-top: 1px solid #24943A;
        }
        table.greenTable tfoot td {
        font-size: 13px;
        }
        table.greenTable tfoot .links {
        text-align: right;
        }
        table.greenTable tfoot .links a{
        display: inline-block;
        background: #FFFFFF;
        color: #24943A;
        padding: 2px 8px;
        border-radius: 5px;
        }
    </style>
</head>

<body>
    <?=$this->include('content/include/navbar')?>
    <?=$this->renderSection('content');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>