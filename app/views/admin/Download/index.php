<!-- Default box -->
<div class="card">

    <div class="card-header">
        <a href="<?php echo ADMIN; ?>/download/add" class="btn btn-default btn-flat"><i class="fas fa-plus"></i> Загрузить файл</a>
    </div>

    <div class="card-body">

        <?php if (!empty($downloads)): ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Оригинальное имя</th>
                    <td width="50"><i class="far fa-trash-alt"></i></td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($downloads as $download): ?>
                    <tr>
                        <td>
                            <?php echo $download['name']; ?>
                        </td>
                        <td>
                            <?php echo $download['original_name']; ?>
                        </td>
                        <td width="50">
                            <a class="btn btn-danger btn-sm delete" href="<?php echo ADMIN; ?>/download/delete?id=<?php echo $download['id']; ?>">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-12">
                    <p><?php echo count($downloads); ?> файл(ов) из: <?php echo $total; ?></p>
                    <?php if ($pagination->countPages > 1): ?>
                        <?php echo $pagination; ?>
                    <?php endif; ?>
                </div>
            </div>

        <?php else: ?>
            <p>Файлов для загрузки не найдено...</p>
        <?php endif; ?>

    </div>
</div>
<!-- /.card -->



