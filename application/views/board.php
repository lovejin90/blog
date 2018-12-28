<div class="wrap" id="board">

<div class="board-area">
    <h1>티스토리 새글</h1>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">author</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($rss as $k=>$v) : ?>
        <tr>
          <th scope="row"><?=$k+1?></th>
          <td><a href="<?=$v['link'];?>" target="_blnak"><?=$v['title'];?></a></td>
          <td><?=date('Y-m-d',strtotime($v['pubDate']));?></td>
          <td>LOVEJIN90</td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>


</div>
</div>