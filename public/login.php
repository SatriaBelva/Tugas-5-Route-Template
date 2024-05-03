<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="flex justify-center items-center h-screen" style="background: url('../resx/background.jpg');">
        <div class="flex flex-col justify-center items-center w-[557px] h-[525px]">
            <h1 class="font-poppins m-0 text-white text-4xl mb-2">
                Selamat Datang di PWEB
            </h1>
            <h6 class="font-poppins m-0 text-white mb-5 text-base">
                Silahkan Masuk untuk Melanjutkan
            </h6>

            <div class="flex flex-col justify-start text-white">
                <form action="" class="flex flex-col justify-start text-white">
                    <label for="email" class="flex flex-col font-poppins mt-[10px] mb-2 ml-3">Email
                    <input class="w-[350px] h-10 bg-slate-600 border-none rounded-lg placeholder:font-poppins placeholder:text-xs placeholder:pl-2" type="email" placeholder="Contoh : satriabelvanararya@gmail.com" required="">
                    </label>
                    <!-- <label for="password" class="flex flex-col font-poppins mt-[10px] mb-2 ml-3">Password
                    <input class="w-[350px] h-10 bg-slate-600 border-none rounded-lg placeholder:font-poppins placeholder:text-sm placeholder:pl-2" type="password" placeholder="********" required="">
                    </label> -->
                </form>
                
            </div>
            <a class="border-none bg-transparent font-poppins text-white group animate-spin" href="tabel.php">
                <button class="mt-8 w-[350px] h-10 rounded-lg px-px py-3 group-hover:bg-blue-950 bg-blue-700 flex justify-center items-center transition cursor-pointer">Masuk</button>
            </a>
<!--  -->
            <div class="mt-5 font-poppins text-white text-base">Tidak Punya Akun?
                <a class="text-blue-600 transition hover:text-blue-900" href="register.html"> Daftar Sekarang!</a>
            </div>
        </div>
    </body>
</html>