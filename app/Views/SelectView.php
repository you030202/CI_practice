<div class="centent">
    <div class="s_tablebar">
        <input type="text" id="serch" placeholder="제목 검색..." autocomplete="off" />
        <table cellpadding=0 cellspacing=0>
            <thead class='select_head'>
                <th class="s_num">ID</th>
                <th class="s_title">제목</th>
                <th class="s_post">글쓴이</th>
                <th class="s_date">날짜</th>
                <th class="s_view">조회수</th>
            </thead>
            <tbody class="s_body">
                <?php foreach($board as $row) :?>
                <tr>
                    <td>
                        <?=esc($row['id'])?>
                    </td>
                    <td>
                        <?=esc($row['boardType'])?>
                    </td>
                    <td>
                        <?=esc($row['name'])?>
                    </td>
                    <td>
                        <?=esc($row['date'])?>
                    </td>
                    <td>
                        <?=esc($row['views'])?>
                    </td>
                </tr>

                <?php endforeach;?>
            </tbody>
        </table>
        <button id="post" type="button">글쓰기</button>
    </div>
</div>
</body>

</html>