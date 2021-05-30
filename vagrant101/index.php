/*
 * @Author: clingxin
 * @Date: 2021-05-30 09:58:14
 * @LastEditors: clingxin
 * @LastEditTime: 2021-05-30 10:11:33
 * @FilePath: /vagrant/vagrant101/index.php
 */
 <?php
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = 'root';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully';
    mysqli_select_db($conn, 'test');
    $query = 'SELECT * FROM posts';
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagrant101</title>
</head>
<body>
    <h1>Hello Vagrant 101</h1>
    <?php if(mysqli_num_rows($result) > 0): ?>
        <ul>
            <?php while($row = mysqli_fetch_object($result)): ?>
                <li><?php echo $row->text; ?></li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>NO posts</p>
    <?php endif; ?>
    <?php phpinfo(); ?>
</body>
</html>