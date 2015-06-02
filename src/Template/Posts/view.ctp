
<h2>
  <?php echo h($posts['title']); ?>
  <small>
    <?php echo $posts->created->timezone("Asia/Tokyo")->format('Y年 m月 d日 H:m:s'); ?>
  </small>
  <div class='header-help' style='float:right; margin-top:auto;'>
    <span>
      <?php echo $this->Html->link('編集', ['action' => 'edit', $posts['id']]) ?>
    </span>
  </div>
</h2>


<p><?php echo h($posts['body']); ?></p>

