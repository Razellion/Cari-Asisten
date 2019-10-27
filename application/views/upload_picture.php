
<div style="width:50%; height:100%; background-color:white; margin-top:8%; margin-bottom: 3%; margin-left:25%;padding-top: 2%;padding-bottom:2%;">
    <h3 style="font-color: black; font-family:cursive; font-size:20px; text-align:center;padding-bottom:1%;"> Upload File </h3>
      <form action="<?php echo site_url("user/uploadPic2");?>" method="post">
        <p style="font-color: black; font-family:cursive; font-weight: bold; float:left;padding-left:10%;">Upload your picture(.png/.jpg) here : </p>
        <input type="file" name="picProfile" size="20" style="color: red; float:right; padding-right:2%;" />
        <br/>

</div>
        <button type="submit" class="btn-danger" value="upload" style=" width: 10%; height: 10%; margin-left:45%;">Upload</button>
        </form>
</body>
</html>
