  <div class="nav" style="background-color: #E4AB94;">
    <div class="container-bar" style="margin:0 auto;">
      <input type="text" placeholder=" Search" style="margin:5px; border-radius:15px;">
      <select style="margin :5px">
        <option>Faculty</option>
        <option>FIF</option>
        <option>FTE</option>
        <option>FRI</option>
        <option>FIT</option>
        <option>FIK</option>
        <option>FEB</option>
        <option>FKB</option>
      </select>
      <select style="margin :5px">
        <option>Category</option>
        <option>Asisten Dosen</option>
        <option>Asisten Praktikum</option>
        <option>Asisten Lab</option>
      </select>
    </div>
  </div>

  <div class="container" style="margin-top:30px;">
     <?php foreach($announcement as $item) : ?>
    <div class="row">
      <div class="col-lg">
        <div class="card w-100" style="border:2px solid black; height:150px">
          <div class="container" style="padding-left:0px;padding-right:0px;">
            <div class="row no-gutters" style="height:146px">
              <div class="box-left" style="background-color: #C90014" style="float:left; height:100%">
                <p></p>
                <br/>
                <h3 style="color:white; "><?= $item->dateCreated ?></h3>
              </div>
              <div class="box-right" style="float:right; margin-left:10px;">
                <br/>
                <h5 class="card-title"><?= $item->title ?></h5>
                <p class="card-text"><?= $item->content ?></p>
                <a href="<?php echo site_url();?>/student/page_detail/<?= $item->id ?>" class="btn btn-danger" style="margin-left:800px">View Post Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>
  <?php endforeach ?>
  </div>
</body>