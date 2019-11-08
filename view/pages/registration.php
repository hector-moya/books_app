<form action="controller/newAdmin.php" method="post">
    <label> User Name:</label>
    <input type="text" name="username" required>
    <label>Password:</label>
    <input type="text" name="password" required>
    <label>Role:</label>
    <input type="text" name="role" required>
    <input type="hidden" name="action_type" value="add">
    <input type="submit">
</form>
