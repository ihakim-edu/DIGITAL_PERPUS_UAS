<h2>Login</h2>
<form method="post" action="/login">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<button type="submit">Login</button>
</form>
<?php if(session()->getFlashdata('error')): ?>
<p style="color:red;"><?= session()->getFlashdata('error'); ?></p>
<?php endif; ?>
