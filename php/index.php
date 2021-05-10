<form id="form_input" action="php/send.php" method="post">
				<label for="name">Имя <span>*</span></label><br>
				<input class="pole" type="text" placeholder="Введите имя" name="name" id="name" required><br>
				<label for="email">Ваша почта <span>*</span></label><br>
				<input class="pole" type="email" placeholder="Введите email" name="email" id="email" required><br>
				<label for="message">Сообщение <span>*</span></label><br>
				<textarea placeholder="Введите ваше сообщение" name="message" id="message" required></textarea><br>
				<input id="mess_send" class="btn" type="submit" value="Отправить"> 
</form>