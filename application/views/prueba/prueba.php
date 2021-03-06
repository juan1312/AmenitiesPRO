<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery Shield UI Demos</title>
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
</head>
<body class="theme-light">
<div id="chart"></div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#chart").shieldChart({
            theme: "light",
            primaryHeader: {
                text: "Budget overview"
            },
            exportOptions: {
                image: false,
                print: false
            },
            axisX: {
                categoricalValues: ["2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014"]
            },
            tooltipSettings: {
                chartBound: true,
                axisMarkers: {
                    enabled: true,
                    mode: 'xy'
                }                    
            },
            dataSeries: [{
                seriesType: 'line',
                collectionAlias: "Budget in Thousands",
                data: [100, 320, 453, 234, 553, 665, 345, 123, 432, 545, 654, 345, 332, 456, 234]
            }]
        });
    });
</script>
</body>