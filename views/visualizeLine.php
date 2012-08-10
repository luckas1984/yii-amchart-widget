<script type="text/javascript">

	<?php  
		/* We will use timestamp to allow multiple instance of widget*/
		$currentTimestamp =  time(); 
	?>

	var chart<?php echo $currentTimestamp; ?>;

	var chartData<?php echo $currentTimestamp; ?> = <?php echo json_encode($data); /*We serialize the user data to fill data chart*/?>;

            AmCharts.ready(function () {
                // SERIAL CHART
                chart<?php echo $currentTimestamp; ?> = new AmCharts.AmSerialChart();
                chart<?php echo $currentTimestamp; ?>.dataProvider = chartData<?php echo $currentTimestamp; ?>;
                chart<?php echo $currentTimestamp; ?>.categoryField = "<?php echo $categoryField; ?>";
                chart<?php echo $currentTimestamp; ?>.startDuration = 1;
                chart<?php echo $currentTimestamp; ?>.marginBottom = 10;
                //chart<?php echo $currentTimestamp; ?>.rotate = true;
                chart<?php echo $currentTimestamp; ?>.plotAreaBorderColor = "#DADADA";
                chart<?php echo $currentTimestamp; ?>.plotAreaBorderAlpha = 1;

                // AXES
                // category
                var categoryAxis<?php echo $currentTimestamp; ?> = chart<?php echo $currentTimestamp; ?>.categoryAxis;
                categoryAxis<?php echo $currentTimestamp; ?>.gridPosition = "start";
                categoryAxis<?php echo $currentTimestamp; ?>.axisAlpha = 0;
                categoryAxis<?php echo $currentTimestamp; ?>.dashLength = 1;
                categoryAxis<?php echo $currentTimestamp; ?>.title = "<?php echo $options['categoryTitle']; ?>";

                // value
                var valueAxis<?php echo $currentTimestamp; ?> = new AmCharts.ValueAxis();
                valueAxis<?php echo $currentTimestamp; ?>.dashLength = 1;
                valueAxis<?php echo $currentTimestamp; ?>.axisAlpha = 0.2;
                valueAxis<?php echo $currentTimestamp; ?>.position = "top";
                valueAxis<?php echo $currentTimestamp; ?>.title = "<?php echo $options['valueTitle']; ?>";
                valueAxis<?php echo $currentTimestamp; ?>.tickLength = 0;
                valueAxis<?php echo $currentTimestamp; ?>.axisAlpha = 0;
                chart<?php echo $currentTimestamp; ?>.addValueAxis(valueAxis<?php echo $currentTimestamp; ?>);

                // GRAPHS
                // Line graph
                var graph<?php echo $currentTimestamp; ?> = new AmCharts.AmGraph();
                graph<?php echo $currentTimestamp; ?>.type = "<?php echo $type; ?>";
                graph<?php echo $currentTimestamp; ?>.title = "Income";
                graph<?php echo $currentTimestamp; ?>.valueField = "<?php echo $valueField; ?>";
                graph<?php echo $currentTimestamp; ?>.bullet = 'round';
                //graph<?php echo $currentTimestamp; ?>.fillColors = "#FFFFFF";
                //graph<?php echo $currentTimestamp; ?>.fillAlphas = 1;
                chart<?php echo $currentTimestamp; ?>.addGraph(graph<?php echo $currentTimestamp; ?>);

                // LEGEND
                var legend<?php echo $currentTimestamp; ?> = new AmCharts.AmLegend();
                chart<?php echo $currentTimestamp; ?>.addLegend(legend<?php echo $currentTimestamp; ?>);

                // WRITE
                chart<?php echo $currentTimestamp; ?>.write("chartdiv<?php echo $currentTimestamp; ?>");
            });
//]]>
</script>

        <div id="chartdiv<?php echo $currentTimestamp; ?>" style="width: <?php echo $options['width']; ?>px; height: <?php echo $options['height']; ?>px;"></div>
