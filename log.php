# TugasPwebInterface

<html>
    <head>
    <?php
    include('include.php');
    ?>
    </head>
    <body>
    <div class="container-fluid">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('connect.php');
                        $q = $conn->real_escape_string('SELECT * FROM log');
                        $q = $conn->query($q);
                        $i = 1;
                        while($res = $q->fetch_assoc()):
                    ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $res['username'] ?></td>
                        <td class="align-middle"><?= $res['time'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </div>
    </body>
</html>
