<style type="text/css">
.item {
    color: #666;
    background: #333;
    height: 300px;
    line-height: 300px; /* Align the text vertically center. */
    font-size: 52px;
    text-align: center;    
    font-family: "trebuchet ms", sans-serif;    
}
.carousel{
    margin-top: 10px;
}
.carousel-control{
  top: 50%;
}
.bs-example{
  margin: 20px;
}
</style>
      <div id="this-carousel-id" class="carousel slide">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
        <div class="carousel-inner">
        <?php
        $sql = "SELECT _id, _name, _status, _picture
        from es_banner";
        $q = $conn->prepare($sql);
        $q->execute();
        $i=0;
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
            $i++;
    ?>
          <div class="item <?php if($i==1) { echo 'active'; } ?> ">
            <a href="">  <img src="<?php echo baseurl; ?>banner/<?php echo $result->_picture; ?>" alt="" />
            </a>
          </div>
          <?php } ?>

        </div><!-- .carousel-inner -->

      </div><!-- .carousel -->



