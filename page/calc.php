<main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <form action="" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Число 1</span>
                    <input type="text" class="form__input" name="one" data-type="number">
                </label>
                <div class="form__mySelect">
                    <div class="form__select">
                        <div class="form__select-name">Выбирите знак</div>
                        <div class="form__select-option">
                            
                        </div>
                    </div>
                    <select name="symbol">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <label class="form__label">
                    <span class="form__text">Число 2</span>
                    <input type="text" class="form__input" name="two" data-type="number"> 
                </label>
                <button class="form__btn">Посчитать</button>


                <?
                $one = $_POST['one'];
                $sym = $_POST['symbol'];
                $two = $_POST['two'];
                
                if($sym == "+"){
                    $a = $one + $two;
                }elseif($sym == "-"){
                    $a = $one - $two;
                }elseif($sym == "*"){
                    $a = $one * $two;
                }elseif($sym == "/") {
                    $a = $one / $two;
                }
                ?>
                
                <h2 class="head__title" style="margin-top: 30px;"><?= $a?></h2>
                
                
            </form>
        </main>