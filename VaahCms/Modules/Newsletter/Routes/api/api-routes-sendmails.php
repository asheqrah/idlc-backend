<?php
use VaahCms\Modules\Newsletter\Http\Controllers\Backend\sendmailsController;
/*
 * API url will be: <base-url>/public/api/newsletter/sendmails
 */
Route::group(
    [
        'prefix' => 'newsletter/sendmails',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [sendmailsController::class, 'getAssets'])
        ->name('vh.backend.newsletter.api.sendmails.assets');
    /**
     * Get List
     */
    Route::get('/', [sendmailsController::class, 'getList'])
        ->name('vh.backend.newsletter.api.sendmails.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [sendmailsController::class, 'updateList'])
        ->name('vh.backend.newsletter.api.sendmails.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [sendmailsController::class, 'deleteList'])
        ->name('vh.backend.newsletter.api.sendmails.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [sendmailsController::class, 'createItem'])
        ->name('vh.backend.newsletter.api.sendmails.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [sendmailsController::class, 'getItem'])
        ->name('vh.backend.newsletter.api.sendmails.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [sendmailsController::class, 'updateItem'])
        ->name('vh.backend.newsletter.api.sendmails.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [sendmailsController::class, 'deleteItem'])
        ->name('vh.backend.newsletter.api.sendmails.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [sendmailsController::class, 'listAction'])
        ->name('vh.backend.newsletter.api.sendmails.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [sendmailsController::class, 'itemAction'])
        ->name('vh.backend.newsletter.api.sendmails.item.action');



});
