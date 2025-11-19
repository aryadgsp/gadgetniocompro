<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('partner')->group(function () {
    Route::get('/ugreen', function () {
        return view('partner.ugreen');
    })->name('partner.ugreen');

    Route::get('/lenovo', function () {
        return view('partner.lenovo');
    })->name('partner.lenovo');

    Route::get('/vention', function () {
        return view('partner.vention');
    })->name('partner.vention');

    Route::get('/aqua', function () {
        return view('partner.aqua');
    })->name('partner.aqua');

    Route::get('/baseus', function () {
        return view('partner.baseus');
    })->name('partner.baseus');

    Route::get('/bodimax', function () {
        return view('partner.bodimax');
    })->name('partner.bodimax');

    Route::get('/deerma', function () {
        return view('partner.deerma');
    })->name('partner.deerma');

    Route::get('/kiip', function () {
        return view('partner.kiip');
    })->name('partner.kiip');

    Route::get('/ksmith', function () {
        return view('partner.ksmith');
    })->name('partner.ksmith');

    Route::get('/lenyes', function () {
        return view('partner.lenyes');
    })->name('partner.lenyes');

    Route::get('/levoit', function () {
        return view('partner.levoit');
    })->name('partner.levoit');

    Route::get('/mcdodo', function () {
        return view('partner.mcdodo');
    })->name('partner.mcdodo');

    Route::get('/memo', function () {
        return view('partner.memo');
    })->name('partner.memo');

    Route::get('/notale', function () {
        return view('partner.notale');
    })->name('partner.notale');

    Route::get('/philips', function () {
        return view('partner.philips');
    })->name('partner.philips');

    Route::get('/rabit', function () {
        return view('partner.rabit');
    })->name('partner.rabit');

    Route::get('/rapa', function () {
        return view('partner.rapa');
    })->name('partner.rapa');

    Route::get('/rtaylors', function () {
        return view('partner.rtaylors');
    })->name('partner.rtaylors');

    Route::get('/taffware', function () {
        return view('partner.taffware');
    })->name('partner.taffware');

    Route::get('/thinkplus', function () {
        return view('partner.thinkplus');
    })->name('partner.thinkplus');

    Route::get('/uwant', function () {
        return view('partner.uwant');
    })->name('partner.uwant');

    Route::get('/wanbo', function () {
        return view('partner.wanbo');
    })->name('partner.wanbo');

    Route::get('/welby', function () {
        return view('partner.welby');
    })->name('partner.welby');

    Route::get('/yesoul', function () {
        return view('partner.yesoul');
    })->name('partner.yesoul');
});

// Routes for Bahasa Indonesia Version
Route::prefix('id')->name('id.')->group(function () {

    Route::get('/', function () {
        return view('id.index');
    })->name('index');

    Route::get('/about-us', function () {
        return view('id.about-us');
    });
    Route::get('/portfolio', function () {
        return view('id.portfolio');
    });

    Route::get('/contact', function () {
        return view('id.contact');
    });

    // Group Route for Partner
    Route::prefix('partner')->group(function () {
        Route::get('/ugreen', function () {
            return view('partner.ugreen');
        })->name('partner.ugreen');

        Route::get('/lenovo', function () {
            return view('partner.lenovo');
        })->name('partner.lenovo');

        Route::get('/vention', function () {
            return view('partner.vention');
        })->name('partner.vention');

        Route::get('/aqua', function () {
            return view('partner.aqua');
        })->name('partner.aqua');

        Route::get('/baseus', function () {
            return view('partner.baseus');
        })->name('partner.baseus');

        Route::get('/bodimax', function () {
            return view('partner.bodimax');
        })->name('partner.bodimax');

        Route::get('/deerma', function () {
            return view('partner.deerma');
        })->name('partner.deerma');

        Route::get('/kiip', function () {
            return view('partner.kiip');
        })->name('partner.kiip');

        Route::get('/ksmith', function () {
            return view('partner.ksmith');
        })->name('partner.ksmith');

        Route::get('/lenyes', function () {
            return view('partner.lenyes');
        })->name('partner.lenyes');

        Route::get('/levoit', function () {
            return view('partner.levoit');
        })->name('partner.levoit');

        Route::get('/mcdodo', function () {
            return view('partner.mcdodo');
        })->name('partner.mcdodo');

        Route::get('/memo', function () {
            return view('partner.memo');
        })->name('partner.memo');

        Route::get('/notale', function () {
            return view('partner.notale');
        })->name('partner.notale');

        Route::get('/philips', function () {
            return view('partner.philips');
        })->name('partner.philips');

        Route::get('/rabit', function () {
            return view('partner.rabit');
        })->name('partner.rabit');

        Route::get('/rapa', function () {
            return view('partner.rapa');
        })->name('partner.rapa');

        Route::get('/rtaylors', function () {
            return view('partner.rtaylors');
        })->name('partner.rtaylors');

        Route::get('/taffware', function () {
            return view('partner.taffware');
        })->name('partner.taffware');

        Route::get('/thinkplus', function () {
            return view('partner.thinkplus');
        })->name('partner.thinkplus');

        Route::get('/uwant', function () {
            return view('partner.uwant');
        })->name('partner.uwant');

        Route::get('/wanbo', function () {
            return view('partner.wanbo');
        })->name('partner.wanbo');

        Route::get('/welby', function () {
            return view('partner.welby');
        })->name('partner.welby');

        Route::get('/yesoul', function () {
            return view('partner.yesoul');
        })->name('partner.yesoul');
    });
});
