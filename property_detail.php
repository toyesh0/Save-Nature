<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$property_id = $_GET["property_id"];

$sql_1 = "SELECT *, p.id AS property_id, p.name AS property_name, c.name AS city_name 
            FROM properties p
            INNER JOIN cities c ON p.city_id = c.id 
            WHERE p.id = $property_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$property = mysqli_fetch_assoc($result_1);
if (!$property) {
    echo "Something went wrong!";
    return;
}


$sql_2 = "SELECT * FROM testimonials WHERE property_id = $property_id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    echo "Something went wrong!";
    return;
}
$testimonials = mysqli_fetch_all($result_2, MYSQLI_ASSOC);


// $sql_3 = "SELECT a.* 
//             FROM amenities a
//             INNER JOIN properties_amenities pa ON a.id = pa.amenity_id
//             WHERE pa.property_id = $property_id";
// $result_3 = mysqli_query($conn, $sql_3);
// if (!$result_3) {
//     echo "Something went wrong!";
//     return;
// }
// $amenities = mysqli_fetch_all($result_3, MYSQLI_ASSOC);


$sql_3 = "SELECT * FROM interested_users_properties WHERE property_id = $property_id";
$result_3 = mysqli_query($conn, $sql_3);
if (!$result_3) {
    echo "Something went wrong!";
    return;
}
$interested_users = mysqli_fetch_all($result_3, MYSQLI_ASSOC);
$interested_users_count = mysqli_num_rows($result_3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $property['property_name']; ?> | Save tree</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/property_detail.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="property_list.php?city=<?= $property['city_name']; ?>"><?= $property['city_name']; ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $property['property_name']; ?>
            </li>
        </ol>
    </nav>

    <div id="property-images" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $property_images = glob("img/properties/" . $property['property_id'] . "/*");
            foreach ($property_images as $index => $property_image) {
            ?>
                <li data-target="#property-images" data-slide-to="<?= $index ?>" class="<?= $index == 0 ? "active" : ""; ?>"></li>
            <?php
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            foreach ($property_images as $index => $property_image) {
            ?>
                <div class="carousel-item <?= $index == 0 ? "active" : ""; ?>">
                    <img class="d-block w-100" src="<?= $property_image ?>" alt="slide">
                </div>
            <?php
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#property-images" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#property-images" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- rating part start   -->


    <div class="property-summary page-container">
<div class="row no-gutters justify-content-between">
    <div class="star-container">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
    </div>




    <!-- rating part end   -->



            <div class="interested-container">
                <?php
                $is_interested = false;
                foreach ($interested_users as $interested_user) {
                    if ($interested_user['user_id'] == $user_id) {
                        $is_interested = true;
                    }
                }

                if ($is_interested) {
                ?>
                    <i class="is-interested-image fas fa-heart"></i>
                <?php
                } else {
                ?>
                    <i class="is-interested-image far fa-heart"></i>
                <?php
                }
                ?>
                <div class="interested-text">
                    <span class="interested-user-count"><?= $interested_users_count ?></span> interested
                </div>
            </div>
        </div>

        <div class="detail-container">
            <div class="property-name"><?= $property['property_name'] ?></div>
            <div class="property-address"><?= $property['address'] ?></div>
            <div class="property-gender">
                <?php
                if ($property['gender'] == "male") {
                ?>
                    <img src="img/male.png">
                <?php
                } elseif ($property['gender'] == "female") {
                ?>
                    <img src="img/female.png">
                <?php
                } else {
                ?>
                    <img src="img/unisex.png">
                <?php
                }
                ?>
            </div>

        </div>

     <!-- rent area start -->


     <div class="row no-gutters">
        <div class="button-container col-6">
            <a href="#" class="btn btn-primary">Join</a>
        </div>
    </div>


    <!-- rent part end  -->







    <!-- amenities areaaa start -->

   


  
        <!-- amenties area end  -->




    <div class="property-about page-container">
        <h1>About the Property</h1>
        <p><?= $property['description'] ?></p>
    </div>


    <!-- rating areaa property start 2nd last part -->



    <!-- rating property area part end  -->

    <div class="property-testimonials page-container">
        <h1>What people say</h1>
        <?php
        foreach ($testimonials as $testimonial) {
        ?>
            <div class="testimonial-block">
                <div class="testimonial-image-container">
                    <img class="testimonial-img" src="img/man.png">
                </div>
                <div class="testimonial-text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p><?= $testimonial['content'] ?></p>
                </div>
                <div class="testimonial-name">- <?= $testimonial['user_name'] ?></div>
            </div>
        <?php
        
        }

        ?>
    </div>
</div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/property_detail.js"></script>
</body>

</html>
