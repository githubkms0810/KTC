
<div class="row">
				<div class="col s12">
				<!-- 업로드 파일 시작 -->
				<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'> -->
				<link rel='stylesheet prefetch' href='/public/subpage/css/000_fileuproad/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="/public/subpage/css/000_fileuproad/style.css">
				<div class="row">
		<div class="col s12">
			<!-- Uploader Dropzone -->
			<div id="zdrop" class="fileuploader ">
				<div id="upload-label" style="width: 200px;">
					<i class="material-icons">cloud_upload</i>
					<span class="title">Drag your Files here</span>
					<span>Some description here <span/>
				</div>
			</div>
			<!-- Preview collection of uploaded documents -->
			<div class="preview-container">
				<div class="header">
					<span>Uploaded Files</span>	
					<i id="controller" class="material-icons">keyboard_arrow_down</i>
				</div>
				<div class="collection card" id="previews">
					<div class="collection-item clearhack valign-wrapper item-template" id="zdrop-template">
						<div class="left pv zdrop-info" data-dz-thumbnail>
							<div>
								<span data-dz-name></span> <span data-dz-size></span>
							</div>
							<div class="progress">
								<div class="determinate" style="width:0" data-dz-uploadprogress></div>
							</div>
							<div class="dz-error-message"><span data-dz-errormessage></span></div>
						</div>

						<div class="secondary-content actions">
							<a href="#!" data-dz-remove class="btn-floating ph red white-text waves-effect waves-light"><i class="material-icons white-text">clear</i></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script> -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js'></script> -->

  
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script  src="/public/subpage/js/000_fileuproad/index.js"></script>
    <script src="/public/subpage/js/000_fileuproad/materialize.min.js"></script>
<!-- <script src="/public/subpage/js/000_fileuproad/jquery.min.js"></script> -->
<script src="/public/subpage/js/000_fileuproad/dropzone.js"></script>

				<!-- 업로드 파일 끝 -->
			</div>