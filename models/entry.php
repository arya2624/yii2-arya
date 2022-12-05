<?php
$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
if ($model->validate()) {
    // Valid!
} else {
    // Tidak Valid!
    // Panggil $mod