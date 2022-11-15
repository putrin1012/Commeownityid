<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
    background-color: white;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}
.panel .timeline,
.panel .timeline-time {
    background-color: #fff
}

.panel .timeline-icon {
    box-shadow: 0 0 0 7px #fff
}

.panel .timeline-label {
    box-shadow: none;
    background-color: #f7f7f7;
    border: 1px solid #e3e3e3
}

.panel .timeline-label:before {
    border-right-color: #e3e3e3
}

.panel .timeline-label:after {
    border-right-color: #f7f7f7
}
</style>
</head>
<body>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container bootstrap snippets bootdeys">
      <div class="col-md-7 col-md-offset-2">
          <div class="panel">
              <div class="panel-body">
          		<textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
          		<div class="mar-top clearfix">
                <?php include("tagsInput.php");?>
          			<button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>

          			<a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
          			<a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
          			<a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
          		</div>
          	</div>
          </div>
        </div>
      </div>

</body>
<html>
