
<div class="container" style="margin-top:30px">
  <div class="box">
    <div class="card w-100" style="height:250px;z-index:1;">
      <div class="box-in" style="background-color:#DDDDDD;height:65%;width:100%">
        <div class="foto" style="position: absolute;z-index:2; margin-left:2%; margin-top:3%;">
          <img src="<?php echo base_url(); ?>assets/image/dosen.jpeg" height="175" alt="">
          <div class="info" style="float:right; margin-top:9%;">
            <h2 style="margin-left:3%"><?php echo $info['name']; ?></h2>
            <h3>NIP <?php echo $nip['NIP']; ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<h3 style="text-align:center">Announcement</h3>
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
             <a href="<?php echo site_url();?>/lecturer/page_detail/<?= $item->id ?>" class="btn btn-danger" style="margin-left:800px">View Post Detail</a>
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
