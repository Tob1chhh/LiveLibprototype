<?php require_once "header.php"; ?>

    <section class="new__books">
        <p class="p__title_sections">New Books</p>
        <div class="books">
            <div class="book">
                <img src="images/books/TomSoyer.jpg" alt="#" class="book__img">
                <p class="book__name">"Приключения Тома Сойера"</p>
                <p class="book__author">М. Твен</p>
                <button class="book__add_btn">+ Add</button>
            </div>
            <div class="book">
                <img src="images/books/Onegin.jpg" alt="#" class="book__img">
                <p class="book__name">"Евгений Онегин"</p>
                <p class="book__author">А.С. Пушкин</p>
                <button class="book__add_btn">+ Add</button>
            </div>
            <div class="book">
                <img src="images/books/MnM.jpg" alt="#" class="book__img">
                <p class="book__name">"Мастер и Маргарита"</p>
                <p class="book__author">М.А. Булгаков</p>
                <button class="book__add_btn">+ Add</button>
            </div>
            <div class="book">
                <img src="images/books/CrimeNPunishment.jpg" alt="#" class="book__img">
                <p class="book__name">"Преступление и наказание"</p>
                <p class="book__author">Ф.М. Достоевский</p>
                <button class="book__add_btn">+ Add</button>
            </div>
            <div class="book">
                <img src="images/books/DeathNote.jpg" alt="#" class="book__img">
                <p class="book__name">"Тетрадь смерти"</p>
                <p class="book__author">Цугуми Оба</p>
                <button class="book__add_btn">+ Add</button>
            </div>
        </div>
    </section>

    <section class="newsline">
        <p class="p__title_sections">NewsLine</p>
        <div class="news_shell">
            <div class="news">
                <div class="news__main_new">
                    <p class="block_author">Author: (author)</p>
                    <img class="img_new" src="images/news/new1.jpg" alt="">
                    <a href="#"><p class="block_name">Name of New</p></a>
                    <p class="block_date">Date: 12.12.2012</p>
                </div>
                <div class="news__other_news">
                    <a href="#">
                        <div class="other_new">
                            <p class="block_author">Author: (author)</p>
                            <p class="block_name">Name of New</p>
                            <p class="block_date">Date: 12.12.2012</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="other_new">
                            <p class="block_author">Author: (author)</p>
                            <p class="block_name">Name of New</p>
                            <p class="block_date">Date: 12.12.2012</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <p class="p__title_sections">Reviews</p>
        <div class="reviews_shell">
            <div class="review">
                <p class="block_author">Author: (author)</p>
                <a class="review__book_link" href="#">link to book from review</a>
                <p class="block_date">Date: 12.12.2012</p>

                <div class="rating_and_name">
                    <p class="review__rating">4</p>
                    <p class="block_name review__name">"Name of Review 1"</p>
                </div>

                <p class="review__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sunt voluptatum quam impedit quisquam laboriosam ratione! Ratione vero minima nemo incidunt aliquid reprehenderit dicta rerum totam autem eveniet! Totam, eaque.</p>
                <a class="review__read_more" href="#">Read more...</a>
            </div>
            <div class="review">
                <p class="block_author">Author: (author)</p>
                <a class="review__book_link" href="#">link to book from review</a>
                <p class="block_date">Date: 12.12.2012</p>

                <div class="rating_and_name">
                    <p class="review__rating">4</p>
                    <p class="block_name review__name">"Name of Review 2"</p>
                </div>

                <p class="review__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eius labore totam vitae consectetur porro iusto quis quas recusandae nobis eligendi dolorem delectus deserunt animi non maiores, dolor voluptatum debitis chebous fromual ularih?</p>
                <a class="review__read_more" href="#">Read more...</a>
            </div>
            <div class="review">
                <p class="block_author">Author: (author)</p>
                <a class="review__book_link" href="#">link to book from review</a>
                <p class="block_date">Date: 12.12.2012</p>

                <div class="rating_and_name">
                    <p class="review__rating">4</p>
                    <p class="block_name review__name">"Name of Review 3"</p>
                </div>

                <p class="review__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quod quis enim laboriosam quibusdam rerum dolorem deleniti eos adipisci omnis nihil quam, a distinctio quasi veniam fugit consequuntur possimus quas!</p>
                <a class="review__read_more" href="#">Read more...</a>
            </div>
        </div>
    </section>

<?php require_once "footer.php"; ?>