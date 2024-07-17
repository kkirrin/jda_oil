<?php 
    /*
    Template Name: новости
    */
?>

<?php get_header(); ?>

    <main>
        <h1 class="visually-hidden">Скрытый заголовок</h1>

        <section class="pt-[20px]" data-scroll>         
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__list flex items-center justify-start gap-2">
                        <li class="breadcrumb__item text-bg-black opacity-60 ">
                            <a href="/" class="font-medium">
                                Главная
                            </a>
                        </li>
                        <li class="opacity-60 text-bg-black">
                            /
                        </li>
                        <li class="breadcrumb__item">
                            <span class="opacity-60 text-bg-black">Новости</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>  

        <section id="news" class="mt-[24px] mb-[120px]">
            <div class="container">
                <h2 class="md:text-[45px] text-[30px] text-dark-green">Новости</h2> 

                <div class="news-list">
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                    <div class="news-list--item">
                        <img src="./src/img/icons/Rectangle 11.png" alt="" class="news-list--item__img">
                        <date class="news-list--item__date">15.02</date>
                        <article class="news-list--item__name">Масло для водной техники</article>
                    </div>
                </div>
            </div>
        </section>

    </main>
    
<?php get_footer(); ?>