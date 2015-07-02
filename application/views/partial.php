<?php 
  foreach ($notes as $note) 
  { ?> 
    <h2><?= $note["title"] ?></h2>  
    <form action="/notes/delete" method='post'>
      <input type="hidden" name="id" value="<?= $note["id"] ?>">
      <input type="Submit" value="DELETE">
    </form>

    <form class="update" action="/notes/update" method="post">
      <input type="hidden" name="id" value="<?= $note["id"] ?>">
      <textarea name="description" style="width: 200px; height: 100px;"><?= $note["description"] ?></textarea>
    </form>
<?php }
  ?> 
 