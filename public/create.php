<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body style="background-color: white;">
<div class="container">
    <?php
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    class kontak{
        static function insert(){
            require_once '../database.php';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                $user_id=input($_POST["user_id"]);
                $id=input($_POST["user_id"]);
                $owner=input($_POST["owner"]);
                $no_hp=input($_POST["no_hp"]);

                
                // (id, NO_ID, Owner, NomorHP, Tanggal, Timestamp) VALUES
                $sql="insert into kontak (id, No_ID, Owner, NomorHP) values
                ('$id', '$user_id','$owner','$no_hp')";

                $hasil=mysqli_query($conn,$sql);
        

                if ($hasil) {
                    header("Location:tabel.php");
                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        
                }
        
            }
            
        }
    }

    kontak::insert()
    ?>
    <div class="mt-5 bg-[#FAAB36] px-3 py-3 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8">
        <h2 class="font-medium text-4xl">Input Data</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="form-group mt-3">
                <label>User_id :</label>
                <input type="text" name="user_id" class="w-full border-4 rounded-lg" placeholder="User Id" required />

            </div>
            <div class="form-group">
                <label>Owner :</label>
                <input type="text" name="owner" class="w-full border-4 rounded-lg" placeholder="Owner name" required/>
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="no_hp" class="w-full border-4 rounded-lg" placeholder="Your No HP" required/>
            </div>   

            <button type="submit" name="submit" class="w-full h-7 px-3 py-2 bg-slate-600 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8 font-bold">Submit</button>
        </form>
    </div>
</div>
</body>
</html>