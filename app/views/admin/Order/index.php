<!-- Default box -->
<div class="card">

    <div class="card-body">
        <?php if (!empty($orders)): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID заказа</th>
                        <th>Статус</th>
                        <th>Создан</th>
                        <th>Изменен</th>
                        <th>Сумма</th>
                        <td width="50"><i class="fas fa-pencil-alt"></i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr <?php if ($order['status']) echo 'class="table-info"' ?>>
                            <td><?php echo $order['id']; ?></td>
                            <td>
                                <?php echo $order['status'] ? 'Завершен' : 'Новый'; ?>
                            </td>
                            <td><?php echo $order['created_at']; ?></td>
                            <td><?php echo $order['updated_at']; ?></td>
                            <td>$<?php echo $order['total']; ?></td>
                            <td width="50">
                                <a class="btn btn-info btn-sm" href="<?php echo ADMIN; ?>/order/edit?id=<?php echo $order['id']; ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p><?php echo count($orders); ?> заказ(ов) из: <?php echo $total; ?></p>
                    <?php if ($pagination->countPages > 1): ?>
                        <?php echo $pagination; ?>
                    <?php endif; ?>
                </div>
            </div>

        <?php else: ?>
            <p>Заказов не найдено...</p>
        <?php endif; ?>

    </div>
</div>
<!-- /.card -->
