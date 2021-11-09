
  <?php if(!defined('BASEPATH')) exit('no file allowed'); ?>
  <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih box-shadow_2">
      <pre class="prettyprint linenums f-20 microsoft">
          // ---------------- (1) -----------------
        - $this->db->get()
          // Fungsi : Untuk menampilkan semua isi tabel mahasiswa.
          // Contoh :
        - $this->db->get('mahasiswa');
          // Sama dengan : select * from mahasiswa.

          // ---------------- (2) -----------------
          // Parameter pertama dan kedua memuat limit dan offset, yaitu :
        - $query=$this->db->get('mytable',1,1)
          // Menghasilkan : select * from mytable limit 1,1

          // ---------------- (3) -----------------
        - $this->db->get_where();
          // Fungsi : Untuk menampilkan semua isi tabel dengan di tambah kondisi where
          // Contoh :
        - $this->db-> get_where ('mytable',array('id'=>$id),$limit,$offset);
          // Sama dengan : “select * from mytable where id='$id' limit 20, 10”;

          // ---------------- (4) -----------------
        - $this->db->select();
          // Fungsi : Untuk memilih tabel yang akan di proses dengan perintah select.
          // Contoh :
        - $this->db->select('nama,nilai,alamat');
        - $query=$this->db->get('mahasiswa');
          // Sama dengan : select nama,nilai,alamat from mahasiswa;

          // ---------------- (5) -----------------
        - $this->db->from();
          // Fungsi : Untuk memilih tabel.
          // Contoh :
        - $this->db->select('nama,nilai,alamat');
        - $this->db->from('mahasiswa');
        - $query=$this->db->get();
          // Sama dengan : select nama,nilai,alamat from mahasiswa;

          // ---------------- (6) -----------------
        - $this->db->join();
          // Fungsi : Untuk melakukan perintah join terhadap 2 atau lebih tabel.
          // Contoh :
        - $this->db->select(“*”);
        - $this->db->from(“nilai”);
        - $this->db->join(“mahasiswa”,”mahasiswa.nim=nilai.nim”);
        - $query=$this->db->get();
          // Sama dengan : “select * from nilai join mahasiswa on mahasiswa.nim=nilai.nim”;

          // ---------------- (7) -----------------
        - $this->db->where();
          // Fungsi : Untuk menerapkan kondisi where suatu syntax query.
          // Contoh :
        - $this->db->where('nama','safira');
        - $query= $this->db->get('mahasiswa');
          // sama dengan : “select * from mahasiswa where nama='safira'”;

          // ---------------- (8) -----------------
        - $this->db->like();
          // Fungsi : Menyatakan syntax like ke dalam query.
          // Contoh :
        - $this->db->like('nama','sofwan');
        - $query=$this->db->get(“mahasiswa”);
          // sama dengan : “select * from mahasiwa where nama like '%sofwan%”;

          // ---------------- (9) -----------------
        - $this->db->group_by()
          // Fungsi : Menambahkan perintah group by pada query.
          // Contoh :
        - $this->db->group_by(“kota”);
        - $query=$this->db->get(“mahasiswa”);
          // Sama dengan : select * from mahasiswa group by kota”;
      </pre>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih box-shadow_2 microsoft f-17 ">
        <p class="padding bg-dark text-center">Hasil</p>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        (1) ------------------------------<br>
        <?php
        echo $n_data->nama."<br>";
        echo $n_data->alamat."<br>";
        echo $n_data->telp."<br>";
        ?>
        (2) ------------------------------<br>
        <?php
        foreach($n_data_2 as $n_row){
          echo $n_row->nama."<br>";
          echo $n_row->alamat."<br>";
          echo $n_row->telp."<br>";
        }
         ?>
         (3) ------------------------------<br>
         <?php
         foreach($n_data_3 as $n_row){
           echo $n_row->nama."<br>";
           echo $n_row->alamat."<br>";
           echo $n_row->telp."<br>";
         }
          ?>
          (4) ------------------------------<br>
          <?php
          foreach($n_data_4 as $n_row){
            echo $n_row->nama."<br>";
            echo $n_row->alamat."<br>";
            echo $n_row->telp."<br><br>";
          }
           ?>
           (5) ------------------------------<br>
           <?php
           foreach($n_data_5 as $n_row){
             echo $n_row->nama."<br>";
             echo $n_row->alamat."<br>";
             echo $n_row->telp."<br><br>";
           }
            ?>
            (6) ------------------------------<br>
            <?php
            foreach($n_data_6 as $n_row){
              echo $n_row->nama."<br>";
              echo $n_row->alamat."<br>";
              echo $n_row->telp."<br>";
              echo $n_row->nilai."<br><br>";
            }
             ?>
             (7) ------------------------------<br>
             <?php
             foreach($n_data_7 as $n_row){
               echo $n_row->nama."<br>";
               echo $n_row->alamat."<br>";
               echo $n_row->telp."<br><br>";
             }
              ?>
            (8) ------------------------------<br>
            <?php
              foreach($n_data_8 as $n_row){
                echo $n_row->nama."<br>";
                echo $n_row->alamat."<br>";
                echo $n_row->telp."<br><br>";
              }
            ?>
            (9) ------------------------------<br>
            <?php
              foreach($n_data_9 as $n_row){
                echo $n_row->nama."<br>";
                echo $n_row->alamat."<br>";
                echo $n_row->telp."<br><br>";
              }
            ?>
          </div>
      </div>
    </div>
  </div>
