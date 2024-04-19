<?php

namespace App\Http\Controllers;

use App\Models\Serveur;
use Illuminate\Http\Request;

class ServeurController extends Controller
{
    public function index ()
    {
        $serveurs = Serveur::paginate(10);
        return view('admin.gestionServeur', compact('serveurs'));
    }
    public function choisirServeur ()
    {
        $serveurs = Serveur::paginate(10);
        return view('admin.deploimentServeur', compact('serveurs'));
    }

    public function edit($id)
    {
        $serveur = Serveur::findOrFail($id);
        return view('admin.editServeur', compact('serveur'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'nomServeur' => 'required|string|max:255',
            'adresseIP' => 'required|ip',
        ]);

        $serveur = Serveur::findOrFail($id);
        $serveur->update($request->all());
        return redirect()->route('serveurs.index')->with('success', 'Serveur a été modifieé avec success .');
    }

    public function destroy($id)
    {
        $serveur = Serveur::findOrFail($id);
        $serveur->delete();
        return redirect()->route('serveurs.index')->with('success', 'Serveur a été supprimé avec success.');
    }

    public function serveurSave(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nomServeur' => 'required|string|max:255',
            'adresseIP' => 'required|string|email|max:255|unique:users',
            'nomDB' => 'required|string|max:255',
            'userName' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
        //////////////////////////////////////////////////////////
        ///////////////// Create the new server////////////////////
        $serveur = new Serveur();
        $serveur->nom = $request->nomServeur;
        $serveur->adresseIP = $request->adresseIP;
        ////////////////////////////////////////////////////////////////////////////////////////////////////////
        $serveur->password = bcrypt($request->password);
        $serveur->save();
        // Redirect to list servers (add view list servers)
        // return redirect()->route('serveurs');        
    }
    
}
