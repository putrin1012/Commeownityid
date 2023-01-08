<?php
  class helper {
    public static function redirect($url){
      ?>
      <html><head>
        <title>Redirecting...</title>
        <script type="text/javascript">
         location = '<?=$url?>';
        </script>
      </head><body>Redirecting...</body></html>
      <?php
    }
  }
?>
