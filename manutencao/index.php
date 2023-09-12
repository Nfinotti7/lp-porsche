<!DOCTYPE html>
<html>
<head>
    <title>Esportivos de Luxo</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        .image-container {
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .overlay h1 {
            color: white;
            font-size: 3rem;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="/info-site.jpg" alt="Site à Venda">
        <div class="overlay">
            <h1>Em breve</h1>
            <h1>O maior site de vendas de Carros Esportivos de Luxo do Brasil!</h1>
        </div>
    </div>
</body>
</html>