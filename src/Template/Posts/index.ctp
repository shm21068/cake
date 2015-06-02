<style type="text/css" >

ul {
  list-style-type: none;
  clear:          left;
}

li {
  float:          left;
  margin-right:   5px;
  padding:        2px;
}

</style>


<h1>Blog </h1>

<div class='header-help' style='float:none; margin-top:auto;'>
  <span>
    <?php echo $this->Html->link('追加', ['action' => 'add']) ?>
  </span>
</div>

<br />

  <?php foreach ($posts as $post): ?>
<ul>

  <li style="width: 6em;">
    <?php echo $this->Html->link($post['title'], ['action' => 'view', $post['id']]); ?>
  </li>

  <li>
    <?php echo $post->created->timezone("Asia/Tokyo")->format('Y年 m月 d日 H:m:s'); ?>
  </li>

  <li>
    <div class='header-help' style='float:none; margin-top:auto;'>
      <span>
        <?php echo $this->Html->link('編集', ['action' => 'edit', $post['id']]) ?>
      </span>
      <span>
        <?php
        echo $this->Form->postlink(
        '削除' ,
        ['action'  => 'Delete', $post['id']],
        ['confirm' => 'Are you sure?'])
        ?>
      </span>
    </div>
  </li>
  <br />

</ul>
  <?php endforeach; ?>


