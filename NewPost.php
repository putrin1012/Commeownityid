<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.profile-tabs-content .tab-pane {
    padding: 1.5rem;
}

.post-editor .post-field {
    width: 100%;
    height: 120px;
    resize: vertical;
    border-radius: .25rem;
    margin-bottom: .5rem;
    padding: .5rem;
    border-color: #eceeef
}
</style>
</head>
<body>
<div class="tab-pane active" id="profile-overview" role="tabpanel">
  <div class="post-editor">
      <textarea name="post-field" id="post-field" class="post-field" placeholder="Write Something Cool!"></textarea>
      <?php include("tagsInput.php");?>
    </br>
      <div class="d-flex">
          <button class="btn btn-success px-4 py-1"style="background-color:#6C452D;border-color:#6C452D;">Post</button>
      </div>
  </div>
</div>

</body>
<html>
