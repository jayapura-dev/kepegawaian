<style>
    body{
        background: url(<?php echo base_url('assets/login/images/login-bg1.jpg') ?>) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        margin: 0; padding: 0;
    }
    .footer{
        position: fixed;
        width: 100%;
        background: #000;
        color: #fff;
        bottom: 0px;
        font-family: calibri, sans-serif, arial;
        font-size: 12px;
        text-align: center;
        padding: 8px;
        opacity: 0.5;
    }

    .container{
        position: fixed;
        width: 670px;
        top:50px; bottom: 80px; left:100px;
    }

    .container td{
        font-family: calibri, sans-serif;
        color: #fff;
        font-size: 21px;
    }

    .container .left{
        background: url(http://read-k4.com/assets/login/images/green-bg.png);
        padding: 20px;
    }

    .container .right{
        background: url(https://qualita-indonesia.net/resources/themes/template-simple/images/bg-transparent-white.png);
        padding: 60px;
        color: #333;
    }

   input{
       padding: 10px;
       margin-bottom: 10px;
       width: 100%;
       border: 1px solid #ccc;
   }

   .btn{
       border: 1px solid transparent;
       border-radius: 3px;
       background: #1990db;
       padding: 7px;
       font-weight: bold;
       color:#fff;
   }
</style>

<div class="container">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" height='100%'>
        <tr>
            <td class="left">
                <img src="<?php echo base_url()?>assets/img/logo/bksda1.png" width="120px">
                <img src="<?php echo base_url()?>assets/img/logo/bbksdapapua.png" width ="120px"><br/>
                <div style="border-bottom: 1px solid #222; margin: 15px 0px"></div>
<!--                <span style="font-size: 30px; ">Welcome To Quest</span><br>
                Qualita Integrated System
                <p>
                    I Never Think Of The Future, It Comes Soon Enough
                    <span style="font-size: 15px;"><br><i>(Albert Einstein)</i></span>
                </p>-->


                <p style="font-size: 14px; color: #010101">
                    <b>Address: </b><br>
                    Jl. Raya Abepura - Sentani<br>
                    Jayapura 99351 Indonesia.<br>
                    Tel / Fax (0967 5170465)<br>
                    Fax.
                    E-mail  : admin@read-k4.com<br>
                    <br>
                </p>
                <br>
            </td>
            <td width="250" class="right">
                <div style="font-size: 35px; line-height: 20px">READ-K.4</div>

                <div style="border-bottom: 1px solid #ccc; margin: 15px 0px"></div>
								<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        				<?php echo form_open('auth/login_proses'); ?>
                <form>
                    <input type="text" name="nip" value="" placeholder="NIP">
                    <input type="password" name="sandi" value="" placeholder="Password">
                    <input type="submit" name="commit" value="Login" class="btn">
                    <div style="font-size: 13px; text-align: center">
                        <input type="checkbox" name="remember_me" id="remember_me" style="width: 20px;">Ingat Saya <br>
                        LOGIN PENGGUNA
                    </div>
                </form>
								<?php echo form_close();?>
            </td>
        </tr>
    </table>
</div>

<div class="footer">
    <span style="opacity: 1;">Read-K.4 | BBKSDA Papua &copy; 2019 | Email : admin@read-k4.com</span>
</div>
