<h2>Edit</h2>

<?php

echo $this->Form->create($posts);
echo $this->Form->input('title');
echo $this->Form->input('body', ['rows' => 3]);
echo $this->Form->button(__('Save'));
echo $this->Form->end();



?>
