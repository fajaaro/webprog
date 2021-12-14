<?php

function formatRupiah($price) {
	return "Rp" . number_format($price, 2, ',', '.');
}