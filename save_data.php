<?php
require_once __DIR__ . '/functions.php';
if (session_status() === PHP_SESSION_NONE) session_start();

$action = $_POST['action'] ?? '';
$storage = __DIR__ . '/entries.json';

if (!file_exists($storage)) {
	file_put_contents($storage, json_encode([]));
}

if ($action === 'save_entry') {
	if (!isset($_SESSION['user'])) {
		send_json(['success' => false, 'error' => 'Nu sunteți autentificat']);
	}
	$title = trim($_POST['title'] ?? '');
	$content = trim($_POST['content'] ?? '');
	$date = trim($_POST['date'] ?? date('Y-m-d H:i:s'));

	if ($title === '' && $content === '') {
		send_json(['success' => false, 'error' => 'Conținutul nu poate fi gol']);
	}

	$entries = read_json($storage);
	if (!is_array($entries)) $entries = [];

	$entry = [
		'user' => $_SESSION['user'],
		'title' => $title,
		'content' => $content,
		'date' => $date,
		'id' => uniqid('', true)
	];

	$entries[] = $entry;
	write_json($storage, $entries);
	send_json(['success' => true, 'message' => 'Intrare salvată', 'entry' => $entry]);
}

send_json(['success' => false, 'error' => 'Acțiune necunoscută']);


