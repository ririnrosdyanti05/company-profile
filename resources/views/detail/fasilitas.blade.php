<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Gallery 3D</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style untuk container gallery */
        .gallery-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        /* Setiap item gallery */
        .gallery-item {
            position: relative;
            width: 300px;
            height: 300px;
            perspective: 1200px; /* Menambahkan perspektif 3D */
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.5s ease-in-out;
        }

        /* Gambar motor */
        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        /* Efek 3D saat hover */
        .gallery-item:hover .gallery-image {
            transform: rotateY(15deg) scale(1.1); /* Rotasi dan pembesaran */
        }

        /* Overlay untuk menampilkan detail informasi */
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .gallery-item:hover .image-overlay {
            opacity: 1;
        }

        /* Gaya teks dalam overlay */
        .image-overlay h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .image-overlay p {
            font-size: 16px;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="motor1.jpg" alt="Motor 1" class="gallery-image">
            <div class="image-overlay">
                <h3>Motor 1</h3>
                <p>Deskripsi singkat motor 1 dengan informasi penting.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="motor2.jpg" alt="Motor 2" class="gallery-image">
            <div class="image-overlay">
                <h3>Motor 2</h3>
                <p>Deskripsi singkat motor 2 dengan informasi teknis.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="motor3.jpg" alt="Motor 3" class="gallery-image">
            <div class="image-overlay">
                <h3>Motor 3</h3>
                <p>Deskripsi singkat motor 3 dengan detail tambahan.</p>
            </div>
        </div>
    </div>

    <script>
        // Efek tambahan untuk interaktivitas, misalnya jika ingin menambahkan klik atau animasi lebih lanjut
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                alert('Tampilkan informasi lebih lanjut atau halaman detail!');
            });
        });
    </script>
</body>
</html>
