<?php /* Smarty version 2.6.28, created on 2015-07-19 00:27:46
         compiled from table.tpl.html */ ?>
<h2 class="sub-header">Все объявления</h2>

<div class="table-responsive">
  <table class="table table-striped">
      <thead>
          <tr>
              <th>#id</th>
              <th>Название</th>
              <th>Описание</th>
              <th>Цена</th>
              <th>Действия</th>
          </tr>
      </thead>
      <tbody>
            <?php echo $this->_tpl_vars['ads_rows']; ?>

      </tbody>
  </table>
</div>