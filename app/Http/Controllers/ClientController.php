<?php

namespace App\Http\Controllers;

use App\Service\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function index()
    {
        $clients = $this->clientService->getAllClients();
        return response()->json($clients);
    }

    public function show($id)
    {
        $client = $this->clientService->getClientById($id);
        return response()->json($client);
    }

    public function store(Request $request)
    {
        $client = $this->clientService->createClient($request);
        return response()->json($client, 201);
    }

    public function update(Request $request, $id)
    {
        $client = $this->clientService->updateClient($request, $id);
        return response()->json($client, 200);
    }

    public function delete($id)
    {
        $this->clientService->deleteClient($id);
        return response()->json(null, 204);
    }
}
