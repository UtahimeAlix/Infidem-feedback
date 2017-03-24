<h1>Roles List</h1>
<div class="row">
    <?php
    if(!empty($roles)): foreach($roles as $role): ?>
            <div class="post-­‐box">
                <div class="post-­‐content">
                    <div class="caption">
                        <h4>
                            <?php echo $role->name; ?>
                        </h4>
                    </div>
                </div>
            </div>
            <?php
        endforeach;
    else: ?>
        <p class="no-­‐record">No roles found......</p>
        <?php endif; ?>
</div>
