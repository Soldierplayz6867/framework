// ␀␀id␀:start␀
Route::group(['prefix' => 'extensions/␀id␀'], function () {Route::get('/', [Admin\Extensions\␀id␀\␀id␀ExtensionController::class, 'index'])->name('admin.extensions.␀id␀.index');Route::patch('/', [Admin\Extensions\␀id␀\␀id␀ExtensionController::class, 'update']);});
// ␀␀id␀:stop␀