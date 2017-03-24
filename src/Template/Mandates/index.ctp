<h1>Mandates List</h1>
<div class="row">
    <?php
    if(!empty($mandates)): foreach($mandates as $mandate): ?>
            <div class="post-­‐box">
                <div class="post-­‐content">
                    <div class="caption">
                        <h4>
                            <?php echo $mandate->name; ?>
                        </h4>
                        <h5>
                          <?php echo $mandate->state; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <?php
        endforeach;
    else: ?>
        <p class="no-­‐record">No mandates found......</p>
        <?php endif; ?>
</div>
