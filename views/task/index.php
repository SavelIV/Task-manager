<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="section-inner">
    <div class="container">
        <div class="row">
            <!-- Page navigation -->
            <?php echo $pagination->get(); ?>
            <div class="col-sm-12">
                <div class="features_items">
                    <h4>Список задач</h4>
                    <br/>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th><a href="/index/order-id/page-1"><i class="fa fa-sort"></i>ID задачи</a></th>
                            <th><a href="/index/order-name/page-1"><i class="fa fa-sort"></i>Имя</a></th>
                            <th><a href="/index/order-email/page-1"><i class="fa fa-sort"></i>Email</a></th>
                            <th>Описание</th>
                            <th><a href="/index/order-status/page-1"><i class="fa fa-sort"></i>Статус</a></th>
                            <th>Категория</th>
                        </tr>
                        <?php foreach ($tasksList as $task): ?>
                            <tr>
                                <td><?php echo $task['id']; ?></td>
                                <td><?php echo htmlentities($task['name']); ?></td>
                                <td><?php echo htmlentities($task['email']); ?></td>
                                <td><?php echo htmlentities($task['text']); ?></td>  
                                <td><?php echo $task['status']; ?></td> 
                                <td><?php echo $task['category']; ?></td>  
                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-sm-4 col-sm-offset-4 padding-right">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li class="error"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="signup-form"><!--sign up form-->
                        <h2>Новая задача</h2>
                        <br/>
                        <form action="/create" method="post">
                            <p>Имя (только буквы и пробелы):</p><input type="text" name="name" placeholder="Name" required/>
                            <p>Email:</p><input type="email" name="email" placeholder="E-mail" required/>
                            <p>Описание задачи (не менее 3 символов):</p><textarea  name="text" required></textarea>
                            <br/><br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>