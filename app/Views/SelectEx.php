<div class="centent">
    <form method="POST" action="/index.php/NoticeBoard/update">
        <div class="textVar">
            <div class="text_header">
                <div class="text_type">
                    <input type="text" placeholder="제목" name="boardType" value=<?=esc($urData['boardType'])?>
                    disabled />
                </div>
                <div class="text_name">
                    <input type="text" placeholder="이름" name="name" value=<?=esc($urData['name'])?> disabled />
                </div>
            </div>
            <div class="text_post">
                <textarea type="text" placeholder="최대 2000자..." name="post"
                    disabled><?= esc($urData['post'])?></textarea>
            </div>
            <button id="back" type="button">뒤로</button>
            <button id="delete" type="button">삭제</button>
            <button id="modify" type="button">수정</button>
            id: <span class="text_id">
                <?= esc($urData['id'])?>
            </span>
            <input name="id" type="hidden" value="<?= esc($urData['id'])?>" />
            <div id="hidn">
                <?= esc($urData['views'])?>
            </div>
        </div>
    </form>
</div>
</body>

</html>