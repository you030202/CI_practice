<html>

<body>

    <head>
        <link href="/public/css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#hidn").hide();
                //마우스 이벤트
                let id;
                $(".s_body tr").hover(function () {
                    id = $(this).children().first().text();
                    $(this).children().first().text('-->').css({ "font-size": "25px" });
                }, function () {
                    $(this).children().first().text(id).css({ "color": "rgb(136, 135, 135)", "font-size": "14px" });
                });

                //검색 필터
                $("#serch").keyup(function () {
                    var k = $(this).val();
                    $(".s_body tr").hide();
                    var temp = $(".s_body > tr > td:nth-child(5n+2):contains('" + k + "')");
                    $(temp).parent().show();
                })

                //페이지 이동
                $("#post").click(function () {
                    $(location).attr('href', '/index.php/NoticeBoard/insert');
                });

                $(".s_body tr").click(function () {
                    $(location).attr('href', '/index.php/NoticeBoard/selectEx?id=' + id % 10);
                });

                $("#back").click(function () {
                    $(location).attr('href', '/index.php/NoticeBoard/select');
                });

                $("#delete").click(function () {
                    $(location).attr('href', '/index.php/NoticeBoard/delete?id=' + $(".text_id").text() % 10);
                });

                $("#sand").click(function () {
                    if (confirm("정말 등록하시겠습니까 ?") == true) {
                        $("#frm").attr("action", "/index.php/NoticeBoard/insert").submit();
                        alert("등록되었습니다");
                    }
                    else {
                        return;
                    }
                });

                //수정 이벤트
                $("#modify").click(function () {
                    $(".textVar input").attr("disabled", false);
                    $(".textVar textarea").attr("disabled", false);
                    $("#back").hide();
                    $("#delete").hide();
                    $(this).text("확인").click(function () {
                        if (confirm("정말 등록하시겠습니까 ?") == true) {
                            $(this).attr("type", "submit");
                            alert("등록되었습니다");
                        }
                        else {
                            return;
                        }
                    });
                });
            });
        </script>
    </head>