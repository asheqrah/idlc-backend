<?php
use VaahCms\Modules\Newsletter\Http\Controllers\Backend\mailsController;
/*
 * API url will be: <base-url>/public/api/newsletter/mails
 */
Route::group(
    [
        'prefix' => 'newsletter/mails',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [mailsController::class, 'getAssets'])
        ->name('vh.backend.newsletter.api.mails.assets');
    /**
     * Get List
     */
    Route::get('/', [mailsController::class, 'getList'])
        ->name('vh.backend.newsletter.api.mails.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [mailsController::class, 'updateList'])
        ->name('vh.backend.newsletter.api.mails.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [mailsController::class, 'deleteList'])
        ->name('vh.backend.newsletter.api.mails.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [mailsController::class, 'createItem'])
        ->name('vh.backend.newsletter.api.mails.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [mailsController::class, 'getItem'])
        ->name('vh.backend.newsletter.api.mails.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [mailsController::class, 'updateItem'])
        ->name('vh.backend.newsletter.api.mails.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [mailsController::class, 'deleteItem'])
        ->name('vh.backend.newsletter.api.mails.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [mailsController::class, 'listAction'])
        ->name('vh.backend.newsletter.api.mails.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [mailsController::class, 'itemAction'])
        ->name('vh.backend.newsletter.api.mails.item.action');



});
