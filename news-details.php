<?php
require_once "header.php";
$id = $_GET['id'];
$select_query = "SELECT * FROM news WHERE id=$id";
$single_news = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));

?>

<section id="about" class="section">
    <div class="container">
        <h2 class="text-center" data-aos="fade-up"><?= $single_news['news_headline'] ?></h2>
        <section class="mt-4">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <img src="img/news/<?= $single_news['news_photo_name'] ?>" alt="not found">
                    

                </div>
                <div class="col-md-12 " data-aos="fade-up">
                
                    <p><?= $single_news['news_details'] ?> </p>

                </div>


            </div>
        </section>
    </div>
</section>


<?php
require_once "footer.php"
?>