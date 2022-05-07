<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
            <?php if ($result): ?>
                <p> Данные добавленны!</p>
            <?php else: ?>
             <!-- вывод ошибок, при их наличии -->
                    <?php if (isset($errors) AND is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?> <br></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Добавление данных</h2>
                        <form action="#" method="post">
                            <p>Имя: (РУС. Не меньше двух символов)</p>
                            <input type="text" name="name" pattern="[А-Яа-яЁё]{2,}" placeholder="Имя"/>

                            <p>Фамилия: (РУС. Не меньше двух символов)</p>
                            <input type="text" name="lastName" pattern="[А-Яа-яЁё]{2,}" placeholder="Фамилия"/>
                            <p>Дата рождения:</p>
                            <input type="date" name="date" placeholder="дата"/>

                            <p>Пол: (Только "0" или "1")</p>
                            <input type="number" name="gender" pattern="[0-1]{1}" placeholder="gender"/>
                            <p>Примечание: Ввод только цифры. (0 - Муж., 1 - Жен.)</p>

                            <p>Город: (РУС. Не меньше трех символов)</p>
                            <input type="text" name="city" pattern="[А-Яа-яЁё]{3,}" placeholder="город"/>

                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                        </form>
                    </div><!--/sign up form-->
                
            <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>