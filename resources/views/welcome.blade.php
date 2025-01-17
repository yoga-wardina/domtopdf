<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: "Times New Roman", Times, serif;
        margin: 0px;
        width: 100%;
        height: 100%;
        padding: 0px;
    }

    .container {
        padding: 20px;
        width: 210mm;
        height: 297mm;
        border: 1px dashed black
    }

    .grid {
        display: grid;
        grid-template-columns: 1fr 3fr;
        grid-gap: 5px;
        margin-top: 20px;
    }

    .mb-5 {
        margin-bottom: 20px;
    }

    .mb-10 {
        margin-bottom: 42px;
    }

    .text-left {
        text-align: left;
    }

    .text-lg {
        font-size: 18px;
    }

    .text-normal {
        font-size: 14px;
        line-height: 24px;
    }

    .block {
        display: block;
    }

    .flex {
        display: flex;
    }

    .justify-end {
        justify-content: flex-end;
    }

    .justify-center {
        justify-content: center;
    }

    .flex-col {
        flex-direction: column;
    }

    .w-full {
        width: 100%;
    }

    .items-center {
        align-items: center;
    }

    .signarea {
        width: 300px;
        height: fit-content;
        border: 1px solid black;
        gap: 1px
    }

    .signarea>hr {
        border: 0px;
        border-bottom: 2px dotted black;
    }

    .signarea>p {
        margin: 0px;
    }

    .p10 {
        padding: 20px;
    }

    hr {
        border-bottom: 2px solid black;
    }

    .justify-between {
        justify-content: space-between;
    }

    .w-text {
        width: 300px;
    }

    .w-right {
        width: 150px;
    }

</style>

<body>
    <div class="container text-normal">
        <div class="mb-5 w-full flex justify-center">
            <img width="200px" src="{{ asset('https://ebelanja.id/images/logo.png') }}"
                alt="">
        </div>
        <hr class="mb-10">
        Selamat bergabung di aplikasi ebelanja.
        <p class="flex justify-between w-text"><b>ID akun</b><span class="text-left w-right block">: 53099205</span></p>
        <p class="flex justify-between w-text"><b>Nama</b><span class="text-left w-right block">: powerbank</span></p>
        <p class="flex justify-between w-text"><b>No. Akun</b><span class="text-left w-right block">:
                085155169968</span></p>
        <p class="flex justify-between w-text"><b>No. owner</b><span class="text-left w-right block">:
                081344544799</span></p>
        <p class="flex justify-between w-text"><b>Nama Sels</b> <span class="text-left w-right block">: Adri sj</span>
        </p>

        <span class="mb-5 block">Limit saldo akan dirubah dari : <b>Rp 27.086.600</b> Jadi : <b>Rp 27.086.600</b></span>
        <span class="mb-5 block">
            Hal Hal yang perlu di perhatikan <br>
            1. Komplen masalah transaksi bisa via aplikasi ebelanja <br>
            2. Komplen masalah finansial deposit bisa ke no saya ini <b>+628562900900</b> <br>
            3. Pengaduan keluhan sels kami bisa ke no saya ini <b>+628562900900</b> <br>
            4. Pastikan jika anda melakukan pembayaran, pastikan saldo anda jg masuk, bisa di cek di histori saldo. <br>
            <br>
            Terimakasih atas perhatiannya
        </span>
        <div class="flex w-full justify-end">
            <div class="signarea flex items-center flex-col">
                <p>{{ date('F j, Y') }}</p>
                <img src="{{ $img }}" width="200px" alt="">
                <hr width="80%">
                <p> powerbank </p>
            </div>
        </div>
    </div>

</body>

</html>
