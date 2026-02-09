<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../../Css/navbar.css">
    <link rel="stylesheet" href="../../Css/footer.css">

    <style>
        .about-section {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
            text-align: center;
        }

        .about-section h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .about-section p {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 20px;
        }

        .about-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .about-card {
            padding: 25px;
            border-radius: 10px;
            background: #f8f8f8;
        }

        .about-card i {
            font-size: 30px;
            color: #ff7a00;
            margin-bottom: 10px;
        }

        .about-card h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .about-card p {
            font-size: 14px;
        }
    </style>


</head>
<body>
    <?php include '../navbar.php'; ?>

   <section class="about-section">
    <h1>About Us</h1>
    <p>
        We are dedicated to providing high-quality kids’ clothing and toys that are safe,
        comfortable, and fun. Our goal is to make shopping easy and enjoyable for parents
        while bringing smiles to kids.
    </p>
    <p>
        Every product is carefully selected with love, keeping both quality and affordability
        in mind.
    </p>

    <div class="about-cards">
        <div class="about-card">
            <i class="bi bi-heart-fill"></i>
            <h3>Our Mission</h3>
            <p>
                To offer safe, stylish, and affordable products that kids love and parents trust.
            </p>
        </div>

        <div class="about-card">
            <i class="bi bi-stars"></i>
            <h3>Quality Promise</h3>
            <p>
                We focus on durable materials and kid-friendly designs for everyday comfort.
            </p>
        </div>

        <div class="about-card">
            <i class="bi bi-truck"></i>
            <h3>Fast Delivery</h3>
            <p>
                Reliable island-wide delivery to make your shopping stress-free.
            </p>
        </div>
    </div>
</section>

    <?php include '../footer.php'; ?>

</body>
</html>
