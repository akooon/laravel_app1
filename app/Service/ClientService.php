<?php

namespace App\Service;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientService
{
    public function getAllClients()
    {
        return Client::all();
    }

    public function getClientById($id)
    {
        return Client::find($id);
    }

    public function createClient(Request $request)
    {
        return Client::create($request->all());
    }

    public function updateClient(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return $client;
    }

    public function deleteClient($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return $client;
    }
}
