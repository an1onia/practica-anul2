document.addEventListener('DOMContentLoaded', function() {
	const registerForm = document.getElementById('registerForm');
	const loginForm = document.getElementById('loginForm');

	if (registerForm) {
		registerForm.addEventListener('submit', function(e) {
			e.preventDefault();
			const fd = new FormData(registerForm);
			fd.append('action', 'register');
			fetch('auth.php', { method: 'POST', body: fd })
				.then(r => r.json())
				.then(data => {
					const msg = document.getElementById('registerMessage');
					if (data.success) {
						msg.textContent = data.message || 'Înregistrare reușită';
						setTimeout(() => window.location = 'login.php', 900);
					} else {
						msg.textContent = data.error || 'Eroare';
					}
				}).catch(err => console.error(err));
		});
	}

	if (loginForm) {
		loginForm.addEventListener('submit', function(e) {
			e.preventDefault();
			const fd = new FormData(loginForm);
			fd.append('action', 'login');
			fetch('auth.php', { method: 'POST', body: fd })
				.then(r => r.json())
				.then(data => {
					const msg = document.getElementById('loginMessage');
					if (data.success) {
						msg.textContent = data.message || 'Autentificare reușită';
						setTimeout(() => window.location = 'index.php', 600);
					} else {
						msg.textContent = data.error || 'Eroare';
					}
				}).catch(err => console.error(err));
		});
	}

	// Generic save entry handler (if present on page)
	const saveForm = document.getElementById('saveEntryForm');
	if (saveForm) {
		saveForm.addEventListener('submit', function(e) {
			e.preventDefault();
			const fd = new FormData(saveForm);
			fd.append('action', 'save_entry');
			fetch('save_data.php', { method: 'POST', body: fd })
				.then(r => r.json())
				.then(data => {
					const msg = document.getElementById('saveMessage');
					if (data.success) {
						if (msg) msg.textContent = data.message || 'Salvat';
					} else {
						if (msg) msg.textContent = data.error || 'Eroare';
					}
				}).catch(err => console.error(err));
		});
	}
});
