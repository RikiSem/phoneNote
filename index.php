<?php
    include_once 'src/Contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PhoneNote</title>
</head>
<body>
    <div class="main">
        <div class="phoneList part">
            <table border=1>
                <tr>
                    <td>
                        Имя
                    </td>
                    <td>
                        Телефон
                    </td>
                    <td>
                        Управление
                    </td>
                </tr>
                <?php
                $contacts = getContacts();
                foreach ($contacts as $contact) {
                    echo "<tr>";
                    echo "<td>$contact[name]</td><td> $contact[phone] </td>";
                    echo "<td><form action='src/Handler.php' method='post'><input type='hidden' name='type' value='delete'><input type='hidden' name='phone' value='$contact[phone]'><input type='submit' value='Удалить'></form></td>";
                    echo "</tr>";
                }
            ?>
            </table>

        </div>
        <div class="addForm part">
            <form action="src/Handler.php" method="post">
                <input type="text" placeholder="Имя" name="name">
                <input type="text" placeholder="Телефон" name="phone">
                <input type="hidden" name="type" value="add">
                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
</body>
</html>