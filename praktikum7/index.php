<?php
    //Mendefinisikan class
    class Mobil {
        public $nama,
                    $merk,
                    $warna;

        // fungsi di dalam class namanya method
        public function tambahkecepatan( ){

        }

        public function kurangikecepatan( ){

        }
    }

    //Properti class
    class produk {
            public $nama = 'ini nama',
                        $jenis = ' ini jenis',
                        $harga = 9999;
                        const PHI = 3.14;

            //Method
            public function __construct($nama, $jenis, $harga){
                $this->nama = $nama;
                $this->jenis = $jenis;
                $this->harga = $harga;
            }
            //Inisiasi properti atau timpa properti diatas
            //Memanggil kembali harga di atas
            public function Harga( ){
                // return $this->harga;

                // Memakai SELF karna di atas memakai CONST PHI
                return self::PHI;
            }
        }
         
        //Jika ingin menambah objek maka tambah juga propertinya
        $produk2 = new produk( "BAJU HITAM POLOS", "KAOS", 15000);
        echo "Produk 2 = $produk2->nama, $produk2->jenis";
        echo "<br>";
        echo "Harga =  " .  $produk2->Harga( );
        echo "<br>";

        $produk3 = new produk( "GALARIAN KETAR KETIR", "JAKET", 150000);
        echo "<br>";
        echo "Produk 3 = $produk3->nama, $produk3->jenis";
        echo "<br>";
        echo "Harga =  " .  $produk3->Harga( );
?>