<html >

<body>

  <div >
    <h1> Show Image Thumbnail By Youtube Video URL Using PHP</h1>

     <form  method="post">
     <input type="url" name="youtube_url" placeholder="enter youtube link" autocomplete="off">
      <input type="submit" name="submit" value="submit">
     </form>

    <?php

    if(isset($_POST['submit'])){

      $video_url = trim($_POST['youtube_url']);
     echo $video_url;
     echo "<br>";

      if(!empty($video_url)){

        $params = parse_url($video_url);
        var_dump($params);

        if($params['host'] !== "www.youtube.com" && $params['host'] !== "youtube.com" ){
          echo "<p class='error'>Please enter a youtube link</p>";
          exit();
        }

        if($params['path'] !== "/watch" ){
          echo "<p class='error'>Invalid Video Path.</p>";
          exit();
        }

        if(!isset($params['query'])){
          echo "<p class='error'>The query part for the url is not set. Get a correct URL.</p>";
          exit();
        }
       // $params['query'];
       //parse_str("name=dipa",$name);
       //print_r($name);
       

        parse_str($params['query'],$query);
        if(isset($query['v'])){
          $video_id = $query['v'];
    ?>


      <div >
      <h1> Maximum resolution</h1>
      <img src="https://img.youtube.com/vi/<?php echo $video_id; ?>/maxresdefault.jpg" width="400">
      </div>

      <div>
      <h1>high Quality resolution</h1>
      <img src="https://img.youtube.com/vi/<?php echo $video_id; ?>/hqdefault.jpg" width="400">
      </div>


    <?php
        }else{
             echo "<p class='error'>Invalid Video Id Query.</p>";
             exit();
        }

      }else{
        echo "<p class='error'>Please enter a url.</p>";
        exit();
      }


    }

    ?>

  </div>



</body>
</html>