<?php

/**
 * @apiGroup           Shipment
 * @apiName            DeleteShipment
 *
 * @api                {DELETE} /v1/shipments/:id Delete Shipment
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\MarketPalace\Shipment\UI\API\Controllers\DeleteShipmentController;
use Illuminate\Support\Facades\Route;

Route::delete('shipments/{id}', [DeleteShipmentController::class, 'deleteShipment'])
    ->middleware(['auth:api']);

