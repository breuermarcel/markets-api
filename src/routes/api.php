<?php

Route::prefix("api")->group(function() {
    //Route::get("/", [Stockify\Http\Controllers\StockifyController::class, "documentation"])->name("stockify.documentation");
    Route::get("/", [Stockify\Http\Controllers\StockifyController::class, "load"])->name("stockify.load");
});