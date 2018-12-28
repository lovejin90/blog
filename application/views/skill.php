<div id="skill">
    <div class="wrap">
        <section class="content">
            <div class="title">
                <h1>보유스킬</h1>
            </div>
            <div class="s-list-box">
                <h1>WEB</h1>
                <ul class="s-list">
                    <?php foreach($sData as $v):?>
                    <?php if($v['category'] === 'web' ):?>
                    <li>
                        <div class="photo-area">
                            <img src="<?=$lib_dir?>images<?=$v['img_dir']?>">
                        </div>
                        <h1><?=$v['name']?></h1>
                        <span><?=$v['level']?></span>
                    </li>  
                    <?php endif;?>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="s-list-box">
                <h1>OS</h1>
                <ul class="s-list">
                    <?php foreach($sData as $v):?>
                    <?php if($v['category'] === 'os' ):?>
                    <li>
                        <div class="photo-area">
                            <img src="<?=$lib_dir?>images<?=$v['img_dir']?>">
                        </div>
                        <h1><?=$v['name']?></h1>
                        <span><?=$v['level']?></span>
                    </li>  
                    <?php endif;?>
                    <?php endforeach;?>
                </ul>
            </div>
        </section>
    </div>
</div>