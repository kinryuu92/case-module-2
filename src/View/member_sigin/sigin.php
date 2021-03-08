
<?php
foreach ($result as $key => $value) : ?>
    <option value="$supplier['id']"><?php echo $value['username'] ?></option>
<?php endforeach; ?>
<section class="full-box">
    <h1>Form User</h1>
    <article class="box-user">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input name="username" placeholder="Input name"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Input password"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input name="email" placeholder="Input email"></td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td><input name="phone" placeholder="Input phone"></td>
                </tr>
                <tr>

                    <td colspan="2" style="text-align: center; padding-top: 0.5em">
                        <button type="submit" class="btn btn-primary">Add new</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
