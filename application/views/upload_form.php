
<div style="width:50%; height:100%; background-color:white; margin-top:8%; margin-bottom: 3%; margin-left:25%;padding-top: 2%;padding-bottom:2%;">
    <h3 style="font-color: black; font-family:cursive; font-size:20px; text-align:center;padding-bottom:1%;"> Upload File </h3>
      <?php echo form_open_multipart('upload/do_upload');?>
        <p style="font-color: black; font-family:cursive; font-weight: bold; float:left;padding-left:10%;">Upload your file(.rar/.zip) here : </p>
        <input type="file" name="userfile" size="20" style="color: red; float:right; padding-right:2%;" />
        <br/>

</div>
        <input class="btn-danger" type="submit" value="upload" style=" width: 10%; height: 10%; margin-left:45%;"/>
          </form>
</body>
</html>
