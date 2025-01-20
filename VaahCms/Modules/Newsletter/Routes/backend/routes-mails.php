<?php

use VaahCms\Modules\Newsletter\Http\Controllers\Backend\mailsController;

Route::group(
    [
        'prefix' => 'backend/newsletter/mails',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [mailsController::class, 'getAssets'])
        ->name('vh.backend.newsletter.mails.assets');
    /**
     * Get List
     */
    Route::get('/', [mailsController::class, 'getList'])
        ->name('vh.backend.newsletter.mails.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [mailsController::class, 'updateList'])
        ->name('vh.backend.newsletter.mails.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [mailsController::class, 'deleteList'])
        ->name('vh.backend.newsletter.mails.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [mailsController::class, 'fillItem'])
        ->name('vh.backend.newsletter.mails.fill');

    /**
     * Create Item
     */
    Route::post('/', [mailsController::class, 'createItem'])
        ->name('vh.backend.newsletter.mails.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [mailsController::class, 'getItem'])
        ->name('vh.backend.newsletter.mails.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [mailsController::class, 'updateItem'])
        ->name('vh.backend.newsletter.mails.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [mailsController::class, 'deleteItem'])
        ->name('vh.backend.newsletter.mails.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [mailsController::class, 'listAction'])
        ->name('vh.backend.newsletter.mails.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [mailsController::class, 'itemAction'])
        ->name('vh.backend.newsletter.mails.item.action');

    //---------------------------------------------------------

});
