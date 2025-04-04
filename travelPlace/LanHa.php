<?php
    $level = '../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Lan Ha Bay</title>
</head>

<body>
    <div id="preloader"></div>
    <?php require_once '../elements/header.php'; ?>
    <div class="peopleContact">
        <div class="peopleInformationWrapper">
            <div class="titleIntroductionWrapper">
                <h2 class="titleFoodMain">
                    Lan Ha Bay
                </h2>
            </div>
            <div id="DoSonBeachWrapper">
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Location:
                    </h3>
                    <p class="locationDetailMain">Ben Beo Port, Cat Ba Island, Cat Hai District, Hai Phong City, Vietnam</p>
                </div>
                <div id="googleMapWrapperDoSon">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59702.2630465683!2d107.00115624176668!3d20.734922595223768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a45b5d29a9b11%3A0x4dd4f928dad786a9!2sLan%20Ha%20Bay!5e0!3m2!1sen!2s!4v1736172204445!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="googleMapMainDoSon"></iframe>
                </div>
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Time to travel:
                    </h3>
                    <p class="locationDetailMain">April to June, September to November</p>
                </div>
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        *Note:
                    </h3>
                    <p class="locationDetailMain">Try to avoid July and August because the danger of the rainy and stormy season in northern Vietnam and June for peole who do not like crowd</p>
                </div>
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Cuisines:
                    </h3>
                </div>
                <div class="allInfoTravelWrapper">
                    <div class="imageAndContentCuisineWrapper">
                        <div class="imgCNSwrapper">
                            <img src="<?php echo $level?>image/LanHaGeoduck.jpg" class="imgCNSmain">
                        </div>
                        <div class="foodDetailWrapper">
                            <div class="infoDoSonWrapper">
                                <h3 class="infoDoSonMain">Lan Ha geoduck</h3>
                            </div>
                            <p class="foodDetailMain cuisine">
                                Geoduck, also known as elephant snail, is famous as one of the rare seafood, highly nutritious and has a special flavor. Geoduck can appear in many regions, including Lan Ha Bay, where the sea is suitable for the growth and development of this species.
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="allInfoTravelWrapper">
                    <div class="imageAndContentCuisineWrapper">
                        <div class="imgCNSwrapper">
                            <img src="../image/gheXanhLanHa.jpg" class="imgCNSmain">
                        </div>
                        <div class="foodDetailWrapper">
                            <div class="infoDoSonWrapper">
                                <h3 class="infoDoSonMain">Cat Ba blue crab</h3>
                            </div>
                            <p class="foodDetailMain cuisine">
                                There are many types of crabs such as red crab, three-spot crab, green crab… but the most delicious, meaty and nutritious crab is still the green crab. Crabs are processed into many delicious dishes, from family meals to “star” hotels. Once you eat crab, it is hard to forget.
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="allInfoTravelWrapper">
                    <div class="imageAndContentCuisineWrapper">
                        <div class="imgCNSwrapper">
                            <img src="../image/SamTrungNuongLanHa.jpg" class="imgCNSmain">
                        </div>
                        <div class="foodDetailWrapper">
                            <div class="infoDoSonWrapper">
                                <h3 class="infoDoSonMain">Lan Ha grilled sea cucumber eggs</h3>
                            </div>
                            <p class="foodDetailMain cuisine">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed explicabo itaque ipsam. Quos reprehenderit distinctio maxime quia! Nulla, minima?
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="allInfoTravelWrapper">
                    <div class="imageAndContentCuisineWrapper">
                        <div class="imgCNSwrapper">
                            <img src="<?php echo $level?>image/LanHaSaltedMantisShrimp.jpg" class="imgCNSmain">
                        </div>
                        <div class="foodDetailWrapper">
                            <div class="infoDoSonWrapper">
                                <h3 class="infoDoSonMain">Lan Ha Salted Mantis Shrimp</h3>
                            </div>
                            <p class="foodDetailMain cuisine">
                                When talking about Lan Ha Bay specialties, we cannot help but mention the salt-roasted mantis shrimp. The large, firm and plump mantis shrimps are extremely delicious and crispy when roasted with salt. In addition, steamed mantis shrimps with beer and lemongrass are also very popular with simple preparation methods but still retain the fresh and sweet taste of the mantis shrimps.
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="allInfoTravelWrapper">
                    <div class="imageAndContentCuisineWrapper">
                        <div class="imgCNSwrapper">
                            <img src="<?php echo $level?>image/LanHaSaltedFriedCrab.jpg" class="imgCNSmain">
                        </div>
                        <div class="foodDetailWrapper">
                            <div class="infoDoSonWrapper">
                                <h3 class="infoDoSonMain">Lan Ha salted fried crab</h3>
                            </div>
                            <p class="foodDetailMain cuisine">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed explicabo itaque ipsam. Quos reprehenderit distinctio maxime quia! Nulla, minima?
                            </p>
                        </div> 
                    </div>
                </div>
                <!-- leave the original name below each cuisine -->
            </div>
        </div>
    </div>
    <?php require_once '../elements/script.php';?>
</body>

</html>