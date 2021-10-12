<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
            $isFirst = true;
            foreach ($arResult['ITEMS'] as $post):
            $this->AddEditAction($post['ID'], $post['EDIT_LINK'], CIBlock::GetArrayByID($post["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($post['ID'], $post['DELETE_LINK'], CIBlock::GetArrayByID($post["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            $dateCreated = MakeTimeStamp($post['TIMESTAMP_X']);
            $dateCreated = FormatDate('j F Y', $dateCreated);
            ?>
            <?php if ($isFirst): ?>
                <?php $isFirst = false; ?>
            <?php else: ?>
                <hr>
            <?php endif; ?>
            <div class="post-preview" id="<?= $this->GetEditAreaId($post['ID']); ?>">
                <a href="<?= $post['DETAIL_PAGE_URL']; ?>">
            <h2 class="post-title">
                <?= $post['NAME']; ?>
            </h2>
            <h3 class="post-subtitle">
                <?= $post['PREVIEW_TEXT']; ?>
            </h3>
            </a>
            <p class="post-meta">Опубликовала
                <a href="#"><?= $post['DISPLAY_PROPERTIES']['AUTHOR']['VALUE']; ?></a>
                <?= $dateCreated; ?></p>
        </div>
        <?php endforeach; ?>

        <?=$arResult["NAV_STRING"]?>

    </div>
</div>
</div>
