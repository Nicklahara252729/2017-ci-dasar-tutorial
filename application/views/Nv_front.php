<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mar-2">
  <?php
  if($this->uri->segment(4)!=''){
    //$n_hide = '';
    //$n_hide_2 = 'hide';
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih box-shadow <?php // echo $n_hide; ?>">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
      <p class="padding text-center mar-top-1"><span class="glyphicon glyphicon-edit"></span> &nbsp;Edit Menu</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
      <?php
      echo form_open('Nc_front/edit_menu');
      $n_inpt_1 = ['name'=>'menu','class'=>'form-control mar-top-2','placeholder'=>'Menu','value'=>$show_data->menu];
      $n_inpt_2 = ['name'=>'kunci','class'=>'form-control mar-top-2','placeholder'=>'Kunci','value'=>$show_data->kunci];
      $n_inpt_3 = ['name'=>'folder','class'=>'form-control mar-top-2','placeholder'=>'Folder','value'=>$show_data->folder];
      $n_inpt_4 = ['name'=>'file','class'=>'form-control mar-top-2','placeholder'=>'File','value'=>$show_data->file];
      $n_inpt_7 = ['type'=>'hidden','name'=>'buku','value'=>$show_data->nobuku];
      $n_inpt_5 = ['name'=>'no','class'=>'form-control','placeholder'=>'No','value'=>$show_data->no];
      $n_inpt_6 = ['name'=>'id','value'=>$show_data->id,'type'=>'hidden'];
      echo form_input($n_inpt_5);
      echo form_input($n_inpt_1);
      echo form_input($n_inpt_2);
      echo form_input($n_inpt_3);
      echo form_input($n_inpt_4);
      echo form_input($n_inpt_6);
      echo form_input($n_inpt_7);
      ?>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding bg-dark">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
        <?php
          echo form_submit('enter_menu','Simpan',['class'=>'btn btn-warning btn-sm form-control']);
        ?>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
        <?php
          echo anchor('Nc_front/book/'.$this->uri->segment(3),'Cancel',['class'=>'btn btn-danger  form-control']);
          echo form_close();
          ?>
        </div>
    </div>
  </div>

    <?php
  }else{
    //$n_hide='hide';
    //$n_hide_2 = '';
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-putih box-shadow_2 no-padding <?php //echo $n_hide_2; ?>">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-1">
        <p class="padding  text-center"><span class="glyphicon glyphicon-plus"></span> &nbsp; Tambah Menu</p>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
        <?php
        echo form_open('Nc_front/n_tambah_menu');
        $n_cord1 = ['name'=>'nama_menu','placeholder'=>'Nama Menu','class'=>'form-control','required'=>'required'];
        $n_cord2 = ['name'=>'kunci','placeholder'=>'Kunci Menu','class'=>'form-control mar-top-2','required'=>'required'];
        $n_cord3 = ['name'=>'folder','placeholder'=>'Folder','class'=>'form-control mar-top-2','required'=>'required'];
        $n_cord4 = ['name'=>'file','placeholder'=>'File example(file_name)','class'=>'form-control mar-top-2','required'=>'required'];
        $n_cord5 = ['name'=>'no','placeholder'=>'No','class'=>'form-control mar-top-2','required'=>'required'];
        $n_cord6 = ['name'=>'id_buku','placeholder'=>'no_buku','class'=>'form-control mar-top-2','required'=>'required','value'=>$this->uri->segment(3),'readonly'=>'readonly'];
        echo form_input($n_cord1);
        echo form_input($n_cord2);
        echo form_input($n_cord3);
        echo form_input($n_cord4);
        echo form_input($n_cord5);
        echo form_input($n_cord6);
        ?>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding bg-dark">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <?php
            echo form_submit('enter','Simpan',['class'=>'btn btn-primary  form-control']);
          ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
          <?php
            echo form_reset('reset','Reset',['class'=>'btn btn-danger form-control']);
            echo form_close();
          ?>
        </div>
      </div>
    </div>
    <?php
  }
   ?>
   </div>





  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mar-2">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list bg-putih no-padding box-shadow_2">
      <p class="padding bg-dark text-center"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Menu Pembelajaran</p>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
          <?php
          foreach ($n_menu->result() as $n_row) {
            echo"<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-1'>";
            echo anchor($n_row->nobuku.'/menu/'.$n_row->kunci,'
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 menu padding">'.$n_row->no.' '.$n_row->menu.'</div>'.'').'
            '. anchor('Nc_front/book/'.$this->uri->segment(3).'/'.$n_row->id,
            '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bor-radius-50 warning padding text-center btn-warning w-h-40"><span class="glyphicon glyphicon-edit"></span></div>');
            echo"</div>";
          }
          ?>
      </div>
    </div>
  </div>
