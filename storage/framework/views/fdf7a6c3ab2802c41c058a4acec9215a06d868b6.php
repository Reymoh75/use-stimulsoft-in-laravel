
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Report.mrt - Viewer</title>
	<script type="text/javascript" src="<?php echo e(asset('stimulsoft/files/stimulsoft.reports.engine.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('stimulsoft/files/stimulsoft.reports.export.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('stimulsoft/files/stimulsoft.viewer.js')); ?>"></script>

	<script type="text/javascript">
		function Start() {
			var report = Stimulsoft.Report.StiReport.createNewReport();
			report.loadFile("<?php echo e(asset('stimulsoft/files/Report.mrt')); ?>");

			var dbtable1 = report.dictionary.databases.getByName("table1");
			dbtable1.pathData = "<?php echo e(asset('stimulsoft/files/table1.json')); ?>";

			var options = new Stimulsoft.Viewer.StiViewerOptions();
			var viewer = new Stimulsoft.Viewer.StiViewer(options, "StiViewer", false);
			viewer.report = report;
			viewer.renderHtml("viewerContent");
		}
	</script>
</head>
<body onload="Start()">
	<div id="viewerContent"></div>
</body>
</html><?php /**PATH C:\Users\Mohammad\Desktop\stimulsoft-laravel\stimulsoft\resources\views/report.blade.php ENDPATH**/ ?>