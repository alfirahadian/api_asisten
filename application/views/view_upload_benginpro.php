<!DOCTYPE html>
<html>
<head>
      <title>Register Benginpro</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
      <!-- Compiled and minified JavaScript -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
      <!-- For load material icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="row">
        <div class="col s10 m5 l4 offset-l4 offset-m4 offset-s1">
              <div class="card">
                  <div class="card-content light-green lighten-5">
                        <span class="card-title black-text">
                        <table>
                        <tr>
                          <td class="right"><img src="<?php echo base_url(); ?>assets/img/cnc.png" width="80"></td>
                          <td>Register Asisten Benginpro</td>
                        </tr>
                        </table>
                        </span>
                        </div>
                        <?php echo validation_errors('<p class="error">'); ?>
                          <?php echo form_open_multipart("upload_benginpro/do_upload"); ?>
                        <div class="card-content black-text">
                              <div class="row">
                                  <div class="input-field col s12 l12">
                                    <label for="nama">Nama Lengkap Asisten:</label>
                                    <input type="text" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" />
                              </div>
                              <div class="row">
                                  <div class="input-field col s12 l12">
                                    <label for="hp">No HP:</label>
                                    <input type="text" id="hp" name="hp" value="<?php echo set_value('hp'); ?>" />
                              </div>
                              <div class="row">
                                  <div class="input-field col s12 l12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                              </div>
                              <div class="row">
                                  <div class="input-field col s12 l12">
                                    <label for="line">ID Line</label>
                                    <input type="text" id="line" name="line" value="<?php echo set_value('line'); ?>" />
                              </div>
                              <div class="row">
                                <div class="col s12 l12">
                                <label>Upload Foto Profil</label> <br>
                                <input name="userfile" type="file" placeholder="Masukkan foto profil" value="<?php echo set_value('userfile'); ?>">
                                </div>  
                              </div>
                              <div class="row right">
                                    <button class="btn waves-effect waves-light btn-small right" type="submit" value="upload">Register
                              <i class="material-icons right">send</i>
                                    </button>
                              </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>    
      </div>
</div> 
</body>
 <script type="text/javascript">
        $(document).ready(function() {
    $('propinsi').material_select();
});
      </script>
</html>