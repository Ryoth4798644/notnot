let users = [];

document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const email = document.getElementById('loginEmail').value;
  const password = document.getElementById('loginPassword').value;
  const user = users.find(u => u.email === email && u.password === password);
  if (user) {
    alert('Вы успешно вошли в систему!');
    // Здесь можно добавить перенаправление на главную страницу сайта
    window.location.href = 'index.html'; // Замените 'index.html' на путь к вашей главной странице
  } else {
    alert('Неверный email или пароль.');
  }
});

document.getElementById('signupForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const email = document.getElementById('signupEmail').value;
  const password = document.getElementById('signupPassword').value;
  const existingUser = users.find(u => u.email === email);
  if (existingUser) {
    alert('Пользователь с таким email уже существует.');
  } else {
    users.push({ email, password });
    alert('Вы успешно зарегистрированы!');
    // Перенаправление на главную страницу
    window.location.href = 'index.html'; // Замените 'index.html' на путь к вашей главной странице
  }
});