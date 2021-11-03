
<html>

<head>

    <style>

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #EEEEEE;
            text-align: left;
            padding: 8px;
            color: #EEEEEE;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #CD113B;
        }

    </style>

</head>

<body style="background-color: #301B3F;">
<br>
<br>
    <div style="background-color: #FF7600;">
        <br>
        <br>
        <h1 style="color: #EEEEEE;
                   text-align: center;"><b>꧁🎃P̴̫̼͚̕͝E̵͖̝͍̾͒R̸̘̼̼̾̒̓U̴̡͕͌̓̓S̸̠̙̠͑͝H̸͔̟͚͆̾͠Ä̸̢̞̟́͝͠A̸̼̞͔̽̿̐N̴̢̞̝̽̓͘ X̵̙͔͍͑͒͠🎃꧂</b></h1>
        <br>
        <table>
                <tr style="background-color: #52006A;">
                    <th style="color: #EEEEEE;
                            text-align: center;">No</th>
                    <th style="color: #EEEEEE;
                            text-align: center;">Nama👻</th>
                    <th style="color: #EEEEEE;
                            text-align: center;">Tempat Tanggal Lahir👻</th>
                    <th style="color: #EEEEEE;
                            text-align: center;">Jenis Kelamin👻</th>
                    <th style="color: #EEEEEE;
                            text-align: center;">Level Karyawan👻</th>
                    <th style="color: #EEEEEE;
                            text-align: center;">Status👻</th>
                    <th style="color: #EEEEEE;
                            text-align: center;">Gaji Karyawan👻</th>

                </tr>


    <?php

        class pegawai
        {
            private $nama;
            private $lahir;
            private $kelamin;

            function __construct($nama, $lahir, $kelamin)
            {
                $this->nama = $nama;
                $this->lahir = $lahir;
                $this->kelamin = $kelamin;
            }
            function get_nama()
            {
                return $this->nama;
            }
            function get_lahir()
            {
                return $this->lahir;
            }
            function get_kelamin()
            {
                return $this->kelamin;
            }
        }


        class ft extends pegawai
        {
            private $level;
            private $stat;
            private $gaji;

            public function set_level($level, $status)
            {
                if (($level == 'Junior')&&($status == 'Fulltime')){
                    $this->gaji = 2000000;
                }
                if (($level == 'Junior')&&($status == 'Parttime')){
                    $this->gaji = 2000000 / 2;}

                if (($level == 'Amateur')&&($status == 'Fulltime')){
                    $this->gaji = 3500000;
                }
                if (($level == 'Amateur')&&($status == 'Parttime')){
                    $this->gaji = 3500000/ 2;
                }
                if (($level == 'Senior')&&($status == 'Fulltime')){
                    $this->gaji = 5000000;
                }
                if (($level == 'Senior')&&($status == 'Parttime')){
                    $this->gaji = 5000000/ 2;
                }
                
                $this->level = $level;
            }

            public function get_level()
            {
                return $this->level;
            }

            public function set_stat($status)
            {
                $this->status = $status;
            }

            public function get_status()
            {
                return $this->status;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }

        $teguh = new ft('teguh', '2000-11-24', 'Laki-laki');
        $teguh->set_level('Senior', 'Parttime');
        $teguh->set_stat('Parttime');

        $kokoh = new ft('kokoh', '2000-12-06', 'Perempuan');
        $kokoh->set_level('Senior', 'Fulltime');
        $kokoh->set_stat('Fulltime');

        $kuat = new ft('kuat', '2000-12-07', 'Laki-laki');
        $kuat->set_level('Junior', 'Parttime');
        $kuat->set_stat('Parttime');

        $keras = new ft('keras', '2000-12-09', 'Perempuan');
        $keras->set_level('Junior', 'Fulltime');
        $keras->set_stat('Fulltime');

        $antibanting = new ft('antibanting', '2000-11-24', 'Laki-laki');
        $antibanting->set_level('Amateur', 'Parttime');
        $antibanting->set_stat('Parttime');

        $berotot = new ft('berotot', '2000-11-24', 'Perempuan');
        $berotot->set_level('Amateur', 'Fulltime');
        $berotot->set_stat('Fulltime');



        $karyawan = array();
        array_push($karyawan ,$teguh, $kokoh, $kuat, $keras, $antibanting, $berotot);

        foreach ($karyawan as $index => $value) {
    ?>
            <tr>
                <td> <?= $index + 1; ?> </td>
                <td> <?= $value->get_nama(); ?></td>
                <td><?= $value->get_lahir(); ?></td>
                <td><?= $value->get_kelamin(); ?></td>
                <td><?= $value->get_level(); ?></td>
                <td><?= $value->get_status(); ?></td>
                <td><?= $value->get_gaji(); ?></td>
            </tr>
        <?php
        }
?>

        </table>
    <br>
        <h1 style="color: #EEEEEE;
                   text-align: center;">꧁🎃H̵̼͎̘̀̐͠Ä̵̟́̒́͜L̴̝͇̙͊͑̓Ĺ̸͎͕̦̓͌O̴̻̞̒̓͑͜W̴͕̼͇̿͊̚E̴͉̟͊͒̿E̵͕̝͌̀̕͜N̴̫̻̼͐̒͠🎃꧂</h1>

        <h3 style="color: #EEEEEE;
                   text-align: center;">by ℱ𝒶𝓇𝒽𝒶𝓃 𝒩𝒶𝓏𝒶𝓇𝒶 𝒰𝒹𝓂𝒶</h3>

    <br>
    <br>
    </div>
    <br>
    <br>

</body>

<footer>
    <div>

    </div>
</footer>




</html>