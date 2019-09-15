<head>
  <style type="text/css">
    #attribute{
      font-family: cursive;
      margin-top: 20px;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
    }

    #date{
      background-color: #C90014;
      color:white;
      padding-top: 40px;
      padding-bottom: auto;
      margin-right: 20px;
      text-align: center;
      height: 140px;
    }

    #title{
      background-color: white;
      color: black;
      padding-top: 40px;
      padding-bottom: auto;
      margin-right: 20px;
      height: 140px;
    }

    #icon-top{
      width: 15%;
      height: 75%;
    }

    #icon-bot{
      width: 15%;
      height: 50%;
    }

/*    #card{
      width: 20%;
      height: 75%;
    }

    #hat{
      width: 20%;
      height: 80%;
    }

    #clock{
      width: 20%;
      height: 80%;
      margin-left: -25%;
    }*/

    #box-book{
      padding-top: 20px;
      background-color: white;
      color: black;
      height: 70px;
    }

    #box-card{
      padding-left: 1%;
      margin-left: -4%;
      padding-top: 20px;
      background-color: white;
      color: black;
      height: 70px;
    }

    #box-hat{
      padding-top: 30px;
      background-color: white;
      color: black;
      height: 80px;
      margin-top: -9%;
    }

    #box-clock{
      padding-left: 1%;
      margin-left: -4%;
      padding-top: 30px;
      background-color: white;
      color: black;
      height: 80px;
      margin-top: -9%;
    }

    #button{
      width: 40%;
      height: 55%;
      padding-left: 10%;
    }

    #applicants{
      background-color: #ffac9c;
    }

    #file{
      width: 2%;
      padding-top: 0;
    }

    tr {
      border: 2px solid black;
    }
/*    #icon-bot{
      background-color: white;
      margin-left: 115px;
      margin-top: -45px;
      font-family: cursive;
    }
*/
  </style>
</head>
<body>
  <div class="container">
    <div class="row" id="attribute">
      <div class="col-md-1" id="date">
        <a>17 April</a>
        <a>2018</a>
      </div>
      <div class="col-md-5" id="title">
        <a style="text-decoration: underline;font-weight: bold;"> Rekrutmen Asisten Dosen Kalkulus IIB (FIF) </a></br>
        <a> posted by M. Ikazra ST, MT.</a>
      </div>
        <div class="col-md-3" id="box-book">
          <img src="<?php echo base_url('assets/image/book.png') ?>" alt="" id="icon-top"> Kalkulus IIB
        </div>
        <div class="col-md-3" id="box-card">
        <img src="<?php echo base_url('assets/image/card.png') ?>"alt="" id="icon-top"> Asisten Dosen
      </div>
    </div>
    <div class="row" id="attribute">
      <div class="col-md-1" style="padding-top: 40px;
      padding-bottom: auto;
      margin-right: 20px;
      text-align: center;
      height: 140px;">
      </div>
      <div class="col-md-5" style="padding-top: 40px;
      padding-bottom: auto;
      margin-right: 20px;
      height: 140px;">
      </div>
        <div class="col-md-3" id="box-hat">
          <img src="<?php echo base_url('assets/image/hat.png') ?>" alt="" id="icon-bot"> FIF
        </div>
        <div class="col-md-3" id="box-clock">
        <img src="<?php echo base_url('assets/image/clock.png') ?>"alt="" id="icon-bot"> Semester Genap 2018/2019
      </div>
    </div> 
    <div class="row" id="attribute" style="height: auto;width: 100%;background-color: white;margin-left: auto;margin-right: auto; margin-top: -12%;padding:3%">
        lorem ipsum dolor amet
    </div>
    <div class="row" id="attribute" style="height: auto;width: 100%;background-color: #dbdad7;margin-right: auto; margin-top:0;padding-top:10px;padding-bottom:10px;padding-left:45%">
      <div class="col-md-3">
        <a href=""><img src="<?php echo base_url('assets/image/delete.png') ?>"alt="" id="button"></a><p style="text-align: left;margin-left:-5%">Delete Post</p>
      </div>
    </div>
    <div class="row" id="attribute" style="height: auto;width: 100%;margin-left: auto;margin-right: auto;margin-top: 5%">
      Applicants:
    </div>
    <table id="attribute" style="border-width: 2px;border-style: solid;border-color: black;background-color:#ffac9c;width: 100%;height: 100%">
      <tr>
        <td>Nana Suneno</td>
        <td style="text-align: right">
        <a href="" style="color:black">
        <img src="<?php echo base_url('assets/image/file.png') ?>"alt="" id="file"/>
        View File
        </a>
        </td>
      </tr>
      <tr>
        <td>Nana Suneno</td>
        <td style="text-align: right">
        <a href="" style="color:black">
        <img src="<?php echo base_url('assets/image/file.png') ?>"alt="" id="file"/>
        View File
        </a>
        </td>
      </tr>
    </table>
    <!-- <div class="row" id="attribute" style="height: auto;width: 100%;margin-left: auto;margin-right: auto">
      <div id="applicants"  style="border-color: black;border-width: 2px;border-style: solid;padding-top: 2px;height: 35px; width: 100%">
        <div style="display: inline-block;padding-left: 1%">
          Nana Suneno
        </div>
        <div style="float: right; padding-right: 1%">
          <a href="" style="color: black;background-color: white;">
          <p style="float: right">View File</p>
          <img src="<?php echo base_url('assets/image/file.png') ?>"alt="" id="file" style="margin-right: 5px"/></a>
        </div>
      </div>
    </div> -->
  </div>
</body>

