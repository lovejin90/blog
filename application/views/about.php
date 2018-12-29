


<div id="about">
    <div class="wrap">
        <section class="content">
            <div class="my-photo-box"></div>

            
            <div class="title">
                <h1><?=$pData['name_kor']?></h1>
                <h2><?=$pData['name_eng']?></h2>
            </div>
            <div class="text">
                <h1>생년월일</h1>
                <span><?=date('Y-m-d',strtotime($pData['birthday']))?></span>
                <h1>생후</h1>
                <span><?=$pData['month']?> 개월</span>
                <?php foreach($qData as $v) :?>
                <h1><?=$v['question']?></h1>
                <span><?=$v['answer']?></span>
                <?php endforeach;?>

            </div>
            <div class="sns-box">
                <ul class="sns-list">
                    <?php if($pData['facebook']):?>
                    <li class="item"><a href="https://facebook.com/<?=$pData['facebook']?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <?php endif;?>
                    <?php if($pData['instagram']):?>
                    <li class="item"><a href="http://instagram.com/<?=$pData['instagram']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <?php endif;?>
                    <?php if($pData['twitter']):?>
                    <li class="item"><a href="https://twitter.com/<?=$pData['twitter']?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <?php endif;?>
                    <?php if($pData['blog']):?>
                    <li class="item"><a href="<?=$pData['blog']?>" target="_blank"><i class="fas fa-blog"></i></a></li>
                    <?php endif;?>
                </ul>
            </div>
        </section>
    </div>
</div>