<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CopyController;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// https://m.pg-nmga.com/
// 126/index.html
// ?language=pt
// &bet_type=1
// &operator_token=3D03A316-85C9-08ED-5C09-8B3EA7FC0F00
// &operator_player_session=132482a8-795b-45ec-bbd5-752203134ff1
// &pn=1094
// &pn=1094
// &__refer=m.pgr-nmga.com
// &or=static.pg-nmga.com
// &__hv=1fb275f1

// https://m.pg-nmga.com/126/index.html?language=pt&bet_type=1&operator_token=3D03A316-85C9-08ED-5C09-8B3EA7FC0F00&operator_player_session=9af85fe0-17f7-40f0-ae73-bd961f9f3202&pn=1094&pn=1094&__refer=m.pgr-nmga.com&or=static.pg-nmga.com&__hv=1fb275f1

Route::get('/{path}', [CopyController::class, 'copy'])
    ->where('path', '.*');

    // https://api.gamesprime-app.test/web-api/auth/session/v2/verifyOperatorPlayerSession?traceId=ZFHIVP08

// Route::post(
//     '/web-api/auth/session/v2/verifySession',
//     [GameController::class, 'verifySession']
// );


// Route::post(
//     '/web-api/auth/session/v2/verifyOperatorPlayerSession',
//     [GameController::class, 'verifyOperatorPlayerSession']
// );
