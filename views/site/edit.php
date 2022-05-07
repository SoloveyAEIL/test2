<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
            <?php if ($result): ?>
                <p> Данные отредактированы !</p>
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
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $userId['name']; ?>"/>

                            <p>Фамилия:</p>
                            <input type="text" name="lastName" placeholder="Фамилия" value="<?php echo $userId['lastName']; ?>"/>
                            <p>Дата рождения:</p>
                            <input type="date" name="date" placeholder="дата" value="<?php echo $userId['date']; ?>"/>

                            <p>Пол:</p>
                            <input type="number" name="gender" placeholder="gender" value="<?php echo $userId['gender']; ?>"/>
                            <p>Примечание: Ввод только цифры. (0 - Муж., 1 - Жен.)</p>

                            <p>Город:</p>
                            <input type="text" name="city" placeholder="город" value="<?php echo $userId['city']; ?>"/>

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