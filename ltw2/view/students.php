<html>
    <head>
    <title>Demo Laravel</title>
    <meta charset="utf-8">
    </head>
    <body>
        <h1 style="text-align: center; color: #999e4d">Danh sách học sinh</h1>
            <table  style="text-align: center; width:400px;margin-left: auto;margin-right: auto;"" border="2" cellspacing="3" cellpadding="5">
                <tr style="background: lightblue;">
                    <td>Student ID</td>
                    <td>Student Name</td>
                    <td>Delete</td>
                </tr>
                <?php foreach($students as $student): ?>
                <tr>
                    <td style="background: orange"><?php echo $student['student_id'] ?></td>
                    <td style="background: orange"><?php echo $student['student_name'] ?></td>
                    <td><a href="?id=<?php echo $student['student_id'] ?>">Xóa</a></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <div class="themmoi" style="text-align: center;margin-top: 50px">
                <form action="http://localhost:82/ltw2/controller/ltw.php" method="post">
                    <input type="text" name="ten">
                    <input type="submit" name="gui" value="Thêm SV">
                </form>
            </div>
    </body>
</html>
