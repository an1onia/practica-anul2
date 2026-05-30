<?php
function read_json($path) {
	if (!file_exists($path)) return [];
	$json = file_get_contents($path);
	$data = json_decode($json, true);
	return is_array($data) ? $data : [];
}

function write_json($path, $data) {
	file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function require_login() {
	if (session_status() === PHP_SESSION_NONE) session_start();
	if (!isset($_SESSION['user'])) {
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode(['success' => false, 'error' => 'Not authenticated']);
		exit;
	}
}

function send_json($data) {
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($data, JSON_UNESCAPED_UNICODE);
	exit;
}

