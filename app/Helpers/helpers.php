<?php

use App\Models\Game;
use Illuminate\Support\Facades\Storage;

function uploadFile($file, $folderName) {
    $fileExtension = $file->guessExtension();
    $fileName = (int)microtime(true) . (int)microtime(true) * 2 . rand(10000, 100000) . '.' . $fileExtension; 
    $fileUrl = Storage::putFileAs($folderName, $file, $fileName);

    return str_replace('%2F', '/', urlencode($fileUrl));
}

function formatRupiah($price) {
	return "Rp" . number_format($price, 2, ',', '.');
}

function errorMessage($errors, $fieldName) {
    return '<span class="invalid-feedback" role="alert"><strong>' . $errors->first($fieldName) . '</strong></span>';
}

function setNewCookie($name, $data) {
    setcookie($name, $data, 0, '/');
}

function unsetCookie($name) {
    if (isset($_COOKIE['carts'])) {
        unset($_COOKIE['carts']);
        setcookie($name, "", time() - 3600, '/');
    }
}

function getCarts() {
    return isset($_COOKIE['carts']) ? json_decode($_COOKIE['carts']) : [];
}

function getGamesOnCarts() {
    $games = [];

    if (isset($_COOKIE['carts'])) {
        $data = getCarts();

        foreach ($data as $gameId) {
            $game = Game::find($gameId);

            if ($game) array_push($games, $game);
        }
    }

    return $games;
}
