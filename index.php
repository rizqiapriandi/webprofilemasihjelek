<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/design.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/jpg" href="img/icon.png">
    <title>My Profile</title>
    <script>
        window.alert("Haii, Selamat Datang!!! Perkenalkan saya Rizqi, NIM saya 205411001");
    </script>
</head>
<body>
    <div class="container">

        <!--Header-->
        <div class="header">
            <div class="menuBox">
                <a href="#comment"><h4 style="text-align: center;">Komentar</h4></a>
            </div>
            <div class="menuBox">
                <a href="#hobby"><h4 style="text-align: center;">Hobi</h4></a>
            </div>
            <div class="menuBox">
                <a href="#skill"><h4 style="text-align: center;">Skill</h4></a>
            </div>
            <div class="menuBox">
                <a href="#education"><h4 style="text-align: center;">Pendidikan</h4></a>
            </div>
            <div class="menuBox">
                <a href="#hello"><h4 style="text-align: center;">Hallo</h4></a>
            </div>
        </div>
        <!--End Of Header-->

        <!--Hallo-->
        <div class="hallo" id="hello">
            <div class="descHallo">
                <h1 style="color: #ff9900;">Rizqi Apriandi</h1>
                <p style="color: #ff9900;">Saya Rizqi Apriandi usia 21 Tahun, bertempat tinggal di Jl. Kapuas, Kluwih, Balecatur, Gamping, Sleman. 
                    Saat ini saya menempuh pendidikan sebagai Mahasiswa Teknik Informatika di STMIK AKAKOM, 
                    serta bekerja sebagai IT Support Officer di PT. Aino Indonesia.</p>
            </div>
        </div>
        <!--End Of Hallo-->

        <!--Pendidikan-->
        <div class="pendidikan" id="education">
            <h1 style="color: #ff9900; text-align: center;">Riwayat Pendidikan</h1>
            <table class="data-table">
				    <thead>
					    <tr>
						    <th>NO.</th>
						    <th>NAMA SEKOLAH</th>
						    <th>PERIODE</th>
						    <th>GPA/IPK/NEM</th>
					    </tr>
				    </thead>
			    <tbody>
			    <?php
                    include 'php/getEdu.php';
				    include 'php/tbEdu.php';
				?>
			    </tbody>
			</table>
        </div>
        <!--End Of Pendidikan-->
        
        <!--Skill-->
        <div class="skill" id="skill">
        <h1 style="color: #ff9900; text-align: center;">Skill Yang Saya Miliki</h1>
            <table class="data-table">
				    <thead>
					    <tr>
						    <th>NO.</th>
						    <th>SKILL</th>
						    <th>SCORE</th>
					    </tr>
				    </thead>
			    <tbody>
			    <?php
                    include 'php/getSkill.php';
				    include 'php/tbSkill.php';
				?>
			    </tbody>
			</table>
        </div>
        <!--End Of Skill-->
        
        <!--Hobi-->
        <div class="hobi" id="hobby">
            <h1 style="color: #ff9900; text-align: center;">Hobi Saya</h1>
            <p style="color: #ff9900; text-align: center;">Traveling merupakan hobi yang saya gemari, banyak manfaat yang didapat
                dari traveling ini.<br> Selain untuk melepas penat dari dunia kerja maupun kuliah, traveling juga menjadi hal yang dapat
                merecharge semangat kita kembali.</p>
            <div class="hobiLeftUp"></div>
            <div class="hobiRightUp"></div>
            <div class="hobiLeftDown"></div>
            <div class="hobiRightDown"></div>
        </div>
        <!--End Of Hobi-->

        <!--Komen-->
        <div class="komen" id="comment">
            <h1 style="color: #ff9900; text-align: center;">Komentar</h1>
            <div class="main">
			    <form method="post" action="php/postComment.php" id="form">
				    <br>
				    <label>Nama :</label>
                    <br>
				    <input type="text" name="name" id="name" />
                    <br>
                    <br>
                    <label>Komentar :</label>
                    <br>
				    <textarea type="textarea" name="valComment" id="valComment">Komentar</textarea>
                    <br>
				    <input type="submit" name="submit" id="submit" value="Submit">
			    </form>
            </div>
            <div class="main">
                <h2 style="color: #ff9900;">Apa Kata Mereka??</h2>
                <br>
                <?php
                    include 'php/getComment.php';
                    include 'php/tbComment.php';
                ?>
            </div>
        </div>
        <!--End Of Komen-->
        
    </div>
</body>		
</html>