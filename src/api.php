<?php

Route::get('/foo', function () {
    return 'this is fast ticket';
});

Route::post('tickets', function (\Illuminate\Http\Request $request) {
    $ticket = \Immeyti\FastTicket\Models\Ticket::create($request->all());
    return response(['created' => true], 201);
});
