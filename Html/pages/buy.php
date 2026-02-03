<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Css/navbar.css">
    <link rel="stylesheet" href="../../Css/footer.css">
    <link rel="stylesheet" href="../../Css/vehicle.css">  
</head>
<body>
    <?php include '../navbar.php'; ?>

   

    <section class="section-1">
        <div>
            <button class="car">Car</button>
            <button class="jeep">Jeep</button>
            <button class="truck">Truck</button>
            <button class="tractor">Tractor</button>
            <button class="van">Van</button>
            <button class="motorcycle">Motorcycle</button>
            <button class="three-wheel">Three-Wheel</button>
            <button class="bus">Bus</button>

        </div>
    </section>

     <section class="section-2">
            <div class="category-jeep">               
                <div class="ford vehicle-card">
                    <img src="../../assets/images/Jeep/ford-1.webp" alt="ford">
                    <h2>Ford Raptor Ranger</h2>
                    <div class="vehicle-details">
                        <div class="detail-item">
                            <i class="bi bi-calendar"></i>
                            <span>2020</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-speedometer2"></i>
                            <span>45,000 km</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-fuel-pump"></i>
                            <span>Petrol</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-gear"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Colombo</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-car-front"></i>
                            <span>Car</span>
                        </div>
                    </div>
                    <p class="vehicle-price">Rs. 6,500,000</p>
                </div>
                <div class="jeep vehicle-card">
                    <img src="../../assets/images/Jeep/jeep-1.webp" alt="jeep">
                    <h2>2010 Jeep Commander</h2>
                    <div class="vehicle-details">
                        <div class="detail-item">
                            <i class="bi bi-calendar"></i>
                            <span>2010</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-speedometer2"></i>
                            <span>120,000 km</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-fuel-pump"></i>
                            <span>Diesel</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-gear"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Kandy</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-car-front"></i>
                            <span>Jeep</span>
                        </div>
                    </div>
                    <p class="vehicle-price">Rs. 4,200,000</p>
                </div>
                <div class="land-cruiser vehicle-card">
                    <img src="../../assets/images/Jeep/land-2.webp" alt="land cruiser">
                    <h2>Land Cruiser V8</h2>
                    <div class="vehicle-details">
                        <div class="detail-item">
                            <i class="bi bi-calendar"></i>
                            <span>2018</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-speedometer2"></i>
                            <span>80,000 km</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-fuel-pump"></i>
                            <span>Diesel</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-gear"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Galle</span>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-car-front"></i>
                            <span>SUV</span>
                        </div>
                    </div>
                    <p class="vehicle-price">Rs. 12,800,000</p>
                </div>
            </div>

    </section>

    <?php include '../footer.php'; ?>

    <script src="../../js/messages.js"></script>

</body>
</html>
