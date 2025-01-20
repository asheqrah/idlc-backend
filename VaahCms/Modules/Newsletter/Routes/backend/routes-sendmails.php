<?php

use VaahCms\Modules\Newsletter\Http\Controllers\Backend\sendmailsController;

Route::group(
    [
        'prefix' => 'backend/newsletter/sendmails',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [sendmailsController::class, 'getAssets'])
        ->name('vh.backend.newsletter.sendmails.assets');
    /**
     * Get List
     */
    Route::get('/', [sendmailsController::class, 'getList'])
        ->name('vh.backend.newsletter.sendmails.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [sendmailsController::class, 'updateList'])
        ->name('vh.backend.newsletter.sendmails.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [sendmailsController::class, 'deleteList'])
        ->name('vh.backend.newsletter.sendmails.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [sendmailsController::class, 'fillItem'])
        ->name('vh.backend.newsletter.sendmails.fill');

    /**
     * Create Item
     */
    Route::post('/', [sendmailsController::class, 'createItem'])
        ->name('vh.backend.newsletter.sendmails.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [sendmailsController::class, 'getItem'])
        ->name('vh.backend.newsletter.sendmails.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [sendmailsController::class, 'updateItem'])
        ->name('vh.backend.newsletter.sendmails.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [sendmailsController::class, 'deleteItem'])
        ->name('vh.backend.newsletter.sendmails.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [sendmailsController::class, 'listAction'])
        ->name('vh.backend.newsletter.sendmails.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [sendmailsController::class, 'itemAction'])
        ->name('vh.backend.newsletter.sendmails.item.action');

    //---------------------------------------------------------

});
