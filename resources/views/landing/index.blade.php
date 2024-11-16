<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKOMTI - Politeknik Negeri Malang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            background-color: #0d47a1;
            clip-path:circle(50% 0, 85% 100%, 100% 85%, 0% 50%);
            padding: 2rem;
            text-align: center;
            color: white;
        }

        .logo-container {
            margin: 2rem auto;
            max-width: 200px;
        }

        .logo-container img {
            width: 100%;
            height: auto;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        
        .btn {
            background-color: #ffbe0b;
            color: #000000;
            font-family:Arial, Helvetica, sans-serif;
            text-decoration: none;
            width: 100px;
            height: 50px;
            margin-top: 150px;
            
        }

        footer {
            background-color: #1a237e;
            text-align: center;

            padding: 1rem;
            background-color: white;
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .title {
                font-size: 2rem;
            }

            .subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/SIKOMTI.png') }}" alt="SIKOMTI Logo">
        </div>
        <p class="subtitle">POLITEKNIK NEGERI MALANG</p>
        <div>
        <button class="btn"><a href="{{ url('/Mahasiswa') }}">Mahasiswa</a></button>
        <button class="btn"><a href="{{ url('/Admin') }}">Admin</a></button>
        <button class="btn"><a href="{{ url('/DosenTeknisi') }}">Dosen/Teknisi</a></button>
        </div>
    </div>
    <footer>
        ©2024 Sistem Kompetensi Jurusan
    </footer>
</body>

</html>